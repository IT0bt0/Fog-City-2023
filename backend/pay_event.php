<?php

include_once("./db.php");

session_start();

if(isset($_POST['pay'])) {
    
$uid = $_SESSION['email'];
$eid = $_POST['id'];
$tickets = $_POST['num'];

$sql1 = "INSERT INTO event_books(`eid`, `uid`, `tickets`) VALUES ('$eid', '$uid', '$tickets')";
mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)."qqq".$sql1);
echo '<script type="text/javascript"> alert("Paid Successfully!"); window.location.href="../user/index.php";</script>';  // alert message
}


?>