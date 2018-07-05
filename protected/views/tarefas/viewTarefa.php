<h1>Tarefa - <?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
        array(
            'label' => 'ID',
            'name' => 'ID_Tarefa',            
        ),
        array(
            'label' => 'Título',
            'name' => 'Titulo',            
        ),
        array(
            'label' => 'Usuario',
            'name' => 'idUsuario0',            
        ),
        array(
            'label' => 'Privacidade',
            'name' => 'Privacidade',            
        ),
        array(
            'label' => 'Descrição',
            'name' => 'Descricao',            
        ),
        array(
            'label' => 'Tipo',
            'name' => 'idTipo0',            
        ),
        array(
            'label' => 'Satus',
            'name' => 'Status',            
        ),
        array(
            'label' => 'Data de Conclusão',
            'name' => 'Data_Conclusao',            
        ),        
        array(
            'label' => 'Data de Criação',
            'name' => 'Data_Criacao',            
        ),
        array(
            'label' => 'Data de Modificação',
            'name' => 'Data_Modificacao',            
        ),
	),
)); ?>