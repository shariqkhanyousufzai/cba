<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investor extends CI_Controller {

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
        $this->load->model('investor_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function list()
	{
		//this method is calling from core CI_Controller
		$this->admin();
		$data['investors'] = $this->investor_model->getAllInvestor();
		$this->page_construct('investor/list',$data);
	}

	public function invest_now()
	{
		$_SESSION['COUNT'] = 0;
		$data['getContract'] = $this->investor_model->getContractByLang();
		$data['getChannels'] = $this->investor_model->getChannels();
		$data['user'] = $this->investor_model->getCurrentUser();
		$this->page_construct('investor/invest_now',$data);
	}

	public function investor_profile($id){
		$data['getAllUserData'] = $this->investor_model->getAllUserData($id);
		$data['getPayments']['data'] = $this->investor_model->getPayments($type = NULL,$id);
 		$this->page_construct('investor/investor_profile',$data);
	}

	public function my_investment_list($type = null)
	{
		$type = (isset($_GET['status'])) ? $_GET['status'] : 'all';
		$data['getPayments']['data'] = $this->investor_model->getPayments($type);
		$this->page_construct('investor/my_investment_list',$data);
	}

	public function all_investment_list($type = null)
	{
		$type = (isset($_GET['status'])) ? $_GET['status'] : 'all';
		$data['getAllPayments']['data'] = $this->investor_model->getAllPayments($type);
		$this->page_construct('investor/all_investment_list',$data);
	}

	public function getmsg()
	{
		$res = $this->investor_model->getAllMsgs($this->input->post('getTheId'));
		echo json_encode($res);
	}


	public function pay_investment()
	{
		$data['getPayments']['data'] = $this->investor_model->getPayments();
		$this->page_construct('investor/pay_investment',$data);
	}

	public function approve_investment($id){
		if($this->session->userdata('level') == 1){
			if($this->investor_model->updatePaymentStatus($id)){
			$this->session->set_flashdata('message', 'Payment Updated Success');
			}else{
				$this->session->set_flashdata('message', 'Payment Updated Failed');
			}
			redirect('investor/investments','refresh');
		}
	}

	

	
	public function add_investment()
	{
		//for channels
		$channelArray = array();
		//for comma seprated channel id
		$commaSepratedChannelId = array();
		//filter the empty investment value
		if(isset($_POST['channels'])){
			foreach ($_POST['channels'] as $key => $value) {
				if(!empty($value)){
					$channelArray[$key] = $value; 
					$commaSepratedChannelId[] = $key;
				}
			}
		}
		//inserting the payment
		//making data for payment
		$payment_data = array(
			'created_by' => $this->session->userdata('user_id'),
			'total_investment' => $this->input->post('total_investment'),
			'created_by' => $this->session->userdata('user_id')
		);
		$payment_id = $this->investor_model->addPayment($payment_data);
		//insert payment end
		//making data for investment and insert into loop 
		foreach ($channelArray as $channel_id => $channel_percent) {
			$channelShare = $this->investor_model->getChannelShareById($channel_id);
			$investment_data[] = array(
			'channel_id' => $channel_id,
			'payment_id' => $payment_id['data'][0]['id'],
			'amount' => $channel_percent * $channelShare,
			'percentage' => $channel_percent,
			'created_by' => $this->session->userdata('user_id')
			);
		}
		//insert the investment
		$investment_result = $this->investor_model->addInvestments($investment_data);
		//making the contract data
		//making the comma seprtaed id's of channel
		$commaSepratedChannelId = implode(',', $commaSepratedChannelId);
		$i_contract_data = array(
			'channels' => $commaSepratedChannelId,
			'contract' => $this->input->post('contract'),
			'payment_id' => $payment_id['data'][0]['id'],
			'contract_id' => $this->input->post('contract_id'),
			'created_by' => $this->session->userdata('user_id')

		);
		$i_contract_result = $this->investor_model->addContract($i_contract_data);
		echo json_encode($payment_id['data'][0]['id']);
	}

	public function update_payment_method(){
		$res = $this->investor_model->updatePayment($_POST['lastPaymentId'],$_POST['getPaymentMethod']);
		$this->session->set_flashdata('message', 'Request Has Been Send!');
		echo json_encode($res);
	}

	public function delete_investment(){
		$this->investor_model->deleteInvestment($_POST['lastPaymentId']);
	}

	public function sendmsg(){
		$data = array(
			'investment_id' => $this->input->post('getTheId'),
			'comment' => $this->input->post('getTheMsg'),
			'created_by' => $this->session->userdata('user_id')
		);
		$res = $this->investor_model->insertComment($data);
		echo json_encode($res);
	}


	// public function add_investment()
	// {
	// 	echo "<pre>";
	// 	print_r($_POST);
	// 	exit();
	// 	//for channels
	// 	$channelArray = array();
	// 	//for comma seprated channel id
	// 	$commaSepratedChannelId = array();
	// 	//filter the empty investment value
	// 	if(isset($_POST['channels'])){
	// 		foreach ($_POST['channels'] as $key => $value) {
	// 			if(!empty($value)){
	// 				$channelArray[$key] = $value; 
	// 				$commaSepratedChannelId[] = $key;
	// 			}
	// 		}
	// 	}
	// 	//inserting the payment
	// 	//making data for payment
	// 	$payment_data = array(
	// 		'created_by' => $this->session->userdata('user_id'),
	// 		'bank' => $this->input->post('bank'),
	// 		'total_investment' => $this->input->post('total_investment'),
	// 	);
	// 	$payment_id = $this->investor_model->addPayment($payment_data);
	// 	//insert payment end
	// 	//making data for investment and insert into loop 
	// 	foreach ($channelArray as $channel_id => $channel_percent) {
	// 		$channelShare = $this->investor_model->getChannelShareById($channel_id);
	// 		$investment_data[] = array(
	// 		'channel_id' => $channel_id,
	// 		'payment_id' => $payment_id['data'][0]['id'],
	// 		'amount' => $channel_percent * $channelShare,
	// 		'percentage' => $channel_percent,
	// 		);
	// 	}
	// 	//insert the investment
	// 	$investment_result = $this->investor_model->addInvestments($investment_data);
	// 	//making the contract data
	// 	//making the comma seprtaed id's of channel
	// 	$commaSepratedChannelId = implode(',', $commaSepratedChannelId);
	// 	$i_contract_data = array(
	// 		'channels' => $commaSepratedChannelId,
	// 		'contract' => $this->input->post('contract'),
	// 		'payment_id' => $payment_id['data'][0]['id'],
	// 		'contract_id' => $this->input->post('contract_id'),

	// 	);
	// 	$i_contract_result = $this->investor_model->addContract($i_contract_data);
	// 	$this->session->set_flashdata('message', 'investment Success');
 //        redirect(base_url('investor/invest_now'),'refresh');
	// }
}
