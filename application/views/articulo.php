		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="postcontent nobottommargin clearfix">
						<div class="single-post nobottommargin">
							<div class="entry clearfix">
 <?php

      foreach($db_articulo as $fila)

        {

    ?>


								<div class="entry-title">

									<h2><?=$fila->titulo?></h2>

								</div><!-- .entry-title end -->


								<ul class="entry-meta clearfix">

									<li><i class="icon-calendar3"></i><?=$fila->fecha?></li>

									<li><a href="#"><i class="icon-user"></i><?=$fila->autor?></a></li>

									<li><i class="icon-folder-open"></i> <a href="#"><?=$fila->categoria?></a></li>

							</ul><!-- .entry-meta end -->

								<div class="entry-image">

									<a href="#"><img src="<?php echo base_url();?>assets/img/blog/<?=$fila->id?>.jpg" alt="Blog Single"></a>

								</div><!-- .entry-image end -->

								<div class="entry-content notopmargin">

<p>
	<?=nl2br($fila->texto)?>
</p>



								</div>

							</div><!-- .entry end -->

							<div id="comments" class="clearfix">

 <?php
   echo $db_comentario;
   $titulo = str_replace(" ","-", $fila->titulo);
  ?>

								<div class="clear"></div>

								<div id="respond" class="clearfix">



									<h3>Dejar un <span>Comentario</span></h3>

                          

									<form class="clearfix" action="<?php echo base_url();?>articulo/crear/<?=$titulo?>" method="post" id="commentform">

                                      <input type="text" name="id"  value="<?=$fila->id?>" style="display:none;" />
										<div class="col_one_third">
											<label for="author">Nombre</label>                                           
											<input type="text" name="nombre" id="author" value="" size="22" tabindex="1" class="sm-form-control" required />
										</div>



										<div class="col_one_third">

											<label for="email">Correo</label>

											<input type="email" name="mail" id="mail" value="" size="22" tabindex="2" class="sm-form-control" required />

										</div>



										<div class="col_one_third col_last">

											<label for="url">Teléfono</label>

											<input type="text" name="telefono" id="url" value="" size="22" tabindex="3" class="sm-form-control" required />

										</div>



										<div class="clear"></div>



										<div class="col_full">

											<label for="comment">Comentario</label>

											<textarea name="desc" cols="58" rows="7" tabindex="4" class="sm-form-control" required></textarea>

										</div>



										<div class="col_full nobottommargin">

											<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Enviar Comentario</button>

										</div>


										<?php

		?>

    <?php

            }

    ?>

									</form>
								</div><!-- #respond end -->
							</div><!-- #comments end -->
						</div>
					</div><!-- .postcontent end -->

					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">
							<div class="widget clearfix">
								<div class="tabs nobottommargin clearfix" id="sidebar-tabs">
									<ul class="tab-nav clearfix">
									    <li><a href="#tabs-1">PLÁSTICOS</a></li>
										<li><a href="#tabs-2">METAL</a></li>
									</ul>
									<div class="tab-container">
										<div class="tab-content clearfix" id="tabs-1">
											<div id="popular-post-list-sidebar">                                              
                                                 <?php echo $db_plastico ?>														
              								</div>
										</div>

										<div class="tab-content clearfix" id="tabs-2">
											<div id="recent-post-list-sidebar">
												<?php echo $db_acero ?>	
											</div>
										</div>			
									</div>
								</div>
							</div>
						</div>
					</div><!-- .sidebar end -->
				</div>
			</div>
	</section><!-- #content end -->

