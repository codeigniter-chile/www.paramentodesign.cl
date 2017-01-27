<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {


 function __construct() {
   parent::__construct();
 }


	public function index()
	{
		$this->load->model('Global_model');
		$data['menu'] = $this->Global_model->DibujarMenu();
	    $data['db_familia'] = $this->Global_model->ListarFamilia();
	    $data['db_familia_1'] = $this->Global_model->ListarProductosFamilia('1');


        $this->load->view('header',$data);
		$this->load->view('productos');
		$this->load->view('footer');
	}


	public function listar($nombre)
	{
		$this->load->helper('url');
	    $this->load->model('Producto_model');
	    
	    $id= $this->Producto_model->DameidporNombrePadre($nombre);

	    // Datos para el producto
	    $data['id'] = $id;
	    $data['titulo'] = $this->Producto_model->DameCampoNombreFamilia($id);
	    $data['desc'] = $this->Producto_model->DameCampoDescFamilia($id);
        $data['texto'] = $this->Producto_model->DameCampoTextoFamilia($id);
        

	    $data['db_producto_familia'] = $this->Producto_model->ListarProductoFamiliaok($id);
	    
	    if (empty($data['db_producto_familia']))
            {
              show_404();
             }

	    $this->load->model('Global_model');
	    $data['menu'] = $this->Global_model->DibujarMenu();

	    $this->load->view('header',$data);
		$this->load->view('productos',$data);
		$this->load->view('footer');
	}



}
