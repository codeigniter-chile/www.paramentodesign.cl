<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Galeria extends CI_Controller {
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
		$this->load->view('galeria');
		$this->load->view('footer');
	}
}
