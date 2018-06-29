<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'usuarios-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'Nome'); ?>
		<?php echo $form->textField($model, 'Nome', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'Nome'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Sexo'); ?>
		<?php echo $form->dropDownList($model, 'Sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino')); ?>
		<?php echo $form->error($model,'Sexo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Data_Nascimento'); ?>
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
		<?php echo $form->error($model,'Data_Nascimento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model, 'Email', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'Email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Telefone'); ?>
		<?php echo $form->textField($model, 'Telefone', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'Telefone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Login'); ?>
		<?php echo $form->textField($model, 'Login', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'Login'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Senha'); ?>
		<?php echo $form->textField($model, 'Senha', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'Senha'); ?>
		</div><!-- row -->
				
		<!--<label><?php //echo GxHtml::encode($model->getRelationLabel('tarefases')); ?></label>-->
		<?php //echo $form->checkBoxList($model, 'tarefases', GxHtml::encodeEx(GxHtml::listDataEx(Tarefas::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->