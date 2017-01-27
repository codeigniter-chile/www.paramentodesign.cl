<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulo_model extends CI_Model{
 
      function __construct() {
   parent::__construct();
 }
 
   public function listar($titulo){
    $titulo = str_replace("-"," ", $titulo);
    $this->db->select('*')->from('t_articulos')->where('titulo =', $titulo);
    $query = $this->db->get();        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }


  public function crear(){
    $this->load->helper('url');
    $hoy = date("Y-m-d");
     $data = array(
         'nombre' => $this->input->post('nombre'),//capturo los datos que me envian desde la vista
         'mail' => $this->input->post('mail'),
         'telefono' => $this->input->post('telefono'),
         'desc' => $this->input->post('desc'),
         'idarticulo' => $this->input->post('id'),
         'fecha' => $hoy
      );

     return $this->db->insert('t_comentarios', $data);
  }


 public function damenombre($id){
    $query = $this->db->query('SELECT titulo FROM t_articulos WHERE id = '.$id.' LIMIT 1');   
    $row = $query->row();
    return $row->titulo;
 }


  public function borrarcomentario($id){
     $query = $this->db->query('SELECT * FROM  t_comentarios WHERE id = '.$id.' LIMIT 1');
     $row = $query->row();
     $myid = $row->idarticulo;   
     echo $myid; 
     $titulo = $this->damenombre($myid);
     $titulo = str_replace(" ","-", $titulo); 
     // Borramos el comnetario    
     $this->db->delete('t_comentarios', array('id' => $id ));
     return  $titulo;
  }









 public function  DibujarListaFamilia($tipo){
    $this->db->select('*')->from('t_articulos')->where('categoria =', $tipo);
    $query = $this->db->get();
    $c = "";
    if($query->num_rows() > 0 )
                       {
                           foreach ($query->result() as $row)
                                   {
                                    $titulo = str_replace(" ","-", $row->titulo);
                            $c = $c. "
                                             <div class='spost clearfix'>
                                                  <div class='entry-c'>
                                                        <div class='entry-title'>
                                                            <h4><a href='".base_url()."articulo/".$titulo."'>".$row->titulo."</a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                 ";
                             }
                       }
    return $c;
 }






   public function DibujarComentarios($titulo){
      $titulo = str_replace("-"," ", $titulo);
      $this->db->select('*')->from('t_articulos')->where('titulo =', $titulo);
      $query = $this->db->get();
      $row = $query->row_array();
      $id =   $row['id'];
      $this->db->select('*')->from('t_comentarios')->where('idarticulo =', $id);
      $query2 = $this->db->get();
      $c = "";
      if($query2->num_rows() > 0 )
                       {                    
                      $c = "<h3 id='comments-title'>Comentarios</h3>";
                              foreach ($query2->result() as $row2)
                                   {
                                    $c = $c."<ol class='commentlist clearfix'>                                
                                    <li class='comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1' id='li-comment-2'>
                                        <div id='comment-2' class='comment-wrap clearfix'>
                                            <div class='comment-meta'>
                                                <div class='comment-author vcard'>
                                                    <span class='comment-avatar clearfix'>                                                  
                                              ";

                                              if ($row2->nombre == "marlon" or $row2->nombre == "Marlon" ){
                                                 $c = $c."<img alt='' src='".base_url()."assets/img/escritores/1.jpg' class='avatar avatar-60 photo' height='60' width='60' />";
                                             }
                                             else{

                                                $c = $c."<img alt='' src='".base_url()."assets/img/escritores/0.png' class='avatar avatar-60 photo' height='60' width='60' />";
                 
                                             }

                                              $c = $c."</span>
                                                </div>
                                            </div>
                                            <div class='comment-content clearfix'>
                                                <div class='comment-author'>".$row2->nombre."<span>".$row2->fecha."</span></div>
                                                <p>".$row2->desc."</p>                                           
                                            </div>
                                             </div>";
                                      if($this->session->userdata('username'))

                                           {
                                              $c = $c."<br><a class='button button-3d nomargin' href='".base_url()."/articulo/borrarcomentario/".$row2->id."'>Borrar</a>";
                                           }

                                    $c = $c."</li>
                                </ol>";
                                 }
                       }                       
    return $c;
 }
}