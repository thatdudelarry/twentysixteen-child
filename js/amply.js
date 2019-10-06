(function($) {

		$(window).scroll(function() {
	    if ($(this).scrollTop() >= 500 && sessionStorage.nag != 'nagged') {
        alert('You\'ve scrolled 500 pixels. I won\'t bother you again during this session.');
        sessionStorage.setItem('nag', 'nagged');
	    }
		});

})( jQuery );