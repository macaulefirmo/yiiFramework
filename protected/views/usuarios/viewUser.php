<h1><?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
                array(
                        'label' => 'ID',
                        'name' => 'ID_Usuario',            
                ),
                array(
                        'label' => 'Nome',
                        'name' => 'Nome',            
                ),
                array(
                        'label' => 'Sexo',
                        'name' => 'Sexo',            
                ),
                array(
                        'label' => 'Data de Nascimento',
                        'name' => 'Data_Nascimento',            
                ),
                array(
                        'label' => 'Email',
                        'name' => 'Email',            
                ),
                array(
                        'label' => 'Telefone',
                        'name' => 'Telefone',            
                ),
                array(
                        'label' => 'Login',
                        'name' => 'Login',            
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