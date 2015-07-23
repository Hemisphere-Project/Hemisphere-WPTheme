(function( root, $, undefined ) {
	"use strict";
	var currentProject = {
		numbering:0,
		date:"",
		title:"",
		commanditaire:"",
		lieu:""
	};

	$(function () {
			
		// DOM ready, take it away
		/*** script for realisations page ***/
		$(".project-item").on("mouseover",function(event){
			currentProject.numbering = $(event.currentTarget).find(".numbering").text();
			currentProject.date = $(event.currentTarget).find(".date").text();
			currentProject.title = $(event.currentTarget).find(".title").text();
			currentProject.commanditaire = $(event.currentTarget).find(".commanditaire").text();
			currentProject.lieu = $(event.currentTarget).find(".lieu").text();
			
			updateCurrentProject();
		});
		
		function updateCurrentProject(){
			$(".legend .lgd-numbering").text(currentProject.numbering);
			$(".legend .lgd-annee").text(currentProject.date);
			$(".legend .lgd-title").text(currentProject.title);
			$(".legend .lgd-commanditaire").text(currentProject.commanditaire);
			$(".legend .lgd-lieu").text(currentProject.lieu);
		} 
	});

} ( this, jQuery ));
