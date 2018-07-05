<h1>Tarefas Públicas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(	
	'dataProvider' => $dataProvider,
	//'filter' => $model,
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
            'header' => 'Tipo',
            'name' => 'idTipo0',
        ),
        array(
            'header' => 'Status',
            'name' => 'Status',
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
)); ?>