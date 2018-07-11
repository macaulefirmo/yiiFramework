<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tipo-tarefa-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Os campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'Nome'); ?>
		<?php echo $form->textField($model, 'Nome', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'Nome'); ?>
		</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->