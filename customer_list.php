<?Php require_once("connection.php"); ?>
<?Php require_once("dash_top.php"); ?>
<?php
		$customer = mysqli_query($con,"SELECT customer_id, name, f_name, phone, email, enter_date, out_date FROM customer ORDER BY customer_id DESC");

			$rows_customer = mysqli_fetch_assoc($customer);	


?>


<?php if(isset($_GET["add"])) { ?>
	<div class="alert alert-success alert-dismissable" >
		<button class="close" area-hidden="true" data-dismiss="alert">&times;</button> 
		New Customer successful don!
		
	</div>

<?php } ?>

<?php if(isset($_GET["delete"])) { ?>
	<div class="alert alert-success alert-dismissable">
		<button class="close" area-hidden="true" data-dismiss="aler">&times;</button>
		Successful deleted
	</div>

<?php  }?>
<h3 align="center">List of Customers </h3>
<div class="table table-responsive">
	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Full Name</th>
			<th>Father Name</th>
			<th>phone</th>
			<th>Email</th>
			<th>Enter Date</th>
			<th>Out DATe</th>
			<th>Detail</th>
		</tr>

		<?php  do { ?>
		<tr>
	<td><?php echo $rows_customer["customer_id"]; ?></td>
	<td><?php echo $rows_customer["name"]; ?></td>
	<td><?php echo $rows_customer["f_name"]; ?></td>
	<td><?php echo $rows_customer["phone"]; ?></td>
	<td><?php echo $rows_customer["email"]; ?></td>
	<td><?php echo $rows_customer["enter_date"]; ?></td>
	<td><?php echo $rows_customer["out_date"]; ?></td>
	
	<td>
		<a class="search btn btn-primary" href="customer_detail.php?customer_id=<?php echo $rows_customer["customer_id"]; ?>"><span class="glyphicon glyphicon-danger"></span> Detail</a></td>
		</tr>
		<?php }while($rows_customer = mysqli_fetch_assoc($customer));  ?>
	</table>
</div>


<?Php require_once("dash_footer.php"); ?>