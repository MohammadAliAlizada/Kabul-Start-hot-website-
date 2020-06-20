<?php
    require_once("connection.php"); ?>

   <?php 
    if(isset($_POST["firstname"])){
       $firstname = $_POST["firstname"];
       $lastname = $_POST["lastname"];
       $position = $_POST["position"];
       $education = $_POST["education"];
       $phone = $_POST["phone"];
       $email = $_POST["email"];
       $address = $_POST["address"];
       $image = $_POST["image"];
       $gender = $_POST["gender"];
       $hire_date = $_POST["hire_date"];
       $dob = $_POST["dob"];
       $marital = $_POST["marital"];
       $salary = $_POST["salary"];
       $shift = $_POST["shift"];
        

    $path = "images/employee/" . time() . $_FILES["image"]["name"];

        move_uploaded_file($_FILES["image"]["tmp_name"],$path);
       

        if(mysqli_query($con,"INSERT INTO employee VALUES (NULL, '$firstname', '$lastname', '$position', '$education', '$phone', '$email', '$address', '$path', $gender, $hire_date, $dob, $marital, $salary, '$shift')")){

                header("location:employee_list.php?add=done");
        }
        else {
            header("location:employee_add.php?error=notinserted");

        }
   

    }

?>







<?Php require_once("dash_top.php"); ?>

<h1 align="center">Register Employees</h1>

<div style="margin-left: 10px;">
<form method="post" enctype="multipart/form-data">
    <div class="input-group">
        <span class="input-group-addon"> <b>Name</b></span> &nbsp
        <input type="text" class="form-control" name="firstname">
    </div> 

    <div class="input-group">
        <span class="input-group-addon"> <b>LastName</b></span> &nbsp
        <input type="text" class="form-control" name="lastname">
    </div>

    <div class="input-group">
        <span class="input-group-addon"> <b>Gender</b></span> &nbsp
        <label ><input checked="checked" type="radio" name="gender" value="0"> Male</lable>
            &nbsp;
        <label><input type="radio" name="gender" value="1">Female</label>
    </div>

    <div class="input-group">
        <span class="input-group-addon"> <b>Marital Status</b></span> &nbsp
        <label ><input checked="checked" type="radio" name="marital" value="0"> single </lable>
            &nbsp;
        <label><input type="radio" name="marital" value="1">Marride</label>
    </div>


    <div class="input-group">
        <span class="input-group-addon"> <b>Position</b></span> &nbsp
        <input type="text" class="form-control" name="position">
    </div>

    <div class="input-group">
        <span class="input-group-addon"><b>Salary</b></span> &nbsp 
        <input type="text" class="form-control" name="salary">
    </div>


    <div class="input-group">
        <span class="input-group-addon"> <b>Education</b></span> &nbsp
        <select name="education" class="form-control">
            <option>Uneducated</option>
            <option>Graduated</option>
            <option>Bacholer</option>
            <option>Master</option>
            <option>PHD</option>
        </select>
    </div>

    <div class="input-group">
        <span class="input-group-addon"> <b>Phone</b></span> &nbsp
        <input type="text" class="form-control" name="phone">
    </div>

    <div class="input-group">
        <span class="input-group-addon"><b>Email</b></span> &nbsp
        <input type="text" class="form-control" name="email" >
    </div>

    <div class="input-group">
        <span class="input-group-addon"> <b>Address</b></span> &nbsp
       <textarea name="address" class="form-control"></textarea>
    </div>

    <div class="input-group">
        <span class="input-group-addon"> <b>photo</b></span> &nbsp
        <input type="file" name="">
    </div>

    <div class="input-group">
        <span class="input-group-addon"><b>Date of Register</b></span> &nbsp
       <input type="text" name="hire_date" class="form-control">
       
    </div>

        <div class="input-group">
        <span class="input-group-addon"> <b>Date of Bird</b></span> &nbsp
        <select class="form-control" name="dob">
            <?php
                $min = date("Y") - 65 ;
                $max = date("Y") - 18 ;
                for($x=$max; $x>=$min; $x--){
                    echo "<option>$x</option>";
                }?>
        </select>
    </div>

    <div class="input-group">
        <span class="input-group-addon"> <b>Jobe Time</b></span> &nbsp
        <select name="shift" class="form-control">
            <option>Beforenoon</option>
            <option>Afternoon</option>
            <option>Full Time</option>
            <option>Night</option>
        </select>
    </div>
        <button type="submit" class="btn btn-primary fit-width">
        <span class="glyphicon glyphicon-log-in">Register </span>  </button>
        <br>
        <br>


</form>
</div>
<?Php require_once("dash_footer.php"); ?>