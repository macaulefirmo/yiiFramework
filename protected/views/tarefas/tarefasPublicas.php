<h2>Tarefas Públicas</h2>

<?php 

// $this->widget('zii.widgets.grid.CGridView', array(	
// 	'dataProvider' => $dataProvider,
// 	// 'filter' => $dataProvider,
// 	'columns' => array(
//         array(
//             'header' => 'ID',
//             'name' => 'ID_Tarefa',
//         ),
//         array(
//             'header' => 'Título',
//             'name' => 'Titulo',
//         ),
//         array(
//             'header' => 'Privacidade',
//             'name' => 'Privacidade',
//         ),
//         array(
//             'header' => 'Descrição',
//             'name' => 'Descricao',
//         ),
//         array(
//             'header' => 'Tipo',
//             'name' => 'idTipo0',
//         ),
//         array(
//             'header' => 'Status',
//             'name' => 'Status',
//         ),	
//         array(
//             'header' => 'Data de Conclusão',
//             'name' => 'Data_Conclusao',
//         ),
// 		array(
//             'header' => 'Ações',
//             'class' => 'CButtonColumn',
//             'template' => '{view}{update}',  
// 		),
// 	),
// )); 

?>


<?php 

$this->widget('zii.widgets.grid.CGridView', array(	
	'dataProvider' => $dataProvider->getTarefasPublicas(),
    'filter' => $dataProvider,
    'htmlOptions' => [
        'style' => 'width:100%;'
    ],
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
        //     'header' => 'Tipo',
        //     'name' => 'idTipo0',
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
            'filter'=> array('Pendente' => 'Pendende', 'Concluída' => 'Concluida'),
        ),	
        array(
            'header' => 'Data de Conclusão',
            'name' => 'Data_Conclusao',
        ),
		array(
            'header' => 'Ações',
            'class' => 'CButtonColumn',
            'template' => '{view}{update}',  
		),
	),
)); 

?>

<?php

// $this->widget('ext.bootstrap.widgets.TbGridView', array(
//     'dataProvider' => $dataProvider->getTarefasPublicas(),
//     'filter' => $dataProvider,
//     'template' => "{items}",
//     'type' => TbHtml::GRID_TYPE_BORDERED,
//     'columns' => array(
//         array(
//             'header' => 'ID',
//             'name' => 'ID_Tarefa',
//         ),
//         array(
//             'header' => 'Título',
//             'name' => 'Titulo',
//         ),
//         array(
//             'header' => 'Privacidade',
//             'name' => 'Privacidade',
//         ),
//         array(
//             'header' => 'Descrição',
//             'name' => 'Descricao',
//         ),
//         array(
//             'header' => 'Tipo',
//             'name'=>'idTipo',
//             'value'=>'GxHtml::valueEx($data->idTipo0)',
//             'filter'=>GxHtml::listDataEx(TipoTarefa::model()->findAllAttributes(null, true)),
//         ),
//         array(
//             'header' => 'Status',
//             'name' => 'Status',
//         ),	
//         array(
//             'header' => 'Data de Conclusão',
//             'name' => 'Data_Conclusao',
//         ),
//         array(
//             'header' => 'Ações',
//             'class' => 'CButtonColumn',
//             'template' => '{view}{update}',  
//         ),
//      ),
//  ));

?>