<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stripe extends CI_Controller {

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
        $this->load->model('payments/stripe_model');
        $this->load->model('investor_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function update_payment($id, $total_amount)
	{
		$str = <<<MY_MARKER
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '4282513065100694');
		fbq('track', 'PageView');
		</script>
		<noscript>
		<img height="1" width="1" style="display:none" 
			src="https://www.facebook.com/tr?id=4282513065100694&ev=PageView&noscript=1"/>
		</noscript>
		<script type="text/javascript">
			console.log("About to fire purchase pixel");
			console.log("Amount = "+ "$total_amount");
			fbq('track', 'Purchase', {currency: "USD", value: "$total_amount"});
			console.log("Fired purchase pixel not firing old lead track pixel");
			alert("Thanks for your payment of $" + "$total_amount");
		</script>
		MY_MARKER;
		echo $str;
		$this->stripe_model->updatePayment($id);
		$this->investor_model->updateWallet();
		$this->session->set_flashdata('message', 'Payment Success');
		redirect('investor/my_investment_list','refresh');
	}
}
