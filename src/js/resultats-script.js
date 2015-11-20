(function( root, $, undefined ) {
	"use strict";

	$(function () {

		// ARCHIVE // CATEGORY // SEARCH

		console.log('resultats script');
		
		//SCROLLBAR
		var table = document.getElementsByClassName('search-results');
		Ps.initialize(table[0], {maxScrollbarLength: 400});


	});

} ( this, jQuery ));
