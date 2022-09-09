<?php
include('dbconn.php');
session_start();
$phone=$_SESSION['phone'];
$sql="Select * from inquery where Phone='$phone'";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>SLIP</title>
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
<body>
<form action="../index_1.php" method="post">
	<div class="slip_main">

<!--Left box in the main form-->
		<div class="slip_left">
			<img src="../images/logo.png" width="200px"><br><br>
			<label style="word-spacing: -2px; font-weight:600;">Name : </label>
			<input disabled type="text" name="name" value="<?php echo "$fetch[1]";?>" style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 65px;"><br>
			<!-- <label>Gender : </label>
			<?php 
				if($fetch[2]=="male")
				{
			 ?>
					<input type="text" name="gender" value="Male" style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 47px;">
					<br>
			<?php	}
				else
				{
			?>	
					<input type="text" name="gender" value="Female" style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 47px;">
					<br>
			<?php
				}
			?>
			

			<label>Phone no : </label>
			<input type="text" name="phone" value="<?php echo "$phone";?>" style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 35px;"><br>
			<label>Department : </label>
			<input type="text" name="department" value="<?php echo "$fetch[5]";?>" style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 19px;"><br> -->
			<label style="word-spacing: -2px; font-weight:600;">Whom To Meet : </label>
			<input disabled type="text" name="person_meet" value="<?php echo "$fetch[6]";?>" style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 7px;"><br>
			<label style="word-spacing: -2px; font-weight:600;">Entry Time : </label>
			<input disabled type="text" name="in_time" value="<?php echo "$fetch[7]";?>" style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 33px;"><br>
			<label style="word-spacing: -2px; font-weight:600;">Date : </label>
			<input disabled type="text" name="date" value="<?php echo "$fetch[10]";?>" style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 73px;"><br>
			<div class="slip_btn">	
				<input type="button" id="p1" value="Print" style="height: 25px; border-radius: 5px;border: 1px solid black; margin: 0px 10px; padding: 5px 30px; background-color:#d9e8f7; cursor:pointer;" onclick="print1()"><br>
				<a href="../dashboard.php">	<input type="button" id="p2" value="Back" style="height: 25px; border-radius: 5px; margin: 0px 10px; border: 1px solid black;padding: 5px 30px; background-color:#d9e8f7; cursor:pointer;" ></a><br>
			</div>
		</div>
<!--Right box in the main form-->
		<div class="slip_right">
			<div class="image_box">	
			</div>

			<div class="image_box">	
            
    
			</div>
			<div class="qr">
				<img src="<?php echo $fetch[9] ?>" height="120px" width="120">
			</div>
            <div class="qr">
				<img src="<?php echo $fetch[4] ?>" height="120px" width="120">
			</div>
		</div>
<!--Instruction box in the main form-->
		
		<div class="slip_instruction">
			<h4>Instruction To Follow:</h4>
			<ul>
			<li>Visitors should sign in at the [reception/ gate/ front-office] and show some form of identification.</li>
			<li>Visitors will receive passess and return them to [reception/ gate/ front-office] once the visit is over.</li>
			<li>Employees must always tend to their visitors while they are inside our premises.</li>
			</ul>
		</div>
	</div>
</form>
<script type="text/javascript">
	function print1()
	{
		w=document.getElementById('p1');
		w.style.display='none';
		w1=document.getElementById('p2');
		w1.style.display='none';
		window.print();
		w.style.display='block';
		w1.style.display='block';
	}

</script>
</body>
</html>