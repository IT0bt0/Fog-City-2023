<?php
require_once('header.php');
include_once("../backend/db.php");

$user = $_SESSION['email'];

$records = mysqli_query($con,"select e.*, b.num_tick from events e, event_books b where e.id=b.event_id and b.email='$user'");

?>


<style>

.flights{
    margin-top:5%;
    margin-bottom:5%;
}

.card {
border-radius: 4px;
box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.2),
            0 3px 3px -2px rgba(0, 0, 0, 0.14),
            0 1px 8px 0 rgba(0, 0, 0, 0.12);
color: #6d7487;
font-family: 'Montserrat', sans-serif;
text-transform: uppercase;
}
.image {
width: 100%;
border-radius: 4px;
}
.button {
background-color: #3559a5;
border-radius: 4px;
color: #fff;
font-size: 18px;
cursor: pointer;
padding: 10px;
}
.section {
padding: 30px;
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
line-height: 1;
position: relative;
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
margin: 30px 0;
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
width: 49%;
display: inline-block;
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

<div class="container flights">

    <div class="row">

<?php
while($data = mysqli_fetch_array($records))
{
?>
<div class="col-md-4">
    <div class="card">
        <div class="section">
        <p class="section__from section__airport"><?php echo $data['name']?></p>
        <hr>
        <span># of Tickects: <?php echo $data['num_tick'] ?></span>
        <dl class="info">
            <div class="info__section">
            <p>
            <?php echo $data['description']?>
            </p>
            </div>
        </dl>
        <a href="<?php echo $data['location']?>" target="_blank" class="button btn-warning">Open Location</a>        
        </div>
    </div>
</div>
<?php
}
?>


</div>

</div>

<?php
require_once('footer.php');
?>