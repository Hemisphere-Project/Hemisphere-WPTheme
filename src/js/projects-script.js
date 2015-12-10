(function( root, $, undefined ) {
	"use strict";
	var currentProject = {
		numbering:0,
		date:"",
		title:"",
		commanditaire:"",
		lieu:""
	};



	$(window).load(function () {


		// <init>
		var menuDefaultOffset = {top:24,left:24};
		var legendDefaultOffset = {top:60,left:24};
		//var vh = $( window ).height();hideIntroAnim()
		var vh = $('#introSection').height();


		typeL1();

		function typeL1(){
			$('#introL1').typed({
						strings: ['Hémisphère,'],
						typeSpeed: 15,
						contentType: 'text',
						showCursor: false,
						callback: function() { $('#introL1').html('Hémisphère,'); typeL2();}
				});
		}

		function typeL2(){
			$('#introL2').typed({
						strings: ['Atelier de dispositifs numériques'],
						typeSpeed: 15,
						contentType: 'text',
						showCursor: false,
						callback: function() { hoverFx(); }
			});
		}

		function hoverFx(){
			// HOVER TITLE SCOPE
			var phrase1 = $('#introL1').text().split('');
			var phrase2 = $('#introL2').text().split('');
			$("#introL1,#introL2").empty();

			$.each(phrase1, function(index,char){
				var charDiv = $('<span>').addClass("singleChar").html(char).appendTo($("#introL1"));
			});
			$.each(phrase2, function(index,char){
				var charDiv = $('<span>').addClass("singleChar").html(char).appendTo($("#introL2"));
			});

			$('.singleChar').on('mouseover', function(){
				$(this).css('font-family', 'btp_modify1');
				$(this).prev().css('font-family', 'btp_modify1');
				$(this).prev().prev().css('font-family', 'btp_modify1');
				$(this).next().css('font-family', 'btp_modify1');
			});
			$('.singleChar').on('mouseleave', function(){
				$(this).css('font-family', 'btpnormal');
				$(this).prev().css('font-family', 'btpnormal');
				$(this).prev().prev().css('font-family', 'btpnormal');
				$(this).next().css('font-family', 'btpnormal');
			});
			// CLICK
			$('.singleChar').on('mousedown', function(){
				$('.singleChar').css('font-family', 'btp_modify2');
			});
		}



		// STARTUP ANIM
		var hashtag = location.hash;
		var introStep = (hashtag !="#start");
		if (introStep){
			$(".header-pack").offset({top:menuDefaultOffset.top+vh,left:menuDefaultOffset.left});
			$(".legend").offset({top:legendDefaultOffset.top+vh,left:legendDefaultOffset.left});
		}
		else {
			$('.intro').hide();
			$('#introSpacer').css('height','0');
		}

		$("body").removeClass("hidden");




		ajustNoiseSizes();
		ajustBorderSizes();


		// REALISATIONS
		// $(".container").on("mouseover",function(event){
		// 	currentProject.numbering = $(event.currentTarget.parentElement).find(".numbering").text()+' — ';
		// 	currentProject.date = $(event.currentTarget.parentElement).find(".date").text();
		// 	currentProject.title = $(event.currentTarget.parentElement).find(".title").text();
		// 	currentProject.commanditaire = $(event.currentTarget.parentElement).find(".commanditaire").text();
		// 	currentProject.lieu = $(event.currentTarget.parentElement).find(".lieu").text()+', ';
		// 	hideIntroAnim();
		// 	updateCurrentProject();
		// 	$('.lgd-dash').hide();
		// });
		//
		// $(".container").on("mouseleave",function(event){
		// 	currentProject.numbering = "";
		// 	currentProject.date = "";
		// 	currentProject.title = "";
		// 	currentProject.commanditaire = "";
		// 	currentProject.lieu = "";
		// 	updateCurrentProject();
		// 	$('.lgd-dash').show();
		// });
		//
		// function updateCurrentProject(){
		// 	$(".legend .lgd-numbering").text(currentProject.numbering);
		// 	$(".legend .lgd-annee").text(currentProject.date);
		// 	$(".legend .lgd-title").text(currentProject.title);
		// 	$(".legend .lgd-commanditaire").text(currentProject.commanditaire);
		// 	$(".legend .lgd-lieu").text(currentProject.lieu);
		// }



		// LITTLE legend
		$(".little_legend").css('visibility', 'hidden');

		$(".container").on("mouseover",function(event){
			$(event.currentTarget.parentElement).find(".little_legend").css('visibility','visible');
			var textdiv = $(event.currentTarget.parentElement).find(".little_title");
			var texttype = textdiv.html();
			textdiv.html('');
			textdiv.typed({
						strings: [texttype],
						typeSpeed: 5,
						contentType: 'text',
						showCursor: false,
						callback: function() { textdiv.data('typed', null); }
				});
		});

		$(".container").on("mouseleave",function(event){
			$(event.currentTarget.parentElement).find(".little_legend").css('visibility', 'hidden');
		});




		window.addEventListener("optimizedScroll", ajustHeader);
		$( window ).resize(function() { ajustHeader(); });
		$('.intro').on('click', hideIntroAnim);


		function hideIntroAnim(){
			if (introStep){
				introStep = false;
				$(this).css('font-family', 'btp_modify2');
				window.onscroll = function () { window.scrollTo(0, 0); };
				$("#introSpacer").animate( {height: '0px'}, 500, "linear", function() {
					window.onscroll = function () { };
					$(".intro").hide();
				});
				$(".intro").fadeTo(500, 0.2);
				$(".header-pack").animate({top:menuDefaultOffset.top, left:menuDefaultOffset.left}, 500, "linear");
				$(".legend").animate({top:legendDefaultOffset.top, left:legendDefaultOffset.left}, 500, "linear");
			}
		}


		function ajustHeader(){
			vh = $('#introSpacer').height();
			var currentScrollTop = $(document).scrollTop();

			if (currentScrollTop > 0 && vh > 0 && introStep) hideIntroAnim();
			else  if(currentScrollTop < vh ){
				$(".header-pack").offset({top:menuDefaultOffset.top+vh,left:menuDefaultOffset.left});
				$(".legend").offset({top:legendDefaultOffset.top+vh,left:legendDefaultOffset.left});
			}
		}



		// NOISE IMG SIZES
		function ajustNoiseSizes(){
			$( ".cover-image a" ).each(function( index ) {
				var imgHeight = $(this).children("img").height();
				$(this).children(".noise").height(imgHeight-4);
			});
		}
		// GREEN CONTAINER SIZES
		function ajustBorderSizes(){
			$( ".cover-image a" ).each(function( index ) {
				var imgHeight = $(this).children("img").height();
				var imgWidth = $(this).children("img").width();
				$(this).parent().parent().css({
						'height': imgHeight+2,
						'width': imgWidth
				});
			});
		}


		// var tables = document.getElementsByClassName('projects');
		// Ps.initialize(tables[0], {maxScrollbarLength: 200});


	});

} ( this, jQuery ));


;(function() {
    var throttle = function(type, name, obj) {
        var obj = obj || window;
        var running = false;
        var func = function() {
            if (running) { return; }
            running = true;
            requestAnimationFrame(function() {
                obj.dispatchEvent(new CustomEvent(name));
                running = false;
            });
        };
        obj.addEventListener(type, func);
    };

    /* init - you can init any event */
    throttle ("scroll", "optimizedScroll");
})();
