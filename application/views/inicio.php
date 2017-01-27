		<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('<?php echo base_url();?>assets/img/slider/01.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp"><?php echo TEXT_SLIDER1 ?></h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo TEXT_SLIDER11 ?></p>
								<p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo PHONE ?></p>
							</div>
						</div>
					</div>

					<div class="swiper-slide dark" style="background-image: url('<?php echo base_url();?>assets/img/slider/02.jpg');">

						<div class="container clearfix">

							<div class="slider-caption slider-caption-center">

								<h2 data-caption-animate="fadeInUp"><?php echo TEXT_SLIDER2 ?></h2>

								<p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo TEXT_SLIDER21 ?></p>
								<p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo MAIL ?></p>

							</div>

						</div>

					</div>



					<div class="swiper-slide dark" style="background-image: url('<?php echo base_url();?>assets/img/slider/03.jpg'); background-position: center top;">

						<div class="container clearfix">

							<div class="slider-caption slider-caption-center">

								<h2 data-caption-animate="fadeInUp"><?php echo TEXT_SLIDER3 ?></h2>

								<p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo TEXT_SLIDER31 ?></p>
								<p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo PHONE ?></p>


							</div>

						</div>

					</div>

				</div>

				<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>

				<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>

				<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>

			</div>



			<script>

				jQuery(document).ready(function($){

					var swiperSlider = new Swiper('.swiper-parent',{

						autoplay: 8000,

						loop: true,

						paginationClickable: false,

						slidesPerView: 1,

						grabCursor: true,

						onSwiperCreated: function(swiper){

							$('[data-caption-animate]').each(function(){

								var $toAnimateElement = $(this);

								var toAnimateDelay = $(this).attr('data-caption-delay');

								var toAnimateDelayTime = 0;

								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }

								if( !$toAnimateElement.hasClass('animated') ) {

									$toAnimateElement.addClass('not-animated');

									var elementAnimation = $toAnimateElement.attr('data-caption-animate');

									setTimeout(function() {

										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');

									}, toAnimateDelayTime);

								}

							});

							SEMICOLON.slider.swiperSliderMenu();

						},

						onSlideChangeStart: function(swiper){

							$('#slide-number-current').html(swiper.activeIndex + 1);

							$('[data-caption-animate]').each(function(){

								var $toAnimateElement = $(this);

								var elementAnimation = $toAnimateElement.attr('data-caption-animate');

								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');

							});

							SEMICOLON.slider.swiperSliderMenu();

						},

						onSlideChangeEnd: function(swiper){

							$('#slider .swiper-slide').each(function(){

								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }

							});

							$('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){

								if($(this).find('video').length > 0) {

									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;

								}

							});

							if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }



							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){

								var $toAnimateElement = $(this);

								var toAnimateDelay = $(this).attr('data-caption-delay');

								var toAnimateDelayTime = 0;

								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }

								if( !$toAnimateElement.hasClass('animated') ) {

									$toAnimateElement.addClass('not-animated');

									var elementAnimation = $toAnimateElement.attr('data-caption-animate');

									setTimeout(function() {

										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');

									}, toAnimateDelayTime);

								}

							});

						}

					});



					$('#slider-arrow-left').on('click', function(e){

						e.preventDefault();

						swiperSlider.swipePrev();

					});



					$('#slider-arrow-right').on('click', function(e){

						e.preventDefault();

						swiperSlider.swipeNext();

					});



					$('#slide-number-current').html(swiperSlider.activeIndex + 1);

					$('#slide-number-total').html(swiperSlider.slides.length);

				});

			</script>



		</section>



		<!-- Content

		============================================= -->

		<section id="content">



			<div class="content-wrap">



				<a target="_blank" href="<?php echo base_url();?>assets/pdf/Presentacion_Paramento_Design_2016.pdf" class="button button-full button-purple center tright header-stick bottommargin-lg">

					<div class="container clearfix">

						Paramento Design es una empresa Chilena <strong>Ver presentación...</strong> <i class="icon-caret-right" style="top:4px;"></i>

					</div>

				</a>



				<div class="container clearfix">



					<div class="heading-block center nobottomborder bottommargin-lg">

						<h1>Nuestro compromiso es tu satisfacción</h1>

						<span>Conozca nuestra <a href="tienda">TIENDA ONLINE</a> y cotiza tu producto</span>
															</div>



					<div class="col_one_third nobottommargin">



						<div class="heading-block fancy-title nobottomborder title-bottom-border">

							<h4>¿Por qué <span>Paramento Design?</span></h4>

						</div>



						<p><strong>Paramento Design</strong> es una empresa que ofrece sistemas arquitectónicos en policarbonato, acero, acrílico y pvc para crear proyectos sustentables, nos esforzamos para ayudarte en toda la etapa de tu proyecto.</p>



					</div>



					<div class="col_one_third nobottommargin">



						<div class="heading-block fancy-title nobottomborder title-bottom-border">

							<h4>¿Cómo <span>surge?</span></h4>

						</div>

 <p><strong>Paramento Design</strong> nace como idea después que un grupo de amigos trabajara varios años en la comercialización y desarrollo de productos, sintiendo la necesidad de llegar en forma directa al cliente para ofrecer una solución real basada en su experiencia. Solución que ponemos a tu disposición con un apoyo técnico y servicio de calidad.

