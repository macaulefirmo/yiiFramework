<?php

Yii::import('application.models._base.BaseTipoTarefa');

class TipoTarefa extends BaseTipoTarefa
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Tipo de Tarefa|Tipos de Tarefa', $n);
	}

	public function attributeLabels() {
		return array(
			'ID_Tipo_Tarefa' => Yii::t('app', 'ID'),
			'Nome' => Yii::t('app', 'Nome'),
			'Data_Criacao' => Yii::t('app', 'Data de Criação'),
			'Data_Modificacao' => Yii::t('app', 'Data de Modificação'),
			'tarefases' => null,
		);
	}

	public function afterFind() {
		
		$this->Data_Criacao = date('d/m/Y H:i:s', strtotime($this->Data_Criacao));
		$this->Data_Modificacao = date('d/m/Y H:i:s', strtotime($this->Data_Modificacao));

		return parent::afterFind();
	}
}