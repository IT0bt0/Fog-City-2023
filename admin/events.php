<?php
require_once('header.php');
include_once("../backend/db.php");

$records = mysqli_query($con,"select * from events");

if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM `events` where `id`='$id'";
    mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);			
    echo '<script type="text/javascript"> alert("Deleted Successfully!"); window.location.href="events.php";</script>';  // alert message
}
?>


<style>

    #fh5co-header-section
    {
        background: black;
    }
    .all{
        background:url('https://www.thenationalnews.com/resizer/aJZVaFkZM6bKHYEXVBptFpklJsA=/arc-photo-thenational/eu-central-1-prod/public/AMGW4OMO7N3DZAJN64YX2YRABQ.jpg') no-repeat center center;
        background-size:cover;
        margin-top: 5%;
    }

    .flights{
        padding-top:5%;
        padding-bottom:5%;
    }

    .card {
    border-radius: 4px;
    box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.2),
                0 3px 3px -2px rgba(0, 0, 0, 0.14),
                0 1px 8px 0 rgba(0, 0, 0, 0.12);
    color: #6d7487;
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
    margin-bottom:20px;
    }
    .image {
    width: 100%;
    height: 200px;
    border-radius: 4px;
    }
    .button {
    border-radius: 4px;
    color: #fff;
    font-size: 18px;
    height: 50px;
    padding:5px;
    cursor: pointer;
    }
    .section {
    padding: 30px;
    background-color: white;
    }
    .section::after {
    content: '';
    clear: both;
    display: block;
    }
    .section__airport {
    font-size: 25px;
    display: inline-block;
    width: 100%;
    position: relative;
    text-align:center;
    border: 1px solid;
    margin-top: 1%;
    margin-bottom: 3px;
    }
    .section__from::after {
    content: '';
    background-image: url(https://i.imgur.com/ppufFur.png);
    background-size: contain;
    background-repeat: no-repeat;
    position: absolute;
    right: 0;
    top: 50%;
    height: 20px;
    width: 20px;
    transform: translateX(50%) translateY(-50%);
    }
    .section__to {
    text-align: right;
    }
    .barcode {
    float: left;
    height: 50px;
    width: 150px;
    opacity: .5;
    }
    .info {
    display: block;
    clear: both;
    position: relative;
    }
    .info::before,
    .info::after {
    content: '';
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    height: 1px;
    background-color: #D8E1E5;
    }
    .info::before {
    top: 0;
    }
    .info::after {
    bottom: 0;
    }
    .info__section {
    padding: 30px 0 30px 30px;
    position: relative;
    width: 100%;
    display: inline-block;
    border: 2px groove;
    }
    .info__section--first::after {
    content: '';
    display: block;
    width: 1px;
    background-color: #D8E1E5;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    }
    .info__section dt {
    color: #D8E1E5;
    }
    .info__section dd {
    font-size: 30px;
    }
    .info__section dt:not(:first-child) {
    margin-top: 20px;
    }


</style>

<div class="all">
<div class="container flights">

<div class="row">

    <?php
        while($data = mysqli_fetch_array($records))
        {
    ?>
    <div class="col-md-4">
        <div class="card">

            <div class="section">
                <div class="img"><img src="../events/<?php echo $data['id'] ?>/<?php echo $data['file'] ?>" width="100%" height="250px" alt=""></div>
                <p class="section__from section__airport"><?php echo $data['name'] ?> - <small><?php echo $data['price'] ?>SR</small></p>
                <dl class="info">
                    <div class="info__section">
                        <p>
                        <?php echo $data['description'] ?>
                        </p>
                        <hr>
                        <a href="<?php echo $data['location'] ?>" target="_blank">Location</a>
                    </div>
                </dl>

                <form action="events.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <button type="submit" name="delete" class="button btn-danger btn-block">Delete Event</button>
                </form>
            
            </div>
        </div>
    </div>
    <?php
        }
    ?>

</div>

</div>
</div>

<?php
require_once('footer.php');
?>