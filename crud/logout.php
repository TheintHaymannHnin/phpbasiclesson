<?php
ob_start();

session_start();//session use tine declare

session_destroy();
header('location:login.php');















?>