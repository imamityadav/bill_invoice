<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Model{


  public function insert($table,$value){

    return $this->db->insert($table,$value)?$this->db->insert_id():false;

  }

  public function maxID($table){

    $this->db->select_max('id');
    $maxid=$this->db->get($table)->row()->id;
    return $maxid=$maxid+1;
  }

  public function login($t,$c1,$c2,$u,$p){

    return $this->db->get_where( $t, array( $c1 => $u, $c2 => $p ))->num_rows()? true:false;
      
  }

  public function getresult($table){
    
    $data = $this->db->get($table)->result();
   return $data;

  }

  public function insertget($table,$value){

    if($value['Owner_Name']){
    return $this->db->insert($table,$value)?$this->db->get($table)->result():false;
    }else{

      return $this->db->get($table)->result();
    }

  }
  
  public function deleterow(){
		$id=$this->input->post('id');
		$this->db->where('ID', $id);
		$result=$this->db->delete('school_Registration');
		return $result;
	}


}
?>