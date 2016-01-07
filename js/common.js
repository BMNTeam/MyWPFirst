$(document).ready(function() {

	


	$("#portfolio_grid").mixItUp();

	$(".s-portfolio li ").click(function(){
		$(".s-portfolio li").removeClass("active");
		$(this).addClass('active');
	});

	/*Popup part*/
	$(".popup").magnificPopup({
		type: 'image'
	});

	$(".popup-content").magnificPopup({
		type: 'inline'
	});
/*Animation part*/
	$(".top-text h1").animated("fadeInDown", "fadeOutUp");
	$(".top-text p, .section-header").animated("fadeInUp", "fadeOutDown");
	$(".animation-1").animated("fadeInLeft", "fadeOutLeft");
	$(".animation-3").animated("fadeInRight", "fadeOutRight");
	$(".animation-2").animated("flipInY", "flipOutY");
	$(".left .resume-item").animated("fadeInLeft", "fadeOutLeft");
	$(".right .resume-item").animated("fadeInRight", "fadeOutRight");



	$(".toggle-mnu, .menu_item").click(function() {
		  $("#sandwich").toggleClass("active");
		  $(".top-mnu li a").removeClass("fadeInUp animated");
	});

	$(".top-mnu a").click(function(){
		$(".top-mnu").fadeOut(600);
		$("#sandwich").toggleClass("active");
	}).append('<span>')

	$(".toggle-mnu").click(function() {
		if($(".top-mnu").is(":visible")){
			$(".top-wrapper .top-text").removeClass('h-opacity');
			$(".top-mnu").fadeOut(600);
		} else {
			$(".top-mnu").fadeIn(600);
			$(".top-mnu li a").addClass("fadeInUp animated");
			$(".top-wrapper .top-text").addClass('h-opacity');
		}
		
	});
	/*Slip hover section*/
/*
	$(".top-mnu li").sliphover({
		target: "a",
		backgroundColor: "rgba(255,255,255, .3)"
	});*/

	function getMinHeight(){
		$(".main-head").css('height',$(window).height());
	};
	getMinHeight();

	$(window).resize(function(){
		getMinHeight();
	});

	//Цели для Яндекс.Метрики и Google Analytics
	$(".count_element").on("click", (function() {
		ga("send", "event", "goal", "goal");
		yaCounterXXXXXXXX.reachGoal("goal");
		return true;
	}));

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				
				$("#form").trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
	

	/*Auto ID and Links part*/
	$(".port-item-cont").each(function(i){
		$(this).find("a").attr('href','#work-'+i);
		$(this).find(".portfolio-description").attr('id','work-'+i);
	});


	/*JqValidator*/
	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();

	/*Page Scroll 2 ID*/
	$(".top-mnu a").mPageScroll2id();
});



$(window).load(function(){
  $("#loaderInner").fadeOut();
  $("#loader").delay(400).fadeOut("slow");
});