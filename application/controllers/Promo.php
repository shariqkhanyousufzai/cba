<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {

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
        $this->load->model('promo_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function index()
	{
		$this->checkLevel();
		$data['promos'] = $this->promo_model->getAllPromo();
		$this->page_construct('promo/create',$data);
	}

	public function add(){
		$this->checkLevel();
		$data = array(
			'code' => $this->input->post('code'),
			'amount' => $this->input->post('amount'),
			'created_by' => $this->session->userdata('user_id'),
		);
		if($this->promo_model->addPromo($data)){
		$this->session->set_flashdata('message', 'Promo Code Added');
		}else{
			$this->session->set_flashdata('message', 'Promo Code Failed');
		}
		redirect('promo','refresh');
	}

	public function deactive_promo($id){
		$this->checkLevel();
		if($this->promo_model->deactivePromo($id)){
		$this->session->set_flashdata('message', 'Promo Code Updated');
		}else{
			$this->session->set_flashdata('message', 'Promo Code Update Failed');
		}
		redirect('promo','refresh');
	}

	public function active_promo($id){
		$this->checkLevel();
		if($this->promo_model->activePromo($id)){
		$this->session->set_flashdata('message', 'Promo Code Updated');
		}else{
			$this->session->set_flashdata('message', 'Promo Code Update Failed');
		}
		redirect('promo','refresh');
	}

	public function applycode(){
		$checkCodeIsValid = $this->promo_model->checkCodeIsValid($_POST['code']);
		if($checkCodeIsValid){
			$checkCodeIsNotConsumed = $this->promo_model->checkCodeIsNotConsumed($_POST['code']);
				if(!$checkCodeIsNotConsumed){
					$data = array(
						'code' => $_POST['code'],
						'amount' => $checkCodeIsValid[0]->amount,
						'user_id' => $this->session->userdata('user_id')
					);
					$this->promo_model->addWallet($data);
					$msg = array(
						'status' => 'success',
						'msg' => 'Hey You Got $'.$checkCodeIsValid[0]->amount.' In Your Wallet'
					);
					echo json_encode($msg);
				}else{
					$msg = array(
						'status' => 'failed',
						'msg' => 'You Already Consumed This Code'
					);
					echo json_encode($msg);
				}
		}else{
			$msg = array(
				'status' => 'failed',
				'msg' => 'Invalid Code'
			);
			echo json_encode($msg);
		}
	}


	public function checkLevel(){
		if (!$this->ion_auth->logged_in() || $this->session->userdata('level') != 1)
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
	}
}
