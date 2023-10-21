<?php
require_once('header.php');
?>
<style>
    .form {
    margin: 0px 0 0 0;
    padding: 40px 0px;
    backdrop-filter: blur(5px) brightness(70%);
    background-size: cover;
    background-attachment: fixed;
    height: 25vh;
    }

    * {
        box-sizing: border-box;
    }

    h1{
        color: white;
        font-style: italic;
        text-align: left;
        font-family: Gabriola;
        font-size:55px;
    }

    .form form {
        display: flex;
        flex-direction: column;
        width: 100%;
        border-radius: 5px;
        padding: 20px 10px;
        margin: auto;
        position: absolute;
        top: 10%;
        color:white;
    }

    .form div{
        display: flex;
		justify-content: center;
    }

    .form div label {
        color: #fff;
        font-size: 11px;
        font-family: sans-serif;
        text-align:center;
    }

    .form section, .form .date{
        display: flex;
        flex-direction: column;
        background-color: #ffffff45;
        width: 500px;
        height: 52px;
    }

    .form select, .form input{
        height: 25px;
        padding-left: 2px;
        font-size: 17px;
        background: none;
        border-right: 1px solid;
        margin: 2px;
        color:white;
    }

    option{
        background:black;
    }

    .form .passengers {
        flex-direction: row;
    }

    .form .passengers section{
        flex: 1;
    }

    .form span {
        display: flex;
        flex-direction: row;
        align-items: center;
        height: auto;
        flex: 1;
    }

    .form span label {
        color: #27428c;
        font-size: 16px;
        flex-shrink: 0;
        text-align: center;
    }

    .form .identity section:last-of-type section{
        display: flex;
        flex-direction: row;
    }

    .form input[type="radio"]{
        margin-right: 5px;
    }

    .form input[type="submit"] {
    width: 30%;
    height: 52px;
    background-color: #FF5722;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 20px;
    margin-top: 0;
    margin-left: 0px;
    }

