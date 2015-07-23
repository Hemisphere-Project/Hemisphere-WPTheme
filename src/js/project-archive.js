(function( root, $, undefined ) {
	"use strict";
	var currentProject = {
		numbering:0,
		date:"",
		title:"",
		commanditaire:"",
		lieu:""
	};

	$(function () {
			
		console.log("hello fuckers");	
		// DOM ready, take it away
		var options = {
			$menu: false,
			menuSelector: 'a',
			panelSelector: '.project',
			namespace: '.panelSnap',
			onSnapStart: function(){},
			onSnapFinish: function(){},
			onActivate: function(){},
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
	});

} ( this, jQuery ));
