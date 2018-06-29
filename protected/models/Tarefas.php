<?php

Yii::import('application.models._base.BaseTarefas');

class Tarefas extends BaseTarefas
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}