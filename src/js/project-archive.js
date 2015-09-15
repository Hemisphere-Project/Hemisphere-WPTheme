(function( root, $, undefined ) {
	"use strict";
	var currentPanelIndex = 0;
	

	$(function () {
			
		console.log("hello fuckers");
		
		init();
		// DOM ready, take it away
		var options = {
			$menu: $(".elevator-items-list"),
			menuSelector: '.elevator-item',
			panelSelector: '.project',
			namespace: '.panelSnap',
			onSnapStart: function(){},
			onSnapFinish: function(event){
				//double call here ??
				//console.log(event[0].dataset.panel);
				currentPanelIndex = parseInt(event[0].dataset.panel.substring(2));
				selectElevator(currentPanelIndex);
			},
			onActivate: function(event){
			},
			directionThreshold: 1000,/* 1000 */
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
	});
	
	function init(){
		var acticleNbr = $('article').length;
		for(var k=0;k<acticleNbr;k++)
			$(".elevator-items-list").append('<div class="elevator-item" data-panel="dp'+k+'">'+eval(k+1)+'</div>');
			
	}
	
	function selectElevator(index){
		// unselect current
		$(".selected-item").removeClass("selected-item");
		
		$($(".elevator-item")[index]).addClass("selected-item");
	}

} ( this, jQuery ));
