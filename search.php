<?php get_header(); ?>
	
<?php include('include-search.php'); ?>
	<div class="container caja_blanca">
		<div class="section">
			<div class="row">
				<div class="col s12">
					<p>Resultado de la búsqueda: <strong><?php echo $_GET['s']; ?></strong></p>
				</div>
<?php
	$i = 0;
if (have_posts()) :
	while (have_posts()) :
		the_post();
		$i++;
?>	
			<div class="col l4 m4 s12">
				<div class="post_noticia box_shadow">
					<a href="<?php the_permalink(); ?>" target="_self">
						<?php the_post_thumbnail('full', array('class' => 'responsive-img')); ?>
					</a><!-- 600x400 -->
					<div class="section">
						<h6><?php echo get_the_date(); ?></h6>
						<h5><a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a></h5> <!-- 100 bytes -->
						<?php the_excerpt(); ?> <!-- 100 bytes -->
					</div><!-- /.section -->
				</div><!-- /.post_noticia -->
			</div><!-- /.col -->
<?php
		if($i==3){ ?>
			<div class="clearfix"></div>
<?php		
		}
	endwhile;
endif;
?>				
			</div><!-- ./row -->
			
			
			<div>
				<?php if(function_exists('wp_paginate')){
					wp_paginate();
				}
				?> 				
			</div>
			
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