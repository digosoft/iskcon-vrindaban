<?php 
class Contactus extends CI_Model{

	public function newContactus($infrom){
 		$this->db->insert('contact_us', $infrom);
 		return true;
 
	}

}