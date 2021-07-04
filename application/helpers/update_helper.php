<?php

// get the offline user 
if ( ! function_exists('offline'))
    {
        function offline($user_id)
        {
            $CI =& get_instance();
            $sql_string =
        	'SELECT last_activity FROM ci_sessions WHERE user_data LIKE "%'.get_field('users','email', $user_id).'%"';    
            $query = $CI->db->query($sql_string);
            if ($query->num_rows() > 0) {return FALSE;}
            return TRUE;
        }
    }


// get the specific online user 
if ( ! function_exists('getSpecificOnlineUser'))
    {
        function getSpecificOnlineUser($user_id){
        	$CI =& get_instance();
        	$sql = 'SELECT user_id,`timestamp`,(UNIX_TIMESTAMP() -  `timestamp`) AS seconds FROM ci_sessions WHERE `user_id` = "'.$user_id.'" AND (UNIX_TIMESTAMP() -  `timestamp`) <= 120 AND user_id IS NOT NULL ORDER BY `timestamp` DESC LIMIT 1';
        	$query = $CI->db->query($sql);
            if ($query->num_rows() > 0){
            	return TRUE;
            }
        }
    }
// get the specific online user end


// get all online user
if ( ! function_exists('getAllOnlineUser'))
    {
        function getAllOnlineUser($user_ids){
        	$CI =& get_instance();
        	$sql = 'SELECT user_id,`timestamp`,(UNIX_TIMESTAMP() -  `timestamp`) AS seconds FROM ci_sessions WHERE `user_id` IN ("'.$user_ids.'") AND (UNIX_TIMESTAMP() -  `timestamp`) <= 120 AND user_id IS NOT NULL ORDER BY `timestamp` DESC';
        	$query = $CI->db->query($sql);
            if ($query->num_rows() > 0){
            	return TRUE;
            }
        }
    }

// get all online user end


// get fields 
if ( ! function_exists('get_field'))
    {
        function get_field($table, $field, $id)
        {
            $CI =& get_instance();
            $CI->db->where('id', $id);
            $query = $CI->db->get($table);
            $row = $query->row();
            return $row->$field;
        }
    }
// get fields end

//call session
if ( ! function_exists('callsession'))
    {
        function callsession($param)
        {
            $CI =& get_instance();
            return $CI->session->userdata($param);
        }
    }
//call session end

// get description of group name
if ( ! function_exists('group_description_name'))
    {
        function group_description_name()
        {
            $CI =& get_instance();
            $CI->db->where('name',$CI->session->userdata('group_name'));
            $query = $CI->db->get('groups');
            return $query->result()[0]->description;
        }
    }
// get description of group name end

//check my wallet
// get description of group name
if ( ! function_exists('wallet'))
    {
        function wallet()
        {
            $CI =& get_instance();
            $CI->db->where('user_id',$CI->session->userdata('user_id'));
            $CI->db->where('is_deleted',0);
            $query = $CI->db->get('wallet');
            if($query->num_rows() > 0){
            return $query->result()[0]->amount;

            }
            return 0;
        }
    }
//check my wallet


if ( ! function_exists('group_description_name_by_name'))
    {
        function group_description_name_by_name($name)
        {
            $CI =& get_instance();
            $CI->db->where('name',$name);
            $query = $CI->db->get('groups');
            if($name == 'admin'){
                $color = 'danger';
            }else if($name == 'rita_garrett'){
                $color = 'success';
            }else if($name == 'lori_nichols'){
                $color = 'info';
            }else if($name == 'ramesh_anand'){
                $color = 'secondary';
            }
            return '<span class="badge badge-'.$color.' ">'.$query->result()[0]->description.'</span>';
        }
    }


/*Single Image upload*/
if ( ! function_exists('upload_image'))
{
    function upload_image($file_name,$form_name,$path)
    {

        $CI =& get_instance();
        $config['upload_path']          = $path;
        $config['allowed_types']        = '*';
        $config['file_name']            = $file_name;
       /* $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;*/

        $CI->load->library('upload'); 
        $CI->upload->initialize($config);
        if ( ! $CI->upload->do_upload($form_name))
        {
                $error = array('error' => $CI->upload->display_errors());
                return $error;
        }
        else
        {
                $data = array('upload_data' => $CI->upload->data());

               return true;
        }
    }
}


// encryption method codeigniter
   function encode_url($string, $key="", $url_safe=TRUE)
{
    if($key==null || $key=="")
    {
        $key="tyz_mydefaulturlencryption";
    }
      $CI =& get_instance();
      $ret = $CI->encrypt->encode($string, $key);

    if ($url_safe)
    {
        $ret = strtr(
                $ret,
                array(
                    '+' => '.',
                    '=' => '-',
                    '/' => '~'
                )
            );
    }

    return $ret;
}
  function decode_url($string, $key="")
{
     if($key==null || $key=="")
    {
        $key="tyz_mydefaulturlencryption";
    }
        $CI =& get_instance();
    $string = strtr(
            $string,
            array(
                '.' => '+',
                '-' => '=',
                '~' => '/'
            )
        );

    return $CI->encrypt->decode($string, $key);
}
// encryption method codeigniter end


// get the specific online user 
if ( ! function_exists('checkAccountActivation'))
    {
        function checkAccountActivation(){
            $CI =& get_instance();
            $sql = 'SELECT confirm_email from users where id = '.$CI->session->userdata('user_id').'';
            $query = $CI->db->query($sql);
            if ($query->num_rows() > 0){
                return $query->result()[0]->confirm_email;
            }
        }
    }
// get the specific online user end

 //check team members
if ( ! function_exists('send_mail'))
    { 
        function send_mail($message,$to_email,$subject)
        {
            $env = 'development';
            $CI =& get_instance();
            if($env == 'development'){
                $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465, //465
                'smtp_user' => 'hackbaby1996@gmail.com',
                'smtp_pass' => 'feb23(1996)',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
                );

                // $config = array(
                //     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
                //     'smtp_host' => 'in-v3.mailjet.com',
                //     'smtp_port' => 25,
                //     'smtp_user' => 'a79137cb771f529d726311afc284fcaf', // change it to yours
                //     'smtp_pass' => '157f1bf5a90c20079c2db0cdadee5dd2' , // change it to yours
                //     'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
                //     'mailtype' => 'html', //plaintext 'text' mails or 'html'
                //     'smtp_timeout' => '4', //in seconds
                //     'charset' => 'UTF-8',
                //     'wordwrap' => TRUE
                // );
                $CI->email->initialize($config);
                $CI->email->set_newline("\r\n");
                $CI->email->from('45 Days Challenge');
                $CI->email->to($to_email);
                $CI->email->subject($subject);
                $CI->email->message($message);
                $CI->email->send();
            }else{
                $subject = $subject;
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <webmaster@example.com>' . "\r\n";

                mail($to_email,$subject,$message,$headers);
            }
            
        }
 }