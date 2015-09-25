(function( root, $, undefined ) {
	"use strict";
	var currentProject = {
		numbering:0,
		date:"",
		title:"",
		commanditaire:"",
		lieu:""
	};
	
	

	$(window).load(function () {
			
			
		/*$('.projects').masonry({
			// options...
			itemSelector: '.project-item',
			columnWidth: 0
		});*/
			
			
		// <init>
		var menuDefaultOffset = {top:24,left:24};
		var legendDefaultOffset = {top:60,left:24};
		var vh = $( window ).height();
		
		$(".header-pack").offset({top:menuDefaultOffset.top+vh,left:menuDefaultOffset.left});
		$(".legend").offset({top:legendDefaultOffset.top+vh,left:legendDefaultOffset.left});
		$("body").removeClass("hidden");
		
		
		
		// typed things
		/*$(".intro").typed({
			strings: ['<div class="intro-block1"><div class="intro-block1-l1">Hémisphère,</div></div>','<div class="intro-block1"><div class="intro-block1-l1">Hémisphère,</div><div class="intro-block1-l2">Atelier de dispositifs numériques</div><div class="intro-block1-l3">234 avenue Felix Faure 69003 Lyon</div></div><div class="intro-block2"><div>&lt;m.&gt; bonjour@hemisphere-project.com</div><div>&lt;m.&gt; [0033] 682 984 800</div></div>'],
			// typing speed
			typeSpeed: -50,
			// time before typing starts
			startDelay: 500,
			// backspacing speed
			backSpeed: -200,
			// time before backspacing
			backDelay: 500,
			// loop
			loop: false,
			// false = infinite
			loopCount: false,
			// show cursor
			showCursor: false,
			// character for cursor
			cursorChar: "|",
			// attribute to type (null == text)
			attr: null,
			// either html or text
			contentType: 'html',
			// call when done callback function
			callback: function() {},
			// starting callback function before each string
			preStringTyped: function() {},
			//callback for every typed string
			onStringTyped: function() {},
			// callback for reset
			resetCallback: function() {}
		});*/
	
		
		ajustNoiseSizes();
		
		// DOM ready, take it away
		/*** script for realisations page ***/
		$(".project-item .cover-image").on("mouseover",function(event){
			currentProject.numbering = $(event.currentTarget.parentElement).find(".numbering").text();
			currentProject.date = $(event.currentTarget.parentElement).find(".date").text();
			currentProject.title = $(event.currentTarget.parentElement).find(".title").text();
			currentProject.commanditaire = $(event.currentTarget.parentElement).find(".commanditaire").text();
			currentProject.lieu = $(event.currentTarget.parentElement).find(".lieu").text();
			
			updateCurrentProject();
		});
		
		$(".project-item .cover-image").on("mouseleave",function(event){
			
			currentProject.numbering = "";
			currentProject.date = "";
			currentProject.title = "";
			currentProject.commanditaire = "";
			currentProject.lieu = "";
			
			updateCurrentProject();
		});
		
		function updateCurrentProject(){
			$(".legend .lgd-numbering").text(currentProject.numbering);
			$(".legend .lgd-annee").text(currentProject.date);
			$(".legend .lgd-title").text(currentProject.title);
			$(".legend .lgd-commanditaire").text(currentProject.commanditaire);
			$(".legend .lgd-lieu").text(currentProject.lieu);
		}
		
		window.addEventListener("optimizedScroll", ajustHeader);
		
		$( window ).resize(function() {
			vh = $( window ).height();
			ajustHeader();
		});
		
		function ajustHeader(){
			var currentScrollTop = $(document).scrollTop();
			if(currentScrollTop < vh ){
				$(".header-pack").offset({top:menuDefaultOffset.top+vh,left:menuDefaultOffset.left});
				$(".legend").offset({top:legendDefaultOffset.top+vh,left:legendDefaultOffset.left});
			}else{
				$(".header-pack").offset({top:currentScrollTop + menuDefaultOffset.top,left:menuDefaultOffset.left});
				$(".legend").offset({top:currentScrollTop + legendDefaultOffset.top,left:legendDefaultOffset.left});	
			}	
		}
		
		function ajustNoiseSizes(){
			$( ".cover-image a" ).each(function( index ) {
				var imgHeight = $(this).children("img").height();
				$(this).children(".noise").height(imgHeight);
			});
		}
		
		
	});

} ( this, jQuery ));


;(function() {
    var throttle = function(type, name, obj) {
        var obj = obj || window;
        var running = false;
        var func = function() {
            if (running) { return; }
            running = true;
            requestAnimationFrame(function() {
                obj.dispatchEvent(new CustomEvent(name));
                running = false;
            });
        };
        obj.addEventListener(type, func);
    };

    /* init - you can init any event */
    throttle ("scroll", "optimizedScroll");
})();
