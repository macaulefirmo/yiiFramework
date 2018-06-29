<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'ID_Tarefa'); ?>
		<?php echo $form->textField($model, 'ID_Tarefa', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Titulo'); ?>
		<?php echo $form->textField($model, 'Titulo', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'idUsuario'); ?>
		<?php echo $form->dropDownList($model, 'idUsuario', GxHtml::listDataEx(Usuarios::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Privacidade'); ?>
		<?php echo $form->textField($model, 'Privacidade', array('maxlength' => 7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Descricao'); ?>
		<?php echo $form->textArea($model, 'Descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'idTipo'); ?>
		<?php echo $form->dropDownList($model, 'idTipo', GxHtml::listDataEx(TipoTarefa::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Status'); ?>
		<?php echo $form->textField($model, 'Status', array('maxlength' => 9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Data_Conclusao'); ?>
		<?php echo $form->textField($model, 'Data_Conclusao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Data_Criacao'); ?>
		<?php echo $form->textField($model, 'Data_Criacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Data_Modificacao'); ?>
		<?php echo $form->textField($model, 'Data_Modificacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
