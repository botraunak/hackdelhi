<?php 
include '../includes/config.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$email = $_POST["email"];
	$password = $_POST["password"];
	$result = query("SELECT id,email,password FROM users WHERE email = ?", $email );
	if ($result === false)
	{
		apologize("Could not find the user, Email might not be registered");
	}
	else
	{
		
			if($result[0]["password"] == $password){
			$id = $result[0]["id"];
			$_SESSION["id"] = $id;
			redirect("/");
		}
	}
}else{
	render("login.php");

}
 ?>