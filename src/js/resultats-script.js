(function( root, $, undefined ) {
	"use strict";

	$(function () {

		// ARCHIVE // CATEGORY // SEARCH

		console.log('resultats script');

		// $("body").removeClass('search-results');

		//SCROLLBAR
		var container = document.getElementsByClassName('search-resultats');
		Ps.initialize(container[0], {maxScrollbarLength: 200});


		// var arc = document.getElementsByClassName('archive');
		// Ps.initialize(arc[0], {maxScrollbarLength: 200});





	});

} ( this, jQuery ));
