<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><section id="page-title">



			<div class="container clearfix">

				<h1>Contacto</h1>

				<span>Para cualquier proyecto siempre estamos a tu lado</span>

			</div>



		</section><!-- #page-title end -->



		<!-- Google Map

		============================================= -->

		<section id="google-map" class="gmap slider-parallax"></section>



		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.gmap.js"></script>



		<script type="text/javascript">



			$('#google-map').gMap({



				address: 'del Parque 5339, Huechuraba',

				maptype: 'ROADMAP',

				zoom: 14,

				markers: [

					{

						address: "Av del Parque 5339, Huechuraba, Región Metropolitana, Chile",

						html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hola, somos <span>ParamentoDesign</span></h4><p class="nobottommargin">Nuestra misión es ayudarte a encontrar el sistema ideal para tu proyecto.</p></div>',

						icon: {

							image: "<?php echo base_url();?>assets/images/icons/map-icon-red.png",

							iconsize: [32, 39],

							iconanchor: [13,39]

						}

					}

				],

				doubleclickzoom: false,

				controls: {

					panControl: true,

					zoomControl: true,

					mapTypeControl: true,

					scaleControl: false,

					streetViewControl: false,

					overviewMapControl: false

				}



			});



		</script><!-- Google Map End -->



		<!-- Content

		============================================= -->

		<section id="content">



			<div class="content-wrap">



				<div class="container clearfix">



					<!-- Postcontent

					============================================= -->

					<div class="postcontent nobottommargin">



						<h3>Formulario de contacto</h3>



						<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>



						<form class="nobottommargin" role="form" id="template-contactform" name="template-contactform"  method="post">

							<div class="form-process"></div>



							<div class="col_one_third">

								<label for="template-contactform-name">Nombre <small>*</small></label>

								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="nombre1 sm-form-control required" />

							</div>



							<div class="col_one_third">

								<label for="template-contactform-email">Email <small>*</small></label>

								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="email1 required sm-form-control" />

							</div>



							<div class="col_one_third col_last">

								<label for="template-contactform-phone">Teléfono</label>

								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="telefono1 sm-form-control required" />

							</div>



							<div class="clear"></div>



							<div class="col_two_third">

								<label for="template-contactform-subject">Asunto <small>*</small></label>

								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="asunto1 required sm-form-control" />

							</div>



							<div class="col_one_third col_last">

								<label for="template-contactform-service">¿Cómo nos conoció?</label>

								<select id="template-contactform-service" name="template-contactform-service" class="como1 required sm-form-control">

									<option value="">-- Selecionar uno --</option>

									<option value="Google">Google</option>

									<option value="Facebook">Facebook</option>

									<option value="Linkedin">Linkedin</option>

									<option value="Revista">Revista</option>

									<option value="Amigo">Amigo</option>

									<option value="Otro">Otro</option>

								</select>

							</div>



							<div class="clear"></div>



							<div class="col_full">

								<label for="template-contactform-message">Mensaje <small>*</small></label>

								<textarea class="mensaje1 required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>

							</div>



							<div class="col_full hidden">

								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />

							</div>



                              

         <br>

          <div class="ultimo">

            <img src="<?php echo base_url();?>assets/img/ajax.gif" class="ajaxgif1 hide" />

                <div class="msg1"></div>

                <br>

          </div>





							<div class="col_full">

								<button class="button button-3d nomargin boton_envio1" type="submit" id="template-contactform-submit-2" name="template-contactform-submit" value="submit">Enviar Mensaje</button>

							</div>



						</form>





						</form>





						 <script>

     

  $("#template-contactform-submit-2").click(function() {

    	

        var nombre1 = $(".nombre1").val();

            email1 = $(".email1").val();

            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

            telefono1 = $(".telefono1").val();

            mensaje1 = $(".mensaje1").val();

            como1 = $(".como1").val();

            asunto1 = $(".asunto1").val();

            pagina1 = "<?php echo current_url(); ?>";

            dest1 = "<?php echo MAIL ?>";







if (nombre1 == "") 

       {

            $(".nombre1").focus();

            return false;

        }else if(email1 == "" || !validacion_email.test(email1)){        	

            $(".email1").focus();    

            return false;

        }else if(telefono1 == ""){

            $(".telefono1").focus();

            return false;

        }else if(asunto1 == ""){

            $(".asunto1").focus();

            return false;

        }else if(como1 == ""){

            $(".como1").focus();

            return false;

        }else if(mensaje1 == ""){

            $(".mensaje1").focus();

            return false;

        }else{

            $(".boton_envio1").attr('disabled','-1');

            $('.ajaxgif1').removeClass('hide');

             mensaje1 = asunto1 + mensaje1;

            var datos = 'nombre='+ nombre1 + '&email=' + email1 + '&telefono=' + telefono1 + '&mensaje=' + mensaje1 + '&como=' + como1 + '&dest=' + dest1 + '&pagina=' + pagina1;

            $.ajax({

                type: "POST",

                url: "<?=base_url("Contacto/enviar")?>",

                data: datos,

                success: function() {

                    $('.ajaxgif1').hide();

                    $('.msg1').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);

                  

                },

                error: function() {

                    $('.ajaxgif1').hide();

                    $('.msg1').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);

                     $('#my_boton').removeAttr('disabled');                   

                }

            });

            return false;

        }

 

    });



	</script>

				</div><!-- .postcontent end -->

					<!-- Sidebar

					============================================= -->

					<div class="sidebar col_last nobottommargin">

						<address>
							<strong>Dirección de Oficina:</strong><br>
							<?php echo ADR ?>
						</address><hr>

						<address>
							<strong>Dirección de Almacén:</strong><br>
							<?php echo ADR2 ?>
						</address><hr>


						<address>
							<strong>Horario:</strong><br>
							8:30am - 6:30pm
						</address><hr>

						<abbr title="Número Empresa"><strong>Teléfono:</strong></abbr> <?php echo PHONE ?><br>

						<abbr title="Correo de contacto"><strong>Email:</strong></abbr> <?php echo MAIL ?>

						
                        <hr>

						<div>
							<strong>Yenny Meersohn</strong>
							Gerente General
							ymeersohn@paramentodesign.com
						</div>

						<hr>

						<div>
							<strong>Marlon Falcón</strong>
							Gerente Desarrollo
							mfalcon@paramentodesign.com
						</div>


						<!--

						<div class="widget noborder notoppadding">



							<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="falconsoft.4d" data-count="3" data-animation="slide" data-arrows="false">

								<i class="i-plain i-small color icon-twitter nobottommargin" style="margin-right: 15px;"></i>

								<div class="flexslider" style="width: auto;">

									<div class="slider-wrap">

										<div class="slide"></div>

									</div>

								</div>

							</div>



						</div>

					    



						<div class="widget noborder notoppadding">



							<a href="#" class="social-icon si-small si-dark si-facebook">

								<i class="icon-facebook"></i>

								<i class="icon-facebook"></i>

							</a>



							<a href="#" class="social-icon si-small si-dark si-twitter">

								<i class="icon-twitter"></i>

								<i class="icon-twitter"></i>

							</a>



						</div>



						-->



					</div><!-- .sidebar end -->



				</div>



			</div>



		</section><!-- #content end -->

