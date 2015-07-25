<?php 
	include '../includes/config.php';
	if (!isset($_GET["subject"])) {
		render("courseware.php");
	}
	else if (isset($_GET["subject"]) && !isset($_GET["book"])){
		render("displaycoursebooks.php");
	}
	else{
		echo "DONE BRO DONE";
	}
	
 ?>