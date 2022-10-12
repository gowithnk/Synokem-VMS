<head>
<title>Report</title>
<script type="text/javascript">
	function print11()
	{
		window.print();
	}

</script>
<style>
	body
	{
		text-align: center;
		background-image: url(../images/black_background.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}

	table
	{

		border-collapse: collapse;
		border:none;
	}
	td
	{
		text-align: center;
		font-size: 14px;
		height: 40px;
		width: 100px;
		color: white;
	}
	.delete_data{
	padding: 3px 8px;
    background-color: #fba7a7;
    color: #ffffff;
    border-radius: 3px;
	text-decoration: none;
	font-size: 14px;
}
	img
	{
		border: none;
	}
	.new th
	{
		font-family: verdana;
		font-size: 14px;
		color: skyblue;
	}

</style>
</head>
<body>

</head>
<body>

<?php
include('dbconn.php');
$from=$_POST['from'];
$to=$_POST['to'];
$sql="Select * from inquery where Date between '$from' and '$to'";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1' class='new'>";
	echo "<tr>";
		echo "<th> Name</th>";
		echo "<th> Gender</th>";
		echo "<th> Phone</th>";
		echo "<th> Email</th>";
		echo "<th> Company</th>";
		echo "<th> Purpose</th>";
		echo "<th> City</th>";
		echo "<th> Address</th>";
		echo "<th> Image</th>";
		echo "<th> Person Meet</th>";
		echo "<th> Department</th>";
		echo "<th> In Time</th>";
		echo "<th> Out Time</th>";
		echo "<th> Date</th>";
		echo "<th> Print</th>";
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		echo "<td> $fetch[Name]</td>";
		echo "<td> $fetch[Gender]</td>";
		echo "<td> $fetch[Phone]</td>";
		echo "<td> $fetch[Vemail]</td>";
		echo "<td> $fetch[Company]</td>";
		echo "<td> $fetch[Purpose]</td>";
		echo "<td> $fetch[City]</td>";
		echo "<td> $fetch[Address]</td>";
		echo "<td> <img src='$fetch[Image]' width='80' height='80'</td>";
		echo "<td> $fetch[Department]</td>";
		echo "<td> $fetch[Person_Meet]</td>";
		echo "<td> $fetch[In_Time]</td>";
		echo "<td> $fetch[Out_Time]</td>";
		echo "<td> $fetch[Date]</td>";
		echo "<td> <a class='delete_data' target='_blank' href='slip-print.php?id=$fetch[0]'>Print</a></td>";
	echo "</tr>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="#">
<input type="button" id="p1" value="Print" style="height: 35px; width: 50%; border-radius: 10px;border-color: black; cursor:pointer;" onclick="print1()"><br><br>
		<a href="report_0.php">	<input type="button" id="p2" value="Back" style="height: 35px; width: 50%; border-radius: 10px;border-color: black; cursor:pointer;" ></a><br><br>
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