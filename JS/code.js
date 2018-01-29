var x = 0;
var doc = $(document);
function scrolled() {
   var threshold = doc.scrollTop() > 20;
   var scrolltop = doc.scrollTop() > 500;
   console.log(threshold);
   if(threshold==true){
	   $("#head").addClass("headerscroll")
   }else{
		$("#head").removeClass("headerscroll")
   }
   if(scrolltop==true){
	  $("#amunt").fadeIn();
   }else{
	   $("#amunt").fadeOut();
   }
   if($("#menupermobils").css("left")=="0px"){
		close();
   }
}

$(window).on({ scroll: scrolled });


function opacityControl(x){
	$(x).eq(2).children().eq(0).css('opacity','0');
	$(x).eq(2).children().eq(0).css('top','20px');
	$(x).eq(2).children().eq(1).css('opacity','0');
	$(x).eq(2).children().eq(1).css('top','100px');
	$(x).eq(2).children().eq(2).css('opacity','0');
	$(x).eq(2).children().eq(2).css('top','190px');
}

function close(){
		$("body").children(':not(#menupermobils)').fadeTo("slow", 1, function() {});
	$( "#menupermobils" ).animate({
		opacity: 0,
		left: "-250px",
	  }, 500, function() {
		// Animation complete.
	  });
}

function focused(x){
	$(x).siblings().eq(0).addClass('focused');
}

function blured(x){
	if($(x).val()==''){
		$(x).siblings().eq(0).removeClass('focused');
	}
}

function aboutUs(){
	$('html, body').animate({
			scrollTop: ($("#aboutussection").offset().top)-50
	}, 2000);
}

function Band(){
	$('html, body').animate({
			scrollTop: ($("#bandsection").offset().top)-50
	}, 2000);	
}

function Concerts(){
	$('html, body').animate({
			scrollTop: ($("#concertssection").offset().top)-50
	}, 2000);
}


function Contact(){
	$('html, body').animate({
			scrollTop: ($("#contactsection").offset().top)-50
	}, 2000);
}

$("document").ready(function(){
	$('.carousel').carousel({
	  interval: 1000 * 7
	});
	// Adaptar imatges del carrousel al height del dispositiu i text al mig
	var centrar;
	$("body").css('opacity','0');
	for(var i = 0 ; i < $("#wrapper").children().length; i++){
		$("#wrapper").children().eq(i).addClass( "active");
		$("#wrapper").children().eq(i).children().eq(0).css("height", $(window).height());
		$("#wrapper").children().eq(i).children().eq(1).css("height", $(window).height());
			centrar = 0;
			for (var k=0;k< $("#wrapper").children().eq(i).children().eq(1).children().length; k++){
				centrar = centrar + $("#wrapper").children().eq(i).children().eq(1).children().eq(k).height();	
			}
		$("#wrapper").children().eq(i).removeClass( "active")
		$("#wrapper").children().eq(i).children().eq(2).css("top", ($(window).height()/2)-(centrar/2) - 80);
	}
	$("#wrapper").children().eq(0).addClass("active");
	$("body").css('opacity','1');
	opacityControl($("#wrapper").children().eq(0).children());
	$("#wrapper").children().eq(0).children().eq(2).children().eq(0).animate({ opacity: 1, top: "10px" }, 500);
	$("#wrapper").children().eq(0).children().eq(2).children().eq(1).delay(500).animate({ opacity: 1, top: "90px" }, 500);
	$("#wrapper").children().eq(0).children().eq(2).children().eq(2).delay(1000).animate({ opacity: 1, top: "180px" }, 600);

	$('#myCarousel').bind('slide.bs.carousel', function (e) {
		opacityControl(e.relatedTarget.children);
	});


	$('#myCarousel').bind('slid.bs.carousel', function (e) {
		$(e.relatedTarget.children).eq(2).children().eq(0).animate({ opacity: 1, top: "10px" }, 500);
		$(e.relatedTarget.children).eq(2).children().eq(1).delay(500).animate({ opacity: 1, top: "90px" }, 500);
		$(e.relatedTarget.children).eq(2).children().eq(2).delay(1000).animate({ opacity: 1, top: "180px" }, 600);
	});
	
	$(".aboutusbutton").click(function(){
		 aboutUs();
	});
	
	$(".Concertsbutton").click(function(){
		 Concerts();
	});
	
	$(".Bandbutton").click(function(){
		Band();
	});
	$(".contactlink").click(function(){
		Contact();
	});
	
	$("#amunt").click(function(){
		$('html,body').animate({ scrollTop: 0 }, 'slow');
	});
	
	$("#botomenuxs").click(function(){
		  $("body").children(':not(#menupermobils)').fadeTo("slow", 0.5, function() {});
		  $( "#menupermobils" ).animate({
			opacity: 1,
			left: "0px",
		  }, 500, function() {
			// Animation complete.
		  });
		
		
	});
	
	$("body").children().not("#menupermobils").click(function(){
		if($("#menupermobils").css("left")=="0px"){
			close();
		}
	});
	
	$("#tancarxs").click(function(){
		close();
	});
	
	
	$(".fletxaavall").click(function(){
		if($(this).parent().parent().parent().children().eq(1).css("display")=="none"){
			$(this).animate({  borderSpacing: -180 }, {
				step: function(now,fx) {
				  $(this).css('-webkit-transform','rotate('+now+'deg)'); 
				  $(this).css('-moz-transform','rotate('+now+'deg)');
				  $(this).css('transform','rotate('+now+'deg)');
				  $(this).parent().parent().parent().children().eq(1).slideDown("slow");
				},
				duration:'fast'
			},'linear')
			
		}else{
			$(this).animate({  borderSpacing: 0 }, {
				step: function(now,fx) {
				  $(this).css('-webkit-transform','rotate('+now+'deg)'); 
				  $(this).css('-moz-transform','rotate('+now+'deg)');
				  $(this).css('transform','rotate('+now+'deg)');
				  $(this).parent().parent().parent().children().eq(1).slideUp("slow");
				},
				duration:'fast'
			},'linear');
			

		}
	});
	
	
	$("#name").focus(function(){
		focused($(this));
	});
	
	$("#name").blur(function(){
		blured($(this));
	});
	
	$("#email").focus(function(){
		focused($(this));
	});
	
	$("#email").blur(function(){
		blured($(this));
	});
	
	$("#msg").focus(function(){
		$("#msg").siblings().eq(0).addClass('focused');
		$("#msg").css('height','180px');
	});
	
	$("#msg").blur(function(){
		if($("#msg").val()==''){
			$("#msg").siblings().eq(0).removeClass('focused');
			$("#msg").css('height','60px');
		}
	});
	
	$("#contactbutton").click(function(){
		$("#formcontact").fadeOut("fast");
		$("#msg").val('');
		$("#name").val('');
		$("#email").val('');
		blured($("#email"));
		blured($("#name"));
		$("#msg").siblings().eq(0).removeClass('focused');
		$("#msg").css('height','60px');
		$("#missatgeenviat").delay("500").fadeIn("fast");
		$("#missatgeenviat").delay("5500").fadeOut("fast");
		$("#formcontact").delay("6200").fadeIn("fast");
	});
});
