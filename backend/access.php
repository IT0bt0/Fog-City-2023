<?php
include_once("./db.php");
session_start();

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

    $sql2 = "SELECT * FROM users WHERE `email`='$email' and `password`='$password'";
	$resultset = mysqli_query($con, $sql2) or die("database error:". mysqli_error($con));
	$row = mysqli_fetch_assoc($resultset);

    if($row['email']){
        if($row['type'] == '3')
        {
            $_SESSION['email']= $email;
            $_SESSION['login']='family';
            echo '<script type="text/javascript"> alert("Login Seccessfully!"); window.location.href="../family/index.php";</script>';  // alert message
        }
        if($row['type'] == '2')
        {
            $_SESSION['email']= $email;
            $_SESSION['login']='company';
            echo '<script type="text/javascript"> alert("Login Seccessfully!"); window.location.href="../company/index.php";</script>';  // alert message
        }
        if($row['type'] == '1')
        {
            $_SESSION['email']= $email;
            $_SESSION['login']='user';
            echo '<script type="text/javascript"> alert("Login Seccessfully!"); window.location.href="../user/index.php";</script>';  // alert message
        }
        else if($row['type'] == '0')
        {
            $_SESSION['email']= $email;
            $_SESSION['login']='admin';
            echo '<script type="text/javascript"> alert("Login Seccessfully!"); window.location.href="../admin/index.php";</script>';  // alert message
        }
       
	}
    else {				
	    echo "<script>
            alert('This user is not exist!');
            window.location.href='../login.php';
            </script>";

	}
}

else if(isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $type = $_POST['type'];    

    $sql = "SELECT * FROM `users` WHERE `email`='$email'";

    $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
    $row = mysqli_fetch_assoc($resultset);

    if(!$row['email']){	
        $sql = "INSERT INTO users(`username`, `email`, `phone`, `password`, `type`) VALUES ('$username', '$email', '$phone', '$password', '$type')";
        mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);			
        echo '<script type="text/javascript"> alert("Registered Successfully!"); window.location.href="../login.php";</script>';  // alert message
    }
    else {				
        echo '<script type="text/javascript"> alert("This exist before!!"); window.location.href="../login.php";</script>';  // alert message
    }
    
}
?>