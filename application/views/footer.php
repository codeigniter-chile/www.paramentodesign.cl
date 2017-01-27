<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><footer id="footer" class="dark" style="color:#ccc;">



			<div class="container">



				<!-- Footer Widgets

				============================================= -->

				<div class="footer-widgets-wrap clearfix">



					<div class="col_two_third">



						<div class="col_one_third">



							<div class="widget clearfix">
							<h4>DONDE ESTAMOS</h4>



								<!-- <img src="<?php echo base_url();?>assets/img/logopd.png" alt="" class="footer-logo"> -->

								<div style="background: url('<?php echo base_url();?>assets/images/world-map.png') no-repeat center center; background-size: 100%;">

<!-- <img src="<?php echo base_url();?>assets/img/logopd.png" alt="" class="footer-logo"> -->

	                     <address>

							<strong>Dirección de Oficina:</strong><br>

							<?php echo ADR ?>
							<p><a class="link-map" target="_blank" href="https://www.google.es/maps/place/del+Parque+5339,+Huechuraba,+Regi%C3%B3n+Metropolitana,+Chile/@-33.3865249,-70.616663,17z/data=!3m1!4b1!4m5!3m4!1s0x9662c8af5c4870b1:0x9266a12eabba9ba!8m2!3d-33.3865249!4d-70.6144743"><i class="icon-map"></i> GoogleMap</a></p>
							Horario: 8:30am - 6:30pm
						</address>

						<address>
							<strong>Dirección de Almacén:</strong><br>
							<?php echo ADR2 ?>
							<p><a class="link-map" target="_blank" href="https://www.google.es/maps/place/F%C3%A1cil+Bodegas+-+Arriendo+de+Mini+Bodegas+en+Santiago/@-33.374195,-70.6498907,17z/data=!3m1!4b1!4m5!3m4!1s0x9662c6474b1655b1:0x353b473091598012!8m2!3d-33.374195!4d-70.647702"><i class="icon-map"></i> GoogleMap</a></p>

						</address>

						<style>
                            .link-map{
                            	color: yellow;
                            }
						</style>

