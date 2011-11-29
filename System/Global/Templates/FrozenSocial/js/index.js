function scrollToPlace(place) {
	$('html,body').animate(
		{
			scrollTop: place.offset().top + 1
		}, 
		{
			duration: 1000,
			easing: "easeInOutQuart"
		}
	);
}

function eventHandlers() {
	$("#nav a").live('click tap', function() {
		var destination = $(this).attr("href");
		scrollToPlace($(destination))	
		return false;
		
	})
}
jQuery(function($) {

	$('article > section').waypoint({ offset: '50%' });
	

	$('body').delegate('article > section', 'waypoint.reached', function(event, direction) {
		var $active = $(this);
		
		if (direction === "up") {
			$active = $active.prev();
		}
		if (!$active.length) $active.end();
		
		$('.section-active').removeClass('section-active');
		$active.addClass('section-active');
		
		$('.link-active').removeClass('link-active');
		$('a[href=#'+$active.attr('id')+']').addClass('link-active');
	});
	
	$('body > header nav a').click(function() {
		$(this).addClass('link-active');
	}).eq(0).addClass('link-active');
	
	var scrollElement = 'html, body';
	$('html, body').each(function () {
		var initScrollTop = $(this).attr('scrollTop');
		$(this).attr('scrollTop', initScrollTop + 1);
		if ($(this).attr('scrollTop') == initScrollTop + 1) {
			scrollElement = this.nodeName.toLowerCase();
			$(this).attr('scrollTop', initScrollTop);
			return false;
		}    
	});
	
	$("a[href^='#']").click(function(event) {
		event.preventDefault();
		
		var $this = $(this),
		target = this.hash,
		$target = $(target);
		
		$(scrollElement).stop().animate({
			'scrollTop': $target.offset().top
		}, 500, 'swing', function() {
			window.location.hash = target;
		});
		
	});
});