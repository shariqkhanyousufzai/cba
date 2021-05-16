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


	public function getChannels(){
		$this->db->select('*');
		$this->db->from('channels');
		$q = $this->db->get();
		return $q->result();
	}

	public function getChannelShareById($id){
		$this->db->select('cost_per_share');
		$this->db->from('channels');
		$this->db->where('id',$id);
		$q = $this->db->get();
		return $q->result()[0]->cost_per_share;
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
		return $q->result()[0];
	}


	public function addPayment($data){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			if($this->db->insert('payments', $data)){
				$data['id'] = $this->db->insert_id();
				$res["data"][] = $data;
				return $res;
		}
		}catch(\Exception $e)
		{
			$res["msg"] = "failed";
			$res["trace"] = ["class" => $this->router->fetch_class() , "method" => $this->router->fetch_method()] ;
			return $res;
		}
	}

	public function addInvestments($data){
		$res = ["status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			foreach ($data as $investment) {
				if($this->db->insert('investments', $investment)){
				$investment['id'] = $this->db->insert_id();
				$res["data"][] = $investment;
				}
			}
			return $res;
			
		}catch(\Exception $e)
		{
			$res["msg"] = "failed";
			$res["trace"] = ["class" => $this->router->fetch_class() , "method" => $this->router->fetch_method()] ;
			return $res;
		}
	}	


	public function addContract($data){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			if($this->db->insert('i_contracts', $data)){
				$data['id'] = $this->db->insert_id();
				$res["data"][] = $data;
				return $res;
		}
		}catch(\Exception $e)
		{
			$res["msg"] = "failed";
			$res["trace"] = ["class" => $this->router->fetch_class() , "method" => $this->router->fetch_method()] ;
			return $res;
		}
	}

	public function updatePayment($lastPaymentId,$getPaymentMethod){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$this->db->set('bank',$getPaymentMethod);
			$this->db->where('id',$lastPaymentId);
			if($this->db->update('payments')){
				$data['id'] = $lastPaymentId;
				$res["data"][] = array(
					'bank' => $getPaymentMethod
				);
				return $res;
		}
		}catch(\Exception $e)
		{
			$res["msg"] = "failed";
			$res["trace"] = ["class" => $this->router->fetch_class() , "method" => $this->router->fetch_method()] ;
			return $res;
		}
	}

	public function getPayments(){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$query = '
			SELECT c.name,i.amount,p.bank,p.total_investment,p.created_on,p.id,ic.contract FROM investments AS i
			LEFT JOIN channels c ON i.channel_id = c.id
			LEFT JOIN payments p ON i.payment_id = p.id
			LEFT JOIN i_contracts ic ON i.payment_id = ic.payment_id 
			WHERE i.created_by = '.$this->session->userdata('user_id').' AND p.bank = "Direct Bank Transfer" ';
			$q = $this->db->query($query);
			if($q->num_rows() > 0){
				$res["data"] = $q->result();
				return $res;
			}
		}catch(\Exception $e)
		{
			$res["msg"] = "failed";
			$res["trace"] = ["class" => $this->router->fetch_class() , "method" => $this->router->fetch_method()] ;
			return $res;
		}
	}

	public function deleteInvestment($id){
		//delete data from payment
		$this->db->where('id', $id);
		$this->db->delete('payments');
		//delete the investment
		$this->db->where('payment_id', $id);
		$this->db->delete('investments');
		//delete the contract
		$this->db->where('payment_id', $id);
		$this->db->delete('i_contracts');
	}
}