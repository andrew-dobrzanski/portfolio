<!-- Header include -->
<?php
$title = "Andrew Dobrzanski | Web & Graphic Design";
$description = "Andrew Dobrzanski web & graphic design portfolio";
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
			<!-- <li data-target="#portfolio-carousel" data-slide-to="5"></li> -->
			<!-- <li data-target="#portfolio-carousel" data-slide-to="6"></li> -->
		</ol>

	  <!-- Slides -->
	  <div class="carousel-inner" role="listbox">
			<div class="item active">
		  <img src="./images/portfolio/portfolio-tablet-design.png" alt="...">
		</div>
		<div class="item">
		  <img src="./images/portfolio/portfolio-contactForms.png" alt="...">
		</div>
		<div class="item">
		  <img src="./images/portfolio/portfolio-ad-business-card.png" alt="...">
		</div>
			<div class="item">
		  <img src="./images/portfolio/portfolio-ad-logo.png" alt="...">
		</div>
			<div class="item">
		  <img src="./images/portfolio/portfolio-everwood-logo.png" alt="...">
		</div>
			<!-- <div class="item">
		  <img src="./images/portfolio/portfolio-surf-spot.png" alt="...">
		</div> -->
			<!-- <div class="item">
		  <img src="./images/portfolio/portfolio-allout-skateboarding.png" alt="...">
		</div> -->
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
				<h3>Tablet Design</h3>
				<figure>
					<img src="./images/portfolio/portfolio-tablet-design.png" alt="" style="background-color: #4dc54d;" data-target="#portfolio-carousel" data-slide-to="0" class="active" />
				</figure>
			</div>

			<!--  Site 2 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>Contact Forms</h3>
				<figure>
					<img src="./images/portfolio/portfolio-contactForms.png" alt="" style="background-color: #1397be;" data-target="#portfolio-carousel" data-slide-to="1" />
				</figure>
			</div>

			<!-- Site 3 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>Business Cards</h3>
				<figure>
					<img src="./images/portfolio/portfolio-ad-business-card.png" alt="" style="background-color: #eaa526;" data-target="#portfolio-carousel" data-slide-to="2" />
				</figure>
			</div>

			<!-- Site 4 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>AD Logo</h3>
				<figure>
					<img src="./images/portfolio/portfolio-ad-logo.png" alt="" style="background-color: #f64343;" data-target="#portfolio-carousel" data-slide-to="3" />
				</figure>
			</div>
		</div><!-- end row -->

		<!-- Row 2 -->
		<div class="row">
			<!-- Site 1 -->
			<div class="port-example col-sm-12 col-md-3">
				<h3>Everwood Watch Logo</h3>
				<figure>
					<img src="./images/portfolio/portfolio-everwood-logo.png" alt="" style="background-color: #e1e1e1;" data-target="#portfolio-carousel" data-slide-to="4" />
				</figure>
			</div>
		</div><!-- end .row -->
	</section>
</div><!-- end .content-container -->

<!-- Footer include -->
<?php include 'includes/footer.php';

?>
