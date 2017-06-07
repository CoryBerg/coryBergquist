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
