export default {
  init() {
    // JavaScript to be fired on the services page
  },
  finalize() {
    // JavaScript to be fired on the services page, after the init JS
    jQuery(document).ready( function(){
      setUpChanger();
      removeEmptyParagraphs();
    });
  },
};

function setUpChanger() {
  $('.service-toggle').on('click', function(event) {
    event.preventDefault();

    let service_tgt_str  = $(this).attr('data-service');
    let $service_tgt = $('.service__' + service_tgt_str);

    if ($service_tgt.hasClass('active')) {
      return;
    }

    $('.service.active').removeClass('active');
    $('.picture.active').removeClass('active');

    $service_tgt.addClass('active');

    let $img_tgt = $('.picture__' + service_tgt_str);
    $img_tgt.addClass('active');

    // Radio
    $('#d-' + service_tgt_str)
      .attr('checked', 'checked')
      .change();

    console.log('#d-' + service_tgt_str);

  });
}

function removeEmptyParagraphs() {
  $('p').each( function(){
    let trimmed = $(this).text().trim();
    if (trimmed === '') {
      $(this).remove();
    }
  });
}
