<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'ID_Tipo_Tarefa'); ?>
		<?php echo $form->textField($model, 'ID_Tipo_Tarefa', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Nome'); ?>
		<?php echo $form->textField($model, 'Nome', array('maxlength' => 150)); ?>
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
