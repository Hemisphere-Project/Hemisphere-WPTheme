(function( root, $, undefined ) {

	$(function () {

		var lastScrollTop = 0;

		var delta = 0;

		 var e = document.getElementsByClassName("text-column")[0];
		 e.addEventListener("scroll", function(event){

		 	var st = $(this).scrollTop();
			if (st > lastScrollTop){
				$(".images-column").scrollTop($(".images-column").scrollTop()+delta);
			} else {
				$(".images-column").scrollTop($(".images-column").scrollTop()-delta);
			}
			lastScrollTop = st;
		});

	});

} ( this, jQuery ));
