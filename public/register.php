<?php 
include '../includes/config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
	print_r($_POST);
}
else{
	render("register.php");	
}
	
 ?>