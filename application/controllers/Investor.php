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
		$data['getContract'] = $this->investor_model->getContractByLang();
		$data['user'] = $this->investor_model->getCurrentUser();
		$this->page_construct('investor/invest_now',$data);
	}
}
