		<!-- Page Title

		============================================= -->

    <?php
      foreach($db_producto as $fila)
        {
    ?>
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/c1.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">
			<div class="container clearfix">
				<h1><?=$fila->nombre?></h1>
				<span><?=$fila->desccorta?></span>
			</div>
		</section><!-- #page-title end -->
		<!-- Content
     	============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="nobottommargin">
					<article>
						<div class="fancy-title title-bottom-border">
							<h3><?=$fila->id?>- <?=$fila->nombre?></h3>
						</div>
                        <div class="divider divider-short"><i class="icon-star3"></i></div>
						<p><?php echo nl2br($fila->texto);  ?></p>
						<div class="divider divider-short"><i class="icon-star3"></i></div>
					</article>

              

					<?php 
					/*
                           $cade = base_url()."assets/img/banner/".$fila->id.".jpg";
                             if (file_exists("./assets/img/banner/".$fila->id.".jpg")) 
                               {
                                 echo "<img src='http://www.paramentodesign.cl/assets/img/banner/28.jpg' />";
                               }
                             else{
                             	 echo "<img src='http://www.paramentodesign.cl/assets/img/banner/0.jpg' />";
                             } 
                      */        
                         ?>
 <div class="divider divider-short"><i class="icon-star3"></i></div>

 

											<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="clearfix">
						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
							<a href="portfolio-single.html">
									<img src="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b1.jpg" alt="producto">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								</div>
							</div>
						</article>


						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b2.jpg" alt="Locked Steel Gate">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b2.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								</div>
							</div>
						</article>



						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b3.jpg" alt="Locked Steel Gate">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b3.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								</div>
							</div>
						</article>



						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b4.jpg" alt="Locked Steel Gate">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b4.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								</div>
							</div>
						</article>



						<article class="portfolio-item pf-uielements pf-media">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b5.jpg" alt="Console Activity">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b5.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								</div>
							</div>
						</article>



						<article class="portfolio-item pf-uielements pf-media">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b6.jpg" alt="Console Activity">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b6.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								</div>
							</div>
						</article>



						<article class="portfolio-item pf-graphics">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b7.jpg" alt="Sunset Bulb Glow">
								</a>
         							<div class="portfolio-overlay">
									<a href="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b7.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								</div>
							</div>
						</article>



						<article class="portfolio-item pf-graphics">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b8.jpg" alt="Sunset Bulb Glow">
								</a>
								<div class="portfolio-overlay">
									<a href="<?php echo base_url();?>assets/img/producto/<?=$fila->id?>/b8.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								</div>
							</div>
						</article>
					</div><!-- #portfolio end -->



				<div class="divider divider-short"><i class="icon-star3"></i></div>  

<?php 


$cade = "./assets/img/pdf/".$fila->id;
if (file_exists($cade)) 
{
  $directorio = opendir($cade); //ruta actual



echo "<div class='accordion accordion-bg clearfix'>
							<div class='acctitle'><i class='acc-closed icon-ok-circle'></i><i class='acc-open icon-remove-circle'></i>Descargas</div>
                               <br>
                                <ul class='milista123'>";
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (!is_dir($archivo))//verificamos si es o no un directorio
    {
       $archivo_mod  = str_replace("_"," ", $archivo);
       $archivo_mod  = str_replace(".pdf","", $archivo_mod);
       echo "<a href='".base_url()."assets/img/pdf/".$fila->id."/".$archivo."'><li><img class='dlogo' src='".base_url()."assets/img/download.png' >".$archivo_mod."</li></a>";
    }
}

echo "</ul>                             
       </div>
         <div class='divider divider-short'><i class='icon-star3'></i></div>";

         }
         
 
         ?>



<?php 
$cade = "./assets/img/dwg/".$fila->id;
if (file_exists($cade)) 
{
  $directorio = opendir($cade); //ruta actual



echo "<div class='accordion accordion-bg clearfix'>
							<div class='acctitle'><i class='acc-closed icon-ok-circle'></i><i class='acc-open icon-remove-circle'></i>Planos en Autocad (*.dwg)</div>
                               <br>
                                <ul class='milista123'>";
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (!is_dir($archivo))//verificamos si es o no un directorio
    {
       $archivo_mod  = str_replace("_"," ", $archivo);
       $archivo_mod  = str_replace(".dwg","", $archivo_mod);
       echo "<a href='".base_url()."assets/img/dwg/".$fila->id."/".$archivo."'><li><img class='dlogo' src='".base_url()."assets/img/download2.png' >".$archivo_mod."</li></a>";
    }
}

