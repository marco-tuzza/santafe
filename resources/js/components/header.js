import $ from 'jquery';

/* Menu mobile */

/* Open menu mobile */
$('#hamburger-menu').on("click", function() {
    if ($('#menu-mobile').is(":hidden")) {
        $('#menu-mobile').slideDown(500);
    }
});

/* Close menu mobile */
$('#menu-mobile-header-close').on("click", function() {
    if ($('#menu-mobile').is(":visible")) {
        $('#menu-mobile').slideUp(500);
    }
});

/* Close menu mobile when click outside */
$(document).on("mouseup", function(e) {
    var container = $("#menu-mobile");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.slideUp(500);
    }
});

/* Close menu mobile when resize and the page is bigger than 768px*/
$(window).on('resize', function() {
    if ($(window).width() > 768) {
        $('#menu-mobile').hide();
    }
});