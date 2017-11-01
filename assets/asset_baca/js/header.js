jQuery(document).ready(function() {
			
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() >= 0) { // this refers to window
		    jQuery(".navbar-collapse.collapse").addClass('header-scroll');
            jQuery("#header-search").addClass('header-scroll');
		}
		else {
			jQuery(".navbar-collapse.collapse").removeClass('header-scroll');
            jQuery("#header-search").removeClass('header-scroll');
		}
	});

	jQuery(".menu-dropdown").hover(
        function () {
            jQuery(".main-content").stop(true,true).slideDown('fast', function(){ jQuery(".main-content").css('overflow','visible') });
        }, 
        function () {
            jQuery(".main-content").stop(true,true).slideUp('fast', function(){ jQuery(".main-content").css('overflow','visible') });
        }
    );

    jQuery(".menu-dropdown2").hover(
        function () {
            jQuery(this).find(".sub-content").stop(true,true).slideDown('fast', function(){ jQuery(this).find(".sub-content").css('overflow','visible') });
        }, 
        function () {
            jQuery(this).find(".sub-content").stop(true,true).slideUp('fast', function(){ jQuery(this).find(".sub-content").css('overflow','visible') });
        }
    );

});


