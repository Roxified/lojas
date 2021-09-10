<?php  ob_start(); session_start(); require 'db/config.php'; require 'db/functions.php';
// if(!isset($_SESSION['user_acct'])){ header('location:index.php');}

$curl = curl_init();

//$user =  $_SESSION['usercode'];
$amount = $_SESSION['ser_amt']*100;
$email  =  $_SESSION['user_email'];

// session_destroy();
// die();
// $_SESSION['pay_ref'] = rand();
// $amount = 20000;
// $email  =  'famous@gmail.com';

// sk_live_dd2369c9f75ed6482326823da282becbd154e233
// sk_test_9595d4bbb11005da8ec74118e55c91776549f012
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'email'=>$email,
    'reference'=>$_SESSION['ser_id'],
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_live_dd2369c9f75ed6482326823da282becbd154e233", //replace this with your own test key
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);

if(!$tranx->status){
  // there was an error from the API
  //print_r('API returned error: ' . $tranx['message']);
}

// comment out this line if you want to redirect the user to the payment page
//print_r($tranx);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $tranx['data']['authorization_url']);

$proceed = $tranx['data']['authorization_url'];
print "<script> window.location='$proceed';    </script>";

?>








