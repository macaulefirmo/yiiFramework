<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'ID_Usuario'); ?>
		<?php echo $form->textField($model, 'ID_Usuario', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Nome'); ?>
		<?php echo $form->textField($model, 'Nome', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Sexo'); ?>
		<?php echo $form->textField($model, 'Sexo', array('maxlength' => 9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Data_Nascimento'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'Data_Nascimento',
			'value' => $model->Data_Nascimento,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Email'); ?>
		<?php echo $form->textField($model, 'Email', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Telefone'); ?>
		<?php echo $form->textField($model, 'Telefone', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Login'); ?>
		<?php echo $form->textField($model, 'Login', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Senha'); ?>
		<?php echo $form->textField($model, 'Senha', array('maxlength' => 100)); ?>
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
