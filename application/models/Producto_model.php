<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model{
 
      function __construct() {
   parent::__construct();
 }
 
  
 public function ListarProducto($id){
    $this->db->select('*')->from('tproductos')->where('id =', $id);
    $query = $this->db->get();
        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }



 public function DameFamilia($id){
    $this->db->select('*')->from('tproductos')->where('id =', $id);
    $query = $this->db->get();
        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }


 public function DameidporNombre($nombre){
    $nombre = str_replace("-"," ", $nombre);
    $this->db->select('*')->from('tproductos')->where('nombre =', $nombre);
    $query = $this->db->get();
    $row = $query->row_array();
    return $row['id'];
 }

  public function DameidporNombrePadre($nombre){
    $nombre = str_replace("-"," ", $nombre);
    $this->db->select('*')->from('tfamilia')->where('nombre =', $nombre);
    $query = $this->db->get();
    $row = $query->row_array();
    return $row['id'];
 }


 public function DameCampoNombreFamilia($id){
     // Buscamos el id Familia
    $query = $this->db->query('SELECT nombre FROM tfamilia WHERE id = '.$id.' LIMIT 1');
    $row = $query->row();
    return  $row->nombre;
 }


  public function DameCampoDescFamilia($id){
     // Buscamos el id Familia
    $query = $this->db->query('SELECT * FROM tfamilia WHERE id = '.$id.' LIMIT 1');
    $row = $query->row();
    return  $row->desc;
 }

   public function DameCampoTextoFamilia($id){
     // Buscamos el id Familia
    $query = $this->db->query('SELECT * FROM tfamilia WHERE id = '.$id.' LIMIT 1');
    $row = $query->row();
    return  $row->texto;
 }






  public function ListarProductoFamilia($id){
    
    // Buscamos el id Familia
    $query = $this->db->query('SELECT idfamilia FROM tproductos WHERE id = '.$id.' LIMIT 1');
    $row = $query->row();
    $temp_id = $row->idfamilia;




    $this->db->select('*')->from('tproductos')->where('idfamilia =', $temp_id);
    $query = $this->db->get();
        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }



   public function ListarProductoFamiliaok($id){
    

    $this->db->select('*')->from('tproductos')->where('idfamilia =', $id);
    $query = $this->db->get();
        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }





 
 
}