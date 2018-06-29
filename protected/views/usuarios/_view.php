<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('ID_Usuario')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->ID_Usuario), array('view', 'id' => $data->ID_Usuario)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Nome')); ?>:
	<?php echo GxHtml::encode($data->Nome); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Sexo')); ?>:
	<?php echo GxHtml::encode($data->Sexo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Data_Nascimento')); ?>:
	<?php echo GxHtml::encode($data->Data_Nascimento); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Email')); ?>:
	<?php echo GxHtml::encode($data->Email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Telefone')); ?>:
	<?php echo GxHtml::encode($data->Telefone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Login')); ?>:
	<?php echo GxHtml::encode($data->Login); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('Senha')); ?>:
	<?php echo GxHtml::encode($data->Senha); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Data_Criacao')); ?>:
	<?php echo GxHtml::encode($data->Data_Criacao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Data_Modificacao')); ?>:
	<?php echo GxHtml::encode($data->Data_Modificacao); ?>
	<br />
	*/ ?>

</div>