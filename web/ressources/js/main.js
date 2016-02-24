$(document).ready(function() {
	if (isMobile == 'no-mobile'){
		$('#multiscroll').multiscroll();		
	}
	else
	{
		$('#fullpage').fullpage();
	}
});
