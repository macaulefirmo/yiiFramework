<?php

class TarefasController extends GxController {

	public function filters() {
		
		return array(
            'accessControl',
        );
	}
	
	public function accessRules() {
		
		return array(
			array('allow',
                'actions' => array(
					'create', 
					'update', 
					'delete',
					'admin',
					'index',
					'view',
				),
                'roles' => array('admin'),
			),	
			array('allow',
                'actions' => array(
					'update', 
					'view',
					'userHome',
					'userTarefas',
					'tarefasPublicas'
				),
				'users' => array('@'),
			),		
			array('deny',
                'actions' => array(
					'create', 
					'update', 
					'delete',
					'admin',
					'index',
					'view',	
					'userHome',
					'userTarefas',
					'tarefasPublicas'				
				),
                'users' => array('?'),
            ), 
        );
    }

	public function actionView($id) {

		if(Yii::app()->user->name == 'admin') {
			
			$this->render('view', array(
				'model' => $this->loadModel($id, 'Tarefas'),
			));
		} else { 

			$this->render('viewTarefa', array(
				'model' => $this->loadModel($id, 'Tarefas'),
			));
		}		
	}

	public function actionCreate() {
		
		if(Yii::app()->user->name == 'admin') {

			$model = new Tarefas;

			if (isset($_POST['Tarefas'])) {
				$model->setAttributes($_POST['Tarefas']);

				if($model->Privacidade == 'Publica') {

					$model->idUsuario = null;
				}

				$model->Data_Criacao = date("Y-m-d h:i:s");
				$model->Data_Modificacao = date("Y-m-d h:i:s");	

				if ($model->save()) {
					if (Yii::app()->getRequest()->getIsAjaxRequest())
						Yii::app()->end();
					else
						$this->redirect(array('view', 'id' => $model->ID_Tarefa));
				}
			}

			$this->render('create', array( 'model' => $model));
		} else {

			$this->redirect(array('tarefas/userHome'));
		}
	}

	public function actionUpdate($id) {	

		$model = $this->loadModel($id, 'Tarefas');

		if (isset($_POST['Tarefas'])) {

			$model->setAttributes($_POST['Tarefas']);

			$model = $this->verificaUpdate($model);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->ID_Tarefa));
			}
		}

		if(Yii::app()->user->name == 'admin') {
		
			$this->render('update', array(
				'model' => $model,
			));
		
		} else {
			
			$this->render('updateTarefa', array(
				'model' => $model,
			));
		}
	}

	private function verificaUpdate($model) {

		if($model->Status == "Concluida") {

			$model->Data_Conclusao = date("Y-m-d h:i:s");
		} else {

			$model->Data_Conclusao = null;
		}

		if($model->Privacidade == 'Publica') {

			$model->idUsuario = null;
		} else {

			$usuario = new Usuarios();
			$model->idUsuario = $usuario->getIdUser();
		}

		$model->Data_Modificacao = date("Y-m-d h:i:s");

		return $model;
	}

	public function actionDelete($id) {			

		if(Yii::app()->user->name == 'admin') {
		
			if (Yii::app()->getRequest()->getIsPostRequest()) {
				$this->loadModel($id, 'Tarefas')->delete();
	
				if (!Yii::app()->getRequest()->getIsAjaxRequest())
					$this->redirect(array('admin'));
			} else
				throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));			
		} else {
			
			$this->redirect(array('tarefas/userHome'));
		}	
	}

	public function actionIndex() {

		if(Yii::app()->user->name == 'admin') {
		
			$dataProvider = new CActiveDataProvider('Tarefas');
			$this->render('index', array(
				'dataProvider' => $dataProvider,
			));			
		} else {
			
			$this->redirect(array('tarefas/userHome'));
		}	
	}

	public function actionAdmin() {
	
		if(Yii::app()->user->name == 'admin') {
		
			$model = new Tarefas('search');
			$model->unsetAttributes();

			if (isset($_GET['Tarefas']))
				$model->setAttributes($_GET['Tarefas']);

			$this->render('admin', array(
				'model' => $model,
			));			
		} else {
			
			$this->redirect(array('tarefas/userHome'));
		}	
	}

	public function actionTarefasPublicas() {
		
		$model = new Tarefas();
		$dataProvider = $model->getTarefasPublicas();
		$this->render('tarefasPublicas', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionUserTarefas() {

		$model = new Tarefas();
		$dataProvider = $model->getTarefasUser();
		$this->render('userTarefas', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionUserHome() {

		$model = new Tarefas();
		$dataProvider = $model->getTarefasPendentes();
		$this->render('userHome', array(
			'dataProvider' => $dataProvider,
		));		
	}

}
