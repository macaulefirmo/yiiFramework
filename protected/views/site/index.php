<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section>

	<?php

		if(!Yii::app()->user->isGuest) {

			echo "<h3 class=''>Bem Vindo Administrador!</h3>";

		} else {

			echo "<h4>Efetue o Login para acessar o sistema!</h4>";
		}
		
	?>


</section>

