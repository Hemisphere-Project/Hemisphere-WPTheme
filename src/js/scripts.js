(function( root, $, undefined ) {
	"use strict";

	$(function () {




		var containers = document.getElementsByClassName('image-container');
		$.each(containers,function(index,container){
				// Ps.initialize(container);
				Ps.initialize(container, {maxScrollbarLength: 200});
				// Ps.initialize(container, {useKeyboard: false});
		});

		// $('.ps-scrollbar-y').each(function(index,psc){
		// 	console.log($(psc).height());
		// });

		// var divab = $('.about-content').children('.text-column');
		// console.log(divab[0]);
		// Ps.initialize(divab[0], {maxScrollbarLength: 200});



	});

} ( this, jQuery ));
