<?php
session_start();
$con= mysqli_connect('localhost','root','','grocerry');
mysqli_select_db($con,'grocerry');
define('D',"/backend_projects/grocerry");
?>