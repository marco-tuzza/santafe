import $ from 'jquery';

// Select elements once and store them in variables
const $menuMobile = $('#menu-mobile');
const $menuMobileBodyList = $('#menu-mobile-body-list');
const $overlay = $('#overlay');
const $hamburgerMenu = $('#hamburger-menu');
const $menuMobileHeaderClose = $('#menu-mobile-header-close');

// Function to open the mobile menu
function openMenu() {
    $menuMobile.slideDown(500);
    $overlay.fadeIn(500);
    $("#menu-mobile-body-list").fadeIn(500);
}

// Function to close the mobile menu
function closeMenu() {
    $menuMobile.slideUp(500);
    $overlay.fadeOut(500);
    $("#menu-mobile-body-list").fadeOut(250);
}

// Event handler for opening the mobile menu
$hamburgerMenu.on("click", function() {
    if ($menuMobile.is(":hidden")) {
        openMenu();
    }
});

// Event handler for closing the mobile menu
$menuMobileHeaderClose.on("click", function() {
    if ($menuMobile.is(":visible")) {
        closeMenu();
    }
});

// Event handler for closing the mobile menu when clicking outside
$(document).on("mouseup", function(e) {
    if (!$menuMobile.is(e.target) && $menuMobile.has(e.target).length === 0) {
        closeMenu();
    }
});

// Event handler for closing the mobile menu when resizing the window
$(window).on('resize', function() {
    if ($(window).width() > 768) {
        closeMenu();
    }
});
