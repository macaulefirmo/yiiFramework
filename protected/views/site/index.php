<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section>

	<h1 class="">Bem Vindo ao <i><?php echo CHtml::encode(Yii::app()->name); ?></i>!</h1>

</section>

<section>

	<?php

		if(!Yii::app()->user->isGuest) {

			if(Yii::app()->user->name == 'admin') {
				
				echo "Bem Vindo Administrador!";
			} else {

				echo "Conteudo do Usuario.";
			}

		} else {

			echo "<h4>Efetue o Login para acessar o sistema!</h4>";
		}
		
	?>


</section>

<section>


</section>
