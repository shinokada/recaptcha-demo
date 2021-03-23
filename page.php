<?php
session_start();

$user=$_POST['uname'];
$pass=$_POST['psw'];
$username="demo";
$password="password";

if(isset($user) && ($user == $username) && ($pass == $password))
{
    $recaptcha_url="https://www.google.com/recaptcha/api/siteverify";
    $secret_key="your-secret-key";
    $recaptcha_response=$_POST['recaptcha_response'];
    $get_recaptcha_response=file_get_contents($recaptcha_url . '?secret='.$secret_key.'&response='.$recaptcha_response);
    $response_json=json_decode($get_recaptcha_response);
    // print_r($get_recaptcha_response->score);
    if($response_json->success == true && $response_json->score>=0.5 && $response_json->action=='submit'){
        // $success_msg="You are in.";
        $_SESSION['secured'] = "Secured";
        header('location: ./index.php');
    }else{
        // $err_msg="Something wrong.";
        // echo $err_msg;
        header("location: ./index.php?err=400");
    }
}
else
{
    header("location: ./index.php?err=400");
}
