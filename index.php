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

<header id="head">
	<div class="row">
		<div class="col-lg-5 col-md-5 hidden-xs hidden-sm centrat"> 
				<div class="col-lg-1 col-md-1 hidden-xs hidden-sm col-md-push-1 col-lg-push-1 logo"> 
				</div>
				<div class="col-lg-10 col-md-1 col-sm-1 col-xs-1" style="position:relative;">
					<img class="posicionar" src="./img/titol.png"></img>
				</div>
		</div>
		<div class="menupartdreta hidden-xs hidden-sm"> 
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
	<div class="col-xs-12 col-sm-12 hidden-lg hidden-md">
		<div class="col-sm-1 col-xs-1 relatiu"> 
			<div class="botomenu">
				<div class="linea" style="top:8px;"></div>
				<div class="linea" style="top:12px;"></div>
				<div class="linea" style="top:16px;"></div>
			</div>
		</div>
		<div class="col-xs-1 col-sm-1 hidden-lg hidden-md col-xs-push-3 col-sm-push-3 logo" style="width:50px;"> 
		</div>
			<div class="hidden-md hidden-lg logoxs"><img src="./img/facebook.png"></img></div>
			<div class="hidden-md hidden-lg logoxs"><img src="./img/instagram.png"></img></div>
		</div>
	</div>
	
</header>

<div class="row">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>  
	  <li data-target="#myCarousel" data-slide-to="2"></li>  
    </ol>
	  <!-- Wrapper for slides -->
	  <div id="wrapper" class="carousel-inner visible-xs visible-sm visible-md visible-lg">
		<div class="item active relatiu">
		  <div class="col-lg-12 col-md-12 imatgesfons hidden-xs hidden-sm" style="background-image:url('./img/slider/concert2.jpg');"></div>
		  <div class="col-sm-12 col-xs-12 imatgesfons hidden-lg hidden-md" style="background-image:url('./img/slider/concert1xs.jpg');"></div>
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position:absolute;top:0px;padding:0px;">
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titolslide"> WELCOME TO  <a style="color:#b22323;text-decoration:none;">JAH</a><a style="color:#f2ed54;text-decoration:none;">ARM</a><a style="color:#44c44d;text-decoration:none;">ONY</a> </div>
			<div class="col-lg-8 col-md-6 col-lg-push-2 col-md-push-3 descripcioslide hidden-xs"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
			totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
			voluptas. </div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 posicioboto" id="provemaqui"><button class="botoslide" id="aboutusbutton"> About Us </button></div>
		</div>
		</div>
		<div class="item relatiu">
		<div class="video-container hidden-xs hidden-sm">
			  <video autoplay loop width="1280" height="720">
				 <source src="./img/slider/video.mov" type="video/mov"/>
				 <source src="./img/slider/video.mp4" type="video/mp4" />
				 Your browser does not support the video tag.
			  </video>
		  </div>
		  <div class="col-sm-12 col-xs-12 imatgesfons hidden-lg hidden-md" style="background-image:url('./img/slider/concert2xs.jpg');"></div>
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position:absolute;top:0px;padding:0px;">
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titolslide"> GET TO KNOW OUR BAND </div>
			<div class="col-lg-8 col-md-6 col-lg-push-2 col-md-push-3 descripcioslide hidden-xs">. Itaque earum rerum hic tenetur a 
			sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. </div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 posicioboto" id="provemaqui"><button class="botoslide"> Band </button></div>
			</div>
		</div>
		<div class="item relatiu">
		  <div class="col-lg-12 col-md-12 imatgesfons hidden-xs hidden-sm" style="background-image:url('./img/slider/concert1.jpg');"></div>
		  <div class="col-sm-12 col-xs-12 imatgesfons hidden-lg hidden-md" style="background-image:url('./img/slider/concert3xs.jpg');"></div>
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position:absolute;top:0px;padding:0px;">
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titolslide"> GITANA FOOD CARAVAN </div>
			<div class="col-lg-8 col-md-6 col-lg-push-2 col-md-push-3 descripcioslide hidden-xs">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
			cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor 
			aut officiis. </div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 posicioboto" id="provemaqui"><button class="botoslide"> Concerts </button></div>
			</div>	
		</div>
		
		   
		
	  </div>
	  <!-- Left and right controls -->
</div>
</div>
<div class="row about separarpadding" id="aboutussection">
	<div class="col-lg-6 col-md-7 col-sm-12"  style="padding-left:45px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
			<h1 style="padding-left:0px;">About Us</h1>
		</div>
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12"> 
			<hr/>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 descripcioaboutus">
			At vero eos et accu samus et iusto odio dignis simos ducimus qui blandi tiis praesentium voluptatum del eniti atque corrupti quos dolo res et quas
			molestias excepturi sint occa ecati cupidi tate non provident, si milique sunt in culpa qui officia dese runt mollitia animi, id est lab orum et dolorum fuga.
			Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
			maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Tempo ribus autem quib usdam et aut offi ciis debitis aut rerum
			necessi tatibus saepe eveniet ut et vol uptates repu diandae sint et mol estiae non recu sandae. tinctio. Nam libero tempore, cum soluta nobis est eligendi 
			optio cumque nihil impedit quo minus id.
		</div> 
	</div>
	<div class="col-lg-6 col-md-5 col-sm-12 hidden-xs" style="padding:45px;">
		<div class="imatgesfons" style="border-radius:2px;height:350px;width:100%;background-image:url('./img/AboutUs.jpg');"></div>
	</div>
