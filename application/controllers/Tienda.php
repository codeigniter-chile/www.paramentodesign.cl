<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tienda extends CI_Controller {

 function __construct() {
   parent::__construct();
 }


	public function index()
	{
		$this->load->model('Global_model');
		$data['menu'] = $this->Global_model->DibujarMenu();
	    $data['db_familia'] = $this->Global_model->ListarFamilia();
	    $data['db_familia_1'] = $this->Global_model->ListarProductosFamilia('1'); 

        # Cargamos el modelo de la tienda
         $this->load->model('Tienda_model');
		 $this->load->helper('url');

		 $data['db_tienda'] = $this->Tienda_model->listar();        
        


	    $this->load->view('header',$data);
		$this->load->view('tienda');
		$this->load->view('footer');
	}


public function enviar(){
		$this->load->library('email');

#################  1 - Enviamos un mail al vendedor  #############################################

$cuerpo  = "Tienda:www.paramentodesign.cl";
$cuerpo .= "\n";
$fecha = date("d-m-Y");
$cuerpo .= "Enviado: ".$fecha;
$cuerpo .= "\n";

# Datos de contacto
$cuerpo .= "Nombre: ".$this->input->post("nombre");
$cuerpo .= "\n";
$cuerpo .= "Email: ".$this->input->post("email");
$cuerpo .= "\n";
$cuerpo .= "Telefono: ".$this->input->post("telefono");
$cuerpo .= "\n";

# Datos de la cotización
$cuerpo .= "Producto: ".$this->input->post("producto");
$cuerpo .= "\n";
$cuerpo .= "Precio: ".$this->input->post("precio");
$cuerpo .= "\n";
$cuerpo .= "Cantidad: ".$this->input->post("cantidad");
$cuerpo .= "\n";
$total = $this->input->post("precio") * $this->input->post("cantidad");
$cuerpo .= "Total de la cotización: ".$total;
$cuerpo .= "\n";
$cuerpo .= "Texto del mensaje: ".$this->input->post("texto");
$cuerpo .= "\n";

$mail_venta = "ventas@paramentodesign.cl";
$mail_usuario = $this->input->post("email");

        $this->email->subject($fecha.' - Formulario de cotización de www.paramentodesign.cl');		
        $this->email->from($mail_usuario, $mail_usuario);
        $this->email->to($mail_venta);
        //$this->email->cc('mfalcon@paramentodesign.com');
        //$this->email->bcc('them@their-example.com');
        $this->email->message($cuerpo);
        $this->email->send();
	

#################  2 - Enviamos un mail al comprador  #############################################


$cuerpo  = "Muchas gracias por cotizar con Paramento Design en breve un vendedor lo contactará";
$cuerpo .= "\n";
$cuerpo .= ",formulario de cotización de www.paramentodesign.cl";
$cuerpo .= "\n";
$fecha = date("d-m-Y");
$cuerpo .= "Enviado: ".$fecha;
$cuerpo .= "\n";

# Datos de contacto
$cuerpo .= "Nombre: ".$this->input->post("nombre");
$cuerpo .= "\n";
$cuerpo .= "Email: ".$this->input->post("email");
$cuerpo .= "\n";
$cuerpo .= "Telefono: ".$this->input->post("telefono");
$cuerpo .= "\n";

# Datos de la cotización
$cuerpo .= "Producto: ".$this->input->post("producto");
$cuerpo .= "\n";
$cuerpo .= "Precio: ".$this->input->post("precio");
$cuerpo .= "\n";
$cuerpo .= "Cantidad: ".$this->input->post("cantidad");
$cuerpo .= "\n";
$total = $this->input->post("precio") * $this->input->post("cantidad");
$cuerpo .= "Total de la cotización: ".$total;
$cuerpo .= "\n";
$cuerpo .= "Texto del mensaje: ".$this->input->post("texto");
$cuerpo .= "\n";


        $this->email->subject($fecha.' - Formulario de cotización de www.paramentodesign.cl');		
        $this->email->from($mail_venta, $mail_venta);
        $this->email->to($mail_usuario);
        //$this->email->cc('mfalcon@paramentodesign.com');
        //$this->email->bcc('them@their-example.com');
        $this->email->message($cuerpo);
        $this->email->send();

redirect("tienda?msg=ok");


	}




}
