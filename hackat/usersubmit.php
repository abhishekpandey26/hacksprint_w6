<?php
session_start();
include_once("classes/model.php");
$data = register();
if(!empty($data)){
    if($data['status']!=1){
        $post = serialize($_POST);
        header("Location:/register.php?status=".$data['status']."&data=".$post);
    }else{
        $_SESSION['username']= $_POST['name'];
        $_SESSION['id']=$data['data'];
        $_SESSION['email']=$_POST['email'];
        $_SESSION['dateofbirth']=$_POST['dateofbirth'];
        header("Location:/hackat/main.php");
    }

    exit();
}else{
    header("Location:/hackat/index.php");
    exit();
}