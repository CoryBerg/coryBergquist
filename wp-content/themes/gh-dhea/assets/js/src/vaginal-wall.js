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