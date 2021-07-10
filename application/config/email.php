<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'in-v3.mailjet.com',
    'smtp_port' => 25,
    'smtp_user' => 'a79137cb771f529d726311afc284fcaf', // change it to yours
    'smtp_pass' => '157f1bf5a90c20079c2db0cdadee5dd2' , // change it to yours
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'UTF-8',
    'wordwrap' => TRUE
);

// $config['protocol'] = 'smtp';
// $config['smtp_host'] = 'ssl://smtp.googlemail.com';  
// $config['smtp_port'] = '465';  
// $config['smtp_timeout'] = '30';  
// $config['smtp_user'] = 'hackbaby1996@gmail.com';
// $config['smtp_pass'] = 'feb23(1996)';
// $config['charset'] = 'utf-8';
// $config['mailtype'] = 'html';
// $config['wordwrap'] = TRUE;
// $config['newline'] = "\r\n";