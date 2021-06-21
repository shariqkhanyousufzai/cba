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
        if (!$this->ion_auth->logged_in() || $this->session->userdata('level') != 1)
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function index()
	{
		$data['promos'] = $this->promo_model->getAllPromo();
		$this->page_construct('promo/create',$data);
	}

	public function add(){
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
		if($this->promo_model->deactivePromo($id)){
		$this->session->set_flashdata('message', 'Promo Code Updated');
		}else{
			$this->session->set_flashdata('message', 'Promo Code Update Failed');
		}
		redirect('promo','refresh');
	}
}
