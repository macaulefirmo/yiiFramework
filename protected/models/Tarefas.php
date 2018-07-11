<?php

Yii::import('application.models._base.BaseTarefas');

class Tarefas extends BaseTarefas {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function attributeLabels() {
		return array(
			'ID_Tarefa' => Yii::t('app', 'ID'),
			'Titulo' => Yii::t('app', 'Titulo'),
			'idUsuario' => null,
			'Privacidade' => Yii::t('app', 'Privacidade'),
			'Descricao' => Yii::t('app', 'Descrição'),
			'idTipo' => null,
			'Status' => Yii::t('app', 'Status'),
			'Data_Conclusao' => Yii::t('app', 'Data de Conclusão'),
			'Data_Criacao' => Yii::t('app', 'Data de Criação'),
			'Data_Modificacao' => Yii::t('app', 'Data Modificação'),
			'idUsuario0' => null,
			'idTipo0' => null,
		);
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Tarefa|Tarefas', $n);
	}
	
	public function afterFind() {
		
		$this->Data_Criacao = date('d/m/Y H:i:s', strtotime($this->Data_Criacao));
		$this->Data_Modificacao = date('d/m/Y H:i:s', strtotime($this->Data_Modificacao));

		return parent::afterFind();
	}

	public function getTarefasUser($id) {
			
		$criteria = new CDbCriteria;
		$criteria->compare('ID_Tarefa', $this->ID_Tarefa, true);
		$criteria->compare('Titulo', $this->Titulo, true);
		$criteria->compare('idUsuario', $id, true);
		$criteria->compare('Privacidade', $this->Privacidade, true);
		$criteria->compare('Descricao', $this->Descricao, true);
		$criteria->compare('idTipo', $this->idTipo);
		$criteria->compare('Status',$this->Status, true);
		$criteria->compare('Data_Conclusao', $this->Data_Conclusao, true);
		$criteria->compare('Data_Criacao', $this->Data_Criacao, true);
		$criteria->compare('Data_Modificacao', $this->Data_Modificacao, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));	
	}

	public function getTarefasPendentes($id) {

		$criteria = new CDbCriteria;
		$criteria->compare('ID_Tarefa', $this->ID_Tarefa, true);
		$criteria->compare('Titulo', $this->Titulo, true);
		$criteria->compare('idUsuario', $id, true);
		$criteria->compare('Privacidade', $this->Privacidade, true);
		$criteria->compare('Descricao', $this->Descricao, true);
		$criteria->compare('idTipo', $this->idTipo);
		$criteria->compare('Status','Pendente', true);
		$criteria->compare('Data_Conclusao', $this->Data_Conclusao, true);
		$criteria->compare('Data_Criacao', $this->Data_Criacao, true);
		$criteria->compare('Data_Modificacao', $this->Data_Modificacao, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));		
	}

	public function getTarefasPublicas() {

		$criteria = new CDbCriteria;

		$criteria->compare('ID_Tarefa', $this->ID_Tarefa, true);
		$criteria->compare('Titulo', $this->Titulo, true);
		$criteria->compare('idUsuario', $this->idUsuario);
		$criteria->compare('Privacidade', 'Publica', true);
		$criteria->compare('Descricao', $this->Descricao, true);
		$criteria->compare('idTipo', $this->idTipo);
		$criteria->compare('Status', $this->Status, true);
		$criteria->compare('Data_Conclusao', $this->Data_Conclusao, true);
		$criteria->compare('Data_Criacao', $this->Data_Criacao, true);
		$criteria->compare('Data_Modificacao', $this->Data_Modificacao, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}