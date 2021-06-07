<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	public function overallInvestment(){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$this->db->select('SUM(i.amount) as overall_investment');
			$this->db->from('investments i');
			$this->db->join('payments p','i.payment_id = p.id','LEFT');
			$this->db->where('p.bank is not null');
			if($this->session->userdata('group_name') != 'admin'){
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


	public function pendingInvestment(){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$this->db->select('SUM(i.amount) as overall_investment');
			$this->db->from('investments i');
			$this->db->join('payments p','i.payment_id = p.id','LEFT');
			$this->db->where('p.bank is not null');
			$this->db->where('p.status',0);
			if($this->session->userdata('group_name') != 'admin'){
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

	public function completedInvestment(){
		$res = [
			"status" => "OK", "msg" => "success","rows_affected" => 0, "data" => [] ];
		try
		{
			$this->db->select('SUM(i.amount) as overall_investment');
			$this->db->from('investments i');
			$this->db->join('payments p','i.payment_id = p.id','LEFT');
			$this->db->where('p.bank is not null');
			$this->db->where('p.status',1);
			if($this->session->userdata('group_name') != 'admin'){
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
}