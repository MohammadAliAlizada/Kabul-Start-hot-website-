
<?php require_once("connection.php"); ?>



	<?php

	if(isset($_GET["customer_id"])){
		$customer = mysqli_query($con,"SELECT * FROM customer WHERE customer_id=" . $_GET["customer_id"]);
		$row_customer = mysqli_fetch_assoc($customer);
	}
	else{
		header("location:customer_list.php");
	}

	?>
	<?php require_once("dash_top.php"); ?>

<div class="pull-left"> 
		<a class="delete btn btn-primary" href="customer_edit.php?customer_id=<?php echo $_GET["customer_id"]; ?>">
			<span class="glyphicon glyphicon-edit"></span>Edit</a>

		<a class="delete btn btn-danger" href="customer_delete.php?customer_id= <?php echo $_GET["customer_id"]; ?>">
			<span class="glyphicon glyphicon-danger"></span>Delete</a>

	</div>

<h3>Details of Customers</h3> 

<table class="table table-striped " style=" width:200px; float: left;  ">
		<tr>
			<td><lable>ID</lable></td>
			<td><?php echo $row_customer["customer_id"]; ?></td>
		</tr>

		<tr>
			<td><lable>Full Name</lable></td>
			<td><?php echo $row_customer["name"]; ?></td>
		</tr>
		</table>

	
		<table class="table table-striped ">

		<tr>  
			<td><lable>Father Name</lable></td>
			<td><?php echo $row_customer["f_name"]; ?></td>
		</tr>

		<tr>
			<td><lable>Phone</lable></td>
			<td><?php echo $row_customer["phone"]; ?></td>
		</tr>

		<tr>
			<td><lable>email</lable></td>
			<td><?php echo $row_customer["email"]; ?></td>
		</tr>

		<tr>
			<td><lable>Gender</lable></td>
			<td><?php echo $row_customer["gender"]==0 ? "Male" : "Female"; ?></td>
		</tr>

		<tr>
			<td><lable>Enter_Date</lable></td>
			<td><?php echo $row_customer["enter_date"]; ?></td>
		</tr>

		<tr>
			<td><lable>Out_Date</lable></td>
			<td><?php echo $row_customer["out_date"]; ?></td>
		</tr>

		<tr>
			<td><lable>Massege</lable></td>
			<td><?php echo $row_customer["massage"]; ?></td>
		</tr>

		<tr>
			<td><lable>Type_Room</lable></td>
			<td><?php echo $row_customer["type_room"]; ?></td>
		</tr>

		<tr>
			<td><lable>Address</lable></td>
			<td><?php echo $row_customer["address"]; ?></td>
		</tr>

		
	</table>

<?php require_once("dash_footer.php"); ?>

