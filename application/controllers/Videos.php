<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Videos extends CI_Controller {





 function __construct() {

   parent::__construct();

 }





	public function index()

	{

		$this->load->model('Global_model');

		$data['menu'] = $this->Global_model->DibujarMenu();

        $data['db_videos'] = $this->Global_model->listar_videos();


	    $this->load->view('header',$data);

		$this->load->view('videos');

		$this->load->view('footer');

	}

}

