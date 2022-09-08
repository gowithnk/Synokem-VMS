<?php
session_start();
$e=$_SESSION['qr'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('dbconn.php');
if(isset($_POST['submit']))
{
date_default_timezone_set('Asia/Kolkata');
$name=$_POST['name1'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$department=$_POST['department'];

$in_time=date("h:i");
$date=date("Y-m-d");
$person_meet_id=$_POST['person_meet_id'];

$sql="Select * from emp_table where id=$person_meet_id";
$query=mysqli_query($db,$sql);

$fetch=mysqli_fetch_array($query);
$empEmail = $fetch['email_id'];
$person_meet=$fetch['name'];

$img = $_POST['image'];
    $folderPath = "upload/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.jpeg';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);	


// mail

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'synokem.apps@gmail.com';                     //SMTP username
    $mail->Password   = 'fcrdykbldruvkwfa';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    // if($person_meet == "Niranjan"){
    //     $empEmail = "apps@synokempharma.com";
    // }elseif($person_meet == "Preeti Jain"){
    //     $empEmail = "hr@synokempharma.com";
    // }elseif($person_meet == "Sanjeev kumar"){
    //     $empEmail = "it@synokempharma.com";
    // }else{
    //     $empEmail = "it@synokempharma.com";
    // }
    
    $mail->setFrom('synokem.apps@gmail.com', 'Synokem VMS');
    $mail->addAddress($empEmail, 'Niranjan');     //Add a recipient
    $mail->addAttachment($file);         //Add attachments


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Visitor';
    $mail->Body    = '<b>Name: </b>'. $name . '<br>' . '<b>Gender: </b>' . $gender . '<br>' . '<b>Phone: </b>' . $phone . '<br>' . '<b>Department: </b>' . $department . '<br>' . '<b>Person to Meet: </b>' . $person_meet . '<br>' . '<b>Date: </b>' . $date . '<br>' . '<b>Time: </b>' . $in_time . '<br>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



$sql="insert into inquery(Name,Gender,Phone,Department,Person_Meet,In_Time,Date,qr_code,Image) values(
'$name','$gender','$phone','$department','$person_meet','$in_time','$date','$e','$file')"; 
$query=mysqli_query($db,$sql); 
if($query) 
		{     
			echo"<script>alert('Data Inserted'); 
		     	location.href='slip.php';
					</script>";	
		}
		else
		{
			echo "<br>";
			echo"<script>alert ('error');</script>";
		}
		
}

?>