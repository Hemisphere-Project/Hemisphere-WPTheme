(function( root, $, undefined ) {

	$(function () {

		var lastScrollTop = 0;
		var delta = 0;
		var e = document.getElementsByClassName("text-column")[0];

		e.addEventListener("scroll", function(event){
			var st = $(this).scrollTop();
			if (st > lastScrollTop){
				console.log('dooooo');
				$(".images-column").scrollTop($(".images-column").scrollTop()+delta);
			} else {
				console.log('elseeee');
				$(".images-column").scrollTop($(".images-column").scrollTop()-delta);
			}
			lastScrollTop = st;
		});


		// SCROLLBAR
		var aboutZone = $('#about_text_scroll');
		Ps.initialize(aboutZone[0], {maxScrollbarLength: 200});




	});

} ( this, jQuery ));
