
		<!-- Content
		============================================= -->

		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div id="faqs" class="faqs">

						<h3>Cotiza tu producto:<strong>+56 2 3224 3876</strong></h3>
						<div class="divider"><i class="icon-circle"></i></div>

<div class="row text-center">


            <?php
            foreach($db_tienda as $tienda)
            {
              ?>

<?php
      echo " 
            <div class='col-md-3 col-sm-6 hero-feature'>
                <div class='thumbnail'>
                    
                    <img style='position:relative' src='".base_url()."assets/tienda/".$tienda->id.".jpg' alt=''>
                    <img src='".base_url()."assets/tienda/oferta.png' alt='' style='position:absolute; top:0; right:0;' >
                    <div class='caption'> 
                    	 <h3 class='precioarial'>$".$tienda->precio." <small>".$tienda->um."</small></h3>
                         <p>".$tienda->nombre." (SKU:".$tienda->codigo.")</p>
                        <p>
                            <a href='#' precio='".$tienda->precio."' descrip='".$tienda->nombre."' id='".$tienda->id."'  class='vinculo2 btn btn-primary' >Cotizar</a> <a href='".base_url()."producto/".$tienda->familia."' class='btn btn-default' target='_blank'>Ver Más</a>
                        </p>
                    </div>
                </div>
            </div> " ;

?>


            <?php
            }
            ?>


   
   </div>
        <!-- /.row -->


  <div class="divider"><i class="icon-circle"></i></div>

						<div class="col_half nobottommargin">

							<h4 id="faq-1"><strong>1.</strong> Condiciones </h4>
							<ul>
                  <li>No incluye transporte</li> 
                  <li>Precio con IVA incluido</li>
                  <li>Medio de pago transferencia o red compra</li> 
                  <li>Pongase en contacto con nosotros si lo quiere instalado</li>
                  <li>Consulte por otras dimensiones</li>    
              </ul>
							<div class="line"></div>				
						</div>

<!--
						<div class="col_half nobottommargin col_last">
							<h4 id="faq-7"><strong>2.</strong> ¿Que es Policarbonato?</h4>
							<p>El Policarbonato es un termoplástico con propiedades  muy interesantes en cuanto a resistencia al impacto, resistencia al calor y transparencia óptica, de tal forma que el material ha  penetrado fuertemente al mercado en una variedad de funciones.</p>
							<div class="line"></div>								
						</div>
-->

					</div>
				</div>
			</div>
		</section><!-- #content end -->



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cotizar producto</h4>
      </div>
      <div class="modal-body">


 <form class="form-horizontal" method="post" action="<?=base_url("tienda/enviar")?>">

 <input type="hidden" class="form-control" id="v0" >
 <input type="hidden" class="form-control" id="v0p" name="precio" >
 <input type="hidden" class="form-control" id="vdest" name="dest" >

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Producto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="v1" placeholder="PC" name="producto" readonly>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Cantidad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="v2" placeholder="1" value="1" required="required" name="cantidad">
    </div>
  </div>

  <hr>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="v3" name="nombre" placeholder="Nombre" value="" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Correo</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="v4" name="email" placeholder="Correo" value="" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Teléfono</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="v5" name="telefono" placeholder="Telefono" value="" required="required">
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Texto</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" id="v6" required="required" placeholder="Tienda" name="texto"></textarea>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Solicitar Cotización</button>
    </div>
  </div>

</form>



      </div>
    </div>
  </div>
</div>



<script>
  $(".vinculo2").click(function(e){
    e.preventDefault();
    
    a =  $(this).attr('id');
    $('#v0').val(a);



    b =  $(this).attr('descrip');

    $('#v1').val(b);


    c =  $(this).attr('precio');

    $('#v0p').val(c);


    
    $('#myModal').modal('show');


    // Temporal llenamos los campos
   // $('#v3').val('ejemplo');
   // $('#v4').val('falconsoft.4d@gmail.com');
   // $('#v5').val('56-9-4299 4534');

})
</script>


<?php

if(isset($_GET['msg']))
{
  $mensaje=$_GET['msg'];
  echo "<script>
  window.onload = function () {
  alert('Se envió la solicitud de cotización a un vendedor en breve se pondrán en contacto con usted')
   }
    </script>
    ";
}

?>
		