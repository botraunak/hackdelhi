<?php 
include '../includes/config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$result = query("INSERT INTO users (name, email,password) VALUES(?, ?, ?)", $name,$email,$password );
	if ($result === false)
	{
		apologize("Could not register new user, Email might be already taken");
	}
	else
	{
		$rows = query("SELECT LAST_INSERT_ID() AS id");
		$id = $rows[0]["id"];
		$_SESSION["id"] = $id;
		redirect("/");
	}
}
else{
	render("register.php");	
}
	
 ?>