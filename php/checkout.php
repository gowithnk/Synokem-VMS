<!DOCTYPE html>
<html>
<head>
	<title>Check Out</title>
	 <script>        
           function phoneno(){          
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
       </script>
	<style>
		.main
		{
			text-align: center;
		}
	</style>
</head>
<body>
<form action="checkout_1.php" method="post">
 	<div class="main">
        <h2>Phone Number</h2>
        <input id="phone" placeholder="Please enter exactly 10 digits" type="text" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="phoneno()" maxlength="10" name="phone" style="width: 300px; height: 35px; border-radius: 5px; padding: 10px; color: black;"><br><br>                
        <input type="submit" value="Checkout" style="width: 150px; height: 25px; border-radius: 10px; color: black; ">                
    </div>
</form>
</body>
</html>

