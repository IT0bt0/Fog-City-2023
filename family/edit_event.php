<?php
require_once('header.php');
?>

<style>

	#fh5co-header-section
    {
        background: black;
    }
    .flight {
    font-family: 'Roboto', sans-serif;
    font-size: 100%;
    background: url('https://www.visitsaudi.com/content/dam/saudi-tourism/media/SoundStorm.jpeg') no-repeat center top;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    padding-top:10%;
    padding-bottom:5%;
	}
	div,h2,h3,h6,form,label{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
	ul{list-style:none;margin:0px;padding:0px;}
	.clear{clear:both;}
	.booking-form-w3layouts{box-sizing:border-box;padding:3em 3em;background:rgba(0, 0, 0, 0.78);width:65%;margin:0 auto;}
	h2.sub-heading-agileits,h3.sub-heading-agileits{display:inline-block;text-align:left;font-size:24px;color:#fff;text-transform:capitalize;margin-bottom:.4em;padding:0px 25px 10px 0px;font-weight:400;letter-spacing:2px;border-bottom:2px solid #0091cd;font-family:'Raleway', sans-serif;}
	.radio-section{text-align:left;margin:0.7em 0;}
	.radio-section h6{display:inline;margin-top:10px;color:#0091cd;font-size:19px;text-transform:capitalize;margin-bottom:.7em;font-weight:400;letter-spacing:2px;font-family:'Raleway', sans-serif;}
	.radio-section ul{display:inline;}
	.radio-buttons-w3-agileits li input[type="radio"]{cursor:pointer;}
	.radio-buttons-w3-agileits li label{color:#fff;font-size:13.5px;font-weight:400;letter-spacing:1px;font-family:'Raleway', sans-serif;}
	.booking-form-w3layouts input[type="text"],input[type="time"],.booking-form-w3layouts input[type="email"],.booking-form-w3layouts textarea,select.form-control,input#datepicker{width:100%;font-weight:300;color:#fff;font-size:14px;letter-spacing:1.2px;padding:10px 10px;outline:none;background:rgba(255, 255, 255, 0.27);border:none;border-bottom:1px solid rgba(255, 255, 255, 0.27);box-sizing:border-box;font-family:'Roboto', sans-serif;}
	.booking-form-w3layouts textarea{resize:none;height:80px;}
	.field-agileinfo-spc{margin-bottom:1em;}
	.form-w3-agile-text{width:100%;}
	select.form-control option{background:#000;}
	.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{text-transform:capitalize;background:#0091cd;color:#fff;padding:0.5em 4em;border:none;font-weight:500;font-size:1.2em;margin-top:1em;float:left;outline:none;letter-spacing:1px;-webkit-transition:.5s all;-moz-transition:.5s all;transition:.5s all;cursor:pointer;font-family:'Raleway', sans-serif;}
	.booking-form-w3layouts input[type="submit"]{margin-right:1.5em;background:#d2741c;}
	.booking-form-w3layouts input[type="submit"]:hover{background:#0091cd;color:#fff;}
	.booking-form-w3layouts input[type="reset"]:hover{background:#d2741c;color:#fff;}
	.booking-form-w3layouts ::-webkit-input-placeholder{color:#fff;}
	.booking-form-w3layouts :-moz-placeholder{color:#fff;}
	.booking-form-w3layouts ::-moz-placeholder{color:#fff;}
	.booking-form-w3layouts :-ms-input-placeholder{color:#fff;}
	.booking-form-w3layouts label{font-size:13.5px;color:rgba(255, 255, 255, 0.83);letter-spacing:2px;font-weight:400;position:relative;margin-bottom:5px;display:inline-block;text-transform:capitalize;}
	ul.radio-buttons-w3-agileits li{display:inline-block;margin:0em 2em;}
	@media (max-width:1440px){
	.booking-form-w3layouts{width:73%;}
	}
	@media (max-width:1366px){
	.booking-form-w3layouts{width:75%;}
	}
	@media (max-width:1280px){
	.booking-form-w3layouts{width:80%;}
	}
	@media (max-width:1080px){
	.booking-form-w3layouts{width:83%;padding:2em 2.2em;}
	}
	@media (max-width:1024px){
	h2.sub-heading-agileits,h3.sub-heading-agileits{font-size:22px;padding:0px 20px 7px 0px;}
	.field-agileinfo-spc{margin-bottom:0.8em;}
	.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{padding:0.5em 3em;font-size:1.1em;}
	}
	@media (max-width:768px){
	h2.sub-heading-agileits,h3.sub-heading-agileits{font-size:21px;padding:0px 15px 7px 0px;}
	.radio-section h6{font-size:17px;letter-spacing:1.5px;}
	ul.radio-buttons-w3-agileits li{margin:0em 1em;}
	}
	@media (max-width:667px){
	h2.sub-heading-agileits,h3.sub-heading-agileits{font-size:19px;letter-spacing:1.5px;}
	.booking-form-w3layouts{width:86%;padding:2em 2em;}
	.booking-form-w3layouts input[type="text"],.booking-form-w3layouts input[type="email"],.booking-form-w3layouts textarea,select.form-control,input#datepicker{padding:8px 10px;}
	.field-agileinfo-spc{margin-bottom:0.9em;}
	h2.sub-heading-agileits,h3.sub-heading-agileits{margin-bottom:.6em;}
	}
	@media (max-width:640px){
	.booking-form-w3layouts input[type="submit"]{margin-right:0.7em;}
	}
	@media (max-width:600px){
	.booking-form-w3layouts{width:90%;}
	.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{padding:0.5em 2em;}
	}
	@media (min-width:481px){
	.main-flex-w3ls-sectns{display:-webkit-flex;display:flex;-webkit-justify-content:space-between;justify-content:space-between;}
	.form-w3-agile-text1,.form-w3-agile-text2{flex-basis:48.5%;-webkit-flex-basis:48.5%;}
	}
	@media (min-width:737px){
	.triple-wthree{display:-webkit-flex;display:flex;-webkit-justify-content:space-between;justify-content:space-between;}
	.form-w3-agile-text11,.form-w3-agile-text22,.form-w3-agile-text33{flex-basis:32%;-webkit-flex-basis:32%;}
	}
	@media (max-width:480px){
	ul.radio-buttons-w3-agileits li{margin:0em 0.5em;}
	.radio-section{margin:1.3em 0 .7em;}
	.booking-form-w3layouts{width:85%;}
	ul.radio-buttons-w3-agileits li{margin:1em 0em 0em 0.2em;display:block;}
	.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{font-size:1em;}
	.booking-form-w3layouts textarea{height:60px;}
	.radio-section{margin:1em 0 .7em;}
	}
	@media (max-width:414px){
	.booking-form-w3layouts{width:90%;}
	.booking-form-w3layouts{width:90%;padding:1.5em 1.7em;}
	}
	@media (max-width:384px){
	.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{float:none;}
	.booking-form-w3layouts input[type="submit"]{margin-right:0em;}
	}
	@media (max-width:320px){
	.booking-form-w3layouts{width:93%;padding:1.3em 1.5em;}
	h2.sub-heading-agileits,h3.sub-heading-agileits{font-size:18px;letter-spacing:1.4px;padding:0px 12px 5px 0px;}
	}

</style>

<div class="flight">
    <!-- https://w3layouts.com/airline-booking-form-responsive-widget-template/ -->
    <div class="booking-form-w3layouts">
		<!-- Form starts here -->
		<form action="../backend/add_event.php" method="post">
			<h2 class="sub-heading-agileits">Product Details</h2>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<label for="">Product Name</label>
					<input type="text" name="name" value="Product Name to be edit" required class="form-control">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label for="">Product Price</label>
					<input type="text" name="location" value="Product price here to edit" class="form-control">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<label for="">Product Iamge</label>
					<input type="text" name="name" value="Product Iamge to be edit" required class="form-control">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label for="">Product Description</label>
					<input type="text" name="location" value="Product Description here to edit" class="form-control">
				</div>
			</div>

			<div class="clear"></div>
			<input type="submit" value="Edit" name="event_edit">
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->
	</div>


</div>



<?php
require_once('footer.php');
?>