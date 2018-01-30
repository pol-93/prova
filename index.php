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
		<a href="index.php">
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
				<li class="aboutusbutton"><a>About us</a></li>
				<li class="Bandbutton"><a>Band</a>
					<ul>
						<li onclick="bio()"><a>Albert Cerdan </a></li>
						<li onclick="bio()"><a> Dani Merme </a></li>
						<li onclick="bio()"><a> Adria Lloret</a></li>
						<li onclick="bio()"><a> Nil Couto </a></li>
					</ul>
				</li>
				<li class="Concertsbutton"><a>Concerts</a></li>
				<li class="contactlink"><a>Contact</a></li>
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 posicioboto" id="provemaqui"><button class="botoslide aboutusbutton"> About Us </button></div>
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 posicioboto" id="provemaqui"><button class="botoslide Bandbutton"> Band </button></div>
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 posicioboto" id="provemaqui"><button class="botoslide Concertsbutton"> Concerts </button></div>
			</div>	
		</div>
		
		   
		
	  </div>
	  <!-- Left and right controls -->
</div>
</div>
<div class="row about separarpadding" id="aboutussection">
	<div class="col-lg-6 col-md-7 col-sm-12"  style="padding-left:45px;margin-bottom:40px;">
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
	<div class="col-lg-6 col-md-5 col-sm-12 hidden-xs" style="padding:20px;">
		<div class="imatgesfons" style="border-radius:2px;height:350px;width:100%;background-image:url('./img/AboutUs.jpg');"></div>
	</div>
