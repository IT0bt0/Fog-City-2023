<?php
include_once("./db.php");

if(isset($_POST['resturant'])) {

    $name = $_POST['name'];
    $location = $_POST['location'];
    $place = $_POST['place'];
    $description = $_POST['description'];
    $user = $_POST['user'];

    $Tfile = $_FILES["file"]["name"];

    $sql = "SELECT * FROM `resturants` WHERE `name`='$name'";

    $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
    $row = mysqli_fetch_assoc($resultset);

    if(!$row['name'])
    {
        $sql1 = "INSERT INTO resturants(`name`, `location`, `place`, `description`,`file`,`user`) VALUES ('$name', '$location', '$place', '$description','$Tfile','$user')";
        mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)."qqq".$sql1);
        
        $last_id = $con->insert_id;

        if (!file_exists('../resturants/' . $last_id)) {
            mkdir('../resturants/'. $last_id, 0777, true);
        }
        $dst1 = '../resturants/' . $last_id . '/' . $Tfile;
    
        $filetmp1 = $_FILES['file']['tmp_name'];

        move_uploaded_file($filetmp1, $dst1);

        echo '<script type="text/javascript"> alert("Resturant Added Successfully!"); window.location.href="../company/index.php";</script>';  // alert message
    }
    else 
    {				
        echo '<script type="text/javascript"> alert("This exist before!!"); window.location.href="../company/add_resturant.php";</script>';  // alert message
    }

    

}


else if(isset($_POST['edit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $place = $_POST['place'];
    $description = $_POST['description'];

    $sql = "UPDATE resturants set `name`='$name', `location`='$location',`description`='$description',`place`='$place' where `id`='$id'";
        mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);			
        echo '<script type="text/javascript"> alert("Updated Successfully!"); window.location.href="../company/index.php";</script>';  // alert message
}


?>