<?php 
require 'sessionStart.php';

if ($_SESSION['user_id'] !== 1) {
    header("Location: ./login.php"); 
    exit();
}