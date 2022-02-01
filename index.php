<?php

#header('Content-type: text/plain');

error_reporting(0);
set_time_limit(0);
date_default_timezone_set('Asia/Kolkata');


$email = $_GET['email'];

$md5_email = md5($email);
$char_tf = substr($md5_email, 0, 25);
$char_split = chunk_split($char_tf, 5, '-');
$char_remv = substr($char_split, 0, -1);
echo 'e-mail for activation : '.$email.'<br>';
echo 'Sublime Text : '.$char_remv.'<br>';

$vscde_email = 'fd330f6f-3f41-421d-9fe5-de742d0c54c0'.$email;
$md5_email_o = md5($vscde_email);
$char_tf_o = substr($md5_email_o, 0, 25);
$char_split_o = chunk_split($char_tf_o, 5, '-');
$char_remv_o = substr($char_split_o, 0, -1);
echo 'Visual Studio Code : '.$char_remv_o;
?>
