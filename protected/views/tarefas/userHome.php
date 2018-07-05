
<h1> Tarefas Pendentes </h1>

<?php 

	$this->widget('zii.widgets.grid.CGridView', array(
		'dataProvider' => $dataProvider,		
		'columns' => array(       
			array(
				'header' => 'ID',
				'name' => 'ID_Tarefa',
			),
			array(
				'header' => 'Título',
				'name' => 'Titulo',
			),
			array(
				'header' => 'Privacidade',
				'name' => 'Privacidade',
			),
			array(
				'header' => 'Descrição',
				'name' => 'Descricao',
			),
			array(
				'header' => 'Tipo de Tarefa',
				'name' => 'idTipo0',
			),
			array(
				'header' => 'Status',
				'name' => 'Status',
			),
			array(
				'header' => 'Ações',
				'class' => 'CButtonColumn',
				'template' => '{view}{update}',            
			),
		),
	));

?>
