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
			menu: '#multiscroll-menu',
			anchors: ['home', 'studies', 'skills', 'contact'],
			navigation: true,
			navigationPosition: 'right',
			onLeave: function(index, nextIndex, direction){
				header_effects(nextIndex, direction);
			}	
		});
	} else {
		$('#fullpage').fullpage({
			controlArrows: false,
			slidesNavigation: true,
			onLeave: function(index, nextIndex, direction){
				header_effects(nextIndex, direction);
			}
		});
	}

	$('#menu-1 a').on('click', function(){
		$('#st-container').toggleClass('st-menu-open');
	});
	
});