</style>

		<div id="fh5co-page">

			<!-- end:fh5co-header -->
			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
					<li style="background-image: url(../images/slider1.jpeg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<h2>Reserve for Family Vacation</h2>
										<section class="form">
											<form action="search.php" method="post" class="">
											<div class="from-to ">												
												<section>
												<label for="l_name">Your Budget</label>
												<input type="text" name="budget" class="form-control">
												</section>
												<section>
												<label for="l_name">Choose City</label>
												<select name="city" class="form-control" required>
													<option value="بلجرشي">بلجرشي</option>
													<option value="الباحة">الباحة</option>
													<option value="المندق">المندق</option>
													<option value="القرى">القرى</option>
													<option value="العقيق">العقيق</option>
												</select>
												</section>

												<input type="submit" value="Suggestion" />
											</div>
											</form>
											
										</section>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/slider2.jpeg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<h2>Reserve for Family Vacation</h2>
										<section class="form">
											<form action="search.php" method="post" class="">
											<div class="from-to ">												
												<section>
												<label for="l_name">Your Budget</label>
												<input type="text" name="budget" class="form-control">
												</section>
												<section>
												<label for="l_name">Choose City</label>
												<select name="city" class="form-control" required>
													<option value="بلجرشي">بلجرشي</option>
													<option value="الباحة">الباحة</option>
													<option value="المندق">المندق</option>
													<option value="القرى">القرى</option>
													<option value="العقيق">العقيق</option>
												</select>
												</section>

												<input type="submit" value="Suggestion" />
											</div>
											</form>
											
										</section>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/slider3.jpeg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<h2>Reserve for Family Vacation</h2>
										<section class="form">
											<form action="search.php" method="post" class="">
											<div class="from-to ">												
												<section>
												<label for="l_name">Your Budget</label>
												<input type="text" name="budget" class="form-control">
												</section>
												<section>
												<label for="l_name">Choose City</label>
												<select name="city" class="form-control" required>
													<option value="بلجرشي">بلجرشي</option>
													<option value="الباحة">الباحة</option>
													<option value="المندق">المندق</option>
													<option value="القرى">القرى</option>
													<option value="العقيق">العقيق</option>
												</select>
												</section>

												<input type="submit" value="Suggestion" />
											</div>
											</form>
											
										</section>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/slider4.jpeg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<h2>Reserve for Family Vacation</h2>
										<section class="form">
											<form action="search.php" method="post" class="">
											<div class="from-to ">												
												<section>
												<label for="l_name">Your Budget</label>
												<input type="text" name="budget" class="form-control">
												</section>
												<section>
												<label for="l_name">Choose City</label>
												<select name="city" class="form-control" required>
													<option value="بلجرشي" selected>بلجرشي</option>
													<option value="الباحة">الباحة</option>
													<option value="المندق">المندق</option>
													<option value="القرى">القرى</option>
													<option value="العقيق">العقيق</option>
												</select>
												</section>

												<input type="submit" value="Suggestion" />
											</div>
											</form>
											
										</section>
									</div>
								</div>
							</div>
						</div>
					</li>
					
					
					</ul>
				</div>
			</aside>

			
			<div id="fh5co-counter-section" class="fh5co-counters">
				<div class="container">
					<div class="row">
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="1252" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">User Access</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="256" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Places</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="2500" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Events</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="1458" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Rating &amp; Review</span>
						</div>
					</div>
				</div>
			</div>

			<div id="featured-hotel" class="fh5co-bg-color">
				<div class="container">
					
					<div class="row">
						<div class="col-md-12">
							<div class="section-title text-center">
								<h2>Featured Places</h2>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="feature-full-1col">
							<div class="image" style="background-image: url(../images/hotel_feture_1.jpg);">
								<div class="descrip text-center">
									<p><small>For as low as</small><span>$100/night</span></p>
								</div>
							</div>
							<div class="desc">
								<h3>Historical Diriyah - Baha</h3>
								<p>Old Diriyah, a UNESCO World Heritage Site located near Baha, is a historic district that offers tourists a chance to explore Saudi Arabia’s rich cultural heritage and discover its secrets. </p>
								<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
							</div>
						</div>

						<div class="feature-full-2col">
							<div class="f-hotel">
								<div class="image" style="background-image: url(../images/h1.jpeg);">
									<div class="descrip text-center">
										<p><small>For as low as</small><span>$99/night</span></p>
									</div>
								</div>
								<div class="desc">
									<h3>Al-Atawla village</h3>
									<p>It features beautiful rock cravings, prehistoric animals (like the mastodon), a recreation of the Tuwaiq Mountain Range, Islamic writings carved into stone slabs, portraits from the Assyrian Palace, 500-year-old manuscripts of the Qur’an, and more. </p>
									<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
								</div>
							</div>
							<div class="f-hotel">
								<div class="image" style="background-image: url(../images/e1.jpeg);">
									<div class="descrip text-center">
										<p><small>For as low as</small><span>$99/night</span></p>
									</div>
								</div>
								<div class="desc">
									<h3>Raghdan Park</h3>
									<p>The Zoo in the Saudi capital is a wonderful family-friendly destination, home to a diverse range of animal species. Watch the lively monkeys swing through the trees, admire the beautiful gazelles and the majestic large cats, and encounter more exotic creatures from around the world. </p>
									<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div id="hotel-facilities">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title text-center">
								<h2>Events Facilities</h2>
							</div>
						</div>
					</div>

					<div id="tabs">
						<nav class="tabs-nav">
							<a href="#" class="active" data-tab="tab1">
								<i class="flaticon-restaurant icon"></i>
								<span>Restaurant</span>
							</a>
							<a href="#" data-tab="tab2">
							
								<i class="flaticon-car icon"></i>
								<span>Hotels</span>
							</a>
							<a href="#" data-tab="tab3">
								
								<i class="flaticon-swimming icon"></i>
								<span>Forests</span>
							</a>
							<a href="#" data-tab="tab4">
								
								<i class="flaticon-bicycle icon"></i>
								<span>Games</span>
							</a>
						</nav>
						<div class="tab-content-container">
							<div class="tab-content active show" data-tab-content="tab1">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="../images/resturant.jpeg" style="width:100%; height:300px;" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
										<img src="../images/c2.jpeg" style="width:100%; height:300px;" class="img-responsive" alt="Image">
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content active show" data-tab-content="tab2">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="../images/hotel.jpeg" style="width:100%; height:300px;" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
										<img src="../images/hotel1.jpeg" style="width:100%; height:300px;" class="img-responsive" alt="Image">
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content active show" data-tab-content="tab3">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="../images/forest.jpeg" style="width:100%; height:300px;" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
										<img src="../images/forest1.jpeg" style="width:100%; height:300px;" class="img-responsive" alt="Image">
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content active show" data-tab-content="tab4">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="../images/game.jpeg" style="width:100%; height:300px;" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
										<img src="../images/game1.jpeg" style="width:100%; height:300px;" class="img-responsive" alt="Image">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="testimonial">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title text-center">
								<h2>Happy Tourists Says...</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="testimony">
								<blockquote>
									&ldquo;If you’re looking for a top quality places look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
								</blockquote>
								<p class="author"><cite>John Doe</cite></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimony">
								<blockquote>
									&ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and attentive. Highly Recommended&rdquo;
								</blockquote>
								<p class="author"><cite>Rob Smith</cite></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimony">
								<blockquote>
									&ldquo;If you’re looking for a top quality event look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
								</blockquote>
								<p class="author"><cite>Jane Doe</cite></p>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	<!-- END fh5co-page -->





<?php
require_once('footer.php');
?>