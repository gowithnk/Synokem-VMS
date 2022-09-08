<?php
 $phone1=$_SESSION['phone']; 
include('dbconn.php');
$sql="Select * from inquery where Phone='$phone1'";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
?>

<!DOCTYPE html> 
<html>
<head>     
<script>
function onlyAlphabets(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;  //for IE
        else
            charCode = evt.which;  //for firefox
        if (charCode == 32) //for &lt;space&gt; symbol
            return true;
        if (charCode > 31 && charCode < 65) //for characters before 'A' in ASCII Table
            return false;
        if (charCode > 90 && charCode < 97) //for characters between 'Z' and 'a' in ASCII Table
            return false;
        if (charCode > 122) //for characters beyond 'z' in ASCII Table
            return false;
        return true;
    }

</script>
<title>Create pass</title>     
<link rel="stylesheet" href="../css/createpass_1.css">

 </head>
 <body onload='document.form1.text1.focus()'> 
 <form action="new.php" method="post" name="form1">
<div class="back_ground">     
<h1>Create Pass</h1>         
	<div class="left">
		<label style="margin-left:10px;">Name : </label>
		<input type="text" name="name1" onkeypress="return onlyAlphabets(event);"  placeholder="Name" value="<?php echo $fetch ?>"  
		style="width: 50%; height:30px; border-radius: 5px;border:none; padding: 5px;margin: 5px 5px 5px 70px;"><br>           
		<label style="margin-left:10px;">Gender : </label>             
		<input <?php if($fetch=="male"){echo "checked";} ?> type="radio" name="gender" value="male" style="margin-left: 60px;"><label style="margin-left: 5px;">Male</label>             
		<input <?php if($fetch=="female"){echo "checked";} ?> type="radio" name="gender" value="female" style="margin-left: 20px;"><label style="margin-left: 5px;">Female</label><br>
		<label style="margin-left:10px;">Phone : </label>
		<input type="Number" name="phone" readonly="readonly" placeholder="Phone No" value="<?php echo
		$phone1 ?>" style="width: 50%; height: 30px; color: #000000; border-radius: 5px;border:none;
		margin: 5px 5px 5px 68px; padding: 5px;"><br>
		<label style="margin-left: 10px;">Department : </label>                
		<select name="department"  style="width: 50%; height: 30px; border-radius: 5px;border:none; padding: 5px; margin: 5px 28px; color: #000000">
		<?php                          
		include ('dbconn.php');
		$sql="Select * from department";
		$query=mysqli_query($db,$sql);
						
			while($fetch=mysqli_fetch_array($query)) {
			
		?>
		<option value="<?php echo $fetch[1]?>"><?php echo $fetch[1]?></option>
			
		<?php
		}
		?>

		</select><br>
			<label style="margin-left:10px;">Whom To Meet : </label>
				<select name="person_meet_id"   style="border-radius: 5px; height: 30px;color: #000; width: 50%; margin: 5px 10px">
					<?php 
						include ('dbconn.php');
						$sql="Select * from emp_table";
						$query=mysqli_query($db,$sql);
						
						while($fetch=mysqli_fetch_array($query)) {
							?>
							<option value="<?php echo $fetch[0]?>"><?php echo $fetch[1]?></option>

							<?php
						}
					?>
					
				</select>
			<input type="submit" name="submit" value="Create"  style="width: 30%; height: 26px; border-radius: 15px;border:none; margin-left: 130px; padding: 5px; margin-top: 35px; cursor: pointer; color: #000">
			<div class="qr">
				<?php include('qr.php'); 

				$_SESSION['qr']=$e;?>
			</div>
		</div>
		<div class="right">
			<div class="image_box">	
            
					<?php include('livevideo.php'); ?>
				<input type="hidden" id="image_input" name="image">
            
			</div>
			<div class="image_box" style="margin-top:75px">	
            
    
			</div>
			
		</div>
	</div>
</form>
	

</body>
<script>
	function validateform()
	{
		var x= document.forms["myform"]["name1"].value;
		if(x=="")
		{
			alert("Name must be filled out");
			return false;
		}
	}
</script>
</html>
