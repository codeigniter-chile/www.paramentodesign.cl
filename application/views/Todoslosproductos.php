		<!-- Page Title
		============================================= -->
		<!-- Content
		============================================= -->
<div class="stretched device-lg">
<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="sidebar clearfix">

						<!-- Demos Filter
						============================================= -->
						<ul class="demos-filter clearfix ulsinlink">
							  <?php echo $linkarticulos ?>						
						</ul><!-- #portfolio-filter end -->

					</div>

					<div class="postcontent nobottomborder col_last clearfix">
					<!-- Portfolio Items
					============================================= -->
						<div id="portfolio" class="portfolio-3 portfolio-masonry clearfix">
                            <?php echo $articulos ?>	

						</div><!-- #portfolio end -->

						<!-- Portfolio Script
						============================================= -->
						<script type="text/javascript">

							jQuery(window).load(function(){

								var $container = $('#portfolio');

								$container.isotope({ transitionDuration: '0.65s' });

								$('.demos-filter a').click(function(){
									$('#portfolio-filter li').removeClass('activeFilter');
									$(this).parent('li').addClass('activeFilter');
									var selector = $(this).attr('data-filter');
									$container.isotope({ filter: selector });
									return false;
								});

								$('#portfolio-shuffle').click(function(){
									$container.isotope('updateSortData').isotope({
										sortBy: 'random'
									});
								});

								$(window).resize(function() {
									$container.isotope('layout');
								});

							});

						</script><!-- Portfolio Script End -->
					</div>

				</div>

			</div>

		</section><!-- #content end -->

	</div>

