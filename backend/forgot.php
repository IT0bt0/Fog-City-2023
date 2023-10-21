<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once("./db.php");
session_start();

if(isset($_POST['forgot']))
{
    $email = $_POST['email'];
    
    $sql2 = "SELECT * FROM users WHERE email='$email'";
	$resultset = mysqli_query($con, $sql2) or die("database error:". mysqli_error($con));
    $row = mysqli_fetch_assoc($resultset);
    
    if($row['email'])
    {
        $password=$row['password'];

        require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';
            $mail = new PHPMailer();
            $mail->CharSet =  "utf-8";
            $mail->IsSMTP();
            // enable SMTP authentication
            //$mail->SMTPDebug = 3;
            $mail->SMTPAuth = true;                  
            // GMAIL username
            $mail->Username = "fogcity21@gmail.com";
            // GMAIL password
            $mail->Password = "kbdgqapxmbjubvdf";
            $mail->SMTPSecure = "ssl";  
            // sets GMAIL as the SMTP server
            $mail->Host = "smtp.gmail.com";
            // set the SMTP port for the GMAIL server
            $mail->Port = "465";
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ]
            ];
            $mail->From='fogcity21@gmail.com';
            $mail->FromName='Fog City';
            $mail->AddAddress($email, 'reciever_name');
            $mail->Subject  =  'Forgot Password?!';
            $mail->IsHTML(true);
            $mail->Body    = 'Hi, Please check your password: '. $password .' , please try to remember after that';
            if($mail->Send())
            {
                echo '<script type="text/javascript"> alert("Email sent successfully!"); window.location.href="../login.php";</script>';  // alert message
            }
            else
            {
            echo "Mail Error - >".$mail->ErrorInfo;
            }
    }
    else {				
	    echo "<script>
            alert('The Email is not exist before!!');
            window.location.href='../login.php';
            </script>";

	}
}
?>