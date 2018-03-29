<?php get_header(); ?>

<?php include('include-search.php'); ?>
	
	<div class="container caja_blanca">
		<div class="section">
			<div class="row">
				<div class="col m12 s12">
					<div id="owl-demo" class="owl-carousel">
				        <?php $imagenes = muestra_galeria(); ?>
						<?php foreach ($imagenes as $imagen): ?>
						<div class="item banner_item">
						  <img src="<?php echo wp_get_attachment_url($imagen->ID); ?>" class="responsive-img"/><!-- proporción 1600x600 -->
						</div><!-- /.banner_item -->
						<?php endforeach ?>		
	        		</div><!-- /owl-demo -->
				</div><!-- /.col -->
			</div><!-- ./row -->
			<div class="row">
				<div class="col m12 s12">
					<div class="post_noticia_interior">
						<h6><?php echo get_the_date(); ?></h6>
						<h5><?php the_title(); ?></h5>
<!-- 						<p>Etiquetas: <i><a href="" target="_self">La Quilla</a>, <a href="" target="_self">Microtransmisora</a></i></p> -->
						<?php
							echo get_the_tag_list('<p>Etiquetas: <i>',', ','</i></p>');
						?>						
						<?php the_content(); ?>
					</div><!-- /.post_noticia_interior -->
				</div><!-- /.col -->
			</div><!-- /.row -->		
		</div><!-- /.section -->
	</div><!-- /.container -->

	<div class="parallax-container valign-wrapper">
		<div class="section no-pad">
	    	<div class="container valign">
	        	<h1 class="titulos_blancos"></h1>
	    	</div>
	    </div>
	<div class="parallax"><img src="<?php bloginfo('template_url'); ?>/assets/img/background_microtransmisora.jpg" alt="La Quilla"></div>
</div><!-- /parallax-container -->   
  
<?php get_footer(); ?>