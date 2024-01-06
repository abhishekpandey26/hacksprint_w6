<?php
session_start();
session_destroy();
header('Location: /hackat/index.php');
?>
