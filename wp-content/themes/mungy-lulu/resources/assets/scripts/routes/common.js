export default {
  init() {
    // JavaScript to be fired on all pages

    // X icon from hamburguer
    $('.hamburger').click(function() {
      $(this).toggleClass('is-active');
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
