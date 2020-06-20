
<?php require_once("connection.php"); ?>



	<?php

	if(isset($_GET["employee_id"])){
		$employee = mysqli_query($con,"SELECT * FROM employee WHERE employee_id=" . $_GET["employee_id"]);
		$row_employee = mysqli_fetch_assoc($employee);
	}
	else{
		header("location:employee_list.php");
	}

	?>
	<?php require_once("dash_top.php"); ?>

<div class="pull-left"> 
		<a class="delete btn btn-primary" href="employee_edit.php?employee_id=<?php echo $_GET["employee_id"]; ?>">
			<span class="glyphicon glyphicon-edit"></span>تغییر دادن</a>

		<a class="delete btn btn-danger" href="employee_delete.php?employee_id= <?php echo $_GET["employee_id"]; ?>">
			<span class="glyphicon glyphicon-danger"></span>حذف نموند</a>

	</div>

<h3>جزیات معولومات کارمندان</h3> 

<table class="table table-striped " style=" width:200px; float: left;  ">
		<tr>
			<td><lable>شماره</lable></td>
			<td><?php echo $row_employee["employee_id"]; ?></td>
		</tr>

		<tr>
			<td><lable>نام:</lable></td>
			<td><?php echo $row_employee["firstname"] . " " . $row_employee["lastname"]; ?></td>
		</tr>
		</table>

	<img class="pull-right" width="100" src="<?php echo $row_employee["image"]; ?> ">

	
		<table class="table table-striped ">

		<tr>  
			<td><lable>:جنسیت</lable></td>
			<td><?php echo $row_employee["gender"] ==0 ? "مذکر" : "مونث"; ?></td>
		</tr>

		<tr>
			<td><lable>حالت مدنی</lable></td>
			<td><?php echo $row_employee["marital_status"]==0 ? "مجرد" : "متاحیل"; ?></td>
		</tr>

		<tr>
			<td><lable>سال تولد</lable></td>
			<td><?php echo $row_employee["dob"]; ?> 
				(<?php echo date("Y") - $row_employee["dob"] ?> ساله)</td>
		</tr>

		<tr>
			<td><lable>تحصیلات</lable></td>
			<td><?php echo $row_employee["education"]; ?></td>
		</tr>

		<tr>
			<td><lable>تیلفون</lable></td>
			<td><?php echo $row_employee["phone"]; ?></td>
		</tr>

		<tr>
			<td><lable>آیمل</lable></td>
			<td><?php echo $row_employee["email"]; ?></td>
		</tr>

		<tr>
			<td><lable>آدرس</lable></td>
			<td><?php echo $row_employee["address"]; ?></td>
		</tr>

		<tr>
			<td><lable>وظیفه</lable></td>
			<td><?php echo $row_employee["position"]; ?></td>
		</tr>

		<tr>
			<td><lable>معاش</lable></td>
			<td><?php echo $row_employee["salary"]
			; ?> <small>افغانی</small></td>
		</tr>

		<tr>
			<td><lable>شیفت</lable></td>
			<td><?php echo $row_employee["shift"]; ?></td>
		</tr>

		<tr>
			<td><lable>تاریخ استخدام</lable></td>
			<td><?php echo $row_employee["hire_date"]; ?></td>
		</tr>
	</table>

<?php require_once("dash_footer.php"); ?>

