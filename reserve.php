<?Php require_once("connection.php"); ?>
<?Php require_once("dash_top.php"); ?>
<?Php
if(isset($_POST["customer_id"])) {
	$customer_id = $_POST["customer_id"];
	$room = $_POST["room_no"];
	$reserv = $_POST["reserved"];
	
	mysqli_query($con, "UPDATE room SET reserv=$reserv WHERE room_no=$room");
	
	$result = mysqli_query($con, "INSERT INTO reservation VALUES ($customer_id,$room)");
	

		if($result){
			echo "done";

		 	
		}
		else{
			
		echo "false";
	
		}

		
	}
	
	

	  $room = mysqli_query($con, "SELECT * FROM room WHERE reserv = '0'");
	  	$row_room = mysqli_fetch_assoc($room);

	$customer = mysqli_query($con, "SELECT * FROM customer ORDER BY name ASC");
	  	$row_customer = mysqli_fetch_assoc($customer);

  		
?>


<h1 align="center">Reservation Form</h1>

<div style="margin-left: 10px;" class="col-md-6">
<form method="post" >
     <div class="input-group">

		<span class="input-group-addon">
			Customer Name
		</span>
		<select name="customer_id" class="form-control">
		<?php do { ?>
		<option value="<?php echo $row_customer["customer_id"]; ?>"><?php echo $row_customer["name"]; ?>	
		</option>

	<?php }	while ($row_customer = mysqli_fetch_assoc($customer)); ?>
		</select>

	</div>


		<div class="input-group">

		<span class="input-group-addon">
			Select Room
		</span>
		<select name="room_no" class="form-control">
		<?php do { ?>
		<option value="<?php echo $row_room["room_no"]; ?>"><?php echo $row_room["room_no"]; ?>	
		</option>

	<?php }	while ($row_room = mysqli_fetch_assoc($room)); ?>
		</select>

	</div>

	 <div class="input-group">
        <span class="input-group-addon">Reserv:</span>
        <label ><input <?php if($row_room["reserv"]==0) echo  "checked"; ?> type="radio" name="reserved" value="0"> no </lable>
            &nbsp;
        <label><input <?php if($row_room["reserv"]==1) echo "checked"; ?> type="radio" name="reserved" value="1">yes</label>
    </div>
	


	

	<div>

        <button type="submit" class="btn btn-primary fit-width">
        <span class="glyphicon glyphicon-log-in">Save </span>  </button>
       
    </div>
	
        

</form>

</div>



<?Php require_once("dash_footer.php"); ?>