<?php defined( '_JEXEC' ) or die; 

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// template css
$doc->addStyleSheet($tpath.'/css/template.css.php');

?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!--
/////////////////////////////////////////////////
CREATE AUTHOR: ANDRE GÄRTNER				   
CREATE CONTENT: 10.01.2014 					   					   
COPYRIGHT: ANDRE GÄRTNER 2014    		     
WEBSITE: http://www.andregaertner.com		   
/////////////////////////////////////////////////
-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="<?php echo $this->language; ?>">
<!--/////////////////////////////////////////////////-->
<!--META DESCRIPTION-->
<meta name="keywords" content="Portfolio Andre Gärtner, Designer, Webdeveloper, Webdesigner, illustrator, konzeption, 3d Animation, Mediengestalter" />
<meta name="description" content="Portfolio from Andre Gärtner" />
<meta name="robots" content="index,follow" />
<!--/////////////////////////////////////////////////-->
<head>
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->  

<!-- 
  YOUR CODE HERE
-->
  <jdoc:include type="modules" name="debug" />
</body>

</html>