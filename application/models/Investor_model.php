<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Investor_model extends CI_Model
{
	public function getAllInvestor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id !=',1);
		$q = $this->db->get();
		return $q->result();
	}


	public function getCurrentUser(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$this->session->userdata('user_id'));
		$q = $this->db->get();
		return $q->result()[0];
	}

	public function getContractByLang(){
		$this->db->select('*');
		$this->db->from('contract');
		$this->db->where('language',DEFAULT_CONTRACT);
		$q = $this->db->get();
		return $q->result()[0]->body;
	}
}