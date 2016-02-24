$(document).ready(function() {

	function header_effects(nextIndex, direction){

		var $head = $( '#ha-header' );

		if (direction == "down" && nextIndex >= 2) {
			$head.attr('class', 'ha-header ha-header-small');
		}

		if (direction == "up" && nextIndex == 1) {
			$head.attr('class', 'ha-header ha-header-large');
		}
	}

	if (isMobile == '0') {
		$('#multiscroll').multiscroll({
			anchors: ['home', 'studies', 'skills', 'contact'],
			onLeave: function(index, nextIndex, direction){
				header_effects(nextIndex, direction);
			},		
			
		});
	} else {
		$('#fullpage').fullpage({
			onLeave: function(index, nextIndex, direction){
				header_effects(nextIndex, direction);
			}
		});
	}
	
});
