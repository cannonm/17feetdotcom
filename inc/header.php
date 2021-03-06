<?php 
$ROOT = "http://www.17feet.com";
if($_SERVER['HTTP_HOST'] == '192.168.1.246' || $_SERVER['HTTP_HOST'] == 'localhost' ){
	$ROOT = "/17feet";
}

if( strpos($_SERVER['SCRIPT_NAME'], 'staging' ) ){
	$ROOT = "/staging";
}

include( dirname(__FILE__).'/functions.php');

?>

<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>		<html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>		<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" > 
	<meta http-equiv="content-script-type" content="text/javascript" > 
	<meta http-equiv="content-style-type" content="text/css" > 
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >
	
	<meta name='description' content="We make things work. Beautifully. We partner with companies of all sizes to help them achieve great results. We're a digital design company. Our designs are used by people everyday.">
	<meta name="keywords" content="Brandon Herring, Michael Rivo, San Francisco, California, 17feet, design, strategy, marketing, user experience, interaction design, usability, interactive, interactive agency, digital agency, technology, web, websites, design studio" />

	<!-- <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0"> -->
	
	<meta name="viewport" content="width=1020">
	
	<title>17FEET. Small. Mighty.</title>

	<!-- Framework CSS --> 
	<!--[if lt IE 9]><link rel="stylesheet" href="<?php echo $ROOT ?>/css/ie.css" type="text/css" media="screen, projection, print"><![endif]-->
	<link rel="stylesheet" href="<?php echo $ROOT ?>/css/style.css" type="text/css" media="screen, projection, print">
	
	<!-- <link rel='stylesheet' media='screen and (min-width: 0px) and (max-width: 979px)' href='<?php echo $ROOT ?>/css/less/responsive.css' /> -->
		
	<link rel="shortcut icon" href="<?php echo $ROOT ?>/imgs/favicon.ico" />

	<!-- Scripts -->
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	
	<?php 
	//	var_dump($_SERVER['HTTP_HOST']);
	$typekitKey = ($ROOT != "/17feet" ? "phb6bnh" : "gpt6vuk");  // gpt6vuk - local    ?>
	
	<script type="text/javascript" src="http://use.typekit.com/<?php echo $typekitKey ?>.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<script src="<?php echo $ROOT ?>/js/modernizr.js"></script>
	<script src="<?php echo $ROOT ?>/js/jquery.jsonp.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $ROOT ?>/js/hashchange.js" type="text/javascript" charset="utf-8"></script>
	
	<script src="<?php echo $ROOT ?>/js/init.js" type="text/javascript" charset="utf-8"></script>
	
	
</head>
<body>
	<div id="body" <?php echo ($parentPage ? "class='$parentPage'": '');  ?>>
	<div id="header">
		<div class="container">
			 <div class="hide-full">
				<button class="mobile-btn" id="menu-toggle" data-toggle="#nav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
	
			<div class="back-btn">
				<button class="mobile-btn">Back</button>
			</div>
	
			<div class="row-fluid">
	
				<h1 id="logo" class="span2"><a href="<?php echo $ROOT ?>/" class="hide-txt">17feet</a></h1>
				
				<ul class="span8" id="nav">
					<li class="about-us"><a href="<?php echo $ROOT; ?>/about-us">About Us</a></li>						
					<li class="our-work"><a href="<?php echo $ROOT; ?>/our-work">The Work</a></li>
					<li class="join"><a href="<?php echo $ROOT; ?>/join">Join Us!</a></li>
					<li class="blog"><a href="<?php echo $ROOT; ?>/blog">Thoughts</a></li>
					<li class="contact-us"><a href="<?php echo $ROOT; ?>/contact-us">Get in Touch</a></li>
				</ul>
	
			</div> 
		</div>
	</div> <!-- .header -->	