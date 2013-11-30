(function($){

	"use strict";

	$(function(){


		$(function () {
		    'use_strict';
		    var url = 'http://localhost:8888/pla/quienes.html';
		    $("video").bind("ended", function () {
		        setTimeout(function(){
		            window.location = url;
		        },800);
		    });
		});


	});

})(jQuery);
