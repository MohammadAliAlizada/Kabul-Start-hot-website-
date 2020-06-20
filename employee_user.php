<?php require_once("connection.php"); ?>


<?php
		$users = mysqli_query($con,"SELECT * FROM users INNER JOIN employee ON employee.employee_id =  users.employee_id ORDER BY employee.employee_id ASC");

			$row_users  = mysqli_fetch_assoc($users);



?>
<?Php require_once("dash_top.php"); ?>
<div class="pull-left">
	<a href="employee_user_add.php " class="btn btn-primary ">
		<span class="glyphicon glyphicon-plus"></span>
		ساختن حساب جدید
	</a>
</div>

<h1 align="center">Add new acount for users</h1>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>User Name</th>
			<th>Acount</th>
			<th>Photo</th>
			<th>Detele</th>
			<th>Change Password</th>
		</tr>
		<?php do { ?>
		<tr>
			<td><?php echo $row_users["employee_id"]; ?></td>
			<td><?php echo $row_users["firstname"] . " " . $row_users["lastname"]; ?></td>
			<td>
				<?php echo $row_users["username"]; ?>
			</td>
			<td><img src="<?php echo $row_users["image"]; ?>" width="60"></td>
			<td>
				<a href="employee_user_delete.php?employee_id=<?php echo $row_users["employee_id"]; ?>" class="delete btn btn-danger">
				<span class="glyphicon glyphicon-trash"> Delete</span>
			</td>
				</a>
				<td>
					<a  href="employee_user_reset.php?employee_id=<?php echo $row_users["employee_id"]; ?>" class="delete btn btn-primary">
				<span class="glyphicon glyphicon-lock">Change password</span>
					</a>
			</td>
			
		</tr>
		<?php } while($row_users = mysqli_fetch_assoc($users)); ?>
	</table>


<?Php require_once("dash_footer.php"); ?>