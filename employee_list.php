<?Php require_once("connection.php"); ?>
<?Php require_once("dash_top.php"); 
		$employee = mysqli_query($con,"SELECT employee_id, firstname, lastname, position, phone, image, shift FROM employee ORDER BY employee_id DESC");

			$rows_employee = mysqli_fetch_assoc($employee);	


?>
<?php if(isset($_GET["add"])) { ?>
	<div class="alert alert-success alert-dismissable" >
		<button class="close" area-hidden="true" data-dismiss="alert">&times;</button> 
		کارمند جدید با موفقیت ثبت گردید!
		
	</div>

<?php } ?>

<?php if(isset($_GET["delete"])) { ?>
	<div class="alert alert-success alert-dismissable">
		<button class="close" area-hidden="true" data-dismiss="aler">&times;</button>
		کارمند مورد نظر با موفقی ت حذف گردید 
	</div>
<?php  }?>

<h1 align="center">emplyee lists of Kabul Star Hotal</h1>
<div class="table table-responsive">
	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>UserName</th>
			<th>LastName</th>
			<th>Position</th>
			<th>Phone</th>
			<th>Shift</th>
			<th>Photo</th>
			<th>Detail</th>
		</tr>

		<?php  do { ?>
		<tr>
	<td><?php echo $rows_employee["employee_id"]; ?></td>
	<td><?php echo $rows_employee["firstname"]; ?></td>
	<td><?php echo $rows_employee["lastname"]; ?></td>
	<td><?php echo $rows_employee["position"]; ?></td>
	<td><?php echo $rows_employee["phone"]; ?></td>
	<td><?php echo $rows_employee["shift"]; ?></td>
	<td><img src="<?php echo $rows_employee["image"]; ?>" width="60"></td>

	<td>
		<a class="search btn btn-primary" href="employee_detail.php?employee_id=<?php echo $rows_employee["employee_id"]; ?>"><span class="glyphicon glyphicon-danger"></span>detail </a></td>
		</tr>
		<?php }while($rows_employee = mysqli_fetch_assoc($employee));  ?>
	</table>
</div>


<?Php require_once("dash_footer.php"); ?>