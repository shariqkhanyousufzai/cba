<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_model extends CI_Model {
    public function __construct()
    {
       $this->tbl_paypal_pay_log = tbl_paypal_pay_log;
    }
	public function addPaypalSubscription($data){
        if ($this->db->insert($this->tbl_paypal_pay_log, $data)) {
            return true;
        }
        return false;
    }

    public function addComission($data){
        if ($this->db->insert($this->tbl_comission, $data)) {
            return true;
        }
        return false;
    }


    public function addPaypalData($data){
        if ($this->db->insert($this->tbl_paypal_pay_log, $data)) {
            return true;
        }
        return false;
    }

     public function paypalSubscriptionUpdateOrder($orderId , $subscription_id)
    {
        $this->db->where('subscription_id',$subscription_id);
        $this->db->set('order_id',$orderId);
        if ($this->db->update($this->tbl_paypal_pay_log)) {
            return true;
        }
        return false;
    }

    public function paypalSubscriptionUpdate($data , $subscription_id)
    {
        $this->db->set('status',1);
        $this->db->where('subscription_id',$subscription_id);
        // $this->db->where('imei',$imei);
        if ($this->db->update($this->tbl_paypal_pay_log,$data)) {
            return true;
        }
        return false;
    }

}

/* End of file Alerts_model.php */
/* Location: .//E/xampp/htdocs/voltswitch/salt/models/Alerts_model.php */
	
?>