<?php
require 'vendor/autoload.php';
$stripe_secret = "sk_test_51HgCEqGBlKCKevlCteS062QOMFzlrrgAO2ytbwbLpPC7KnoCH4yuhi6boPB7BtWLNMv622p5qP1ASjANElpOtiys00zPpdoIDX";
\Stripe\Stripe::setApiKey($stripe_secret);

header('Content-Type: application/json');

$YOUR_DOMAIN_SUCCESS = $_POST['success_url'];
$YOUR_DOMAIN_CANCEL =  $_POST['cancel_url'];

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => $_POST['total']*100,
      'product_data' => [
        'name' => 'Channel Investment',
        'images' => ["https://cba.as/wp-content/uploads/2021/04/logo-xs.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN_SUCCESS,
  'cancel_url' => $YOUR_DOMAIN_CANCEL ,
]);

echo json_encode(['id' => $checkout_session->id]);