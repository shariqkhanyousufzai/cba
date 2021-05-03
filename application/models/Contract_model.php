<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contract_model extends CI_Model
{
	function getAllContract(){
		$this->db->select('*');
		$this->db->from('contract');
		$q = $this->db->get();
		return $q->result();
	}

	function getContractById($id){
		$this->db->select('*');
		$this->db->from('contract');
		$this->db->where('id',$id);
		$q = $this->db->get();
		return $q->result()[0];
	}

	function updateContractById($post){
		$this->db->set('body',$post['body']);
		$this->db->where('id',$post['id']);
		if($this->db->update('contract')){
			return true;
		}
		return false;
	}

}