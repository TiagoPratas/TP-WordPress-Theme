jQuery(document).ready(function($) {
	$(".mensagem").hide();
	$("#logo").hover(
		function() {
   			$(".mensagem").fadeIn();
 		},
 		function () {
   			$(".mensagem").fadeOut();
		}
	);
});

jQuery(window).load(function() {
	jQuery('.flexslider').flexslider({
		controlNav: false,
		prevText: "",
		nextText: "",
	});
});