<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<form id="search_2" method="get" action="index.php?r=site/page&view=dictionary" target="_top">
    <label class="sl" for="searching_2">Buscar terminos GRD</label>
	<input id="searching_2" name="q" type="text" placeholder="ej. Alerta">
	<button class="search_submit" type="submit">Buscar</button>		
</form>
