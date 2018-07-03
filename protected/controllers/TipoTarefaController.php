<?php

class TipoTarefaController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TipoTarefa'),
		));
	}

	public function actionCreate() {
		
		$model = new TipoTarefa;

		if (isset($_POST['TipoTarefa'])) {
			
			$model->setAttributes($_POST['TipoTarefa']);

			$model->Data_Criacao = date("Y-m-d h:i:s");
			$model->Data_Modificacao = date("Y-m-d h:i:s");			 									

			//var_dump($model);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->ID_Tipo_Tarefa));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
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
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TipoTarefa')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TipoTarefa');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TipoTarefa('search');
		$model->unsetAttributes();

		if (isset($_GET['TipoTarefa']))
			$model->setAttributes($_GET['TipoTarefa']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}