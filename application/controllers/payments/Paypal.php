<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('auth/login');
       		}
       	$this->load->model('payments/paypal_model');
        $this->load->model('investor_model');
       	$this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('parser');
        $this->load->helper('string');
        $this->load->helper('language');
    }

    public function paypalMultipleSubscription(){
        $email = $this->input->post('email');
        // foreach ($imeis as $imei){
        $data = array(
            "email" => $email,
            "subscription_id" => $this->input->post('subscription_id'),
            "investment" => $this->input->post('investment'),
            "created" => date('Y-m-d'),
            "updated" => date('Y-m-d'),
            "created_by" => $this->session->userdata('user_id'),
            "updated_by" => $this->session->userdata('user_id'),
        );
        $this->paypal_model->addPaypalSubscription($data);
        // }
        echo json_encode("added_success");
    }

     public function paypalSubscriptionUpdateOrder()
    {
        $subscription_id = $this->input->post('subscription_id');
        $orderId = $this->input->post('orderId');
        $this->paypal_model->paypalSubscriptionUpdateOrder($orderId,$subscription_id);
    }

    public function paypalSubscriptionUpdateMultiple()
    {
        $p_created_time = $_GET['mapIDs'][0];
        $p_update_time = $_GET['mapIDs'][1];
        $p_id = $_GET['mapIDs'][2];
        $p_status = $_GET['mapIDs'][3];
        $p_href = $_GET['mapIDs'][4];
        $p_country_code = $_GET['mapIDs'][5];
        $p_email_address = $_GET['mapIDs'][6];
        $p_given_name = $_GET['mapIDs'][7];
        $p_payer_id = $_GET['mapIDs'][8];
        $p_amount = $_GET['mapIDs'][9];
        $p_merchant_id = $_GET['mapIDs'][10];
        $subscription_id = $_GET['mapIDs'][11];
        $data = array(
            'p_created_time' => $p_created_time,
            'p_update_time' => $p_update_time,
            'p_id' => $p_id,
            'p_status' => $p_status,
            'p_href' => $p_href,
            'p_country_code' => $p_country_code,
            'p_email_address' => $p_email_address,
            'p_given_name' => $p_given_name,
            'p_payer_id' => $p_payer_id,
            'p_amount' => $p_amount,
            'p_merchant_id' => $p_merchant_id,
            'created_by' => $this->session->userdata('user_id'),
            'updated_by' => $this->session->userdata('user_id'),
        );
        
        $this->paypal_model->paypalSubscriptionUpdate($data,$subscription_id);
        echo json_encode("Success");
    }

    public function paypalPaymentMultiple()
    {
        $p_created_time = $_GET['mapIDs'][0];
        $p_update_time = $_GET['mapIDs'][1];
        $p_id = $_GET['mapIDs'][2];
        $p_status = $_GET['mapIDs'][3];
        $p_href = $_GET['mapIDs'][4];
        $p_country_code = $_GET['mapIDs'][5];
        $p_email_address = $_GET['mapIDs'][6];
        $p_given_name = $_GET['mapIDs'][7];
        $p_payer_id = $_GET['mapIDs'][8];
        $p_amount = $_GET['mapIDs'][9];
        $p_merchant_id = $_GET['mapIDs'][10];
        $order_id = $_GET['mapIDs'][11];
        $last_payment_id = $_GET['mapIDs'][12];
        $data_paypal = array(
            'payment_id' => $last_payment_id,
            'p_created_time' => $p_created_time,
            'p_update_time' => $p_update_time,
            'p_id' => $p_id,
            'p_status' => $p_status,
            'p_href' => $p_href,
            'p_country_code' => $p_country_code,
            'p_email_address' => $p_email_address,
            'p_given_name' => $p_given_name,
            'p_payer_id' => $p_payer_id,
            'p_amount' => $p_amount,
            'p_merchant_id' => $p_merchant_id,
            'order_id' => $order_id,
            'created_by' => $this->session->userdata('user_id'),
        );
        $this->paypal_model->addPaypalData($data_paypal);
        echo json_encode(true);
    }
	
}
