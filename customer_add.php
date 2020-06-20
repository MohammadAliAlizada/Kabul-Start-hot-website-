<?Php require_once("connection.php");
$goo = require_once("connection.php");
 ?>

  <?php 
    if(isset($_POST["username"])){
        $username = $_POST["username"];
        $f_name = $_POST["f_name"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $enter_date = $_POST["enter_date"];
        $out_date = $_POST["out_date"];
        $room = $_POST["room"];
        $massage = $_POST["massage"];

     if(mysqli_query($con,"INSERT INTO customer VALUES (NULL, '$username', '$f_name', '$phone', '$email', $gender, '$enter_date', '$out_date', '$massage', '$room', '$address')")){
        header("location:customer_list.php?add=done");
     }
     else{
        header("location:customer_add.php?notadd=error");
     }
 


    }

?>



<?Php require_once("dash_top.php"); ?>


<h1 align="center">Add new Customer</h1>
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
			Customer Name
		</span>
		<input type="text" name="username" class="form-control" >
	</div>

	<div class="input-group">
		<span class="input-group-addon">
			Father_Name
		</span>
		<input name="f_name" type="text" class="form-control" id="new">
	</div>

	<div class="input-group">
		<span class="input-group-addon">
			Phone
		</span>
		<input name="phone" type="text" class="form-control" id="new">
	</div>

	<div class="input-group">
		<span class="input-group-addon">
			Email
		</span>
		<input name="email" type="text" class="form-control" id="new">
	</div>

	<div class="input-group">
		<span class="input-group-addon">
			Address
		</span>
		<input name="address" type="text" class="form-control" id="new">
	</div>

	<div class="input-group">
        <span class="input-group-addon"> Gender</span>
        <label ><input checked="checked" type="radio" name="gender" value="0"> Male </lable>
            &nbsp;
        <label><input type="radio" name="gender" value="1">Female</label>
    </div>

    <div class="input-group">
        <span class="input-group-addon">Enter Date:</span>
       <input type="text" name="enter_date" class="form-control">
       
    </div>

    <div class="input-group">
        <span class="input-group-addon">Out Date</span>
       <input type="text" name="out_date" class="form-control">
       
    </div>

   	<div class="input-group">
        <span class="input-group-addon"> Room</span>
        <select name="room" class="form-control">
            <option>Single</option>
            <option>Double</option>
            <option>Suite</option>
        </select>
    </div>

    <div class="input-group">
        <span class="input-group-addon">Massege</span>
       <textarea name="massage" class="form-control"> </textarea>
       
    </div>
	<button type="submit" class="btn btn-primary fit-width">
        <span class="glyphicon glyphicon-log-in">Save </span>  </button>
        

</form>

</div>

<?Php require_once("dash_footer.php"); ?>