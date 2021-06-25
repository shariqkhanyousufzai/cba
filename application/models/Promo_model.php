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

	public function checkCodeIsValid($code){
		$this->db->select('*');
		$this->db->where('code',$code);
		$this->db->where('status',0);
		$this->db->where('is_deleted',0);
		$this->db->from('promo');
		$q = $this->db->get();
		if($q->num_rows() > 0 ){
			return $q->result();
		}
		return false;
	}

	public function checkCodeIsNotConsumed($code){
		$this->db->select('*');
		$this->db->where('code',$code);
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->from('wallet');
		$q = $this->db->get();
		if($q->num_rows() > 0 ){
			return true;
		}
		return false;
	}

	public function addWallet($data){
		if($this->db->insert('wallet',$data)){
			return true;
		}
		return false;
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

	function activePromo($id){
		$this->db->set('status',0);
		$this->db->where('id',$id);
		if($this->db->update('promo')){
			return true;
		}
		return false;
	}

}