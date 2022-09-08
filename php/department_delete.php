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
		height: 50px;
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
		font-size: 18px;
		color: skyblue;
		padding: 5px;
		text-align:center;
	}
	.delete_data{
	padding: 3px 8px;
    background-color: #fba7a7;
    color: #000000;
    border-radius: 3px;
}
</style>
</head>
<body>
<?php
include('dbconn.php');

$sql="Select * from department";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1'>";
	echo "<tr>";
		echo "<th> Department</th>";
		echo "<th> Delete</th>";
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		echo "<td> $fetch[department_name]</td>";
		echo "<td> <a class='delete_data' href='department_delete_1_0.php?id=$fetch[0]'>Delete</a></td>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="../index_1.php">
<!--<input type="submit" value="Back"> -->
</form></body>