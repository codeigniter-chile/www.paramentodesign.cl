<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {


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
		$this->load->view('contacto');
		$this->load->view('footer');
	}

	public function enviar(){
		$this->load->library('email');
		// var datos = 'nombre='+ nombre + '&email=' + email + '&telefono=' + telefono + '&mensaje=' + mensaje + '&como=' + como + '&dest=' + dest + '&pagina=' + pagina;
        
$cuerpo  = "Formulario de contacto de www.paramentodesign.cl";
$cuerpo .= "\n";
$fecha = date("d-m-Y");
$cuerpo .= "Enviado: ".$fecha;
$cuerpo .= "\n";
$cuerpo .= "Nombre: ".$this->input->post("nombre");
$cuerpo .= "\n";
$cuerpo .= "Email: ".$this->input->post("email");
$cuerpo .= "\n";
$cuerpo .= "Como nos conocio: ".$this->input->post("como");
$cuerpo .= "\n";
$cuerpo .= "Telefono: ".$this->input->post("telefono");
$cuerpo .= "\n";
$cuerpo .= "Pagina Vista: ".$this->input->post("pagina");
$cuerpo .= "\n";
$cuerpo .= "Mensaje: ".$this->input->post("mensaje");

$mail_dest = $this->input->post("dest");

        $this->email->subject('Formulario de Contacto PD');		
        $this->email->from($this->input->post("email"), $this->input->post("email"));
        $this->email->to($mail_dest);
        //$this->email->cc('mfalcon@paramentodesign.com');
        //$this->email->bcc('them@their-example.com');
        $this->email->message($cuerpo);
        $this->email->send();
	}


}
