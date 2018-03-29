<?php 
	include('BFI_Thumb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>La Quilla</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/fonts/font-awesome-4.6.3/css/font-awesome.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,500,600,700" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url'); ?>/assets/owlcarousel/assets/owl.carousel.css" type="text/css" rel="stylesheet"/>
  <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css?ver=1" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <link href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png" rel="shortcut icon" type="image/png"/>
  <?php wp_head(); ?>
</head>

<body>
	<header>
	  <div class="navbar">
		  <nav class="" role="navigation">
		    <div class="nav-wrapper container"><a href="<?php bloginfo('url'); ?>" target="_self" class="brand-logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo_la_quilla.png" width="200"/></a>
		      <ul class="right hide-on-med-and-down">
			    <li><a href="<?php bloginfo('url'); ?>/category/noticias" class="<?php if(is_category('noticias')){ ?>selected<?php } ?>">Noticias</a></li>
			    
			    <?php 
				    if(is_home()){ 
				    	$url = ''; 
			    	}else{
				    	$url = get_site_url(); 
			    	}
			    ?>
		        <li><a href="<?php echo $url; ?>#somos" class="page-scroll">Somos</a></li>
		        <li><a href="<?php echo $url; ?>#creaciones" class="page-scroll">Creaciones</a></li>
		        <li><a href="<?php echo $url; ?>#educacion" class="page-scroll">Educación</a></li>
		        <li><a href="<?php echo $url; ?>#gestion_y_comunicacion" class="page-scroll">Gestión y Comunicación</a></li>
<!--
		      	<li><a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
-->
		      </ul>
		
		      <ul id="nav-mobile" class="side-nav">
			    <li class="brand-logo-mobile"><a href="<?php bloginfo('url'); ?>" target="_self"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo_la_quilla.png" width="200"/></a></li>
			    <li><a href="<?php bloginfo('url'); ?>/category/noticias" class="page-scroll">Noticias</a></li>
		        <li><a href="<?php echo $url; ?>#somos" target="_self" class="">Somos</a></li>
		        <li><a href="<?php echo $url; ?>#creaciones" target="_self" class="">Creaciones</a></li>
		        <li><a href="<?php echo $url; ?>#educacion" target="_self" class="">Educación</a></li>
		        <li><a href="<?php echo $url; ?>#gestion_y_comunicacion" target="_self" class="">Gestión y Comunicación</a></li>
		        <li class="redes_sociales">
<!--
			        <a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
							<a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
							<a href="#" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
							<a href="#" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
-->
		        </li>
		      </ul>
		      <a href="#" data-activates="nav-mobile" class="button-collapse right">
			      <i class="material-icons">menu</i>
			    </a>
		    </div>
			</nav>
	  </div> <!-- /.navbar -->
	</header>
