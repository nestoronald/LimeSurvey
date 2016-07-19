<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cenepred_main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/template.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/boostrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flat_and_modern.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
			<nav class="navbar navbar-default navbar-fixed-top" id="topsurveymenubar">
		      <div class="container">
		        <div class="navbar-header container">
		        <span id="logo"><img alt="yes" src="http://192.168.2.20/limesurvey/upload/templates/cenepred/files/logo-cenepred-blanco.png" width="120" title="yes" /></span>
		        <span id="lema"><h1>Glosario de Terminos</h1></span>
		        </div>
		        <div class="navbar-header col-xs-12 col-sm-6 col-lg-8">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>                
		        </div> 

		        <div class="nav navbar-nav navbar-right">
		        	<?php //$this->widget('zii.widgets.CMenu',array(
		        		// 'items'=>array(
		        		// 	array('label'=>'Inicio', 'url'=>array('/site/index')),
		        		// 	array('label'=>'Diccionario', 'url'=>array('/site/page', 'view'=>'dictionary')),
		        		// 	array('label'=>'Contacto', 'url'=>array('/site/contact')),
		        		// 	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		        		// 	array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		        		// ),
		        	//)); ?>
		        	<ul class="nav navbar-nav navbar-right">
			        	<li><a href="/limesurvey/dimse/index.php?r=site/index">Inicio</a></li>
			        	<li class="active"><a href="/limesurvey/dimse/index.php?r=site/page&amp;view=dictionary">Diccionario</a></li>
			        	<li><a href="/limesurvey/dimse/index.php?r=site/contact">Contacto</a></li>
		        	</ul>
		        </div><!-- mainmenu -->       
		      </div>      
		    </nav>
	</div><!-- header -->

	

	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> CENEPRED.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
