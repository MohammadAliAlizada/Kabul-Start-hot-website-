<?php
	session_start();
	unset($_SESSION["login"]);
	header("location:dashboard.php?logout=don");

?>