echo "</ul>                             
       </div>
         <div class='divider divider-short'><i class='icon-star3'></i></div>";

         }
         
         ?>

						

                        

						<?php 

						  if( $fila->caracteristicas !="" ) 

						  {

                            echo "<div class='accordion accordion-bg clearfix'>

							<div class='acctitle'><i class='acc-closed icon-ok-circle'></i><i class='acc-open icon-remove-circle'></i>Caracteristicas</div>

							<div class='acc_content clearfix'>

								<ul class='iconlist iconlist-color nobottommargin'>

									";

								  echo damelista($fila->caracteristicas);

								echo "</ul>

							</div>

						</div>

                          ";

						  echo "<div class='divider divider-short'><i class='icon-star3'></i></div>"; 

						  }

						  ?>



						



						<?php 

						  if( $fila->aplicaciones !="" ) 

						  {

                            echo "<div class='accordion accordion-bg clearfix'>

							<div class='acctitle'><i class='acc-closed icon-ok-circle'></i><i class='acc-open icon-remove-circle'></i>Aplicaciones</div>

							<div class='acc_content clearfix'>

								<ul class='iconlist iconlist-color nobottommargin'>

									";

								echo damelista($fila->aplicaciones);

								echo "</ul>

							</div>

						</div>

                          ";

                          echo "<div class='divider divider-short'><i class='icon-star3'></i></div>"; 

						  

						  }?>





						 <?php 



						  if( $fila->recomendaciones !="" ) 

						  {

                            echo "<div class='accordion accordion-bg clearfix'>

							<div class='acctitle'><i class='acc-closed icon-ok-circle'></i><i class='acc-open icon-remove-circle'></i>Recomendaciones</div>

							<div class='acc_content clearfix'>

								<ul class='iconlist iconlist-color nobottommargin'>";

								echo damelista($fila->recomendaciones);

							echo "</ul>
							</div>
						</div>";

                          echo "<div class='divider divider-short'><i class='icon-star3'></i></div>"; 

						  }

if( $fila->video !="" ) 

{

echo "

<div class='accordion accordion-bg clearfix'>
<div class='acctitle'><i class='acc-closed icon-ok-circle'></i><i class='acc-open icon-remove-circle'></i>Videos</div>
</br>
  <div class='bs-example' data-example-id='responsive-embed-16by9-iframe-youtube'>
  <div class='embed-responsive embed-responsive-16by9'>
     <iframe class='embed-responsive-item' allowfullscreen='' src='//www.youtube.com/embed/".$fila->video."?rel=0'></iframe>
  </div>
</div>
</div>
</br>
 <div class='divider divider-short'><i class='icon-star3'></i></div>

";
}
						  ?>




						 <?php 
						  if( $fila->design !="" ) 
						  {
                             echo "<div class='accordion accordion-bg clearfix'>
						     <div class='acctitle'><i class='acc-closed icon-ok-circle'></i><i class='acc-open icon-remove-circle'></i>Diseños</div>";
						     echo "</div>";
						     echo "<div id='portfolio' class='clearfix'>";
                                crate_galery_design($fila->id,$fila->design);
                             echo "</div>";
				   	         echo "<div class='divider divider-short'><i class='icon-star3'></i></div>"; 
					      }				                      

					 ?>

                      

			



					</div><!-- #portfolio end -->


			    <?php 
						if( $fila->derechos !="" )
						 {
                           echo "<div class='alert alert-success' role='alert'>";
                           echo $fila->derechos;
                           echo "</div>";
			               echo "<div class='divider divider-short'><i class='icon-star3'></i></div>"; 
                           }
?>

						<!-- Content

		============================================= -->

		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="clear"></div>
					<!-- Portfolio Script ================ -->

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
		</section><!-- #content end -->
    <?php  }   ?>


						<div class="fancy-title title-bottom-border">
							<h3>Productos Relacionados</h3>
						</div>
	<div class="related-posts clearfix">
<?php
      
$var = 0;

      foreach($db_producto_familia as $fila1)
        {
    ?>



<?php 

    $fnombre  = str_replace(" ","-", $fila1->nombre);

    $link   = base_url()."producto/".$fnombre;

    $var = $var + 1;

   if($var%2!=0)

      {

            echo "

                <div class='col_half nobottommargin'>

								<div class='mpost clearfix'>

									<div class='entry-image'>

										<a href='".$link."'><img src='".base_url()."assets/img/producto/".$fila1->id."/b1.jpg' alt='Blog Single'></a>

									</div>

									<div class='entry-c'>

										<div class='entry-title'>

											<h4><a href='".$link."'>".$fila1->nombre."</a></h4>

										</div>

										<div class='entry-content'>".$fila1->desccorta."</div>

									</div>

								</div><br>

							</div>

            ";

      }



      else{

      	 echo "

                <div class='col_half nobottommargin col_last'>

								<div class='mpost clearfix'>

									<div class='entry-image'>

										<a href='".$link."'><img src='".base_url()."assets/img/producto/".$fila1->id."/b1.jpg' alt='Blog Single'></a>

									</div>

									<div class='entry-c'>

										<div class='entry-title'>

											<h4><a href='".$link."'>".$fila1->nombre."</a></h4>

										</div>

										<div class='entry-content'>".$fila1->desccorta."</div>

									</div>

								</div><br>

							</div>

            ";

      }



 ?>

      









							    <?php

            }

    ?>





						</div>







					</div>



			</div>



		</section><!-- #content end -->

