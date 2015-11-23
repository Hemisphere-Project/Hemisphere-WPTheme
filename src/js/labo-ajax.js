(function( root, $, undefined ) {
	$(function () {

		// AJAX ????????????????????????


		// $(".labo-title").on("click",function(event){
		//
		// 	var postId = parseInt(event.currentTarget.parentElement.id.substring(5));
		//
		// 	if($('#post-'+postId).hasClass("loaded")){ // content already loaded
		// 		//$('#post-'+postId+" .labo-content").slideToggle();
		//
		// 	}else{
		// 		jQuery.post(
		// 			ajaxurl,
		// 			{
		// 				'action': 'labo_load',
		// 				'postId': postId
		// 			},
		// 			function(postContent){
		// 					$('#post-'+postId).addClass("loaded");
		// 					$('#post-'+postId+" .labo-content").append(postContent);
		// 					$('#post-'+postId+" .labo-content").slideToggle();
		// 			}
		// 		);
		// 	}
		// });

		console.log('LABO');

		// SCROLL BAR
		// var labZone = $('.labo');
		// Ps.initialize(labZone[0], {maxScrollbarLength: 200});


	});
} ( this, jQuery ));
