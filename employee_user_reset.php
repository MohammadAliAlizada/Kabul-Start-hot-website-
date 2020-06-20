<?php require_once("connection.php"); ?>

<?php require_once("dash_top.php"); ?>
<?php
		if(isset($_POST["new"])){
			$pass = $_POST["new"];
			$result = mysqli_query($con, "UPDATE users SET password=$pass WHERE employee_id=" . $_GET["employee_id"]);
			
			if($result) {
				
				 header("location:employee_user.php?reset=done");
			}
			else{
				header("location:employee_user_reset.php?error=accured 
					&employee_id =" . $_GET["employee_id"]);
			}
		}

?>


<h3>تغییر رمز کارمند</h3>
<form method="post" id="passowrd">
	<div class="input-group">
		<span class="input-group-addon">رمز جدید</span>
			<input type="password" name="new" class="form-control" id="new">
		</div>

		<div class="input-group">
		<span class="input-group-addon">تکرار رمز جدید</span>
			<input type="password"  class="form-control" id="confirm">
		</div>

		<input type="submit" value="تغییر رمز"  class="btn btn-primary">
</form>
<?php require_once("dash_footer.php"); ?>

