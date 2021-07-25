<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
    }


    function add_contact($email = NULL){
        if($email == NULL){
        $email = $this->input->post('email');
        }
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.sendinblue.com/v3/contacts',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{"email": "'.$email.'"}',
          CURLOPT_HTTPHEADER => array(
            'content-type: application/json',
            'api-key: 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'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

}
