(function( root, $, undefined ) {
	"use strict";

	$(function () {

		//SCROLLBAR
		var tables = document.getElementsByClassName('fixed-table-container-inner');
		Ps.initialize(tables[0], {maxScrollbarLength: 400});


	});

} ( this, jQuery ));
