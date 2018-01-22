<!DOCTYPE html>
<html>
<head>
<!-- Correcció viewport versions movils -->
<meta name="viewport" content="width=device-width, initial-scale=0.9 user-scalable=no">

<!-- JQuery --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css"href="./CSS/reset.css">
<link rel="stylesheet" type="text/css"href="./CSS/style.css">
<link rel="stylesheet" type="text/css"href="./CSS/font.css">

<title> Jaharmony </title>
</head>
<body>
<div class="container">
<header>
	<div class="row">
		<div class="col-lg-5 centrat"> 
				<div class="col-lg-4 col-lg-push-1 logo"> 
				</div>
				<div class="col-lg-7" style="position:relative;">
					<img class="posicionar" src="./img/titol.png"></img>
				</div>
		</div>
		<div class=" col-lg-7 centrat" style="position:relative;margin-left:-35px;"> 
			<ul class="menu">
				<li><a>About us</a></li>
				<li><a>Band</a>
					<ul>
						<li><a>Albert Cerdan </a></li>
						<li><a> Dani Merme </a></li>
						<li><a> Adrià </a></li>
						<li><a> Nil Couto </a></li>
					</ul>
				</li>
				<li><a>Concerts</a></li>
				<li><a>Contact</a></li>
				<li><img src="./img/facebook.png"></img></li>
				<li><img src="./img/instagram.png"></img></li>
			</ul>
		</div>		
	</div>
</header>
<div class="row separar">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
		<div class="item active">
		  <img src="./img/slider/concert1.jpg" alt="Concert">
		</div>

		<div class="item">
		  <img src="./img/slider/concert2.jpg" alt="Concert">
		</div>

		<div class="item">
		  <img src="./img/slider/concert3.jpg" alt="Concert">
		</div>
		
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
</div>
</div>
</body>
</html>