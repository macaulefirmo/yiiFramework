<?php

Yii::import('application.models._base.BaseTarefas');

class Tarefas extends BaseTarefas {

	public static function model($className=__CLASS__) {
		return parent::model($className);
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