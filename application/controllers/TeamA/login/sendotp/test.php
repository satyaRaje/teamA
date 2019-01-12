<?php
require __DIR__ . '/vendor/autoload.php';

use sendotp\sendotp;

function send_message($m,$p)
{
    $otp = new sendotp('237714AeYUvVea05b9cc310', "Welcome to Ipro3d,OTP is {{otp}}. Please Do  not share Me.");

   $s= $otp->send("91".$m, 'IPRO3D',$p);
    return $s;
}
// print_r($otp->retry('91998153xxxx','text'));
// print_r($otp->verify('91998153xxxx', '3051'));

?>
