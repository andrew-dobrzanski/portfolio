<!-- Header include -->
<?php
$title = "Andrew Dobrzanski | Web Development";
$description = "Andrew Dobrzanski web development portfolio";
include 'includes/header.php';

?>

<!-- Content container -->
<div class="container content-container">
	<!-- <h2>Portfolio</h2> -->
	<div id="portfolio-carousel" class="carousel slide" data-ride="carousel">
		<!-- Ciricle Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#portfolio-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#portfolio-carousel" data-slide-to="1"></li>
			<li data-target="#portfolio-carousel" data-slide-to="2"></li>
			<li data-target="#portfolio-carousel" data-slide-to="3"></li>
			<li data-target="#portfolio-carousel" data-slide-to="4"></li>
			<li data-target="#portfolio-carousel" data-slide-to="5"></li>
			<li data-target="#portfolio-carousel" data-slide-to="6"></li>
		</ol>

	  <!-- Slides -->
	  <div id="port-slider" class="carousel-inner" role="listbox">
		<div id="1" class="item active">
		  <img src="./images/portfolio/portfolio-myraspberrypiandi.png" alt="My Raspberry Pi and I Website">
		</div>
		<div class="item">
		  <img src="./images/portfolio/portfolio-dreamland.png" alt="Dreamland Skateparks Website">
		</div>
			<div class="item">
		  <img src="./images/portfolio/portfolio-bacon.png" alt="Bacon Skateboards Website">
		</div>
			<div class="item">
		  <img src="./images/portfolio/portfolio-mouse-theory.png" alt="Mouse Theory Website">
		</div>
			<div class="item">
		  <img src="./images/portfolio/portfolio-maxwoods.png" alt="Maxwoods Floors Website">
		</div>
			<div class="item">
		  <img src="./images/portfolio/portfolio-surf-spot.png" alt="Surf Spot Website">
		</div>
			<div class="item">
		  <img src="./images/portfolio/portfolio-allout-skateboarding.png" alt="All Out Skateboarding Website">
		</div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#portfolio-carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#portfolio-carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>

	<!-- Thumbnail Indicators -->
	<section class="container portfolio">
		<!-- Row 1 -->
		<div class="row">
			<!-- Site 1 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>My Raspberry Pi and I</h3>
				<figure>
					<img src="./images/portfolio/portfolio-myraspberrypiandi.png" alt="" style="background-color: #1397be;" data-target="#portfolio-carousel" data-slide-to="0" class="active" />
				</figure>
				<figcaption>
					<a href="http://www.myraspberrypiandi.site" target="_blank">View Site</a>
				</figcaption>
			</div>
			<!--  Site 2 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>Dreamland Skateparks</h3>
				<figure>
					<img src="./images/portfolio/portfolio-dreamland.png" alt="" style="background-color: #eaa526;" data-target="#portfolio-carousel" data-slide-to="1" />
				</figure>
				<figcaption>
					<a href="http://www.dreamlandskateparks.com" target="_blank">View Site</a>
				</figcaption>
			</div>
			<!-- Site 3 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>Bacon Skateboards</h3>
				<figure>
					<img src="./images/portfolio/portfolio-bacon.png" alt="" style="background-color: #f64343;" data-target="#portfolio-carousel" data-slide-to="2" />
				</figure>
				<figcaption>
					<a href="http://www.baconskateboards.com" target="_blank">View Site</a>
				</figcaption>
			</div>
			<!-- Site 4 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>Mouse Theory</h3>
				<figure>
					<img src="./images/portfolio/portfolio-mouse-theory.png" alt="" style="background-color: #4dc54d;" data-target="#portfolio-carousel" data-slide-to="3" />
				</figure>
				<figcaption>
					<a href="http://www.mousetheoryshop.com" target="_blank">View Site</a>
				</figcaption>
			</div>
		</div><!-- end row -->

		<!-- Row 2 -->
		<div class="row">
			<!-- Site 5 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>MaxWoods</h3>
				<figure>
					<img src="./images/portfolio/portfolio-maxwoods.png" alt="" style="background-color: #a52a2a;" data-target="#portfolio-carousel" data-slide-to="4" />
				</figure>
				<figcaption>
					<a href="http://www.maxwoodsfloors.com" target="_blank">View Site</a>
				</figcaption>
			</div>
			<!-- Site 6 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>All-Out Skateboarding</h3>
				<figure>
					<img src="./images/portfolio/portfolio-allout-skateboarding.png" alt="" style="background-color: #9e509e;" data-target="#portfolio-carousel" data-slide-to="6" />
				</figure>
				<figcaption>
					<a href="http://www.alloutskateboarding.com" target="_blank">View Site</a>
				</figcaption>
			</div>
			<!-- Site 7 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>Surf Spot</h3>
				<figure>
					<img src="./images/portfolio/portfolio-surf-spot.png" alt="" style="background-color: #1c1a1a;" data-target="#portfolio-carousel" data-slide-to="5" />
				</figure>
			</div>
		</div><!-- end .row -->
	</section>
</div><!-- end .content-container -->

<!-- Footer include -->
<?php include 'includes/footer.php';

?>
