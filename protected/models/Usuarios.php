<?php

Yii::import('application.models._base.BaseUsuarios');

class Usuarios extends BaseUsuarios {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getIdUser() {
		
		$criteria = new CDbCriteria;
		$criteria->select = 'ID_Usuario';
		$criteria->condition = 'Login=:login';
		$criteria->params = array(':login' => Yii::app()->user->name);

		$model = new Usuarios();
		$usuario = $model->find($criteria);

		return $usuario->ID_Usuario;
	}
}