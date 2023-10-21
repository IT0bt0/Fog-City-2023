<?php
include_once("./db.php");

if(isset($_POST['product'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $place = $_POST['place'];

    $Tfile = $_FILES["file"]["name"];

    $sql = "SELECT * FROM `products` WHERE `name`='$name'";

    $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
    $row = mysqli_fetch_assoc($resultset);

    if(!$row['name'])
    {
        $sql1 = "INSERT INTO products(`name`, `price`, `description`,`file`,`place`) VALUES ('$name', '$price', '$description','$Tfile','$place')";
        mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)."qqq".$sql1);
        
        $last_id = $con->insert_id;

        if (!file_exists('../products/' . $last_id)) {
            mkdir('../products/'. $last_id, 0777, true);
        }
        $dst1 = '../products/' . $last_id . '/' . $Tfile;
    
        $filetmp1 = $_FILES['file']['tmp_name'];

        move_uploaded_file($filetmp1, $dst1);

        echo '<script type="text/javascript"> alert("Product Added Successfully!"); window.location.href="../family/index.php";</script>';  // alert message
    }
    else 
    {				
        echo '<script type="text/javascript"> alert("This exist before!!"); window.location.href="../family/add_product.php";</script>';  // alert message
    }

    

}


else if(isset($_POST['edit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE products set `name`='$name',`description`='$description',`price`='$price' where `id`='$id'";
        mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);			
        echo '<script type="text/javascript"> alert("Updated Successfully!"); window.location.href="../family/index.php";</script>';  // alert message
}


?>