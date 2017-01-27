<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

 function __construct() {
   parent::__construct();
 }

   
	public function index()
	{

		$this->load->model('Global_model');
	    $data['menu'] = $this->Global_model->DibujarMenu();
	    $data['db_familia'] = $this->Global_model->ListarFamilia();
	    $this->load->view('header',$data);
		$this->load->view('inicio');
		$this->load->view('footer');
	}
}
