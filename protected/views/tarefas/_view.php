<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('ID_Tarefa')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->ID_Tarefa), array('view', 'id' => $data->ID_Tarefa)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Titulo')); ?>:
	<?php echo GxHtml::encode($data->Titulo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('idUsuario')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idUsuario0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Privacidade')); ?>:
	<?php echo GxHtml::encode($data->Privacidade); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Descricao')); ?>:
	<?php echo GxHtml::encode($data->Descricao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('idTipo')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idTipo0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Status')); ?>:
	<?php echo GxHtml::encode($data->Status); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('Data_Conclusao')); ?>:
	<?php echo GxHtml::encode($data->Data_Conclusao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Data_Criacao')); ?>:
	<?php echo GxHtml::encode($data->Data_Criacao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Data_Modificacao')); ?>:
	<?php echo GxHtml::encode($data->Data_Modificacao); ?>
	<br />
	*/ ?>

</div>