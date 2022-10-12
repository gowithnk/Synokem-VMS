<?php
include('dbconn.php');
$id=$_GET['id'];

$sql="select * from inquery where id='$id'";
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
    <img src="../images/logo.png" width="200px"><br><br>
<!--Left box in the main form-->
		<div class="slip_left">
			
			<label style="word-spacing: -2px; font-weight:600;">Name : </label>
			<input disabled type="text" name="name" value="<?php echo "$fetch[1]";?>" 
			style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 65px;"><br>
			<label style="word-spacing: -2px; font-weight:600;">Company : </label>
			<input disabled type="text" name="company" value="<?php echo "$fetch[12]";?>" 
			style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 42px;"><br>
			<label style="word-spacing: -2px; font-weight:600;">Purpose : </label>
			<input disabled type="text" name="purpose" value="<?php echo "$fetch[13]";?>" 
			style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 50px;"><br>
			<label style="word-spacing: -2px; font-weight:600;">Person To Meet : </label>
			<input disabled type="text" name="person_meet" value="<?php echo "$fetch[6]";?>" 
			style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 6px;"><br>
			<label style="word-spacing: -2px; font-weight:600;">Entry Time : </label>
			<input disabled type="text" name="in_time" value="<?php echo "$fetch[7]";?>" 
			style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 35px;"><br>
			<label style="word-spacing: -2px; font-weight:600;">Date : </label>
			<input disabled type="text" name="date" value="<?php echo "$fetch[10]";?>" 
			style="height: 6px; width: 50%; border-radius: 5px;border: 1px solid black; padding: 8px; margin-left: 75px;"><br>
			<div class="slip_btn">	
				<input type="button" id="p1" value="Print" style="height: 25px; border-radius: 5px;border: 1px solid black; margin: 0px 10px; padding: 5px 30px; background-color:#d9e8f7; cursor:pointer;" onclick="print1()"><br>
				<a href="../index_1.php">	<input type="button" id="p2" value="Back" style="height: 25px; border-radius: 5px; margin: 0px 10px; border: 1px solid black;padding: 5px 30px; background-color:#d9e8f7; cursor:pointer;" ></a><br>
			</div>
		</div>
<!--Right box in the main form-->
		<div class="slip_right">
			<div class="qr">
				<img src="<?php echo $fetch[9] ?>" height="120px" width="120">
			</div>
            <div class="qr">
				<img src="<?php echo $fetch[4] ?>"  width="120">
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