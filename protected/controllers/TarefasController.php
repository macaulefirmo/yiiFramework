<?php

class TarefasController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Tarefas'),
		));
	}

	public function actionCreate() {
		$model = new Tarefas;


		if (isset($_POST['Tarefas'])) {
			$model->setAttributes($_POST['Tarefas']);

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
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Tarefas');


		if (isset($_POST['Tarefas'])) {
			$model->setAttributes($_POST['Tarefas']);

			if($model->Status == "Concluida") {

				$model->Data_Conclusao = date("Y-m-d h:i:s");
			} else {

				$model->Data_Conclusao = null;
			}

			$model->Data_Modificacao = date("Y-m-d h:i:s");

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->ID_Tarefa));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Tarefas')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Tarefas');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Tarefas('search');
		$model->unsetAttributes();

		if (isset($_GET['Tarefas']))
			$model->setAttributes($_GET['Tarefas']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}