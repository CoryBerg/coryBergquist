/*
 * custom.js
 *
 * main js entry point for custom javascript / geekhive base wordpress theme
 */

jQuery(function ($) {

    // header menu toggle
    $('.header__mobile-nav').on('click', function(){
       $('body').toggleClass('nav-open');
    });

    // modal toggles
    $('.modal-link').on('click', function(e){
        e.stopPropagation();
        e.preventDefault();
        $('body').addClass('show-modal');
    });
    $('.modal-sign-up').on('click', function(e){
       $('.modal--sign-up').show();
    });
    $('.modal-video').on('click', function(e){
        $('.modal--video').show();
    });
    $('.modal__close').on('click', function(e){
        e.preventDefault();
        $(this).parent('.modal').hide();
        $('body').removeClass('show-modal');
    });
    $(window).on('touchstart click', function(){
        $('.modal').hide();
        $('body').removeClass('show-modal');
    });
    $('.modal').on('touchstart click', function(e){
        e.stopPropagation();
    });

    // accordion toggle
    $('.accordion__title').on('click', function(){
        $(this).parent('.accordion').toggleClass('accordion--open');
    });
});