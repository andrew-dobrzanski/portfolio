<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name = "viewport" content="width=device-width, initial-scale=1.0">
	<meta name = "description" content="">
	<meta name = "author" content="">
	<title><?php echo "$title" ?></title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="./images/favicon.png" />
	<!-- Bootstrap min css -->
	<link href = "./css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- Custom css -->
	<link href = "./css/custom.css" rel="stylesheet">
	<!-- Buttons css -->
	<link href = "./css/buttons.css" rel="stylesheet">
	<!-- Font awesome css -->
	<link href = "./css/font-awesome.min.css" rel = "stylesheet">
	<!-- Google font styles -->
	<link href ="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,600" rel="stylesheet" type="text/css">
	<!-- jquery styles -->
	<link rel="stylesheet" href="./css/jquery.ui.min.css" />
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- jquery min js -->
	<script type = "text/javascript" src="./js/jquery.ui.min.js"></script>
	<!-- Bootstrap min js -->
	<script src = "./js/bootstrap.min.js"></script>
</head>

<body>
	<div id="main">
		<header>
			<!-- Navigation -->
			<nav class="navbar navbar-fixed-top navbar-inverse">
				<div class="container-fluid container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#navbar-collapse-1">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="./images/andrew-dobrzanski-logo.png" alt="Andrew Dobrzanski logo"></a>
					</div>
					<!-- navbar-collapse-1 -->
					<div id="navbar-collapse-1" class="collapse navbar-collapse">
						<ul class="nav navbar-nav text-uppercase">
							<li><a href="/">Home</a></li>
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu test" role="menu">
									<li><a href="./web-development.php">Web Development</a></li>
									<li><a href="./web-and-graphic-design.php">Web & Graphic Design</a></li>
									<!-- <li><a href="#">Graphic Design</a></li> -->
								</ul>
							</li>
							<li><a href="./about.php">About</a></li>
							<li><a href="./contact.php">Contact</a></li>
						</ul>
					</div><!-- end #navbar-collapse-1 -->
				</div>
			</nav><!-- end navigation -->
		</header>
