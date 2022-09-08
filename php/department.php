<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DEPARTMENT</title>
<link rel="stylesheet" type="text/css" href="../css/custom.css">
<style>
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


</style>

</head>

<body>
<form action="department_insert.php" method="post" >

<div class="department_main">
	<div class="department_center">
		<span><b style="color:white; font-size:32px; font-family: courier;">ADD DEPARTMENT</span>
		<input type="text" name="department_name" placeholder="Enter Department name" style="font-size: 16px;border-radius: 5px; border: none; padding: 10px;width: 80%;height: 31px;">
		<div class="sign" style="width: 100%;height: 10px; text-align:center;">
			<input type="submit" value="ADD" style="width: 100px; height:32px; border-radius: 20px;border:none; text-align:center; background-color: antiquewhite; cursor: pointer; color: black; font-size: 20px;" ><br><br>
		</div>
	</div>
</div>
</form>


</body>
</html>
