<?php
include_once("./db.php");

if(isset($_POST['event'])) {

    $name = $_POST['name'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $place = $_POST['place'];

    session_start();
    $user=$_SESSION['email'];

    $Tfile = $_FILES["file"]["name"];

    $sql = "SELECT * FROM `events` WHERE `name`='$name'";

    $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
    $row = mysqli_fetch_assoc($resultset);

    if(!$row['name'])
    {
        $sql1 = "INSERT INTO events(`name`, `price`, `location`, `description`,`file`,`place`,`user`) VALUES ('$name', '$price', '$location', '$description','$Tfile','$place','$user')";
        mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)."qqq".$sql1);
        
        $last_id = $con->insert_id;

        if (!file_exists('../events/' . $last_id)) {
            mkdir('../events/'. $last_id, 0777, true);
        }
        $dst1 = '../events/' . $last_id . '/' . $Tfile;
    
        $filetmp1 = $_FILES['file']['tmp_name'];

        move_uploaded_file($filetmp1, $dst1);

        echo '<script type="text/javascript"> alert("Event Added Successfully!"); window.location.href="../company/index.php";</script>';  // alert message
    }
    else 
    {				
        echo '<script type="text/javascript"> alert("This exist before!!"); window.location.href="../company/add_event.php";</script>';  // alert message
    }

    

}


else if(isset($_POST['edit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE events set `name`='$name', `location`='$location',`description`='$description',`price`='$price' where `id`='$id'";
        mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);			
        echo '<script type="text/javascript"> alert("Updated Successfully!"); window.location.href="../company/index.php";</script>';  // alert message
}


?>