<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	function getGroups(){
		$this->db->select('*');
		$this->db->where('id != ',1);
		$this->db->where('id != ',2);
		$this->db->from('groups');
		$q = $this->db->get();
		return $q->result();
	}


	function getUsers(){
		$this->db->select('*,FROM_UNIXTIME(created_on) as created_date');
		$this->db->from('users');
		$this->db->where('is_deleted',0);
		$q = $this->db->get();
		return $q->result();
	}


	function getUsersById($id){
		$this->db->select('*,FROM_UNIXTIME(created_on) as created_date');
		$this->db->from('users');
		$this->db->where('is_deleted',0);
		$this->db->where('id',$id);
		$q = $this->db->get()->row();
		return $q;
	}

	function updateUser($data,$id){
		$this->db->where('id', $id);
		if($this->db->update('users', $data)){
			return true;
		}
		return false;
	}

	function deleteUser($id,$email){
		$email = $email.'-d';
		$this->db->where('id', $id);
		$this->db->set('is_deleted', 1);
		$this->db->set('email', $email);
		if($this->db->update('users')){
			return true;
		}
		return false;
	}
}