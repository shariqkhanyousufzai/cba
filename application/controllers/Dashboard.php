<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
        $this->load->model('dashboard_model');
        $this->load->model('investor_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function index()
	{
		$data_channels = [];
		$investChannels = [];
		
		//music , food, sports
		$channels = ['UChE0y4mY1TEsmY0EMKvgFiA','UC5OXEAL2wW7ccJu3gEZnl0w','UCtai6tFt8TcMXTB--lLQ-dQ'];
		$apiKey = 'AIzaSyDSCTumwugVv1cDtipEfGKYYeJ0ps8C6OE';

		foreach ($channels as $key ) {
			$channelId = $key;
			if($key == 'UChE0y4mY1TEsmY0EMKvgFiA'){
				$channel_name = 'music';
			}else if($key == 'UC5OXEAL2wW7ccJu3gEZnl0w'){
				$channel_name = 'food';
			}else if($key == 'UCtai6tFt8TcMXTB--lLQ-dQ'){
				$channel_name = 'sport';
			}
			$json = json_decode((file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$channelId.'&key='.$apiKey)), true);
			$data_channels[$channel_name]['views'] = $json['items'][0]['statistics']['viewCount'];
			$data_channels[$channel_name]['subscriber'] = $json['items'][0]['statistics']['subscriberCount'];

		}

		$this->data['overall_investment'] = $this->dashboard_model->overallInvestment();
		$this->data['pending_investment'] = $this->dashboard_model->pendingInvestment();
		$this->data['completed_investment'] = $this->dashboard_model->completedInvestment();
		$this->data['data_channels'] = $data_channels;	
		$this->data['getPayments']['data'] = $this->investor_model->getPayments($type = NULL,$this->session->userdata('user_id'));
		$this->page_construct('dashboard',$this->data);
	}
}
