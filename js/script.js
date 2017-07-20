
(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		$('#scrollDown').on('click', function(e){
      e.preventDefault();
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
  	    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
 		    if (target.length) {
    	    $('html,body').animate({
    	      scrollTop: target.offset().top
      	  }, 1000);
      	  return false;
    	  }
	  	}
  	});
		 //next
  	$('#scrollDown-2').on('click', function(e){
 	    e.preventDefault();
 	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
 	      var target = $(this.hash);
 	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
 	      if (target.length) {
 	        $('html,body').animate({
 	          scrollTop: target.offset().top
 	        }, 1000);
 	        return false;
 	      }
 	    }
		});
				 
 		 //next
		$('.grid').masonry({
			// options
			itemSelector: '.grid-item',
			columnWidth: 200
		});

		//next tile selector
		$('#backgrounds').on('change', function(){
			var tile_image = $('option:selected', this).data('kitchen-tile-image');
			$('#tileBackground').css('background-image', 'url(' + tile_image + ')');

			var tile_image2 = $('option:selected', this).data('bathroom-tile-image');
			$('#tileBackground-2').css('background-image', 'url(' + tile_image2 + ')');
		});

		$('.colorBox').on('click', function(e){
			e.preventDefault();
			var grout_color = $(this).data('grout-color');
			$('.tileBackground').css('background-color', grout_color );
		});

		$('#ourWork a[data-toggle="tab"]').on('shown.bs.tab', function(e){
			var targetPanel = $(e.target).attr('href');
			var oldPanel = $(e.relatedTarget).attr('href');
			$(oldPanel + '>.carousel').carousel('pause');
			$(targetPanel + '>.carousel').carousel('cycle');
		});

		$('#viewSelection a[data-toggle="tab"]').on('shown.bs-tab', function(e){
			var target = $(e.target).data('tile_type');
			if($(target).is(':empty')){
				$.ajax({
					url:jjtileAjax.ajaxurl,
					type:"POST",
					data:({ action:'jjtile_fetch_selection', selection:target}),
					error: function(result){
						$('#' + target).html('<p>Sorry, the gallery could not be retrieved.</p>');
					},
					success: function(result){
						$('#' + target).html(result);
					}
				});
			}
		});
//next

//end here
	});

})(jQuery, this);
