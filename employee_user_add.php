<?php require_once("connection.php"); ?>
<?php require_once("dash_top.php"); ?>


<?php
	$employee = mysqli_query($con,"SELECT * FROM employee WHERE employee_id NOT IN (SELECT employee_id FROM users)");

		$row_employee = mysqli_fetch_assoc($employee);
		if(isset($_POST["username"])){
			$id = $_POST["employee_id"];
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			$result = mysqli_query($con, "INSERT INTO users VALUES($id, '$username', '$password')");


				mysqli_query($con,"INSERT INTO user_level (employee_id) VALUES ($id)");

				if($result == true){
					 header("location:employee_user.php?add=done");
        }
        else {
            header("location:employee_user_add.php?error=notinserted");
			}
		}


?>

<h3 align="center">Add new account</h3>
<?php 
	if(isset($_GET["error"])){ ?>
<div class="alert alert-danger alert=dismissable">
	Please! try again
	<button class="close" area-hidden="true" data-dismiss="alert">
		&times;</button>
</div>
<?php } ?>

<div style="margin-left: 10px;">
<form method="Post" id="password">
	<div class="input-group">
		<span class="input-group-addon">
			User
		</span>
		<select name="employee_id" class="form-control">
		<?php do { ?>
		<option value="<?php echo $row_employee["employee_id"]; ?>"><?php echo $row_employee["firstname"] . " " . $row_employee["lastname"]; 
		?></option>
		<?php } while($row_employee = mysqli_fetch_assoc($employee)); ?> 
			
		</select>
	</div>

	<div class="input-group">
		<span class="input-group-addon">
			Account Type
		</span>
		<input type="text" name="username" class="form-control" >
	</div>

	<div class="input-group">
		<span class="input-group-addon">
			New Password
		</span>
		<input name="password" type="password" class="form-control" id="new">
	</div>

	<div class="input-group">
		<span class="input-group-addon">
			Confirm-Password
		</span>
		<input type="password"  class="form-control" id="confirm">
	</div>
		<input type="submit" value="Create" class="btn btn-primary">

</form>

</div>

<?php require_once("dash_footer.php"); ?>

