<?php
require_once('header.php');
include_once("../backend/db.php");
$url = "http://";
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   
    
// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];

$url_components = parse_url($url);
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);

$id = $params['id'];
session_start();
$user = $_SESSION['email'];

$sql1 = "select b.*, u.username, p.name, p.location from places p, place_books b, users u where p.id=b.place_id and b.id='$id' and u.email=b.email";
$resultset1 = mysqli_query($con, $sql1) or die("database error:". mysqli_error($con));
while($data = mysqli_fetch_array($resultset1)){
?>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Barlow&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .ticket {
        height:80vh;
        margin: auto;
        display: flex;
        background: white;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        justify-content: center;
        align-items: center;
    }

    .left {
        display: flex;
    }

    .image {
        height: 280px;
        width: 350px;
        background-image: url("https://www.gaming.net/wp-content/uploads/2022/02/154264-games-review-hands-on-planet-coaster-console-edition-preview-screens-image3-cdmtvzn1hi-1000x600.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        opacity: 1;
    }

    .admit-one {
        position: absolute;
        color: darkgray;
        height: 250px;
        padding: 0 10px;
        letter-spacing: 0.15em;
        font-size: 12px;
        display: flex;
        text-align: center;
        justify-content: space-around;
        writing-mode: vertical-rl;
        transform: rotate(-180deg);
    }

    .admit-one span:nth-child(2) {
        color: white;
        font-weight: 700;
    }

    .left .ticket-number {
        height: 250px;
        width: 350px;
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
        padding: 10px;
        color: white;
    }

    .ticket-info {
        padding: 10px 20px;
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: space-between;
        align-items: center;
    }

    .date {
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        padding: 5px 0;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .date span:first-child {
        text-align: left;
        width: 100px;
    }

    .date span:last-child {
        text-align: right;
        width: 100px;
    }

    .date .nov-10 {
        color: #d62839;
        font-size: 20px;
        width: 150px;
    }

    .show-name {
        font-size: 20px;
        color: #d62839;
        font-weight: 700;
    }

    .show-name h1 {
        font-size: 36px;
        letter-spacing: 0.05em;
        margin-bottom: 4px;
        color: #93229f;
        font-family: "Saira Stencil One", sans-serif;
    }

    .time {
        color: #505050;
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-weight: 700;
    }

    .time span {
        font-weight: 400;
        color: gray;
    }

    .left .time {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .tagline {
        font-style: italic;
        font-weight: 700;
        font-size: 16px;
    }

    .location {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding-top: 8px;
        border-top: 1px solid gray;
        font-weight: 700;
    }

    .location span:first-child {
        text-align: left;
    }

    .location span:last-child {
        text-align: right;
    }

    .location .separator {
        font-size: 20px;
    }

    .right {
        width: 225px;
        border-left: 1px dashed #404040;
    }

    .right .admit-one {
        color: darkgray;
    }

    .right .admit-one span:nth-child(2) {
        color: #505050;
    }

    .right .right-info-container {
        height: 250px;
        padding: 10px 10px 10px 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
    }

    .right .show-name h1 {
        font-size: 18px;
        font-family: "Barlow", sans-serif;
    }

    .right .time {
        margin-top: 10px;
    }

    .barcode {
        height: 135px;
    }

    .barcode img {
        height: 100%;
    }

    .right .ticket-number {
        color: #505050;
        font-weight: 700;
    }

</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<div class="ticket">
	<div class="left">
		
		<div class="ticket-info">
			<p class="date">
				<span class="nov-10"><?php echo $data['username'] ?></span>
			</p>
			<div class="show-name">
				<h1>#<?php echo $data['name'] ?></h1>
			</div>
			<div class="tagline">
				<p><?php echo $data['num_tick'] ?> Visitors</p>
			</div>
		</div>
	</div>
	<div class="right">
		<div class="right-info-container">
			<div class="show-name">
				<h1>#<?php echo $data['username'] ?></h1>
			</div>
			<div class="time">
				<p><?php echo $data['name'] ?></p>
				<p><?php echo $data['num_tick'] ?> Visitors</p>
			</div>
            <br>
			<div class="barcode">
				<a href="<?php echo $data['location'] ?>" target="_blank" class="btn btn-danger btn-sm">Open Location</a>
			</div>
			<p class="ticket-number">
            #00000<?php echo $data['id'] ?>
			</p>
		</div>
	</div>
</div>


<?php
}
require_once('footer.php');
?>