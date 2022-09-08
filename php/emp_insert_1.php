<?php
include('dbconn.php');


$name=$_POST['name'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$department=$_POST['department'];
$code=$_POST['code'];
$email=$_POST['email'];


$sql="insert into emp_table(name,gender,phone,department_name,code,email_id) values(
'$name','$gender','$phone','$department','$code','$email')"; 
$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Inserted'); 
				location.href='emp_insert_0.php';
					</script>";	
		}
		else
		{
			echo"<script>alert ('error');
				</script>";
		}


?>

