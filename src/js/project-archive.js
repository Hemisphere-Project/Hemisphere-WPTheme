(function( root, $, undefined ) {
	"use strict";
	var currentPanelIndex = 0;
	var resizeTOHandler;


	$(function () {

		// console.log('realisations');

		// scrollbar
		var containers = document.getElementsByClassName('image-container');
		$.each(containers,function(index,container){
				Ps.initialize(container, {maxScrollbarLength: 200});
		});

		// prevent arrows from scrolling between projects (firefox only)
		document.onkeydown = function (e) {
				if (!$('.search-input').is(':focus')){
					if ((e.keyCode == 38)||(e.keyCode == 40)){
						return false;
					}
				}
		}


		$('.down-arrow').click(function(event){
			goDown();
		});
		$('.up-arrow').click(function(event){
			goUp();
		});


		$('.elevator').on('click', '.elevator-item', function(event) {
			currentPanelIndex = event.currentTarget.dataset.panel.substring(2);
			updatePosition(currentPanelIndex);
		});

		$( window ).resize(function() {
			clearTimeout(resizeTOHandler);
			resizeTOHandler = setTimeout(function(){
				updatePosition(currentPanelIndex);
			}, 500);

		});

		init();




	// End	$(function)
	});

	function init(){
		var acticleNbr = $('article').length;
		for(var k=0;k<acticleNbr;k++)
			$(".elevator-items-list").append('<div class="elevator-item" data-panel="dp'+k+'">'+eval(k+1)+'</div>');

		if(window.location.hash != "" && typeof $(window.location.hash)[0] != "undefined"){
			currentPanelIndex = parseInt($(window.location.hash)[0].dataset.panel.substring(2));
		}
		scrollToPanel("article[data-panel='dp"+currentPanelIndex+"']");
		selectElevator(currentPanelIndex);
		animateText(currentPanelIndex);
	}

	function goUp(){
		if(currentPanelIndex <= 0)
			return;
		currentPanelIndex--;
		updatePosition(currentPanelIndex);
	}

	function goDown(){
		if(currentPanelIndex >= $('article').length-1)
			return;
		currentPanelIndex++;
		updatePosition(currentPanelIndex);
	}

	function updatePosition(index){
		scrollToPanel("article[data-panel='dp"+index+"']",function(){
			// if(window.location.hash != $("article[data-panel='dp"+index+"']").attr("id"))
			// 	window.location.hash = $("article[data-panel='dp"+index+"']").attr("id");
		});
		// enlevé du callback
		if(window.location.hash != $("article[data-panel='dp"+index+"']").attr("id"))
			window.location.hash = $("article[data-panel='dp"+index+"']").attr("id");
		scrollBackToTop(index);
		selectElevator(index);
		animateText(index);
	}

	function scrollToPanel(selector,completecb){
		var aTag = $(selector);
		$('html,body').animate({scrollTop: aTag.offset().top},{duration:0,easing:"swing",complete:completecb}); // changed duration 400 to 0
		// $('.project').each(function(index,div){$(this).css('z-index','100');})
		// aTag.css('z-index','101');
	}

	function selectElevator(index){
		// unselect current
		$(".selected-item").removeClass("selected-item");
		$($(".elevator-item")[index]).addClass("selected-item");
	}

	function scrollBackToTop(index){
		// var imgDiv = $("article[data-panel='dp"+index+"']").children(".image-column");
		var imgDiv = $("article[data-panel='dp"+index+"']").children(".image-column").children(".image-container");
		imgDiv.animate({scrollTop:0},{duration:0} );
	}


	function animateText(index){

		var articleDiv = $("article[data-panel='dp"+index+"']");
		var legend = articleDiv.children(".legend");
		var fixHeight = legend.height();
		legend.css('height', fixHeight );
		// $('.text-column').hide();
		// $('.legend').hide();
		// legend.show();

		var num = legend.children('.legend-line-1').children('.lgd-numbering');
		var title =	legend.children('.legend-line-1').children('.lgd-title');
		var commanditaire = legend.children('.legend-line-2').children('.lgd-commanditaire');
		var lieu = legend.children('.legend-line-3').children('.lgd-lieu');
		var annee = legend.children('.legend-line-3').children('.lgd-annee');

		// var allDivs = [num,title, commanditaire,lieu,annee];
		// var allTexts = [num.html(),title.html(), commanditaire.html(),lieu.html(),annee.html()];
		var allDivs = [title, commanditaire,lieu,annee];
		var allTexts = [title.html(), commanditaire.html(),lieu.html(),annee.html()];
		type(allDivs,allTexts,index);
	}

	function type(divs,texts,indexElevator){

		if (divs.length > 0){
			$.each(divs,function(index,div){
				div.html('');
				div.data('typed', null);
			});
			var div = divs.shift();
			var text = texts.shift();
			div.typed({
						strings: [text],
						typeSpeed: 5,
						contentType: 'text',
						showCursor: false,
						cursorChar: "|",
						callback: function() { div.html(text); type(divs,texts);}
				});
		}
		else{

		}
	}




} ( this, jQuery ));
