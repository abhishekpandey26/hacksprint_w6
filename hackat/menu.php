<?php
session_start();
include_once("classes/model.php"); 
?>
<nav class="nav nav_top">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" width="250"></a>
        </div>
        <div class="nav_side">
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT US</a>
            <a href="login.php">DONATE</a>
            <?php 
            if(isloggedin()){?>
                <a href="logout.php">Logout</a>
           <? }else{ ?>
                <a href="login.php">Login</a>
            <?php } ?>
            <a href="register.php">Register</a>
        </div>
</nav>