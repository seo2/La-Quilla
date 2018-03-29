<?php get_header(); ?>	
	<div class="container">
		<div class="section">
			<div class="row hide-on-small-only"><!-- cuando el banner principal está encendido -->
				<div class="col m12">
					<div id="owl-demo" class="owl-carousel owl-theme box_shadow">
					<?php  
					$args = array(
						'category_name'=>'destacada'
					);
					$the_query = new WP_Query( $args ); 
					?>
					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>							
						<div class="item banner_item">
							<div class="banner_item_post">
								<h6><?php echo get_the_date(); ?></h6>
								<h5><a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a></h5> <!-- 100 bytes -->		
								<?php the_excerpt(); ?> <!-- 100 bytes -->
						    </div><!-- /.banner_item_post -->
							<a href="<?php the_permalink(); ?>" target="_self">
								<?php the_post_thumbnail('slider-home', array('class' => 'responsive-img border_color')); ?>
							</a><!-- 1900x800 -->
						</div><!-- /.banner_item -->
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>  
					</div><!-- /.owl -->
				</div><!-- /.col -->
			</div><!-- /.row --><!-- /cuando el banner principal está encendido -->
		
			<div class="row hide-on-med-and-up"><!-- cuando el banner principal está apagado -->
			<?php  
				$args = array(
					'category_name'=>'destacada'
				);
				$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>					
					<div class="col l4 m4 s12">
						<div class="post_noticia_bk box_shadow">
							<a href="<?php the_permalink(); ?>" target="_self">
								<?php the_post_thumbnail('noticias', array('class' => 'responsive-img')); ?>
							</a><!-- 600x400 -->
							<div class="section">
								<h6><?php echo get_the_date(); ?></h6>
								<h5><a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a></h5> <!-- 100 bytes -->		
								<?php the_excerpt(); ?> <!-- 100 bytes -->
							</div><!-- /.section -->
						</div><!-- /.post_noticia -->
					</div><!-- /.col -->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>  	
			</div><!-- /.row --><!-- /cuando el banner principal está apagado -->
				
			<div class="caja_blanca" style="margin-top: -20px;">
				<div class="row">
				<?php  
					$args = array(
						'category_name'		=> 'noticias',
						'category__not_in' 	=> array( 2 ),
						'posts_per_page'	=> 3
					);
					$the_query = new WP_Query( $args ); 
				?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>							
					<div class="col l4 m4 s12">
						<div class="post_noticia box_shadow">
							<a href="<?php the_permalink(); ?>" target="_self">
								<?php the_post_thumbnail('noticias', array('class' => 'responsive-img')); ?>
							</a><!-- 600x400 -->
							<div class="section">
								<h6><?php echo get_the_date(); ?></h6>								
								<h5><a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a></h5> <!-- 100 bytes -->		
								<?php the_excerpt(); ?> <!-- 100 bytes -->
							</div><!-- /.section -->
						</div><!-- /.post_noticia -->
					</div><!-- /.col -->
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>  						
				</div><!-- ./row -->	
			</div><!-- /.caja_blanca -->
		</div><!-- /.section -->
	</div><!-- /.container -->
    
<?php  
	$args = array(
		'page_id'=>4
	);
	$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    			
	<div id="somos" class="scrollspy section" class="margin_top_20">
		<div class="container">	
			<div class="row">
				<div class="col m4 hide-on-small-only">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/planta1.png" width="260"/>
				</div><!-- /.col -->
				<div class="col m8">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/somos.png" width="220"/>
					<?php the_content(); ?>
				</div><!-- /.col -->
			</div><!-- /.row -->
	  	</div><!-- /.container -->
	</div><!-- /.section -->


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad">
      <div class="container valign">
        <h1 class="titulos_blancos"></h1>
      </div>
    </div>
    <div class="parallax">
	    <img src="<?php bloginfo('template_url'); ?>/assets/img/background_la_quilla.jpg" alt="La Quilla">
	</div>
  </div><!-- /parallax-container -->
  
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>  
  
<div id="creaciones" class="scrollspy section" class="margin_top_20">
<?php  
	$args = array(
		'post_type' => 'creaciones',
		'p' 		=> 17
	);
	$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    			
	
	  <div class="container">
		  <div class="row">
			  <div class="col m3 hide-on-small-only">
				  <img src="<?php bloginfo('template_url'); ?>/assets/img/hojas_creaciones_left.png" width="280" class="responsive-img"/>
			  </div>
			  <div class="col m6 center">
				  <img src="<?php bloginfo('template_url'); ?>/assets/img/creaciones.png" width="380" class="responsive-img"/>
			  </div>
			  <div class="col m3 hide-on-small-only">
				  <img src="<?php bloginfo('template_url'); ?>/assets/img/hojas_creaciones_right.png" width="280" class="responsive-img"/>
			  </div>
		  </div><!-- /.row -->
	  </div><!-- /.container -->
    <div class="container caja_blanca">
		<div class="row">
			<div class="col m8 s12">
	  			<div id="owl-demo" class="owl-carousel owl-theme box_shadow">
			        <?php $imagenes = muestra_galeria(); ?>
					<?php foreach ($imagenes as $imagen): ?>
					<div class="item banner_item">
					  <img src="<?php echo wp_get_attachment_url($imagen->ID); ?>" class="responsive-img"/><!-- 1200x800 -->
					</div><!-- /.banner_item -->
					<?php endforeach ?>				
				</div><!-- /.owl -->
			</div><!-- /.col -->
  		<div class="col m4 center textos">
			<?php the_post_thumbnail('logo-creaciones', array('class' => 'responsive-img')); ?>
	  		<?php the_content(); ?>
  		</div><!-- /.col -->
  	  </div><!-- /.row -->
  	  
  	  <div class="row">
	  	  <div class="col m4">
		  	  <img class="materialboxed responsive-img" data-caption="La Microtransmisora en Plaza de la Ciudadania" src="<?php echo get('fotos_foto_1'); ?>"><!-- 1200x800 -->
		  	</div>
		  	  <div class="col m4">
		  	  <img class="materialboxed responsive-img" data-caption="La Microtransmisora en Plaza de la Ciudadania" src="<?php echo get('fotos_foto_2'); ?>"><!-- 1200x800 -->
		  	</div>
		  	  <div class="col m4">
		  	  <img class="materialboxed responsive-img" data-caption="La Microtransmisora en Plaza de la Ciudadania" src="<?php echo get('fotos_foto_3'); ?>"><!-- 1200x800 -->
		  	</div>
  	  </div><!-- /.row -->
    </div><!-- /.container -->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>    
