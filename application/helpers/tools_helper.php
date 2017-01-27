<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//si no existe la función la creamos
if(!function_exists(''))
{
    //funcion para crear galeria de diseños
	function crate_galery_design($id,$design)
	{
 		       
               $valores_encadenados = $design;
               $valor_array = explode(',',$valores_encadenados);

               foreach($valor_array as $llave => $valores) 
                 { 
                   echo "<article class='portfolio-item Item21 pf-media pf-icons'>
							<div class='portfolio-image'>
							  <img src='".base_url()."assets/img/design/".$id."/".$valores.".jpg' alt='producto'>
								<div class='portfolio-overlay'>
									<a href='".base_url()."assets/img/design/".$id."/".$valores.".jpg' class='center-icon' data-lightbox='image'><i class='icon-line-plus'></i></a>
								</div>								
							</div>
							<spam>CODIGO:P00</spam>".$id.$valores."
						</article>";
                 }




	}
}