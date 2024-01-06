<?php
session_start();
include_once("classes/model.php");
if(isloggedin()){
header("location:main.php");
exit();
}

// username and password sent from form
$myemail=stripslashes($_POST['email']);
$mypassword=stripslashes($_POST['password']);
$status = array();
if(!empty($myemail) && !empty($mypassword)){
    $status = validateUser($myemail,$mypassword);
}

if(!empty($status)){
    $_SESSION['username']= $status['name'];
    $_SESSION['id']= $status['id'];
    $_SESSION['email']= $status['email'];
    $date=date_create($status['dateofbirth']);
    $dob= date_format($date,"d-m-Y");
    $_SESSION['dateofbirth']= $dob;
    header("location:/hackat/main.php");
    exit();
}else{
    header("location:/hackat/login.php?status=1");
    die("out");
    exit();
}