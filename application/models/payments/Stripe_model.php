<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stripe_model extends CI_Model
{
	function updatePayment($id){
		$this->db->set('bank','Stripe');
		$this->db->where('id',$id);
		if($this->db->update('payments')){
			return true;
		}
		return false;
	}

}