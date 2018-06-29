<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('ID_Tipo_Tarefa')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->ID_Tipo_Tarefa), array('view', 'id' => $data->ID_Tipo_Tarefa)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Nome')); ?>:
	<?php echo GxHtml::encode($data->Nome); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Data_Criacao')); ?>:
	<?php echo GxHtml::encode($data->Data_Criacao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Data_Modificacao')); ?>:
	<?php echo GxHtml::encode($data->Data_Modificacao); ?>
	<br />

</div>