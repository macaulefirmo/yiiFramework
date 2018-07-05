<?php

class TipoTarefaController extends GxController {

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
			array('deny',
                'actions' => array(
					'create', 
					'update', 
					'delete',
					'admin',
					'index',
					'view',					
				),
                'users' => array('?'),
			), 
        );
    }

	public function actionView($id) {
		
		if(Yii::app()->user->name == 'admin') {
		
			$this->render('view', array(
				'model' => $this->loadModel($id, 'TipoTarefa'),
			));		
		} else {
			
			$this->redirect(array('tarefas/userHome'));
		}	
	}

	public function actionCreate() {
		
		if(Yii::app()->user->name == 'admin') {
		
			$model = new TipoTarefa;

			if (isset($_POST['TipoTarefa'])) {
				
				$model->setAttributes($_POST['TipoTarefa']);

				$model->Data_Criacao = date("Y-m-d h:i:s");
				$model->Data_Modificacao = date("Y-m-d h:i:s");			 									

				if ($model->save()) {
					if (Yii::app()->getRequest()->getIsAjaxRequest())
						Yii::app()->end();
					else
						$this->redirect(array('view', 'id' => $model->ID_Tipo_Tarefa));
				}
			}

			$this->render('create', array( 'model' => $model));	
		} else {
			
			$this->redirect(array('tarefas/userHome'));
		}	
	}

	public function actionUpdate($id) {			

		if(Yii::app()->user->name == 'admin') {
		
			$model = $this->loadModel($id, 'TipoTarefa');

			$model->Data_Modificacao = date("Y-m-d h:i:s");

			if (isset($_POST['TipoTarefa'])) {
				$model->setAttributes($_POST['TipoTarefa']);

				if ($model->save()) {
					$this->redirect(array('view', 'id' => $model->ID_Tipo_Tarefa));
				}
			}

			$this->render('update', array(
				'model' => $model,
			));	
		} else {
			
			$this->redirect(array('tarefas/userHome'));
		}	
	}

	public function actionDelete($id) {
		
		if(Yii::app()->user->name == 'admin') {
		
			if (Yii::app()->getRequest()->getIsPostRequest()) {
				$this->loadModel($id, 'TipoTarefa')->delete();
	
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
		
			$dataProvider = new CActiveDataProvider('TipoTarefa');
			$this->render('index', array(
				'dataProvider' => $dataProvider,
			));
		} else {
			
			$this->redirect(array('tarefas/userHome'));
		}	
	}

	public function actionAdmin() {
		
		if(Yii::app()->user->name == 'admin') {
		
			$model = new TipoTarefa('search');
			$model->unsetAttributes();

			if (isset($_GET['TipoTarefa']))
				$model->setAttributes($_GET['TipoTarefa']);

			$this->render('admin', array(
				'model' => $model,
			));
		} else {
			
			$this->redirect(array('tarefas/userHome'));
		}	
	}

}