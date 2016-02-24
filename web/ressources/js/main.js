$(document).ready(function() {
	if (isMobile == '0'){
		$('#multiscroll').multiscroll({
			onLeave: function(index, nextIndex, direction){

				var $head = $( '#ha-header' ),
					$waypoint = $( '.ha-waypoint' ),
					animClassDown = $waypoint.data( 'animateDown' ),
					animClassUp = $waypoint.data( 'animateUp' );

				if (direction == "down" && nextIndex == 2)
				{
					$head.attr('class', 'ha-header ' + animClassDown);
				}

				if (direction == "up" && nextIndex == 1)
				{
					$head.attr('class', 'ha-header ' + animClassUp);
				}
				
			},		
			
		});

	}
	else
	{
		$('#fullpage').fullpage({
			onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){

				var $head = $( '#ha-header' ),
					$waypoint = $( '.ha-waypoint' ),
					animClassDown = $waypoint.data( 'animateDown' ),
					animClassUp = $waypoint.data( 'animateUp' );

				if (direction == "down" && nextSlideIndex == 2)
				{
					$head.attr('class', 'ha-header ' + animClassDown);
				}

				if (direction == "up" && nextSlideIndex == 1)
				{
					$head.attr('class', 'ha-header ' + animClassUp);
				}
			}
		});
	}
	
});
