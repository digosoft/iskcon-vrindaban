<?php 
class Odersprashadam extends CI_Model{

	public function orderNewRecord($infrom){
 		$this->db->insert('free_prashadam', $infrom);
 		return true;
 
	}

}