<!--
                        <div class="fb-like my-facebook" data-href="https://www.facebook.com/paramentodesign/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

        -->                


								</div>



							</div>

				

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">

									<a href="https://www.facebook.com/paramentodesign" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">

										<i class="icon-facebook"></i>

										<i class="icon-facebook"></i>

									</a>

									 <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like</small></a> 



								</div>

							</div>

						</div>

	





						</div>



						<div class="col_one_third">
							<div class="widget widget_links clearfix">
								<h4>Mapa del Sitio</h4>
								<ul>
									<li><a href="<?php echo base_url();?>">Inicio</a></li>
									<li><a href="<?php echo base_url();?>todos-los-productos">Todos los Productos</a></li>
									<li><a href="<?php echo base_url();?>galeria">Galería</a></li>
									<li><a href="<?php echo base_url();?>preguntas">Preguntas Frecuentes</a></li>
									<li><a href="<?php echo base_url();?>representaciones">Representaciones</a></li>
									<li><a href="<?php echo base_url();?>blog">Blog</a></li>
									<li><a href="<?php echo base_url();?>contacto">Contacto</a></li>
									<li><a href="<?php echo base_url();?>tienda">Tienda</a></li>
								</ul>
							</div>
									<br>
									<abbr title="Número de teléfono"><strong>Teléfono:</strong></abbr> <?php echo PHONE ?><br>
									<abbr title="Número de whatsapp"><strong>whatsapp:</strong></abbr> +56 9 4473 2614<br>
									<!-- <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br> -->
									<abbr title="Dirección de Correo"><strong>@:</strong></abbr> <a href="mailto:<?php echo MAIL ?>"><?php echo MAIL?></a>


						</div>


						<div class="col_one_third col_last">
							<div class="widget clearfix">
								<h4>Nuestros Sitios</h4>
								<ul>
									<li><a href="http://www.policarbonatoantibalistico.cl" target="_blank">www.policarbonatoantibalistico.cl</a></li>
									<li><a href="http://www.barrerasacusticas.cl" target="_blank">www.barrerasacusticas.cl</a></li>
									<li><a href="http://www.laminaspvc.cl" target="_blank">www.laminaspvc.cl</a></li>
									<li><a href="http://www.policarbonatoalveolar.cl" target="_blank">www.policarbonatoalveolar.cl</a></li>
								</ul>
								<img src="<?php echo base_url();?>assets/img/redcompra.fw_.png" alt="" class="footer-logo">
							</div>
						</div>



				</div>
					<div class="col_one_third col_last">





						<div class="widget subscribe-widget clearfix">

							<h4>Contactar/Cotizar</h4>

							



							<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>

		

				

					 <form id="widget-subscribe-form" role="form" method="post" enctype="plain" class="nobottommargin contacto">

								<div class="input-group divcenter">

									<span class="input-group-addon"><i class="icon-user"></i></span>

									<input type="text" id="widget-subscribe-form-name" name="widget-subscribe-form-name" class="nombre form-control required" placeholder="Nombre">

								</div>

                                 <br>

								<div class="input-group divcenter">

									<span class="input-group-addon"><i class="icon-email"></i></span>

									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="email form-control required" placeholder="Correo">

								</div>

								<br>

								<div class="input-group divcenter">

									<span class="input-group-addon"><i class="icon-phone"></i></span>

									<input type="text" id="widget-subscribe-form-name" name="widget-subscribe-form-name" class="form-control required telefono" placeholder="Teléfono">

								</div>

								<br>

								<div class="input-group divcenter">

									<span class="input-group-addon"><i class="icon-email2"></i></span>

									<input type="text" id="widget-subscribe-form-name" name="widget-subscribe-form-name" class="como form-control required" placeholder="Como nos conocio..Google,Facebook,Otro">

								</div>

								<br>

								<div class="input-group divcenter">

									<span class="input-group-addon"><i class="icon-file"></i></span>

									<textarea name="" id="" cols="30" rows="3" class="mensaje form-control required" placeholder="Comentario"></textarea>		

									

								</div>

								<br>

          <div class="ultimo">

            <img src="<?php echo base_url();?>assets/img/ajax.gif" class="ajaxgif hide" />

                <div class="msg"></div>

                <br>

          </div>





							<div class="col_full">

								<button class="button button-3d nomargin boton_envio" type="submit" id="template-contactform-submit" name="template-contactform-submit">Enviar Mensaje</button>

							</div>

							</form>

						</div>

					</div>



				</div><!-- .footer-widgets-wrap end -->



			</div>



			<!-- Copyrights

			============================================= -->

			<div id="copyrights">



				<div class="container clearfix">



					<div class="col_half">

						Copyrights &copy; 2016 Todos los derechos reservados.<br>

						Preguntar por el stock del producto que necesites<br>

						<!--<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->

					</div>



					<div class="col_half col_last tright">

						

						<div class="fright clearfix">

							<a href="https://www.facebook.com/paramentodesign" class="social-icon si-small si-borderless si-facebook">

								<i class="icon-facebook"></i>

								<i class="icon-facebook"></i>

							</a>

						</div>

                       

						<div class="clear"></div>



						<a href="mailto:<?php echo MAIL ?>"><i class="icon-envelope2"></i> <?php echo MAIL ?></a>  <span class="middot">&middot;</span> <i class="icon-headphones"></i> <?php echo PHONE ?> <span class="middot">&middot;</span> <i class="icon-skype2"></i> yennymeersohn

					</div>



				</div>



			</div><!-- #copyrights end -->



		</footer><!-- #footer end -->



	</div><!-- #wrapper end -->



	<!-- Go To Top

	============================================= -->

	<div id="gotoTop" class="icon-angle-up"></div>



	<!-- Footer Scripts

	============================================= -->

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/functions.js"></script>

   <script>

    

   



  $("#template-contactform-submit").click(function() {



    	

        var nombre = $(".nombre").val();

            email = $(".email").val();

            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

            telefono = $(".telefono").val();

            mensaje = $(".mensaje").val();

            como = $(".como").val();

            pagina = "<?php echo current_url(); ?>";

            dest = "<?php echo MAIL ?>";





if (nombre == "") {

            $(".nombre").focus();

            return false;

        }else if(email == "" || !validacion_email.test(email)){        	

            $(".email").focus();    

            return false;

        }else if(telefono == ""){

            $(".telefono").focus();

            return false;

        }else if(como == ""){

            $(".como").focus();

            return false;

        }else if(mensaje == ""){

            $(".mensaje").focus();

            return false;

        }else{

            $(".boton_envio").attr('disabled','-1');

            $('.ajaxgif').removeClass('hide');

            var datos = 'nombre='+ nombre + '&email=' + email + '&telefono=' + telefono + '&mensaje=' + mensaje + '&como=' + como + '&dest=' + dest + '&pagina=' + pagina;

            $.ajax({

                type: "POST",

                url: "<?=base_url("Contacto/enviar")?>",

                data: datos,

                success: function() {

                    $('.ajaxgif').hide();

                    $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);

                

                },

                error: function() {

                    $('.ajaxgif').hide();

                    $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);

                     $('#my_boton').removeAttr('disabled');                   

                }

            });

            return false;

        }

 

    });



	</script>



</body>

</html>







