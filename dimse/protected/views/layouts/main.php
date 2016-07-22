<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cenepred_main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/template.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flat_and_modern.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/template.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/cenepred.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="container-cenepred">
	<div id="header">			
		    <div class="container-fluid">
			    <span id="logo"><img alt="logo-cenepred" src="http://192.168.2.20/limesurvey/upload/templates/cenepred/files/logo.png" width="120" title="logo-cenepred" /></span>
			    <span id="title-main"><h1> <span class="title-abrev">SIMSE</span> Sistema de Información de Monitoreo,<br> Seguimiento y Evaluación </h1></span>
		    </div>
		    <div class="social_media">
		    		<ul>
		    			<li><a id="tw" target="_blank" href="https://twitter.com/CENEPRED">Twitter</a></li>
		    			<li><a id="fb" target="_blank" href="https://www.facebook.com/cenepred/timeline/">Facebook</a></li>
		    			<li><a id="yt" target="_blank" href="https://www.youtube.com/channel/UCw9I7jPR0NLMqT2DmDGgMeQ">Youtube</a></li>
		    			<li><a id="ml" target="_blank" href="mailto:webmaster@cenepred.gob.pe">Mail</a></li>
		    		</ul>
		    </div>		     
		    <div>
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>		                  
		    </div>
		    <nav class="navbar navbar-default" >
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="">
            		<ul class="nav navbar-nav" style="">		        	
			        	<li><a href="/limesurvey/dimse/index.php?r=site/index">Inicio</a></li>
			        	<li><a href="/limesurvey/dimse/index.php?r=site/page&amp;view=dictionary">Glosario</a></li>
			        	<li><a href="/limesurvey/dimse/index.php?r=site/contact">Contacto</a></li>
			        	<li><a href="http://192.168.2.20/limesurvey/admin">Iniciar Sesion</a></li>
			        	<li><a href="/limesurvey/dimse/index.php?r=site/page&amp;view=list-doc">Documentos</a></li>
			        	<!-- <li><a href="/limesurvey/dimse/index.php?r=site/register">Registrar</a></li> -->
			        	<!-- <li><a href="/limesurvey/dimse/index.php?r=site/page&amp;view=help">Ayuda</a></li> -->
		        	</ul>
		        </div>
		    </nav>
	</div>
	
	<?php if(isset($this->breadcrumbs)):?>
		<div class="container-fluid">
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
		</div>
	<?php endif?>

	<div class="container-fluid">
		<?php echo $content; ?>
	</div>
	<div class="clear"></div>

	<div id="footer">
		<div class="container-fluid">			
			    <div id="text-2" class="col-2-6">
			    	<h4 class="widgettitle">Ubícanos</h4>			
			    	<div class="textwidget"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.2941989826813!2d-77.0182125840395!3d-12.092000646038649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8796191751f%3A0xeec9b9e59a193161!2sCENEPRED!5e0!3m2!1ses!2spe!4v1465857187013" width="170" height="160" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			    	</div>
				</div>
				<div id="text-3" class="col-2-6">
					<h4 class="widgettitle">Contacto</h4>			
					<div class="textwidget"><div class="icon"><span id="dir"></span>Av. Parque Norte 313 - 319 <br>
			 		San Isidro Lima - Perú 
					</div>
					<div class="icon"><span id="tel"></span><b>Central Teléfonica</b><br>
					(051)2013550 
					</div></div>
				</div>
				<div id="text-4" class="col-2-6">
					<h4 class="widgettitle">Horario de Atención</h4>			
					<div class="textwidget">
					<div class="icon">
						<span class="hora"></span>
						<b>Lunes a Viernes:</b> <br>
						 8:30 a.m. a 5:30 p.m. <br>
						<b>Mesa de partes: </b><br>
						8:30 a.m. a 5:30 p.m. 
					</div>
					</div>
				</div>
				<div id="text-5" class="col-2-6"><h4 class="widgettitle">Enlaces Regionales</h4>			
					<div class="textwidget">
						<div class="icon">
						<span class="enreg"></span>
						<a href="http://www.cenepred.gob.pe/web/enlace-regional-cusco/">Enlace Regional Cusco </a><br>
						<a href="http://www.cenepred.gob.pe/web/enlace-regional-piura/">Enlace Regional Piura </a><br>
						<a href="http://www.cenepred.gob.pe/web/enlace-regional-tacna/">Enlace Regional Tacna</a>
						</div>
					</div>
				</div>
				<div id="text-6" class="col-2-6">
					<h4 class="widgettitle">Oportunidades laborales</h4>
					<div class="textwidget">
						<div class="icon">
						<span class="opor"></span>
						<a href="http://www.cenepred.gob.pe/web/oportunidades/">CAS</a><br>
						<a href="http://www.cenepred.gob.pe/web/oportunidades-laborales/convocatorias-pnud/">PNUD</a>
					</div>
					</div>
				</div>			
		</div>		
	</div><!-- footer -->
</div><!-- page -->
</body>
</html>