</div>
<div class="row" id="bandsection">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  bandtitol">
			<div> BAND </div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
			<hr style="float:none;"/>
		</div>
	<div class="band visible-xs bottompadding">
			<div class="row" style="margin-left:0px;margin-right:0px;">
				<div class="imatgeBand">
					<div class="imatgesfons relatiu" style="background-image:url('./img/band/hal.jpg');height:265px;"></div>
					<div onclick="bio()" class="Artists"> Albert Cerdan  <a style="text-decoration:none;font-size:16px;color:#b22323;">Singer</a> </div>
					<div class="ArtistDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
					<div class="caixa">
					<div class="caixaDintre">
					<div class="caixaDintre-inner">
						<div class="boto-inline boto-inline-xs">
								<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
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
				<div onclick="bio()" class="Artists"> Dani Merme <a style="text-decoration:none;font-size:16px;color:#b22323;">Guitarist</a></div>
				<div class="ArtistDescription">Excepteur sint occaecat cupidatat non proident, mollit anim id est laborum.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
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
				<div onclick="bio()" class="Artists"> Nil Couto <a style="text-decoration:none;font-size:16px;color:#b22323;">Bassist</a> </div>
				<div class="ArtistDescription">Duis aute irure dolor in reprehenderit in volulore eu fugiat nulla pariatur.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
			<div class="row" style="margin-left:0px;margin-right:0px;">
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/adri.jpg');height:265px;"></div>
				<div onclick="bio()" class="Artists"> Adria Lloret <a style="text-decoration:none;font-size:16px;color:#b22323;">Drummer</a></div>
				<div class="ArtistDescription">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
	</div>
	<div class="band visible-md visible-sm bottompadding">
			<div class="row" style="margin-left:0px;margin-right:0px;">
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/hal.jpg');height:265px;"></div>
				<div onclick="bio()" class="Artists"> Albert Cerdan  <a style="text-decoration:none;font-size:16px;color:#b22323;">Singer</a> </div>
				<div class="ArtistDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/merme.jpg');height:265px;">
				</div>
				<div onclick="bio()" class="Artists"> Dani Merme <a style="text-decoration:none;font-size:16px;color:#b22323;">Guitarist</a></div>
				<div class="ArtistDescription">Excepteur sint occaecat cupidatat non proident, mollit anim id est laborum.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
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
				<div onclick="bio()" class="Artists"> Nil Couto <a style="text-decoration:none;font-size:16px;color:#b22323;">Bassist</a> </div>
				<div class="ArtistDescription">Duis aute irure dolor in reprehenderit in volulore eu fugiat nulla pariatur.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/adri.jpg');height:265px;"></div>
				<div onclick="bio()" class="Artists"> Adria Lloret <a style="text-decoration:none;font-size:16px;color:#b22323;">Drummer</a></div>
				<div class="ArtistDescription">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
			</div>
			<div class="bottompadding band visible-lg">
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/hal.jpg');height:265px;"></div>
				<div onclick="bio()" class="Artists"> Albert Cerdan  <a style="text-decoration:none;font-size:16px;color:#b22323;">Singer</a> </div>
				<div class="ArtistDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/merme.jpg');height:265px;">
				</div>
				<div onclick="bio()" class="Artists"> Dani Merme <a style="text-decoration:none;font-size:16px;color:#b22323;">Guitarist</a></div>
				<div class="ArtistDescription">Excepteur sint occaecat cupidatat non proident, mollit anim id est laborum.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/nil.jpg');height:265px;">
				</div>	
				<div onclick="bio()" class="Artists"> Nil Couto <a style="text-decoration:none;font-size:16px;color:#b22323;">Bassist</a> </div>
				<div class="ArtistDescription">Duis aute irure dolor in reprehenderit in volulore eu fugiat nulla pariatur.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			<div class="imatgeBand">
				<div class="imatgesfons relatiu" style="background-image:url('./img/band/adri.jpg');height:265px;"></div>
				<div onclick="bio()" class="Artists"> Adria Lloret <a style="text-decoration:none;font-size:16px;color:#b22323;">Drummer</a></div>
				<div class="ArtistDescription">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<div class="caixa">
				<div class="caixaDintre">
				<div class="caixaDintre-inner">
					<div class="boto-inline boto-inline-xs">
							<button onclick="bio()" class="botoslide"> BIOGRAPHY </button>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
	</div>
	<div class="row separarmes" id="concertssection">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
				<h1 style="padding-left:0px;">CONCERTS</h1>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12"> 
				<hr/>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="Artists" style="color:black;cursor:default;">FEBRUARY</div>
			</div>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separar" style="margin-bottom:10px;">
				<div>
					<div class="concerts">
						<div class="col-lg-4 col-md-4 col-sm-2 col-xs-12 dimensiodiv">
							<div class="dataconcert">03/02/2018</div>
							<div class="relatiu hidden-xs" style="float:right;width:6px;height:100%;">
								<div class="decoracioBandera" style="left:0px;"></div>
								<div class="decoracioBandera" style="left:2px;background-color:#f2ed54;"></div>
								<div class="decoracioBandera" style="left:4px;background-color:#44c44d;"></div>
							</div>
						</div>
						<div class="visible-xs col-xs-12" style="border:1px solid #b22323;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #f2ed54;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #44c44d;height:1px;"></div>
						<div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 dimensiodiv">
							<div class="titolconcert">SALA APOLO - Barcelona</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 hidden-xs dimensiodiv">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
						<div class="hidden-lg hidden-sm hidden-md col-xs-12 dimensiodiv" style="border-top:1px solid black;">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="infoconcert">
							<div>At 08:00 p.m.</div>
							<div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
							illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>
							<div><button class="bototickets"> BUY TICKETS </button></div>
							
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separar" style="margin-bottom:10px;">
				<div>
					<div class="concerts">
						<div class="col-lg-4 col-md-4 col-sm-2 col-xs-12 dimensiodiv">
							<div class="dataconcert">11/02/2018</div>
							<div class="relatiu hidden-xs" style="float:right;width:6px;height:100%;">
								<div class="decoracioBandera" style="left:0px;"></div>
								<div class="decoracioBandera" style="left:2px;background-color:#f2ed54;"></div>
								<div class="decoracioBandera" style="left:4px;background-color:#44c44d;"></div>
							</div>
						</div>
						<div class="visible-xs col-xs-12" style="border:1px solid #b22323;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #f2ed54;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #44c44d;height:1px;"></div>
						<div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 dimensiodiv">
							<div class="titolconcert">LA SALA - Igualada</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 hidden-xs dimensiodiv">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
						<div class="hidden-lg hidden-sm hidden-md col-xs-12 dimensiodiv" style="border-top:1px solid black;">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="infoconcert">
							<div>At 10:00 p.m.</div>
							<div>A conubia semper taciti dolor odio luctus tempor quis congue iaculis, eros mollis ultrices velit ligula faucibus vivamus est suscipit.
							Fames accumsan pulvinar ante praesent libero taciti semper, aenean sociis adipiscing vestibulum venenatis magna..</div>
							<div><button class="bototickets"> BUY TICKETS </button></div>
							
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xs-12 separar" style="margin-bottom:10px;">
				<div>
					<div class="concerts">
						<div class="col-lg-4 col-md-4 col-sm-2 col-xs-12 dimensiodiv">
							<div class="dataconcert">18/02/2018</div>
							<div class="relatiu hidden-xs" style="float:right;width:6px;height:100%;">
								<div class="decoracioBandera" style="left:0px;"></div>
								<div class="decoracioBandera" style="left:2px;background-color:#f2ed54;"></div>
								<div class="decoracioBandera" style="left:4px;background-color:#44c44d;"></div>
							</div>
						</div>
						<div class="visible-xs col-xs-12" style="border:1px solid #b22323;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #f2ed54;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #44c44d;height:1px;"></div>
						<div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 dimensiodiv">
							<div class="titolconcert">Gitana Food Caravan - Copons</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 hidden-xs dimensiodiv">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
						<div class="hidden-lg hidden-sm hidden-md col-xs-12 dimensiodiv" style="border-top:1px solid black;">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="infoconcert">
							<div>At 08:00 p.m.</div>
							<div> sociis dui magnis a etiam. Turpis mollis nulla conubia nunc ut lacus facilisis duis suspendisse fermentum habitasse enim vulputate,
							potenti ipsum scelerisque justo nostra lacinia varius nascetur blandit platea amet suscipit. Consectetur nisl parturient suscipit justo nec 
							orci rhoncus.</div>
							<div><button class="bototickets"> BUY TICKETS </button></div>
							
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separar" style="margin-bottom:10px;">
				<div>
					<div class="concerts">
						<div class="col-lg-4 col-md-4 col-sm-2 col-xs-12 dimensiodiv">
							<div class="dataconcert">24/02/2018</div>
							<div class="relatiu hidden-xs" style="float:right;width:6px;height:100%;">
								<div class="decoracioBandera" style="left:0px;"></div>
								<div class="decoracioBandera" style="left:2px;background-color:#f2ed54;"></div>
								<div class="decoracioBandera" style="left:4px;background-color:#44c44d;"></div>
							</div>
						</div>
						<div class="visible-xs col-xs-12" style="border:1px solid #b22323;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #f2ed54;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #44c44d;height:1px;"></div>
						<div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 dimensiodiv">
							<div class="titolconcert">El Kiosk - Igualada</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 hidden-xs dimensiodiv">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
						<div class="hidden-lg hidden-sm hidden-md col-xs-12 dimensiodiv" style="border-top:1px solid black;">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="infoconcert">
							<div>At 11:00 p.m.</div>
							<div> dapibus maecenas himenaeos risus libero nisl fames iaculis montes vulputate, dui enim sociis ante nibh nulla mus sem vivamus, 
							ligula nostra quisque.</div>
							<div><button class="bototickets"> BUY TICKETS </button></div>
							
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="Artists" style="color:black;cursor:default;">MARCH</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separar" style="margin-bottom:10px;">
				<div>
					<div class="concerts">
						<div class="col-lg-4 col-md-4 col-sm-2 col-xs-12 dimensiodiv">
							<div class="dataconcert">10/03/2018</div>
							<div class="relatiu hidden-xs" style="float:right;width:6px;height:100%;">
								<div class="decoracioBandera" style="left:0px;"></div>
								<div class="decoracioBandera" style="left:2px;background-color:#f2ed54;"></div>
								<div class="decoracioBandera" style="left:4px;background-color:#44c44d;"></div>
							</div>
						</div>
						<div class="visible-xs col-xs-12" style="border:1px solid #b22323;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #f2ed54;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #44c44d;height:1px;"></div>
						<div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 dimensiodiv">
							<div class="titolconcert">Razzmataz - Barcelona</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 hidden-xs dimensiodiv">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
						<div class="hidden-lg hidden-sm hidden-md col-xs-12 dimensiodiv" style="border-top:1px solid black;">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="infoconcert">
							<div>At 10:30 p.m.</div>
							<div> sem posuere consequat sed metus nunc feugiat suscipit tincidunt volutpat ultricies, nullam primis natoque arcu platea rutrum at 
							torquent purus dictumst. Fringilla cum dignissim placerat nisi duis feugiat malesuada maecenas.</div>
							<div><button class="bototickets"> BUY TICKETS </button></div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separar" style="margin-bottom:10px;">
				<div>
					<div class="concerts">
						<div class="col-lg-4 col-md-4 col-sm-2 col-xs-12 dimensiodiv">
							<div class="dataconcert">24/03/2018</div>
							<div class="relatiu hidden-xs" style="float:right;width:6px;height:100%;">
								<div class="decoracioBandera" style="left:0px;"></div>
								<div class="decoracioBandera" style="left:2px;background-color:#f2ed54;"></div>
								<div class="decoracioBandera" style="left:4px;background-color:#44c44d;"></div>
							</div>
						</div>
						<div class="visible-xs col-xs-12" style="border:1px solid #b22323;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #f2ed54;height:1px;"></div>
						<div class="visible-xs col-xs-12" style="border:1px solid #44c44d;height:1px;"></div>
						<div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 dimensiodiv">
							<div class="titolconcert">Ateneu - Igualada</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 hidden-xs dimensiodiv">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
						<div class="hidden-lg hidden-sm hidden-md col-xs-12 dimensiodiv" style="border-top:1px solid black;">
							<div class="fletxaavall"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="infoconcert">
							<div>At 06:00 p.m.</div>
							<div> Proin magna consequat auctor potenti lobortis tristique eu, venenatis nisi aenean nisl quam nunc 
							inceptos mi, velit nec pulvinar id imperdiet ligula..</div>
							<div><button class="bototickets"> BUY TICKETS </button></div>
							
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="row contact" id="contactsection">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  bandtitol">
			<div> CONTACT </div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
			<hr style="float:none;"/>
		</div>
		<div id="contactar" class="relatiu" style="height:500px;">
		<div id="formcontact" class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="clear:both;">
				
				<div class="col-lg-5 col-md-6 col-sm-7 col-xs-12 camp">
					<input type="text" id="name" placeholder="Who are you?"></input>
					<label for="name">Name</label>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-7 col-xs-12 camp">
					<input type="text" id="email" placeholder="example@xxxx.com"></input>
					<label for="email">Email</label>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-7 col-xs-12 camp">
					<textarea id="msg" placeholder="Message..."/></textarea>
					<label for="msg">Message</label>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-7 col-xs-12 camp">
					<button id="contactbutton" class="botocontacte"> Send </button>
				</div>
		</div>
		
		<div id="missatgeenviat" class="col-lg-5 col-md-6 col-sm-7 col-xs-12 camp">
				<div class="frase">Thank you for contact us, we will answer you as soon as possible.</div> 
		</div>	
		</div>
	
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="height:100px;background-color:black;">
			<div style="text-align:center;margin-top:15px;">
				<img style="margin:5px;width:30px;" src="./img/facebook.png"/>
				<img style="margin:5px;width:30px;" src="./img/instagram.png"/>
			</div>
			<div style="font-family:TheLightFont;font-size:15px;color:white;text-align:center;margin-top:15px;"> © 2018. JAHARMONY AND THE SOUL REBELS. </div>
		</div>
	</div>
</div>

<div id="menupermobils"">
	<div class="relative desplegabledalt">
	<div class="bototancar"> <i class="fa fa-times" id="tancarxs" aria-hidden="true"></i> </div>
	<div class="logo" style="width:50px;float:right;"></div>
	</div>
	<div>
	<ul class="ulmenuxs">
		<li class="aboutusbutton">About us</li>
		<li class="Bandbutton">Band</li>
			<ul>
				<li onclick="bio()">Albert Cerdan</li>
				<li onclick="bio()">Dani Merme</li>
				<li onclick="bio()">Nil Couto</li>
				<li onclick="bio()">Adria Lloret</li>
			</ul>
		<li class="Concertsbutton">Concerts</li>
		<li class="contactlink">Contact</li>
	</ul>
	</div>
</div>


<div id="amunt">
	<i class="fa fa-arrow-up fletxa" aria-hidden="true"></i>
</div>
</body>
</html>