<?php  
	$args = array(
		'post_type' => 'creaciones',
		'p' 		=> 19
	);
	$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  
    <div class="container caja_blanca" style="padding: 0 15px;">
  	  <div class="row">
  		  <div class="col m4 center textos">
	  		  <h5>Laboratorio escénico</h5>
	  		  <?php the_content(); ?>
  		  </div><!-- /.col -->
  		  <div class="col m8 s12">
	  		  <div class="row">
		  		  <div class="col m12 s12">
		  		 		<div id="owl-demo" class="owl-carousel owl-theme box_shadow" style="margin-bottom: 20px;">
					        <?php $imagenes = muestra_galeria(); ?>
							<?php foreach ($imagenes as $imagen): ?>
							<div class="item banner_item">
							  <img src="<?php echo wp_get_attachment_url($imagen->ID); ?>" class="responsive-img"/><!-- 1200x800 -->
							</div><!-- /.banner_item -->
							<?php endforeach ?>				
		  		 		</div><!-- /.owl -->
					</div><!-- /.col -->
	  		  </div>
			</div><!-- /.col -->
  	  </div><!-- /.row -->
  	  
    </div><!-- /.container -->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>    
  </div><!-- /.section -->
  
   <div class="parallax-container valign-wrapper">
    <div class="section no-pad">
      <div class="container valign">
        <h1 class="titulos_blancos"></h1>
      </div>
    </div>
    <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/assets/img/background_taller_de_sombras.jpg" alt="La Quilla"></div>
  </div><!-- /parallax-container -->   
 

  <div id="educacion" class="scrollspy section">
	  <div class="container">
		  <div class="row">
			  <div class="col m3 hide-on-small-only">
				  <img src="<?php bloginfo('template_url'); ?>/assets/img/hojas_educacion_left.png" width="280" class="responsive-img"/>
			  </div>
			  <div class="col m6 center">
				  <img src="<?php bloginfo('template_url'); ?>/assets/img/educacion.png" width="380" class="responsive-img"/>
			  </div>
			  <div class="col m3 hide-on-small-only">
				  <img src="<?php bloginfo('template_url'); ?>/assets/img/hojas_educacion_right.png" width="280" class="responsive-img"/>
			  </div>
		  </div><!-- /.row -->
	  </div><!-- /.container -->
    <div class="container caja_blanca">  	  
  	  <div class="row">
<?php  
	$args = array(
		'post_type' => 'educacion'
	);
	$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  	  	  
  		  <div class="col m6 s12 center">
	  		<div class="textos">
	  		  	<h5><?php the_title(); ?></h5>
					<?php the_content(); ?>
			</div><!-- /.textos -->
	        <?php $imagenes = muestra_galeria(); ?>
			<?php foreach ($imagenes as $imagen): ?>
	  		<div class="col m6">
			  	<img class="materialboxed responsive-img margin_bottom_20" data-caption="<?php the_title(); ?>" src="<?php echo wp_get_attachment_url($imagen->ID); ?>"><!-- 1200x800 -->
			</div>
			<?php endforeach ?>		
  		  </div><!-- /.col -->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>    

  	  </div><!-- /.row -->
  	  
    </div><!-- /.container -->
  </div><!-- /.section -->
  
  <div id="gestion_y_comunicacion" class="scrollspy section">
	  <div class="container">
		  <div class="row">
			  <div class="col m12 center">
				  <img src="<?php bloginfo('template_url'); ?>/assets/img/gestion_y_comunicacion.png" width="800" class="responsive-img"/>
			  </div>
		  </div><!-- /.row -->
		  
		  <div class="row">
<?php  
	$args = array(
		'post_type' => 'gestioncomunicacion'
	);
	$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>			  
			  <div class="col m4 center">
				  <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_la_makinita.png" class="responsive-img" width="220"/>
				  <div class="textos">
					  <h6><?php the_title(); ?></h6>
					  <?php the_content(); ?>
					  <a href="<?php echo get('url_link'); ?>" target="_blank"><?php echo get('url_texto'); ?></a>
					</div><!-- /.textos -->
			  </div><!-- /.col -->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>    
		  </div><!-- /.row -->
		  
	  </div><!-- /.container -->
  </div><!-- /.section -->
  
 
 <?php get_footer(); ?>