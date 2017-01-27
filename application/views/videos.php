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

      foreach($db_videos as $fila)

        {

    ?>

						<div class="entry clearfix">


							<div class="entry-image">
														<?php echo "
						<div class='bs-example' data-example-id='responsive-embed-16by9-iframe-youtube'>
  <div class='embed-responsive embed-responsive-16by9'>
     <iframe class='embed-responsive-item' allowfullscreen='' src='//www.youtube.com/embed/".$fila->codigo."?rel=0'></iframe>
  </div>
</div>

"; 
?>
							</div>
							

							<div class="entry-title">
								<h2><strong><?=$fila->id?>-</strong><?=$fila->titulo?></h2>
							</div>
							<div class="entry-content">
								<p><?=$fila->texto?></p>
								<a href="<?php echo "https://www.youtube.com/watch?v=".$fila->codigo?>"class="more-link">Youtube</a>
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