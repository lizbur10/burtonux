jQuery(function($){
    $( '.hamburger' ).click(function(){
        $('.main-menu ul').toggleClass('expand');
    });
});

jQuery(function($){
	$(".no-touchevents nav li").hover(function() {
		$(this).toggleClass("menu-hover-state");
	});
});
