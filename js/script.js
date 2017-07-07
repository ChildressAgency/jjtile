
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

//next

//end here
	});

})(jQuery, this);
