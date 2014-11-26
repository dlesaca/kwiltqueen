//slider
jQuery(document).ready(function($) {
	$('.flexslider').flexslider();
});

//menu
$(window).load(function() { // enable function upon window load
	$("#toggle").click(function() { // when toggle is clicked...
		$("#nav-main").toggle(); // ... open or close the navigation
	});
});