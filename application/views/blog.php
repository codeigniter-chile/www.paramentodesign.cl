		<!-- Page Title

		============================================= 

		<section id="page-title">



			<div class="container clearfix">

				<h1>Blog</h1>

				<span>Artículos</span>

			</div>



		</section><!-- #page-title end -->



		<!-- Content

		============================================= -->

		<section id="content">



			<div class="content-wrap">



				<div class="container clearfix">



					<!-- Posts

					============================================= -->

					<div id="posts" class="post-grid grid-2 clearfix">

 <?php

      foreach($db_articulos as $fila)

        {

    ?>

            <?php 
                $link  = str_replace(" ","-", $fila->titulo);
                $resume = substr($fila->texto, 0, 200);
                $resume .= "...";
            ?>

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo base_url();?>articulo/<?php echo $link?>" ><img class="image_fade" src="<?php echo base_url();?>assets/img/blog/<?=$fila->id?>.jpg"></a>
							</div>
							<div class="entry-title">
								<h2><a href="<?php echo base_url();?>articulo/<?php echo $link?>"><?=$fila->titulo?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> <?=$fila->fecha?></li>
								<li></i> <?=$fila->autor?></li>
							</ul>
							<div class="entry-content">
								<p><?=$resume?></p>
								<a href="<?php echo base_url();?>articulo/<?php echo $link?>"class="more-link">Leer más</a>
							</div>
						</div>


    <?php

            }

    ?>
	


						



					</div><!-- #posts end -->



					<!-- Pagination

					============================================= 

					<ul class="pager nomargin">

						<li class="previous"><a href="#">&larr; Older</a></li>

						<li class="next"><a href="#">Newer &rarr;</a></li>

					</ul><!-- .pager end -->



				</div>



			</div>



		</section><!-- #content end -->