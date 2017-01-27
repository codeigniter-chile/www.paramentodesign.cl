<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{
 
      function __construct() {
   parent::__construct();
 }
 
  
 public function login($username,$password){
     $this->db->where('fnombre',$username);
     $this->db->where('fpass',$password);
     $q = $this->db->get('tusuarios');
     if ($q->num_rows()>0) {
         return TRUE;
     }
     else 
     {
     FALSE;
     }
 }
 
 
 
}