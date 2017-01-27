<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Blog extends CI_Controller {





 function __construct() {

   parent::__construct();

 }





	public function index()

	{

		$this->load->model('Global_model');

		$data['menu'] = $this->Global_model->DibujarMenu();

        $data['db_articulos'] = $this->Global_model->listar_articulos();


	    $this->load->view('header',$data);

		$this->load->view('blog');

		$this->load->view('footer');

	}

}

