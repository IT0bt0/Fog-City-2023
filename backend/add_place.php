<?php
include_once("./db.php");

if(isset($_POST['placee'])) {

    $name = $_POST['name'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $place = $_POST['place'];

    $Tfile = $_FILES["file"]["name"];

    $sql = "SELECT * FROM `places` WHERE `name`='$name'";

    $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
    $row = mysqli_fetch_assoc($resultset);

    if(!$row['name'])
    {
        $sql1 = "INSERT INTO places(`name`, `price`, `location`, `description`,`file`,`place`) VALUES ('$name', '$price', '$location', '$description','$Tfile','$place')";
        mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)."qqq".$sql1);
        
        $last_id = $con->insert_id;

        if (!file_exists('../places/' . $last_id)) {
            mkdir('../places/'. $last_id, 0777, true);
        }
        $dst1 = '../places/' . $last_id . '/' . $Tfile;
    
        $filetmp1 = $_FILES['file']['tmp_name'];

        move_uploaded_file($filetmp1, $dst1);

        echo '<script type="text/javascript"> alert("Place Added Successfully!"); window.location.href="../admin/index.php";</script>';  // alert message
    }
    else 
    {				
        echo '<script type="text/javascript"> alert("This exist before!!"); window.location.href="../admin/add_event.php";</script>';  // alert message
    }

    

}


else if(isset($_POST['edit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE places set `name`='$name', `location`='$location',`description`='$description',`price`='$price' where `id`='$id'";
        mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);			
        echo '<script type="text/javascript"> alert("Updated Successfully!"); window.location.href="../admin/index.php";</script>';  // alert message
}


?>