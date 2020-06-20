<?php
        session_start();
		require_once("connection.php");
		if(isset($_POST["userName"])){
			$username = $_POST["userName"];
			$password = $_POST["password"];

			$login = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'");
			if(mysqli_num_rows($login) ==  1){
                $row_login = mysqli_fetch_assoc($login);
			    $_SESSION["login"] = $row_login["employee_id"];
				header("location:home.php");
			}			
			else{
				header("location:index.php?login=failed");
			}
		}

	
	?>




<?Php require_once("dash_top.php"); ?>
		 
		 
		 <h3 class="text-center">Log in to admin panel of Kabul_star Hotal</h3>
		 <br>
		 <div id="login">
		 	<?php if(isset($_GET["logout"])) { ?>
<div class="alert alert-success alert-dismissable">
		 	<button class="close" data-dismiss="alert" area-hidden="true">
		 		&times;
		 	</button>
		 			You! successfuly logouted!
		 	</div>

<?php } ?>


<?php if(isset($_GET["login"])){ ?>

		 	<div class="alert alert-danger alert-dismissable">
		 	<button class="close" data-dismiss="alert" area-hidden="true">
		 		&times;
		 	</button>
		 			نام یورز یا رمز عبور اشتباه است
		 	</div>
<?php } ?>

<?php if(isset($_GET["notlogin"])){ ?>
		<div class="alert alert-danger alert-dismissable">
		 	<button class="close" data-dismiss="alert" area-hidden="true">
		 		&times;
		 	</button>
		 			شما به سیستم داخل نشده اید
		 	</div>
<?php } ?>



<form method="post"  >
	<div class="input-group">
		<span class="input-group-addon">
			<label>Username :&nbsp</label></span> 
			<input dir="ltr" class="form-control type="text" name="userName"><br>
	</div>
	<div class="input-group"> 
		<span class="input-group-addon"><label>Password :</label></span>
		 <input dir="ltr" class="form-control" type="password" name="password"><br>
	</div>
	<button type="submit" class="btn btn-primary fit-width">
		<span class="glyphicon glyphicon-log-in">Login </span>  </button>
</form>
</div>


<?Php require_once("dash_footer.php"); ?>