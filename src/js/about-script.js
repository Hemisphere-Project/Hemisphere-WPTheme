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


		// TYPED
		animateText();
		function animateText(){
			var contenu = $(".cartouche");
			var fixHeight = contenu.height();
			contenu.css('height', fixHeight );
			var about_1 = $("#about_1");
			var about_2 = $("#about_2");
			var about_3 = $("#about_3");
			var about_4 = $("#about_4");
			var allDivs = [about_1, about_2,about_3,about_4];
			var allTexts = [about_1.html(), about_2.html(),about_3.html(),about_4.html()];
			type(allDivs,allTexts);
		}

		function type(divs,texts){
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
							contentType: 'html',
							showCursor: false,
							cursorChar: "|",
							callback: function() { div.html(text); type(divs,texts);}
					});
			}
		}



	});

} ( this, jQuery ));
