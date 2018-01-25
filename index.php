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

<link rel="stylesheet" type="text/css"href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="./JS/code.js"></script>

<link rel="stylesheet" type="text/css"href="./CSS/reset.css">
<link rel="stylesheet" type="text/css"href="./CSS/style.css">
<link rel="stylesheet" type="text/css"href="./CSS/font.css">

<title> Jaharmony </title>
</head>
<body>
<div class="container-fluid">

<header id="head">
	<div class="row">
		<div class="col-lg-5 col-md-5 centrat"> 
				<div class="col-lg-1 col-md-1 col-md-push-1 col-lg-push-1 logo"> 
				</div>
				<div class="col-lg-10 col-md-1" style="position:relative;">
					<img class="posicionar" src="./img/titol.png"></img>
				</div>
		</div>
		<div class="menupartdreta"> 
			<ul class="menu">
				<li><a>About us</a></li>
				<li><a>Band</a>
					<ul>
						<li><a>Albert Cerdan </a></li>
						<li><a> Dani Merme </a></li>
						<li><a> Adria </a></li>
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

<div class="row hidden-xs hidden-sm">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>  
    </ol>
	  <!-- Wrapper for slides -->
	  <div id="wrapper" class="carousel-inner">
		<div class="item active relatiu">
		  <div class="col-lg-12 imatgesfons" style="background-image:url('./img/slider/concert2.jpg');"></div>
		  <div class="col-lg-12 col-md-12" style="position:absolute;top:0px;">
		  <div class="col-lg-12 col-md-12 titolslide"> WELCOME TO  <a style="color:#44c44d;text-decoration:none;">JAH</a><a style="color:#f2ed54;text-decoration:none;">ARM</a><a style="color:#b22323;text-decoration:none;">ONY</a> </div>
			<div class="col-lg-8 col-md-6 col-lg-push-2 col-md-push-3 descripcioslide"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
			totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
			voluptas. </div>
			<div class="col-lg-12 col-md-12 posicioboto" id="provemaqui"><button class="botoslide" id="aboutusbutton"> About Us </button></div>
		</div>
		</div>
		<div class="item relatiu">
		  <div class="col-lg-12 imatgesfons" style="background-image:url('./img/slider/concert1.jpg');"></div>
		  <div class="col-lg-12 col-md-12" style="position:absolute;top:0px;">
		  <div class="col-lg-12 col-md-12 titolslide"> CONCERT IN GITANA FOOD CARAVAN </div>
			<div class="col-lg-8 col-md-6 col-lg-push-2 col-md-push-3 descripcioslide">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
			cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor 
			aut officiis. </div>
			<div class="col-lg-12 col-md-12 posicioboto" id="provemaqui"><button class="botoslide"> Concerts </button></div>
			</div>
		</div>
	  </div>
	  <!-- Left and right controls -->
</div>
</div>
<div class="row about separarpadding" id="aboutussection">
	<div class="col-lg-6 col-md-7"  style="padding-left:45px;">
		<div class="col-lg-12"> 
			<h1 style="padding-left:0px;">About Us</h1>
		</div>
		<div class="col-lg-12 col-md-12"> 
			<hr/>
		</div>
		<div class="col-lg-12 col-md-12 descripcioaboutus">
			At vero eos et accu samus et iusto odio dignis simos ducimus qui blandi tiis praesentium voluptatum del eniti atque corrupti quos dolo res et quas
			molestias excepturi sint occa ecati cupidi tate non provident, si milique sunt in culpa qui officia dese runt mollitia animi, id est lab orum et dolorum fuga.
			Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
			maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Tempo ribus autem quib usdam et aut offi ciis debitis aut rerum
			necessi tatibus saepe eveniet ut et vol uptates repu diandae sint et mol estiae non recu sandae. tinctio. Nam libero tempore, cum soluta nobis est eligendi 
			optio cumque nihil impedit quo minus id.
		</div> 
	</div>
	<div class="col-lg-6 col-md-5" style="padding-right:45px;padding-top:20px;">
		<div class="imatgesfons" style="border-radius:2px;height:350px;width:100%;background-image:url('./img/AboutUs.jpg');"></div>
	</div>
</div>
<div class="row separarmes">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  bandtitol">
			<div> BAND </div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<hr style="float:none;"/>
		</div>
	<div class="band">
			<div class="imatgesfons relatiu" style="height:300px;width:260px;margin:1em;background-image:url('./img/band/hal.jpg');display:inline-block;">
				<div class="Artists"> Albert Cerdan  <a style="txt-decoration:none;font-size:16px;color:#b22323;">Singer</a> </div>
			</div>
			<div class="imatgesfons relatiu" style="height:300px;width:260px;margin:1em;background-image:url('./img/band/merme.jpg');display:inline-block;">
				<div class="Artists"> Dani Merme <a style="txt-decoration:none;font-size:16px;color:#b22323;">Guitarist</a></div>
			</div>
			<div class="imatgesfons relatiu" style="height:300px;width:260px;margin:1em;background-image:url('./img/band/nil.jpg');display:inline-block;">
				<div class="Artists"> Nil Couto <a style="txt-decoration:none;font-size:16px;color:#b22323;">Bassist</a> </div>
			</div>
			<div class="imatgesfons relatiu" style="height:300px;width:260px;margin:1em;background-image:url('./img/band/adri.jpg');display:inline-block;">
				<div class="Artists"> Adria Lloret <a style="txt-decoration:none;font-size:16px;color:#b22323;">Drummer</a></div>
			</div>
	</div>
</div>
</div>
<div id="amunt">
	<i class="fa fa-arrow-up fletxa" aria-hidden="true"></i>
</div>
</body>
</html>