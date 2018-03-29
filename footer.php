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
  <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/materialize.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/init.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.easing.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/owlcarousel/owl.carousel.js"></script>
  
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
	<?php wp_footer(); ?>
  </body>
</html>