</div>
<div class="row separarmes">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  bandtitol">
			<div> BAND </div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
			<hr style="float:none;"/>
		</div>
	<div class="band visible-xs">
			<div class="row" style="margin-left:0px;margin-right:0px;">
				<div class="imatgeBand">
					<div class="imatgesfons relatiu" style="background-image:url('./img/band/hal.jpg');height:265px;"></div>
					<div class="Artists"> Albert Cerdan  <a style="text-decoration:none;font-size:16px;color:#b22323;">Singer</a> </div>
					<div class="ArtistDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
					<div class="caixa">
					<div class="caixaDintre">
					<div class="caixaDintre-inner">
						<div class="boto-inline boto-inline-xs">
								<button class="botoslide"> BIOGRAPHY </button>
						</div>
					</div>
					</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-left:0px;margin-right:0px;">
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/merme.jpg');height:265px;">
				</div>
				<div class="Artists"> Dani Merme <a style="text-decoration:none;font-size:16px;color:#b22323;">Guitarist</a></div>
				<div class="ArtistDescription">Excepteur sint occaecat cupidatat non proident, mollit anim id est laborum.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
			<div class="row" style="margin-left:0px;margin-right:0px;">
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/nil.jpg');height:265px;">
				</div>	
				<div class="Artists"> Nil Couto <a style="text-decoration:none;font-size:16px;color:#b22323;">Bassist</a> </div>
				<div class="ArtistDescription">Duis aute irure dolor in reprehenderit in volulore eu fugiat nulla pariatur.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
			<div class="row" style="margin-left:0px;margin-right:0px;">
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/adri.jpg');height:265px;"></div>
				<div class="Artists"> Adria Lloret <a style="text-decoration:none;font-size:16px;color:#b22323;">Drummer</a></div>
				<div class="ArtistDescription">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
	</div>
	<div class="band visible-md visible-sm">
			<div class="row" style="margin-left:0px;margin-right:0px;">
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/hal.jpg');height:265px;"></div>
				<div class="Artists"> Albert Cerdan  <a style="text-decoration:none;font-size:16px;color:#b22323;">Singer</a> </div>
				<div class="ArtistDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/merme.jpg');height:265px;">
				</div>
				<div class="Artists"> Dani Merme <a style="text-decoration:none;font-size:16px;color:#b22323;">Guitarist</a></div>
				<div class="ArtistDescription">Excepteur sint occaecat cupidatat non proident, mollit anim id est laborum.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
			<div class="row" style="margin-left:0px;margin-right:0px;">
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/nil.jpg');height:265px;">
				</div>	
				<div class="Artists"> Nil Couto <a style="text-decoration:none;font-size:16px;color:#b22323;">Bassist</a> </div>
				<div class="ArtistDescription">Duis aute irure dolor in reprehenderit in volulore eu fugiat nulla pariatur.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/adri.jpg');height:265px;"></div>
				<div class="Artists"> Adria Lloret <a style="text-decoration:none;font-size:16px;color:#b22323;">Drummer</a></div>
				<div class="ArtistDescription">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
			</div>
			<div class="band visible-lg">
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/hal.jpg');height:265px;"></div>
				<div class="Artists"> Albert Cerdan  <a style="text-decoration:none;font-size:16px;color:#b22323;">Singer</a> </div>
				<div class="ArtistDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/merme.jpg');height:265px;">
				</div>
				<div class="Artists"> Dani Merme <a style="text-decoration:none;font-size:16px;color:#b22323;">Guitarist</a></div>
				<div class="ArtistDescription">Excepteur sint occaecat cupidatat non proident, mollit anim id est laborum.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/nil.jpg');height:265px;">
				</div>	
				<div class="Artists"> Nil Couto <a style="text-decoration:none;font-size:16px;color:#b22323;">Bassist</a> </div>
				<div class="ArtistDescription">Duis aute irure dolor in reprehenderit in volulore eu fugiat nulla pariatur.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/adri.jpg');height:265px;"></div>
				<div class="Artists"> Adria Lloret <a style="text-decoration:none;font-size:16px;color:#b22323;">Drummer</a></div>
				<div class="ArtistDescription">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
	</div>
</div>
</div>
<div id="amunt">
	<i class="fa fa-arrow-up fletxa" aria-hidden="true"></i>
</div>
</body>
</html>