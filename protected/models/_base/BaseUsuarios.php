<?php

/**
 * This is the model base class for the table "usuarios".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Usuarios".
 *
 * Columns in table "usuarios" available as properties of the model,
 * followed by relations of table "usuarios" available as properties of the model.
 *
 * @property string $ID_Usuario
 * @property string $Nome
 * @property string $Sexo
 * @property string $Data_Nascimento
 * @property string $Email
 * @property string $Telefone
 * @property string $Login
 * @property string $Senha
 * @property string $Data_Criacao
 * @property string $Data_Modificacao
 *
 * @property Tarefas[] $tarefases
 */
abstract class BaseUsuarios extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'usuarios';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Usuarios|Usuarioses', $n);
	}

	public static function representingColumn() {
		return 'Nome';
	}

	public function rules() {
		return array(
			array('Nome, Sexo, Data_Nascimento, Email, Telefone, Login, Senha, Data_Criacao', 'required'),
			array('Nome, Login', 'length', 'max'=>150),
			array('Sexo', 'length', 'max'=>9),
			array('Email', 'length', 'max'=>250),
			array('Telefone', 'length', 'max'=>20),
			array('Senha', 'length', 'max'=>100),
			array('Data_Modificacao', 'safe'),
			array('Data_Modificacao', 'default', 'setOnEmpty' => true, 'value' => null),
			array('ID_Usuario, Nome, Sexo, Data_Nascimento, Email, Telefone, Login, Senha, Data_Criacao, Data_Modificacao', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tarefases' => array(self::HAS_MANY, 'Tarefas', 'idUsuario'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'ID_Usuario' => Yii::t('app', 'Id Usuario'),
			'Nome' => Yii::t('app', 'Nome'),
			'Sexo' => Yii::t('app', 'Sexo'),
			'Data_Nascimento' => Yii::t('app', 'Data Nascimento'),
			'Email' => Yii::t('app', 'Email'),
			'Telefone' => Yii::t('app', 'Telefone'),
			'Login' => Yii::t('app', 'Login'),
			'Senha' => Yii::t('app', 'Senha'),
			'Data_Criacao' => Yii::t('app', 'Data Criacao'),
			'Data_Modificacao' => Yii::t('app', 'Data Modificacao'),
			'tarefases' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('ID_Usuario', $this->ID_Usuario, true);
		$criteria->compare('Nome', $this->Nome, true);
		$criteria->compare('Sexo', $this->Sexo, true);
		$criteria->compare('Data_Nascimento', $this->Data_Nascimento, true);
		$criteria->compare('Email', $this->Email, true);
		$criteria->compare('Telefone', $this->Telefone, true);
		$criteria->compare('Login', $this->Login, true);
		$criteria->compare('Senha', $this->Senha, true);
		$criteria->compare('Data_Criacao', $this->Data_Criacao, true);
		$criteria->compare('Data_Modificacao', $this->Data_Modificacao, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}