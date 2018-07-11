<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tarefas-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Os campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'Titulo'); ?>
		<?php echo $form->textField($model, 'Titulo', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'Titulo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->dropDownList($model, 'idUsuario', GxHtml::listDataEx(Usuarios::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Privacidade'); ?>
		<?php echo $form->dropDownList($model, 'Privacidade', array('Publica' => 'Pública', 'Privada' => 'Privada')); ?>
		<?php echo $form->error($model,'Privacidade'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Descricao'); ?>
		<?php echo $form->textArea($model, 'Descricao'); ?>
		<?php echo $form->error($model,'Descricao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'idTipo'); ?>
		<?php echo $form->dropDownList($model, 'idTipo', GxHtml::listDataEx(TipoTarefa::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idTipo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->dropDownList($model, 'Status', array('Concluida' => 'Concluida', 'Pendente' => 'Pendente')); ?>
		<?php echo $form->error($model,'Status'); ?>
		</div><!-- row -->		

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->