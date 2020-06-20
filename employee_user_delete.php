<?php require_once("connection.php"); ?>

<?php
	if(isset($_GET["employee_id"])){
	
	mysqli_query($con, "DELETE FROM users WHERE employee_id=" . $_GET["employee_id"]);
 		header("location:employee_user.php?delete=done");	
	}
		else {
			header("location:employee_user.php"); 
		}

?>