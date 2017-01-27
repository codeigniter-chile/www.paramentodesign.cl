<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {


 function __construct() {
   parent::__construct();
 }


	public function index(	)
	{
	    // Datos para el producto
	    $data['titulo'] = 'Paramento Design';
	    $this->load->model('Producto_model');
	    $data['db_producto'] = $this->Producto_model->ListarProducto('1');
	    $data['db_producto_familia'] = $this->Producto_model->ListarProductoFamilia('1');
	    
	    if (empty($data['db_producto']))
            {
              show_404();
             }

	    $this->load->model('Global_model');
	    $data['db_familia'] = $this->Global_model->ListarFamilia();
	    $data['db_familia_1'] = $this->Global_model->ListarProductosFamilia('1');
	    $data['db_familia_2'] = $this->Global_model->ListarProductosFamilia('2'); 


	    $this->load->view('header',$data);
		$this->load->view('producto',$data);
		$this->load->view('footer');
	}


  public function listar($nombre)
	{
		$this->load->helper('url');

	    // Datos para el producto
	    $data['titulo'] = 'Paramento Design';
	    $this->load->model('Producto_model');
	    $id= $this->Producto_model->DameidporNombre($nombre);
	    $data['db_producto'] = $this->Producto_model->ListarProducto($id);
	    $data['db_producto_familia'] = $this->Producto_model->ListarProductoFamilia($id);
	    
	    if (empty($data['db_producto']))
            {
              show_404();
             }

	    $this->load->model('Global_model');
	    $data['menu'] = $this->Global_model->DibujarMenu();

	    $this->load->view('header',$data);
		$this->load->view('producto',$data);
		$this->load->view('footer');
	}

}
