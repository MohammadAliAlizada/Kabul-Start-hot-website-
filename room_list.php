<?Php require_once("connection.php"); ?>
<?php
		$room = mysqli_query($con,"SELECT * FROM room ORDER BY room_no DESC");

			$rows_room = mysqli_fetch_assoc($room);	


?>
<?Php require_once("dash_top.php"); ?>

<h1 align="center">Welcome to amin panel of our website</h1>
<div class="table table-responsive">
	<table class="table table-hover">
		<tr>
			<th>Room No</th>
			<th>Reserve</th>
			
		</tr>

		<?php  do { ?>
		<tr>
	<td><?php echo $rows_room["room_no"]; ?></td>
	<td><?php echo $rows_room["reserv"]==0 ? 'not reserve' : 'reserved'; ?></td>
	
		</tr>
		<?php }while($rows_room = mysqli_fetch_assoc($room));  ?>
	</table>
	<a class="search btn btn-primary" href="reserve.php"><span class="glyphicon glyphicon-danger"></span> reserve</a>
</div>

<?Php require_once("dash_footer.php"); ?>