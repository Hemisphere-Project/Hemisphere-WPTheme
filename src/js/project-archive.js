(function( root, $, undefined ) {
	"use strict";
	var currentPanelIndex = 0;
	var resizeTOHandler;
	

	$(function () {
			
		
		/*
		// DOM ready, take it away
		var options = {
			$menu: $(".elevator-items-list"),
			menuSelector: '.elevator-item',
			panelSelector: '.project',
			namespace: '.panelSnap',
			onSnapStart: function(event){
				console.log("start  "+event[0].dataset.panel);
			},
			onSnapFinish: function(event){
				//double call here ??
				console.log("finish  "+event[0].dataset.panel);
				currentPanelIndex = parseInt(event[0].dataset.panel.substring(2));
				selectElevator(currentPanelIndex);
			},
			onActivate: function(event){
			},
			directionThreshold: 1000,
			slideSpeed: 300,
			easing: 'swing',
			offset: 0,
			navigation: {
				keys: {
				  nextKey: 40,
				  prevKey: 38,
				},
				buttons: {
				  $nextButton: $(".down-arrow"),
				  $prevButton: $(".up-arrow"),
				},
				wrapAround: false
			} 
		};
		
		$('body').panelSnap(options);
		
		*/
		
		$('.down-arrow').click(function(event){
			console.log("down arrow");
			if(currentPanelIndex >= $('article').length-1)
				return;
			
			currentPanelIndex++;
			updatePosition(currentPanelIndex);
		});
		$('.up-arrow').click(function(event){
			console.log("up arrow");
			if(currentPanelIndex <= 0)
				return;
			
			currentPanelIndex--;
			updatePosition(currentPanelIndex);
			
		});
		$('.elevator').on('click', '.elevator-item', function(event) {
			console.log("elevator item");
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
	}

	function updatePosition(index){
		scrollToPanel("article[data-panel='dp"+index+"']",function(){
			console.log("anim complete");	
			if(window.location.hash != $("article[data-panel='dp"+index+"']").attr("id"))
				window.location.hash = $("article[data-panel='dp"+index+"']").attr("id");
		});
		selectElevator(index);	
		//window.location.hash = $("article[data-panel='dp"+index+"']").attr("id");
	}

	function scrollToPanel(selector,completecb){
		var aTag = $(selector);
		$('html,body').animate({scrollTop: aTag.offset().top},{duration:400,easing:"swing",complete:completecb});
	}
	
	function selectElevator(index){
		// unselect current
		$(".selected-item").removeClass("selected-item");
		
		$($(".elevator-item")[index]).addClass("selected-item");
	}

} ( this, jQuery ));
