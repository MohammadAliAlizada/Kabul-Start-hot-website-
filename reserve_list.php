<?Php require_once("connection.php"); ?>
<?Php require_once("dash_top.php"); ?>
<?php
		$reservation = mysqli_query($con,"SELECT * FROM reservation");

			$rows_reservation = mysqli_fetch_assoc($reservation);	

$customer = mysqli_query($con, "SELECT * FROM customer");
		$row_customer = mysqli_fetch_assoc($customer);


?>


<?php if(isset($_GET["add"])) { ?>
	<div class="alert alert-success alert-dismissable" >
		<button class="close" area-hidden="true" data-dismiss="alert">&times;</button> 
		New reservation successful don!
		
	</div>

<?php } ?>

<?php if(isset($_GET["delete"])) { ?>
	<div class="alert alert-success alert-dismissable">
		<button class="close" area-hidden="true" data-dismiss="aler">&times;</button>
		Successful deleted
	</div>

<?php  }?>
<h3 align="center">List of reservations </h3>
<div class="table table-responsive">
	<table class="table table-hover">
		<tr>
			<th>Customer Name</th>
			<th>Room No</th>
			
		</tr>

		<?php  do { ?>
		<tr>
	<td><?php echo $rows_reservation["customer_id"]; ?></td>
	<td><?php echo $rows_reservation["room_no"]; ?></td>

	<td>
		<a class="search btn btn-primary" href="customer_detail.php?customer_id=<?php echo $rows_reservation["customer_id"]; ?>"><span class="glyphicon glyphicon-danger"></span> Detail</a></td>
		</tr>
		<?php }while($rows_reservation = mysqli_fetch_assoc($reservation));  ?>
	</table>
</div>


<?Php require_once("dash_footer.php"); ?>