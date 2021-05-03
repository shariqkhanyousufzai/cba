<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract extends CI_Controller {

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
        $this->load->model('contract_model');
        if (!$this->ion_auth->logged_in() || $this->session->userdata('level') != 1)
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function list()
	{
		$data['contracts'] = $this->contract_model->getAllContract();
		$this->page_construct('contract/list',$data);
	}

	public function view($id)
	{
		$data['contract'] = $this->contract_model->getContractById($id);
		$this->page_construct('contract/view',$data);
	}

	public function save(){
		if($this->contract_model->updateContractById($_POST)){
			$this->session->set_flashdata('message', 'Contract Updated Success');
		}else{
			$this->session->set_flashdata('message', 'Contract Updated Failed');
		}
		redirect('contract/list','refresh');
	}
}
