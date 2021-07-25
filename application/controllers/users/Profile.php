<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        $this->load->model('users/profile_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function index()
	{
		$data['user'] = $this->profile_model->getUsers();
		$this->page_construct('user/profile',$data);
	}

	public function update_user(){
		if (isset($_FILES['profile_avatar']['name']) && !empty($_FILES['profile_avatar']['name'])) {
			$_FILES['profile_avatar']['name'] = preg_replace('/\s+/', '_', $_FILES['profile_avatar']['name']);
			$image_extension = pathinfo($_FILES['profile_avatar']['name'], PATHINFO_EXTENSION);
			$path = './assets/uploads/';
			$file_name = $_FILES['profile_avatar']['name'];
			$form_name = 'profile_avatar';
			$check_upload = upload_image($file_name, $form_name, $path);
			$avatar_name = $file_name;
		} else {
			$this->db->select('avatar');
			$this->db->from('users');
			$this->db->where('id', $this->session->userdata('user_id'));
			$result = $this->db->get()->row();
			$avatar_name = $result->avatar;
		}
		$update_data = array(
			'first_name' => $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'address' => $_POST['address'],
			'country' => $_POST['country'],
			'city' => $_POST['city'],
			'zip_code' => $_POST['zip_code'],
			'avatar' => $avatar_name,
		);
		if($this->profile_model->updateUser($update_data)){
			redirect('users/profile');
		}else{
			redirect('users/profile');
		}
		
	}
}
