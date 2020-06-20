<?php
    require_once("connection.php"); ?>

   <?php 
  $customer = mysqli_query($con, "SELECT * FROM customer WHERE customer_id=" . $_GET["customer_id"]);
  $row_customer = mysqli_fetch_assoc($customer);

    if(isset($_POST["name"])){
       $name = $_POST["name"];
       $f_name = $_POST["f_name"];
       $phone = $_POST["phone"];
       $email = $_POST["email"];
       $gender = $_POST["gender"];
       $enter_date = $_POST["enter_date"];
       $out_date = $_POST["out_date"];
       $massage = $_POST["massage"];
       $type_room = $_POST["type_room"];
       $address = $_POST["address"];

        if(mysqli_query($con,"UPDATE customer SET name='$name', f_name='$f_name', phone='$phone', email='$email', gender=$gender, enter_date=$enter_date, out_date=$out_date, massage='$massage', type_room='$type_room', address='$address' WHERE customer_id=" . $_GET["customer_id"])){

                header("location:customer_list.php?edit=done");
        } 
        else {
            header("location:customer_edit.php?error=notupdate");

        }

            
}        
   

  

?>







<?Php require_once("dash_top.php"); ?>

<h1 align="center">Updates Customers</h1>

<div style="margin-left: 10px;">
<form method="post" enctype="multipart/form-data">
    <div class="input-group">
        <span class="input-group-addon"> <b>Full Name</b></span> &nbsp
        <input value="<?php echo $row_customer["name"]; ?>"  type="text" class="form-control" name="name">
    </div> 

    <div class="input-group">
        <span class="input-group-addon"> <b>Father Name</b></span> &nbsp
        <input value="<?php echo $row_customer["f_name"]; ?>"  type="text" class="form-control" name="f_name">
    </div>

    <div class="input-group">
        <span class="input-group-addon"> <b>Phone</b></span> &nbsp
        <input value="<?php echo $row_customer["phone"]; ?>" type="text" class="form-control" name="phone">
    </div>

    <div class="input-group">
        <span class="input-group-addon"><b>Email</b></span> &nbsp
        <input value="<?php echo $row_customer["email"]; ?>" type="text" class="form-control" name="email" >
    </div>


    <div class="input-group">
        <span class="input-group-addon"> <b>Gender</b></span> &nbsp
        <label ><input <?php if($row_customer["gender"] == 0) echo "checked"; ?>  type="radio" name="gender" value="0"> Male</lable>
            &nbsp;
        <label><input <?php if($row_customer["gender"] == 1) echo "checked"; ?> type="radio" name="gender" value="1">Female</label>
    </div>



    <div class="input-group">
        <span class="input-group-addon"> <b>Enter_Date</b></span> &nbsp
        <input value="<?php echo $row_customer["enter_date"]; ?>" type="text" class="form-control" name="enter_date">
    </div>

    <div class="input-group">
        <span class="input-group-addon"><b>Out_Date</b></span> &nbsp 
        <input value="<?php echo $row_customer["out_date"]; ?>" type="text" class="form-control" name="out_date">
    </div>


    <div class="input-group">
        <span class="input-group-addon"> <b>Type_of Room</b></span> &nbsp
        <select name="type_room" class="form-control">
            <option <?php if($row_customer["type_room"]=="Single") echo "selected"; ?>>Single</option>
            <option <?php if($row_customer["type_room"]=="Double") echo "selected"; ?>>Double</option>
        </select>
    </div>

    
    <div class="input-group">
        <span class="input-group-addon"> <b>Address</b></span> &nbsp
       <textarea  name="address" class="form-control">
            <?php echo $row_customer["address"]; ?>
       </textarea>
    </div>

    <div class="input-group">
        <span class="input-group-addon"> <b>Massege</b></span> &nbsp
       <textarea  name="massage" class="form-control">
            <?php echo $row_customer["massage"]; ?>
       </textarea>
    </div>


        <button type="submit" class="btn btn-primary fit-width">
        <span class="glyphicon glyphicon-log-in">Update </span>  </button>
        <br>
        <br>


</form>
</div>
<?Php require_once("dash_footer.php"); ?>