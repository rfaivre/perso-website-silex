$(document).ready(function() {

	function header_effects(nextIndex, direction){

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
	}

	if (isMobile == '0'){
		$('#multiscroll').multiscroll({
			onLeave: function(index, nextIndex, direction){
				header_effects(nextIndex, direction);
			},		
			
		});

	}
	else
	{
		$('#fullpage').fullpage({
			onLeave: function(index, nextIndex, direction){
				header_effects(nextIndex, direction);
			}
		});
	}
	
});
