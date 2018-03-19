<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>La Quilla</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/fonts/font-awesome-4.6.3/css/font-awesome.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,500,600,700" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/owlcarousel/assets/owl.carousel.css" type="text/css" rel="stylesheet"/>
  <link href="assets/css/style.css?ver=1" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>

<body>
	<header>
	  <div class="navbar">
		  <nav class="" role="navigation">
		    <div class="nav-wrapper container"><a href="index.html" target="_self" class="brand-logo"><img src="assets/img/logo_la_quilla.png" width="200"/></a>
		      <ul class="right hide-on-med-and-down">
			      <li><a href="noticias.html" class="selected">Noticias</a></li>
		        <li><a href="#somos" class="page-scroll">Somos</a></li>
		        <li><a href="#creaciones" class="page-scroll">Creaciones</a></li>
		        <li><a href="#educacion" class="page-scroll">Educación</a></li>
		        <li><a href="#gestion_y_comunicacion" class="page-scroll">Gestión y Comunicación</a></li>
<!--
		      	<li><a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
-->
		      </ul>
		
		      <ul id="nav-mobile" class="side-nav">
			      <li class="brand-logo-mobile"><a href="index.html" target="_self"><img src="assets/img/logo_la_quilla.png" width="200"/></a></li>
			      <li><a href="noticias.html" class="page-scroll">Noticias</a></li>
		        <li><a href="#somos" target="_self" class="">Somos</a></li>
		        <li><a href="#creaciones" target="_self" class="">Creaciones</a></li>
		        <li><a href="#educacion" target="_self" class="">Educación</a></li>
		        <li><a href="#gestion_y_comunicacion" target="_self" class="">Gestión y Comunicación</a></li>
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
	
	<div class="container">
		<div class="row">
				<form class="col m12 s12" action="#">
					<div class="busqueda ">
            <div class="input-field">
              <input placeholder="Buscador de Noticias" id="" type="text">
            </div>
            <button class="btn_busqueda" type="submit" name="action"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div><!-- /.busqueda -->
				</form>
			</div><!-- /.row -->
	</div><!-- /.container -->
	
	<div class="container caja_blanca">
		<div class="section">
			<div class="row">
				<div class="col l4 m4 s12">
					<div class="post_noticia box_shadow">
						<a href="noticia.html" target="_self"><img src="assets/img/noticia1.jpg" class="responsive-img"/></a><!-- 600x400 -->
						<div class="section">
							<h6>Enero 31, 2018</h6>
							<h5><a href="noticia.html" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a turpis hendrerit, feugiat risus metus.</a></h5> <!-- 100 bytes -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p> <!-- 100 bytes -->
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->
				</div><!-- /.col -->
				
				<div class="col l4 m4 s12">
					<div class="post_noticia box_shadow">
						<img src="assets/img/noticia2.jpg" class="responsive-img"/><!-- 600x400 -->
						<div class="section">
							<h6>Enero 31, 2018</h6>
							<h5><a href="" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a turpis hendrerit, feugiat risus metus.</a></h5><!-- limitar a 80 caracteres -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p> <!-- 100 bytes -->
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->
				</div><!-- /.col -->
				
				<div class="col l4 m4 s12">
					<div class="post_noticia box_shadow">
						<img src="assets/img/noticia3.jpg" class="responsive-img"/><!-- 600x400 -->
						<div class="section">
							<h6>Enero 31, 2018</h6>
							<h5><a href="" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a turpis hendrerit, feugiat risus metus.</a></h5><!-- limitar a 80 caracteres -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p><!-- limitar a 140 caracteres -->
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->	
				</div><!-- /.col -->
			</div><!-- ./row -->
			
			<div class="row">
				<div class="col l4 m4 s12">
					<div class="post_noticia box_shadow">
						<a href="noticia.html" target="_self"><img src="assets/img/noticia1.jpg" class="responsive-img"/></a><!-- 600x400 -->
						<div class="section">
							<h6>Enero 31, 2018</h6>
							<h5><a href="noticia.html" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a turpis hendrerit, feugiat risus metus.</a></h5> <!-- 100 bytes -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p> <!-- 100 bytes -->
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->
				</div><!-- /.col -->
				
				<div class="col l4 m4 s12">
					<div class="post_noticia box_shadow">
						<img src="assets/img/noticia2.jpg" class="responsive-img"/><!-- 600x400 -->
						<div class="section">
							<h6>Enero 31, 2018</h6>
							<h5><a href="" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a turpis hendrerit, feugiat risus metus.</a></h5><!-- limitar a 80 caracteres -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p> <!-- 100 bytes -->
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->
				</div><!-- /.col -->
				
				<div class="col l4 m4 s12">
					<div class="post_noticia box_shadow">
						<img src="assets/img/noticia3.jpg" class="responsive-img"/><!-- 600x400 -->
						<div class="section">
							<h6>Enero 31, 2018</h6>
							<h5><a href="" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a turpis hendrerit, feugiat risus metus.</a></h5><!-- limitar a 80 caracteres -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p><!-- limitar a 140 caracteres -->
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->	
				</div><!-- /.col -->
			</div><!-- ./row -->
			
			<div>
				<ul class="pagination center">
			    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
			    <li class="active"><a href="#!">1</a></li>
			    <li class="waves-effect"><a href="#!">2</a></li>
			    <li class="waves-effect"><a href="#!">3</a></li>
			    <li class="waves-effect"><a href="#!">4</a></li>
			    <li class="waves-effect"><a href="#!">5</a></li>
			    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
			  </ul>
			</div>
			
		</div><!-- /.section -->
	</div><!-- /.container -->
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  

  
  
  
  
  
  
  
   <div class="parallax-container valign-wrapper">
    <div class="section no-pad">
      <div class="container valign">
        <h1 class="titulos_blancos"></h1>
      </div>
    </div>
    <div class="parallax"><img src="assets/img/background_microtransmisora.jpg" alt="La Quilla"></div>
  </div><!-- /parallax-container -->   
  
  
  
  
  
  
  


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
	
	<footer>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col l6 s12 content">
						<p class="left-align">
						<span></span><br>
						<br><br>
						
						<span></span><br>
						<br><br>
						
						<br> 
						<br>
						
						</p>
					</div><!-- /.col -->
					<div class="col l6 s12">
						<div class="video-container">
<!-- 							<iframe class="right-align" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.6732592887847!2d-70.62624188443397!3d-33.43176190394027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c587cf302e03%3A0xf3631967be9134ef!2sJos%C3%A9+Manuel+Infante+22%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1502430197090" width="800" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
						</div>
					</div><!-- /.col -->
					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.section -->
	</footer>

  <!--  SCRIPTS -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/owlcarousel/owl.carousel.js"></script>
  
	<script>
	  $(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 30,
        nav: true,
        navText: [ '', '' ],
		    loop:true,
		    autoplay:true,
		    autoplayTimeout:5000,
		    responsiveClass:true,
        responsive:{
            1:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:1
            }
        }
      })
    })
  </script>
  
  
 

  </body>
</html>
