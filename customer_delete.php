<?php require_once("connection.php");?>

<?php
$id = $_GET["customer_id"];



	if(isset($_GET["customer_id"])){
		 mysqli_query($con,"DELETE FROM customer WHERE customer_id=" . $_GET["customer_id"]);
		 header("location:customer_list.php?delete=done");

	}
	else{
		header("location:customer_list.php");
	}

?>