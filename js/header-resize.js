/**
 * header-resize.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("#masthead").addClass("fixed");
    } else {
        $("#masthead").removeClass("fixed");
    }
});