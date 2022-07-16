<?php
session_start();
require 'login.php';

$acces_token = $_SESSION['access_token'];

echo $acces_token;

?>