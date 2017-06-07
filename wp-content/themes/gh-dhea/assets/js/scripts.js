/*
 * bed.js
 *
 * js for handling the bed animation on the home page
 */

jQuery(function ($) {
  $(window).on('load', function () {
    var q = 'bed-anim';

    $('#main').delay(1000, q).queue(q, function(n) {
      $('.home__sheets').animate({height: '43rem'}, 1000, n);
    }).queue(q, function(n) {
      $('.home__bar').animate({ opacity: 1 }, 1000, n);
      $('.home__pull-back').animate({ opacity: 1 }, 1000);
    }).dequeue(q);
  });
});

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
/*
 * vaginal-wall.js
 *
 * js for handling the before/after animation on the 3-layer vaginal wall page
 */

jQuery(function ($) {
  if(window.location.hash == '#after-menopause') {
    $('.page--histology').addClass('show-after');
  }

  $('.histology__wall__info__before__image, .histology__wall__image__before').on('click', function() {
    $('.histology__wall__info__before, .histology__wall__image__before').stop(true, true).animate({ opacity: 0 }).promise().then(function() {
      $('.histology__wall__info__before, .histology__wall__image__before').hide();
      $('.histology__wall__info__after, .histology__wall__image__after').stop(true, true).show().css('opacity', 0).animate({ opacity: 1 });
    });
  });

  $('.histology__wall__info__after__image, .histology__wall__image__after').on('click', function() {
    $('.histology__wall__info__after, .histology__wall__image__after').stop(true, true).animate({ opacity: 0 }).promise().then(function() {
      $('.histology__wall__info__after, .histology__wall__image__after').hide();
      $('.histology__wall__info__before, .histology__wall__image__before').stop(true, true).show().css('opacity', 0).animate({ opacity: 1 });
    });
  });
});