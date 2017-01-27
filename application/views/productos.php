			<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo base_url();?>assets/img/productos/<?=$id ?>.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">
			<div class="container clearfix">
				<h1><?=$titulo ?></h1>
				<span><?=$desc ?></span>
			</div>

		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<style>
		   .img-boton img:hover {
               opacity: 0.8;

               -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=30, Direction=180, Color=#333333)";/*IE 8*/
-moz-box-shadow: 0px 3px 30px #333333;/*FF 3.5+*/
-webkit-box-shadow: 0px 3px 30px #333333;/*Saf3-4, Chrome, iOS 4.0.2-4.2, Android 2.3+*/
box-shadow: 0px 3px 30px #333333;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
filter: progid:DXImageTransform.Microsoft.Shadow(Strength=30, Direction=180, Color=#333333); /*IE 5.5-7*/


		   }
		</style>
		
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<p><?=$texto ?></p>
					<div class="divider divider-short"><i class="icon-star3"></i></div>
					<a class="img-boton" href="<?php echo base_url();?>/tienda"><img src="<?php echo base_url();?>assets/tienda/tienda-online.jpg" alt=""></a>
					<div class="divider divider-short"><i class="icon-star3"></i></div>
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
	</section><!-- productocontent end -->

