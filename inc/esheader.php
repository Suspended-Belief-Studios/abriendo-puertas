<!DOCTYPE html> 
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head> <!-- v2.5 -->

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $pageTitle ?></title>
	<meta name="description" content="Abriendos Puertas Opening Doors is a non-profit that teaches recent Latino immigrants in america the skills needed to raise their young children ages 0-5 years">
	<meta name="author" content="Abriendo Puertas / Opening Doors">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/flexnav.css">
	<link rel="stylesheet" href="css/popup.css">
	
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Oswald'>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]

	<!- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
</head>

<body>

	<div class="anchor dropshadowBlue" style="padding-top:20px">
	
		<div class="container">
		
			<!-- HEADER	
			================================================== -->
			<header class="sixteen columns center">
				<a href="esindex.php"><img src="images/logo/AP_logo_left.svg" class="scale-with-grid2 logo-big">
				<img src="images/logo/AP_logo_side.svg" class="scale-with-grid2 logo-small">
				<img src="images/logo/AP_logo_slogan_center.svg" class="slogan"></a>
			</header>
		
			<!--NAVIGATION-->
			<div class="sixteen columns">

				<div id="mobile-flexnav" class="menu-button">Menu</div>

				<nav>
					<ul class="flexnav" id="spanish-nav" data-breakpoint="800">
						<li><a <?php if ( $menuItem == "home" ) { echo 'class="active"' ;} ?>href="esindex.php">Incio</a></li>
						<li><a <?php if ( $menuItem == "about" ) { echo 'class="active"' ;} ?>href="esaboutus.php">Quienes Somos</a></li>
						<li><a <?php if ( $menuItem == "network" ) { echo 'class="active"' ;} ?>href="esournetwork.php">Nuestra Red</a></li>
						<li><a <?php if ( $menuItem == "curriculum" ) { echo 'class="active"' ;} ?>href="escurriculum.php">Curriculo</a></li>
						<li><a <?php if ( $menuItem == "training" ) { echo 'class="active"' ;} ?>href="estraining.php">Capacitaciones</a></li>
						<li><a <?php if ( $menuItem == "impact" ) { echo 'class="active"' ;} ?>href="esimpact.php">Impacto</a></li>
						<li><a <?php if ( $menuItem == "resources" ) { echo 'class="active"' ;} ?>href="esresources.php">Recursos</a></li>
					</ul>
				</nav>
	
			</div>
			
 			<!-- English Spanish button -->
 			<!-- GA Tracking -->
 			
 			<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49409107-1', 'ap-od.org');
  ga('send', 'pageview');

</script>

			<div class="espanol">
				<div style="font-size: 120%"><a href="<?php echo $englishPage; ?>"><strong>ENGLISH</strong></a></div> 
			</div>

			<!-- <div class="responsive_tell"></div> -->
		</div>


			