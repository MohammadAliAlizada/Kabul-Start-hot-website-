<?php require_once("connection.php");?>

<?php
$id = $_GET["employee_id"];



	if(isset($_GET["employee_id"])){
		 mysqli_query($con,"DELETE FROM employee WHERE employee_id=" . $_GET["employee_id"]);
		 header("location:employee_list.php?delete=done");

	}
	else{
		header("location:employee_list.php");
	}

?>