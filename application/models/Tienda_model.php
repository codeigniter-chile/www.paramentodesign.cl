<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda_model extends CI_Model{
 
      function __construct() {
   parent::__construct();
 }

  public function listar(){
    $this->db->select('*')->from('t_tienda');
    $query = $this->db->get();        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }




}