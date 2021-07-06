<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $this->load->model('users/user_model');
        $this->load->model('investor_model');
        $this->load->library('form_validation');
        
    }

	public function add_user()
	{
		$data['groups'] = $this->user_model->getGroups();
		$this->load->view('user/adduser',$data);
	}

	public function list_user()
	{
		$this->checkAuth();
		$data['users'] = $this->user_model->getUsers();
		$this->page_construct('user/listuser',$data);
	}

	public function view_user($id)
	{
		$this->checkAuth();
		$decodeId = decode_url($id);
		$data['users'] = $this->user_model->getUsersById($decodeId);
		$this->page_construct('user/viewuser',$data);
	}

	public function edit_user($id)
	{
		$this->checkAuth();
		$decodeId = decode_url($id);
		$data['groups'] = $this->user_model->getGroups();
		$data['users'] = $this->user_model->getUsersById($decodeId);
		$this->page_construct('user/edituser',$data);
	}

	public function delete_user($id){
		$this->checkAuth();
		$decodeId = decode_url($id);
		$getEmail = $this->user_model->getUsersById($decodeId);
		if($this->user_model->deleteUser($decodeId,$getEmail->email)){
			$this->session->set_flashdata('message', 'Deleted Succesfully');
        		redirect(base_url('users/list'),'refresh');
		}else{
			$this->session->set_flashdata('message', 'Failed Please try later');
        	redirect(base_url('users/list'),'refresh');
		}
	}

	public function update_user(){
		$this->checkAuth();
		$this->form_validation->set_rules('email', 'Email', 'required');
	    if ($this->form_validation->run() == TRUE)
        {
        	$updateData = array(
        		'first_name' => $this->input->post('first_name'),
        		'last_name' => $this->input->post('last_name'),
        		'company' => $this->input->post('company'),
        		'phone' => $this->input->post('phone'),
        		'group_name' => $this->input->post('group_name'),
        	);
            if($this->user_model->updateUser($updateData,$this->input->post('user_id'))){
            	$this->session->set_flashdata('message', 'Updated Succesfully');
        		redirect(base_url('users/list'),'refresh');
            }else{
            	$this->session->set_flashdata('message', 'Please try later');
        		redirect(base_url('users/list'),'refresh');
            }
            
        }else{
        	$this->session->set_flashdata('message', validation_errors());
        	redirect(base_url('users/list'),'refresh');
        }
	}

	public function personal_info(){
		$data['getAllUserData'] = $this->investor_model->getAllUserData($this->session->userdata('user_id'));
		$data['getPayments']['data'] = $this->investor_model->getPayments($type = NULL,$this->session->userdata('user_id'));
		$this->page_construct('user/personalinfo',$data);
	}

	public function personal_info_update(){
		$id = $this->input->post('user_id');
		$data = array(
			'full_name' => $this->input->post('full_name'),
			'address' => $this->input->post('address'),
			'country' => $this->input->post('country'),
			'city' => $this->input->post('city'),
			'zip_code' => $this->input->post('zip'),
		);
		$this->user_model->updateUser($data,$id);
		$this->session->set_flashdata('message', 'Succesfully Updated');
		redirect('dashboard');
	}

	function checkAuth(){
		if (!$this->ion_auth->logged_in())
		{            
		$this->session->set_userdata('requested_page', $this->uri->uri_string());
        redirect('/');
   		}
	}
}
