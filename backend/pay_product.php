<?php

include_once("./db.php");

session_start();

if(isset($_POST['pay'])) {
    
$uid = $_SESSION['email'];
$pid = $_POST['id'];
$tickets = $_POST['num'];

$sql1 = "INSERT INTO poduct_books(`pid`, `uid`, `tickets`) VALUES ('$pid', '$uid', '$tickets')";
mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)."qqq".$sql1);
echo '<script type="text/javascript"> alert("Paid Successfully!"); window.location.href="../user/index.php";</script>';  // alert message
}


?>