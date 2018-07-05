<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->ID_Tarefa)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->ID_Tarefa), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
	'ID_Tarefa',
	'Titulo',
	array(
		'name' => 'idUsuario0',
		'type' => 'raw',
		'value' => $model->idUsuario0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idUsuario0)), array('usuarios/view', 'id' => GxActiveRecord::extractPkValue($model->idUsuario0, true))) : null,
		),
		'Privacidade',
		'Descricao',
		array(
					'name' => 'idTipo0',
					'type' => 'raw',
					'value' => $model->idTipo0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idTipo0)), array('tipoTarefa/view', 'id' => GxActiveRecord::extractPkValue($model->idTipo0, true))) : null,
					),
		'Status',
		'Data_Conclusao',
		'Data_Criacao',
		'Data_Modificacao',
	),
)); ?>

