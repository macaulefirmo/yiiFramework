<?php

	echo "<h3 class=''>Bem Vindo ".Yii::app()->user->name."!</h3><br>";
	echo "<h4>Essas são as suas Tarefas Pendentes:</h4>";

?>

<?php 

// $this->widget('zii.widgets.grid.CGridView', array(
// 	'dataProvider' => $dataProvider,		
// 	// 'filter' => $dataProvider,
// 	'columns' => array(       
// 		array(
// 			'header' => 'ID',
// 			'name' => 'ID_Tarefa',
// 		),
// 		array(
// 			'header' => 'Título',
// 			'name' => 'Titulo',
// 		),
// 		array(
// 			'header' => 'Privacidade',
// 			'name' => 'Privacidade',
// 		),
// 		array(
// 			'header' => 'Descrição',
// 			'name' => 'Descricao',
// 		),
// 		array(
// 			'header' => 'Tipo de Tarefa',
// 			'name' => 'idTipo0',
// 		),
// 		array(
// 			'header' => 'Status',
// 			'name' => 'Status',
// 		),
// 		array(
// 			'header' => 'Ações',
// 			'class' => 'CButtonColumn',
// 			'template' => '{view}{update}',            
// 		),
// 	),
// ));

?>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'usuarios-grid',
	'dataProvider' => $dataProvider->getTarefasPendentes(Usuarios::getIdUser()),
	'filter' => $dataProvider,
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
			'filter'=> array('Pública' => 'Publica', 'Privada' => 'Privada'),
		),
		array(
			'header' => 'Descrição',
			'name' => 'Descricao',
		),
		// array(
		// 	'header' => 'Tipo de Tarefa',
		// 	'name' => 'idTipo0',
		// ),
		array(
            'header' => 'Tipo de Tarefa',
            'name'=>'idTipo',
            'value'=>'GxHtml::valueEx($data->idTipo0)',
            'filter'=>GxHtml::listDataEx(TipoTarefa::model()->findAllAttributes(null, true)),
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



