<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
	function getUsers(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('is_deleted',0);
		$this->db->where('id',$this->session->userdata('user_id'));
		$q = $this->db->get();
        if ($q->num_rows() > 0) {
        	return $q->result()[0];
        }
        return false;
	}

	function updateUser($data){
		$this->db->where('id', $this->session->userdata('user_id'));
		if($this->db->update('users', $data)){
			return true;
		}
		return false;
	}
}