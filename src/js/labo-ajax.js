(function( root, $, undefined ) {
	$(function () {
			
	
		$(".labo-title").on("click",function(event){
			
			var postId = parseInt(event.currentTarget.parentElement.id.substring(5));
			
			if($('#post-'+postId).hasClass("loaded")){ // content already loaded
				//$('#post-'+postId+" .labo-content").slideToggle();
					
			}else{
				jQuery.post(
					ajaxurl,
					{
						'action': 'labo_load',
						'postId': postId
					},
					function(postContent){
							$('#post-'+postId).addClass("loaded");
							$('#post-'+postId+" .labo-content").append(postContent);
							$('#post-'+postId+" .labo-content").slideToggle();
					}
				);
			}
		});

	});
} ( this, jQuery ));
