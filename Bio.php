<!DOCTYPE html>
<html>
<head>
<!-- Correcció viewport versions movils -->
<meta name="viewport" content="width=device-width, initial-scale=0.8 user-scalable=no">

<!-- JQuery --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css"href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="./JS/code.js"></script>

<link rel="stylesheet" type="text/css"href="./CSS/reset.css">
<link rel="stylesheet" type="text/css"href="./CSS/style.css">
<link rel="stylesheet" type="text/css"href="./CSS/font.css">

<title> Jaharmony </title>
</head>
<body>

<div class="container-fluid">



<header id="head" style="background-color:black;">
	<div class="row">
		<a href="./index.php">
		<div class="col-lg-5 col-md-5 hidden-xs hidden-sm centrat"> 
				<div class="col-lg-1 col-md-1 hidden-xs hidden-sm col-md-push-1 col-lg-push-1 logo"> 
				</div>
				<div class="col-lg-10 col-md-1 col-sm-1 col-xs-1" style="position:relative;">
					<img class="posicionar" src="./img/titol.png"></img>
				</div>
		</div>
		</a>
		<div class="menupartdreta hidden-xs hidden-sm"> 
			<ul class="menu">
				<li onclick="aboutuslink()"><a>About us</a></li>
				<li onclick="bandlink()"><a>Band</a>
					<ul>
						<li onclick="bio()"><a>Albert Cerdan </a></li>
						<li onclick="bio()"><a> Dani Merme </a></li>
						<li onclick="bio()"><a> Adria Lloret </a></li>
						<li onclick="bio()"><a> Nil Couto </a></li>
					</ul>
				</li>
				<li onclick="concertslink()"><a>Concerts</a></li>
				<li onclick="contactlink()"><a>Contact</a></li>
				<li><img src="./img/facebook.png"></img></li>
				<li><img src="./img/instagram.png"></img></li>
			</ul>
		</div>		
	<div class="col-xs-12 col-sm-12 hidden-lg hidden-md">
		<div class="col-sm-1 col-xs-1 relatiu"> 
			<div class="botomenu" id="botomenuxs">
				<div class="linea" style="top:8px;"></div>
				<div class="linea" style="top:12px;"></div>
				<div class="linea" style="top:16px;"></div>
			</div>
		</div>
		<a href="./index.php"><div class="col-xs-1 col-sm-1 hidden-lg hidden-md col-xs-push-3 col-sm-push-3 logo" style="width:50px;margin-top:3px;"> 
		</div></a>
			<div class="hidden-md hidden-lg logoxs"><img src="./img/facebook.png"></img></div>
			<div class="hidden-md hidden-lg logoxs"><img src="./img/instagram.png"></img></div>
		</div>
	</div>
	
</header>
<div class="row" style="margin-top:120px;">
	<section>
	<div class="shell">
		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 col-lg-offset-1 partesquerra">
			<img class="imatgebio" src="./img/bio.jpg"/>
			<div class="visible-xs visible-sm visible-md visible-lg">
				<div onclick="contactlink()" class="col-lg-10 col-xs-10 col-xs-offset-1 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 botocontactsensewidth" style="margin-top:20px;margin-bottom:20px;"> GET IN TOUCH </div>
			</div>
			<ul class="logosxarxessocials">
				<li><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></li>
				<li><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></li>
				<li><i class="fa fa-2x fa-google-plus-square" aria-hidden="true"></i></li>
				<li><i class="fa fa-2x fa-linkedin-square" aria-hidden="true"></i></li>
			</ul>
			<div class="sotaimatge">
			<svg style="width:24px;height:24px;float:left;" viewBox="0 0 24 24">
			<path fill="#000000" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
			</svg>
			<a href="mailto:AlbertCerdan@example.com" class="mailbio">AlbertCerdan@example.com</a>
			</div>
		</div>
		<div class="col-sm-7 col-lg-6 col-md-7 col-xs-12">
			<h1 class="hidden-xs" style="color:#434345;">Albert Cerdan</h1>
			<p class="hidden-xs rang">Singer</p>
			<h1 class="visible-xs nomartista">Albert Cerdan</h1>
			<p class="visible-xs rang" style="text-align:center;">Singer</p>
			<hr class="hidden-xs">
			<hr class="visible-xs" style="text-align:center;float:none;">
			<p class="intro">
				Albert Cerdan is mod fusce leo cons equat quam faci lisis hend rerit etiam feug iat diam plat ea con gue condi mentum sem per bland it.
			</p>
			<p class="slogan">" justo cum sit lectus cura bitur tellus velit fring illa dict umst "</p>
			<p class="intro">
			Morbi fermentum sociosqu at vestibulum viverra massa netus 	nostra sociis felis sapien purus nulla habi tant pre tium in primis faucibus dic tum libero arcu est 
			laoreet accumsan et bib endum tris tique nullam tem por mus vita potenti.
			</p> 
			
		</div>
	</div>
	</section>	
	</div>

	<div class="row separarmes" >
		<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="height:100px;background-color:black;">
			<div style="text-align:center;margin-top:15px;">
				<img style="margin:5px;width:30px;" src="./img/facebook.png"/>
				<img style="margin:5px;width:30px;" src="./img/instagram.png"/>
			</div>
			<div style="font-family:TheLightFont;font-size:15px;color:white;text-align:center;margin-top:15px;"> © 2018. JAHARMONY AND THE SOUL REBELS. </div>
		</div>
	</div>
</div>

<div id="menupermobils">
	<div class="relative desplegabledalt">
	<div class="bototancar"> <i class="fa fa-times" id="tancarxs" aria-hidden="true"></i> </div>
	<div class="logo" style="width:50px;float:right;"></div>
	</div>
	<div>
	<ul class="ulmenuxs">
		<li onclick="aboutuslink()"><a class="xsbio">About us</a></li>
		<li onclick="bandlink()"><a class="xsbio">Band</a></li>
			<ul>
				<li onclick="bio()">Albert Cerdan</li>
				<li onclick="bio()">Dani Merme</li>
				<li onclick="bio()">Nil Couto</li>
				<li onclick="bio()">Adria Lloret</li>
			</ul>
		<li onclick="concertslink()"><a class="xsbio">Concerts</a></li>
		<li onclick="contactlink()"><a class="xsbio">Contact</a></li>
	</ul>
	</div>
</div>


<div id="amunt">
	<i class="fa fa-arrow-up fletxa" aria-hidden="true"></i>
</div>
</body>
</html>