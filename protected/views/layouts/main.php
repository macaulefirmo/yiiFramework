<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="pt-br">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php Yii::app()->bootstrap->register(); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/teste.css">
	
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<?php

		if(Yii::app()->user->name == 'admin') {

			echo '<div id="mainmenu">';

			$this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Início', 'url'=>array('/site/index')),
					array('label'=>'Usuarios', 'url'=>array('/usuarios/index'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Tarefas', 'url'=>array('/tarefas/index'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Tipos de Tarefa', 'url'=>array('/tipoTarefa/index'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Sair ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); 
			
			echo '</div><!-- mainmenu -->';
		} else {

			echo '<div id="mainmenu">';

			$this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Início', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Início', 'url'=>array('/tarefas/userHome'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Perfil', 'url'=>array('/usuarios/perfil'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Minhas Tarefas', 'url'=>array('/tarefas/userTarefas'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Tarefas Públicas', 'url'=>array('/tarefas/tarefasPublicas'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Sair ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); 
			
			echo '</div><!-- mainmenu -->';

		}

	?>
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por Tarefinha Inc.<br/>
		Todos os Direitos Reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

		
</body>
</html>
