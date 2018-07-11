<?php

Yii::import('application.models._base.BaseUsuarios');

class Usuarios extends BaseUsuarios {

	protected $oldPassword;

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function beforeSave() {
		
		if($this->Senha != $this->oldPassword) {

			$this->Senha = MD5($this->Senha);
		}	
		$this->Data_Nascimento = date('Y-m-d', strtotime($this->Data_Nascimento));

		return parent::beforeSave();
	}

	public function afterFind() {
		
		$this->oldPassword = $this->Senha;
		$this->Data_Nascimento = date('d/m/Y', strtotime($this->Data_Nascimento));
		$this->Data_Criacao = date('d/m/Y H:i:s', strtotime($this->Data_Criacao));
		$this->Data_Modificacao = date('d/m/Y H:i:s', strtotime($this->Data_Modificacao));

		return parent::afterFind();
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

	public static function label($n = 1) {
		return Yii::t('app', 'Usuario|Usuarios', $n);
	}

	public function attributeLabels() {
		return array(
			'ID_Usuario' => Yii::t('app', 'ID'),
			'Nome' => Yii::t('app', 'Nome'),
			'Sexo' => Yii::t('app', 'Sexo'),
			'Data_Nascimento' => Yii::t('app', 'Data de Nascimento'),
			'Email' => Yii::t('app', 'Email'),
			'Telefone' => Yii::t('app', 'Telefone'),
			'Login' => Yii::t('app', 'Login'),
			'Senha' => Yii::t('app', 'Senha'),
			'Data_Criacao' => Yii::t('app', 'Data de Criação'),
			'Data_Modificacao' => Yii::t('app', 'Data de Modificação'),
			'tarefases' => null,
		);
	}

	public function rules() {
		return array(
			array('Nome, Sexo, Data_Nascimento, Email, Telefone, Login, Senha', 'required'),
			array('Nome, Login', 'length', 'max'=>150),
			array('Sexo', 'length', 'max'=>9),
			array('Email', 'email'),
			array('Email', 'length', 'max'=>250),			
			array('Email, Login', 'unique'),
			array('Telefone', 'length', 'max'=>20),
			array('Senha', 'length', 'max'=>100),
			array('Data_Criacao, Data_Modificacao', 'safe'),
			array('Data_Criacao, Data_Modificacao', 'default', 'setOnEmpty' => true, 'value' => null),
			array('ID_Usuario, Nome, Sexo, Data_Nascimento, Email, Telefone, Login, Senha, Data_Criacao, Data_Modificacao', 'safe', 'on'=>'search'),
		);
	}
}