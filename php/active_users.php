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
		width: 200px;
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
		padding: 8px;
        text-align:center;
	}

</style>
</head>
<body>
<?php
include('dbconn.php');

$sql="Select * from inquery";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);

$sql = "SELECT * FROM inquery WHERE Out_Time IS NULL OR Out_Time = '' ";
if ($result = mysqli_query($db, $sql)) {
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    $rowdata = mysqli_fetch_array( $result );
    // Display result
   
 }

if(!empty($rowcount == 0)){
    echo '<h2 style="color:red;">No Active Visitors</h2>';
} else{
    echo '<h2 style="color:#ffffff;">Active Visitors</h2>';
}


    echo "<table align='center' border='1'>";
    if(empty($rowcount == 0)){
	echo "<tr>";
		echo "<th> Visitor Name</th>";
		echo "<th> Phone</th>";
        echo "<th> Log Out</th>";
	echo "</tr>";
}
    
while ($fetch=mysqli_fetch_array($query))
 {
	echo "<tr>";
    if(empty($fetch[8])){ 
    echo "<td> $fetch[Name] </td>";
    echo "<td> $fetch[Phone] </td>";
    echo "<td> <a class='delete_data' href='checkout_0.php'> Log out</a> </td>";
    }
}
echo "</tr>";
echo "</table>";
echo "<br><br>";
?>

<form action="../dashboard.php">
<!--<input type="submit" value="Back" > -->
</form></body>