</p>



					</div>



					<div class="col_one_third nobottommargin col_last">



						<div class="heading-block fancy-title nobottomborder title-bottom-border">

							<h4>¿Qué<span> Hacemos?</span></h4>

						</div>



						<p>Venta de productos, apoyo técnico, especificaciones de proyecto, desarrollo de productos, construcciones de obras y asesorías técnicas. </p>



					</div>



					<div class="clear"></div>





				</div>





				  

      <section id="productos" name="productos"></section>



				<div class="section nobottommargin">

					<div class="heading-block center nobottomborder bottommargin-lg">

						<h1>Soluciones que ofrecemos</h1>

					</div>



					<div class="container clearfix">



						<!-- Portfolio Filter

						============================================= -->

						<ul id="portfolio-filter" class="clearfix">



							<li class="activeFilter"><a href="#" data-filter="*">Mostrar Todos</a></li>

							<li><a href="#" data-filter=".pf-pl">Plásticos</a></li>

							<li><a href="#" data-filter=".pf-me">Metal</a></li>

							<li><a href="#" data-filter=".pf-ma">Madera</a></li>

							<li><a href="#" data-filter=".pf-ot">Otros</a></li>



						</ul><!-- #portfolio-filter end -->



						<div id="portfolio-shuffle">

							<i class="icon-random"></i>

						</div>



						<div class="clear"></div>



						

					<!-- Portfolio Items

						============================================= -->

						<div id="portfolio" class="portfolio-nomargin clearfix">



							<article class="portfolio-item pf-pl">
								<div class="portfolio-image">
									<a href="<?php echo base_url();?>productos/PoolDesign">
										<img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m1.jpg" alt="Open Imagination">
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo base_url();?>productos/PoolDesign">PoolDesign</a></h3>
									<span>Cubiertas para Piscina</span>
								</div>
							</article>

							<article class="portfolio-item pf-pl">
								<div class="portfolio-image">
									<a href="<?php echo base_url();?>productos/PoliDesign">
										<img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m2.jpg" alt="Locked Steel Gate">
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo base_url();?>productos/PoliDesign">PoliDesign</a></h3>
									<span><a href="<?php echo base_url();?>productos/PoliDesign">Policarbonato Alveolar, Sólido, Corrugado y Sistemas</a></span>
								</div>
							</article>



							<article class="portfolio-item pf-me">
								<div class="portfolio-image">
									<a href="<?php echo base_url();?>productos/AceroDesign">
										<img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m3.jpg" alt="Mac Sunglasses">
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo base_url();?>productos/AceroDesign">AceroDesign</a></h3>
									<span>Acero corten, acero perforado</span>
								</div>
							</article>



							<article class="portfolio-item pf-pl">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="<?php echo base_url();?>productos/AcrilDesign"><img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m4.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="<?php echo base_url();?>productos/AcrilDesign"><img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m5.jpg" alt="Shake It"></a></div>
 										   </div>
										</div>
									</div>									
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo base_url();?>productos/AcrilDesign">AcrilDesign</a></h3>
									<span>Láminas de Acrílico</span>
								</div>
							</article>



							<article class="portfolio-item pf-pl">
								<div class="portfolio-image">
									<a href="<?php echo base_url();?>productos/PETGDesign">
										<img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m6.jpg" alt="Backpack Contents">
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo base_url();?>productos/PETGDesign">PETGDesign</a></h3>
									<span>Láminas de PETG</span>
								</div>
							</article>



							<article class="portfolio-item pf-ma">

								<div class="portfolio-image">

									<a href="<?php echo base_url();?>productos/EcoDesign">

										<img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m7.jpg" alt="Sunset Bulb Glow">

									</a>
								</div>

								<div class="portfolio-desc">

									<h3><a href="<?php echo base_url();?>productos/EcoDesign">EcoDesign</a></h3>

									<span><a href="<?php echo base_url();?>productos/EcoDesign">Materiales ecológicos</a></span>

								</div>

							</article>



							<article class="portfolio-item pf-pl">

								<div class="portfolio-image">

									<div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">

										<div class="flexslider">

											<div class="slider-wrap">

												<div class="slide"><a href="<?php echo base_url();?>productos/PVCDesign"><img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m8.jpg" alt="Bridge Side"></a></div>

												<div class="slide"><a href="<?php echo base_url();?>productos/PVCDesign"><img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m9.jpg" alt="Bridge Side"></a></div>

		     								</div>

										</div>

									</div>

							</div>

								<div class="portfolio-desc">

									<h3><a href="<?php echo base_url();?>productos/PVCDesign">PVCDesign</a></h3>

									<span>Cubiertas de PVC con aislación</span>

								</div>

							</article>





							<article class="portfolio-item pf-pl pf-ot">

								<div class="portfolio-image">

									<div class="fslider" data-arrows="false" data-speed="700" data-pause="7000">

										<div class="flexslider">

											<div class="slider-wrap">

												<div class="slide"><a href="<?php echo base_url();?>productos/KitDesign"><img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m10.jpg" alt="Fixed Aperture"></a></div>

												<div class="slide"><a href="<?php echo base_url();?>productos/KitDesign"><img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m11.jpg" alt="Fixed Aperture"></a></div>

											</div>

										</div>

									</div>
								</div>

								<div class="portfolio-desc">

									<h3><a href="<?php echo base_url();?>productos/KitDesign">KitDesign</a></h3>

									<span><a href="<?php echo base_url();?>productos/KitDesign">Soluciones listas</a></span>

								</div>

							</article>





							<article class="portfolio-item pf-ma">

								<div class="portfolio-image">

									<a href="<?php echo base_url();?>productos/RevestimientoDesign">

										<img class="image_fade" src="<?php echo base_url();?>assets/img/galery/m12.jpg" alt="Sunset Bulb Glow">

									</a>

							</div>

								<div class="portfolio-desc">

									<h3><a href="<?php echo base_url();?>productos/RevestimientoDesign">RevestimientoDesign</a></h3>

									<span><a href="<?php echo base_url();?>productos/RevestimientoDesign">Revestimientos</a></span>

								</div>

							</article>





						</div><!-- #portfolio end -->



						<!-- Portfolio Script

						============================================= -->

						<script type="text/javascript">



							jQuery(window).load(function(){



								var $container = $('#portfolio');



								$container.isotope({ transitionDuration: '0.65s' });



								$('#portfolio-filter a').click(function(){

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



				<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel footer-stick" style="padding: 30px 0;">
					<div class="oc-item"><a href="producto/Cubierta-de-piscina-Piso-Piso-Fija"><img src="<?php echo base_url();?>assets/img/producto/1/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/Policarbonato-alveolar"><img src="<?php echo base_url();?>assets/img/producto/9/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/Policarbonato-compacto"><img src="<?php echo base_url();?>assets/img/producto/22/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/AcrilDesignFlo"><img src="<?php echo base_url();?>assets/img/producto/17/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/EcoRoof"><img src="<?php echo base_url();?>assets/img/producto/24/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/AceroDesign"><img src="<?php echo base_url();?>assets/img/producto/25/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/HDeck"><img src="<?php echo base_url();?>assets/img/producto/28/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/EcoWood"><img src="<?php echo base_url();?>assets/img/producto/27/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/Policarbonato-3DPanel"><img src="<?php echo base_url();?>assets/img/producto/33/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/Cubierta-de-piscina-Muro-Piso-Sin-Parabola-Telescopica"><img src="<?php echo base_url();?>assets/img/producto/6/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/Policarbonato-SystemPiu-Curvo"><img src="<?php echo base_url();?>assets/img/producto/12/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/Polidesign-Corrugado"><img src="<?php echo base_url();?>assets/img/producto/23/b1.jpg" alt="Obras"></a></div>
					<div class="oc-item"><a href="producto/Polidesign-Solido-Hard"><img src="<?php echo base_url();?>assets/img/producto/29/b1.jpg" alt="Obras"></a></div>
				</div>



				<script type="text/javascript">



					jQuery(document).ready(function($) {



						var ocClients = $("#oc-clients-full");



						ocClients.owlCarousel({

							margin: 30,

							loop: true,

							nav: false,

							autoplay: true,

							dots: false,

							autoplayHoverPause: true,

							responsive:{

								0:{ items:3 },

								600:{ items:4 },

								1000:{ items:5 },

								1200:{ items:6 },

								1400:{ items:7 }

							}

						});



					});



				</script>



			</div>



		</section><!-- #content end -->

