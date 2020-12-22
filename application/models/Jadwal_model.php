<?php 
/**
 * 
 */
class Jadwal_model extends CI_Model{
	
	public function getAll(){
		return $this->db->get('jadwal')->result();
	}
}
?>