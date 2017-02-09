<!DOCTYPE html>
<html>
<!-- Header include -->
<?php
$title= "Andrew Dobrzanski | Front-end Web Developer Specializing in UI/UX Design";
$description = "A personal website.";
include 'includes/header.php';

?>

<!-- Jumbotron -->
<section class="homepage jumbotron">
	<div class="container">
		<h1><span>Front-end Web</span><br><span>Developer</span></h1>
		<p><span>Discover. Design. Develop.</span></p>
		<p>
			<a href="./contact.php">
				<button class="btn-custom btn-3 icon-arrow-right">Contact Me</button>
			</a>
		</p>
	</div>
</section>
<!-- Strip banner -->
<!-- <div class="container strip-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-12">
				<h2>Download This Fully Responsive Template</h2>
				<p>Lorem ipsum dolor sit amet, mea labitur percipit rationibus id. Sumo nobis efficiendi eu duo, ad vix sint habeo suscipiantur. Lorem ipsum dolor sit amet, mea labitur percipit rationibus id. Sumo nobis efficiendi eu duo, ad vix sint habeo suscipiantur.</p>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<a href="/theme/ResponsiveTemplate1.zip" download>
					<button class="progress-button" data-style="rotate-angle-bottom" data-perspective data-horizontal>Download Now</button>
				</a>
			</div>
		</div>
	</div>
</div> -->

<!-- Homepage widgets -->
<section class="container home-content-container">
	<div class="row">
		<!-- Widget 1 -->
		<a href="./web-development.php">
			<article class="col-sm-4 col-xs-12 home-widget text-center">
				<span class="glyphicon glyphicon-fullscreen"></span>
				<h2>Fully Responsive</h2>
				<p>This website is fully responsive and will adjust depending on the screen size of your device. I think that's pretty cool!</p>
			</article>
		</a>

		<!-- Widget 2 -->
		<a href="./web-development.php">
			<article class="col-sm-4 col-xs-12 home-widget text-center">
				<span class="glyphicon glyphicon-cog"></span>
				<h2>Portfolio</h2>
				<p>Check out some of the websites I have worked on. From custom-built sites to some of the most popular content management systems. Browse around, get inspired, and please don't hesitate to contact me with any questions.</p>
			</article>
		</a>

		<!-- Widget 3 -->
		<a href="./contact.php">
			<article class="col-sm-4 col-xs-12 home-widget text-center">
				<span class="glyphicon glyphicon-envelope"></span>
				<h2>Let's Get in Touch</h2>
				<p>Send me a message! I would love to chat with you about any projects, all things web design and development, and/or answer any questions you might have.</p>
			</article>
		</a>
	</div>
</section><!-- end homepage widgets -->

<!-- Welcome area -->
<section class="container welcome-container">
	<div class="row">
		<!-- Welcome-headline -->
		<div class="col-xs-12 welcome-headline">
			<h2 class="uppercase">About Me</h2>
		</div>
	</div>
	<!-- Welcome content -->
	<article class="row welcome-content">
		<!-- Welcome text -->
		<div class="col-sm-6 col-xs-12">
			<p>My name is <strong>David Andrew Dobrzanski</strong> and I am a passionate <strong>Front-end Web Developer</strong> specializing in <strong>UI/UX Design</strong>. I have extensive knowledge in <strong>web development</strong>, <strong>web design</strong>, and <strong>graphic design</strong> with high proficiency in <strong>front-end web development</strong>, <strong>user-centered (UI) design</strong>, various <strong>Content Management Systems</strong>, and <strong>SEO concepts</strong> among other things. I have pixel perfect attention to detail with a hunger for problem solving and constantly perfecting my craft.
			</p>
			<p>Browse around my site, take a look at my portfolio, get inspired, and please don’t hesitate to contact me if you have any questions.
			</p>
			<!-- Message me button -->
			<!-- <div>
				<a href="./contact.html">
					<button class="btn-custom btn-3 icon-arrow-right">Message Me</button>
				</a>
			</div> -->
			<div class="custom-btn-1 left">
				<a href="./contact.php" data-title="Message Me" class="cust-btn-1">Let's Chat</a>
			</div>
		</div>
		<!-- Welcome image -->
		<div class="col-sm-6 col-xs-12">
			<img src="./images/andrew-polaroid.jpg" alt="Andrew Dobrzanski portrait" />
		</div>
	</article>
</section><!-- end welcome area -->

<!-- Footer include -->
<?php include 'includes/footer.php';

?>
