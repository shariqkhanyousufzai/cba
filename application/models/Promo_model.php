<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promo_model extends CI_Model
{
	public function getAllPromo(){
		$this->db->select('*');
		$this->db->from('promo');
		$q = $this->db->get();
		return $q->result();
	}

	public function addPromo($addPromo){
		if($this->db->insert('promo',$addPromo)){
			return true;
		}
		return false;
	}

	
	function deactivePromo($id){
		$this->db->set('status',1);
		$this->db->where('id',$id);
		if($this->db->update('promo')){
			return true;
		}
		return false;
	}

}