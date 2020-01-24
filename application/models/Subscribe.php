<?php 
class Subscribe extends CI_Model{

	public function newSubscribe($infrom){
 		$this->db->insert('subscribe', $infrom);
 		return true;
 
	}

}