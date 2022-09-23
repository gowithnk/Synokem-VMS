<head>
<title>Delete Employe Details</title>
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
		font-size: 16px;
		color: skyblue;
		padding: 5px;
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

$sql="Select * from emp_table";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1'>";
	echo "<tr>";
		echo "<th> Name</th>";
		echo "<th> Gender</th>";
		echo "<th> Employee Code</th>";
		echo "<th> Phone</th>";
		echo "<th> E-mail</th>";
		echo "<th> Department</th>";
		echo "<th> Delete</th>";
	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
		echo "<td> $fetch[name]</td>";
		echo "<td> $fetch[gender]</td>";
		echo "<td> $fetch[code]</td>";
		echo "<td> $fetch[phone]</td>";
		echo "<td> $fetch[email_id]</td>";
		echo "<td> $fetch[department_name]</td>";
		echo "<td> <a class='delete_data' href='emp_delete2.php?id=$fetch[0]'>Delete</a></td>";

	echo "</tr>";
}
echo "</table>";
echo "<br><br>";
?>
<form action="../index_1.php">
<!--<input type="submit" value="Back" /> -->
</form>


</body>