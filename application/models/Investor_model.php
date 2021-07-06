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

	public function getChannelShareByName($name){
		$this->db->select('id');
		$this->db->from('channels');
		$this->db->where('name',$name);
		$q = $this->db->get();
		return $q->result()[0]->id;
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


	public function addSingleInvestment($data){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			if($this->db->insert('investments', $data)){
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

	public function insertComment($data){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			if($this->db->insert('comments', $data)){
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
			if($getPaymentMethod == 'Wallet'){
			$this->db->set('status',1);
			}
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

	public function updatePaymentStatus($id){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$this->db->set('status',1);
			$this->db->where('id',$id);
			if($this->db->update('payments')){
				$data['id'] = $id;
				return $res;
		}
		}catch(\Exception $e)
		{
			$res["msg"] = "failed";
			$res["trace"] = ["class" => $this->router->fetch_class() , "method" => $this->router->fetch_method()] ;
			return $res;
		}
	}

	// public function getPayments(){
	// 	$res = [
	// 		"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
	// 	try
	// 	{
	// 		$query = '
	// 		SELECT c.name,i.amount,p.bank,p.total_investment,p.created_on,p.id,ic.contract FROM investments AS i
	// 		LEFT JOIN channels c ON i.channel_id = c.id
	// 		LEFT JOIN payments p ON i.payment_id = p.id
	// 		LEFT JOIN i_contracts ic ON i.payment_id = ic.payment_id 
	// 		WHERE i.created_by = '.$this->session->userdata('user_id').' AND p.bank = "Direct Bank Transfer" ';
	// 		$q = $this->db->query($query);
	// 		if($q->num_rows() > 0){
	// 			$res["data"] = $q->result();
	// 			return $res;
	// 		}
	// 	}catch(\Exception $e)
	// 	{
	// 		$res["msg"] = "failed";
	// 		$res["trace"] = ["class" => $this->router->fetch_class() , "method" => $this->router->fetch_method()] ;
	// 		return $res;
	// 	}
	// }

	public function getPayments($type = NULL,$id = NULL){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$this->db->select('c.name,i.amount,i.id as investment_id,p.bank,p.total_investment,p.created_on,p.id,ic.contract,p.status');
			$this->db->from('investments i');
			$this->db->join('channels c','i.channel_id = c.id','LEFT');
			$this->db->join('payments p','i.payment_id = p.id','LEFT');
			$this->db->join('i_contracts ic','i.payment_id = ic.payment_id ','LEFT');
			$this->db->where('p.bank is not null');
			if($type == 'pending'){
			$this->db->where('p.bank','Direct Bank Transfer');
			$this->db->where('p.status',0);	
			}else if($type == 'completed'){
			$this->db->where('p.bank is not null');
			$this->db->where('p.status',1);	
			}
			if(isset($id)){
			$this->db->where('i.created_by',$id);
			}else{
			$this->db->where('i.created_by',$this->session->userdata('user_id'));
			}
			$q = $this->db->get();
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

	public function getAllPayments($type){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$this->db->select('
				u.full_name,c.name,i.amount,p.bank,p.total_investment,p.created_on,p.id,ic.contract,p.status');
			$this->db->from('investments i');
			$this->db->join('channels c','i.channel_id = c.id','LEFT');
			$this->db->join('payments p','i.payment_id = p.id','LEFT');
			$this->db->join('users u','p.created_by = u.id','LEFT');
			$this->db->join('i_contracts ic','i.payment_id = ic.payment_id ','LEFT');
			$this->db->where('p.bank is not null');
			if($type == 'pending'){
			$this->db->where('p.bank','Direct Bank Transfer');
			$this->db->where('p.status',0);	
			}else if($type == 'completed'){
			$this->db->where('p.bank is not null');
			$this->db->where('p.status',1);	
			}
			$q = $this->db->get();
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

	public function getAllMsgs($id){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$this->db->where('investment_id',$id);
			$q = $this->db->get('comments');
			if($q->num_rows() > 0){
				$res["data"] = $q->result();
				return $res;
			}else{
				$res["data"] = false;
				return $res;
			}
		}catch(\Exception $e)
		{
			$res["msg"] = "failed";
			$res["trace"] = ["class" => $this->router->fetch_class() , "method" => $this->router->fetch_method()] ;
			return $res;
		}
	}

	public function getAllUserData($id){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$this->db->where('id',$id);
			$q = $this->db->get('users');
			if($q->num_rows() > 0){
				$res["data"] = $q->result();
				return $res;
			}else{
				$res["data"] = false;
				return $res;
			}
		}catch(\Exception $e)
		{
			$res["msg"] = "failed";
			$res["trace"] = ["class" => $this->router->fetch_class() , "method" => $this->router->fetch_method()] ;
			return $res;
		}
	}

	public function checkInfo(){
		$this->db->select('address,city,country');
		$this->db->where('id',$this->session->userdata('user_id'));
		$q = $this->db->get('users');
		return $q->result()[0];
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

	public function updateWallet(){
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->set('is_deleted',1);
		if($this->db->update('wallet')){
			return true;
		}
		return false;
	}
}