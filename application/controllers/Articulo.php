<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Articulo extends CI_Controller {

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

		$this->load->view('articulo');

		$this->load->view('footer');

	}


	  public function listar($titulo)
	    {
		 $this->load->model('Articulo_model');
		 $this->load->helper('url');
		 $data['db_articulo'] = $this->Articulo_model->listar($titulo);
		 $data['db_comentario'] = $this->Articulo_model->DibujarComentarios($titulo);
		 $data['db_plastico'] = $this->Articulo_model->DibujarListaFamilia('plasticos');
		 $data['db_acero'] = $this->Articulo_model->DibujarListaFamilia('metal');

	    $this->load->model('Global_model');
	    $data['menu'] = $this->Global_model->DibujarMenu();
	    $this->load->view('header',$data);
		$this->load->view('articulo');
		$this->load->view('footer');

	    }


  public function crear($titulo)
   {
        // Insertamos
        $this->load->model('Articulo_model');
        $this->Articulo_model->crear();
		$this->load->helper('url');
		redirect('articulo/'.$titulo);
   }


     public function borrarcomentario($id)
   {
        $this->load->model('Articulo_model');
        $titulo = $this->Articulo_model->borrarcomentario($id);
		$this->load->helper('url');
     	redirect('articulo/'.$titulo);
   }




}

