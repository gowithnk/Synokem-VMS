<head>
<title>Departments</title>
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
		height: 30px;
		width: 150px;
		color: white;
	}
	img
	{
		border: none;
	}
	th
	{
		font-family: verdana;
		font-size: 20px;
		color: skyblue;
		padding: 5px;
	}

</style>
</head>
<body>
<?php
include('dbconn.php');

$sql="Select * from department";
$query=mysqli_query($db,$sql);
echo "<table align='center'>";
	echo "<tr>";
		echo "<th> Department</th>";
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		echo "<td> $fetch[department_name]</td>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="../index_1.php">
<!--<input type="submit" value="Back" > -->
</form></body>