<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_model extends CI_Model{
 
      function __construct() {
   parent::__construct();
 }
 
 

 public function ListarFamilia(){
    $this->db->select('*')->from('tfamilia');
    $query = $this->db->get();
        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }


 public function DameCantFamilia(){
    
 }


  public function DibujarTodosLosProductos(){
     $c = "";
     $this->db->select('*')->from('tproductos');
     $query2 = $this->db->get();
                   if($query2->num_rows() > 0 )
                       {
                              foreach ($query2->result() as $row2)
                                   {
                                $fnombre  = str_replace(" ","-", $row2->nombre);
                                $c = $c."<article class='pf-".$row2->idfamilia." portfolio-item pf-premium pf-slider pf-parallax pf-html5 pf-fullscreen'>
                                <div class='portfolio-image'>
                                    <a class='image_fade' href='".base_url()."producto/".$fnombre."'>
                                        <img src='".base_url()."assets/img/producto/".$row2->id."/b1.jpg' alt='".$row2->nombre."'>
                                    </a>
                                <div class='ti-may'>".$row2->nombre."</div>    
                                </div>
                            </article>";
                                    }
                       }
    return $c;
  }


  public function DameMeta($producto){
     
  }

   public function DibujarFamiliaLink(){
      $c = "<li class='activeFilter'><a href='#' data-filter='*'>Mostrar Todos</a></li>";
          $this->db->select('*')->from('tfamilia');
    $query = $this->db->get();
        
    if($query->num_rows() > 0 )
        {
            foreach ($query->result() as $row)
            {
              $c = $c."<li><a href='#' data-filter='.pf-".$row->id."'>".$row->nombre."</a></li>";
            }
             
       }

      return $c;  
   }


 
public function listar_articulos(){

    $this->db->select('*')->from('t_articulos');
    $query = $this->db->get();        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }  


public function listar_videos(){

    $this->db->select('*')->from('t_videos');
    $query = $this->db->get();        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }  



 public function ListarProductosFamilia($id){
    $this->db->select('*')->from('tproductos')->where('idfamilia =', $id);
    $query = $this->db->get();
        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }


 public function DibujarMenu(){
    $c = '';
    $this->db->select('*')->from('tfamilia');
    $query = $this->db->get();
        
    if($query->num_rows() > 0 )
        {
            foreach ($query->result() as $row)
            {
              $c = $c."<li><a href='".base_url()."productos/".$row->nombre."'><div><i class='icon-stack'></i>".$row->nombre."</div></a>";
              $c = $c."<ul>";
              // Entramos los submenu
                $this->db->select('*')->from('tproductos')->where('idfamilia =', $row->id);
                $query2 = $this->db->get();
                   if($query2->num_rows() > 0 )
                       {
                              foreach ($query2->result() as $row2)
                                   {
                                     $fnombre  = str_replace(" ","-", $row2->nombre);
                                     $c = $c."<li><a href='".base_url()."producto/".$fnombre."'><div><i class='icon-stack'></i>".$row2->nombre."</div></a>";
                                   }
                       }
             $c = $c."</ul>";          

            }
        }
   
    $c = $c."<li><a href='".base_url()."todos-los-productos'><div><i class='icon-th'></i>Todos...</div></a>";
    return $c;

    }



 
 
}