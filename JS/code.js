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
			centrar = 0;
			for (var k=0;k< $("#wrapper").children().eq(i).children().eq(1).children().length; k++){
				centrar = centrar + $("#wrapper").children().eq(i).children().eq(1).children().eq(k).height();	
			}
		$("#wrapper").children().eq(i).removeClass( "active")
		$("#wrapper").children().eq(i).children().eq(1).css("top", ($(window).height()/2)-(centrar/2) - 40);
	}
	$("#wrapper").children().eq(0).addClass("active");
	$("body").css('opacity','1');
	

		$('#myCarousel').bind('slide.bs.carousel', function (e) {
			$(e.relatedTarget.children).eq(1).children().eq(0).css('opacity','0');
			$(e.relatedTarget.children).eq(1).children().eq(0).css('top','20px');
			$(e.relatedTarget.children).eq(1).children().eq(1).css('opacity','0');
			$(e.relatedTarget.children).eq(1).children().eq(1).css('top','100px');
			$(e.relatedTarget.children).eq(1).children().eq(2).css('opacity','0');
			$(e.relatedTarget.children).eq(1).children().eq(2).css('top','190px');
		});


		$('#myCarousel').bind('slid.bs.carousel', function (e) {
			
			$(e.relatedTarget.children).eq(1).children().eq(0).animate({ opacity: 1, top: "10px" }, 500);
			$(e.relatedTarget.children).eq(1).children().eq(1).delay(500).animate({ opacity: 1, top: "90px" }, 500);
			$(e.relatedTarget.children).eq(1).children().eq(2).delay(1000).animate({ opacity: 1, top: "180px" }, 600);
		});

		$('#myCarousel').bind('slide', function (e) {
			alert('slide event3!');
		});

		$('#myCarousel').bind('slid', function (e) {
			alert('slide event 2!');
		});
	
});
