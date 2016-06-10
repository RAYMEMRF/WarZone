<?php# include(SITE_ROOT.'/admin/resources/includes/common.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Tera Soluciones C.A. - Calidad a tu servicio...</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>

	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<style type="text/css">
		#topright {
			background-repeat: repeat-y;
			line-height: normal;
			position: absolute;
			right: 10px;
			top: 17px;
			background-image: url("css/images/vertical-line.png");
			padding: 0px 0px 0px 20px;
		}
		.boldtext-medium {
			font-size: 20px;
			font-weight: bold;
			color: #0095da;
		}
		.boldtext-strong {
			font-size: 20px;
			font-weight: bold;
			color: #0095da;
		}
	</style>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
	<!-- shell -->
	<div class="shell">
		<!-- container -->
		<div class="container">
			<!-- header -->
			<header id="header">
				<h1 id="logo"><a href="#">Retina</a></h1>
				<!-- search -->
				<div id="topright">
					<span class="boldtext-medium">Contacto Directo</span><br />
					<span class="boldtext-strong">+58 <!----></span>
				</div>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</header>
			<!-- end of header -->
			<!-- navigaation -->
			<nav id="navigation">
				<a href="#" class="nav-btn">HOME<span></span></a>
				<ul>
					<li <?= basename($_SERVER['PHP_SELF'])=="index.php"? 'class="active"': '' ?>><a href="index.php">Inicio</a></li>
					<? if (get_setting('nosotros')) { ?>
					<li <?= basename($_SERVER['PHP_SELF'])=="nosotros.php"? 'class="active"': '' ?>><a href="nosotros.php">Nosotros</a></li>
					<? } ?>
					<? if (get_setting('servicios')) { ?>
					<li <?= basename($_SERVER['PHP_SELF'])=="servicios.php"? 'class="active"': '' ?>><a href="servicios.php">Servicios</a></li>
					<? } ?>
                    <? if (get_setting('productos')) { ?>
					<li <?= basename($_SERVER['PHP_SELF'])=="productos.php"? 'class="active"': '' ?>><a href="productos.php">Productos</a></li>
					<? } ?>
					<? if (get_setting('clientes')) { ?>
					<li <?=basename($_SERVER['PHP_SELF'])=="clientes.php"? 'class="active"': '' ?>><a href="clientes.php">Clientes</a></li>
					<? } ?>
					<? if (get_setting('soporte')) { ?>
					<li <?=basename($_SERVER['PHP_SELF'])=="soporte.php"? 'class="active"': '' ?>><a href="soporte.php">Soporte</a></li>
					<? } ?>
                    <? if (get_setting('pagos')) { ?>
					<li <?=basename($_SERVER['PHP_SELF'])=="pagos.php"? 'class="active"': '' ?>><a href="pagos.php">Pagos</a></li>
					<? } ?>
					<? if (get_setting('blog')) { ?>
					<li <?=basename($_SERVER['PHP_SELF'])=="blog.php"? 'class="active"': '' ?>><a href="blog.php">Blog</a></li>
					<? } ?>
					<? if (get_setting('contacto')) { ?>
					<li <?=basename($_SERVER['PHP_SELF'])=="contacto.php"? 'class="active"': '' ?>><a href="contacto.php">Contacto</a></li>
					<? } ?>
				</ul>
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
