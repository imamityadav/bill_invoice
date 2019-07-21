<?php
class Auth_login extends CI_Model {

    public function __construct() {
    	parent::__construct();
	}

	function getLoginData($username,$password)
	{

		$loginData=array('is_login'=>false);

		$this->db->where('username', $username);
		

		$this->db->where('password',md5($password));

		//$this->db->where('password', $password);

		$query = $this->db->get('general_setting');

		if ($query->num_rows() > 0)
		{
		    $res = $query->row();
		    $loginData = array(
		        "id" => $res->id,
		        //"isAdmin" => $res->isAdmin,
		        "username" => $res->username,
		        "password" => $res->password,
				"login_type" => 1,
				"is_login" => true,
				"is_lock" => true,
				"login_date" => date("d-M-Y"),
				"login_time" => date("H:i:s"),
		    
		         "name" => $res->name,
		       
		    );
		    return $loginData;
		 }
		 
		
	}
	
}

