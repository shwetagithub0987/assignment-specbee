(function ($) {
    $('.tab:first').addClass('active');
    $('.tab-pane:first').addClass('active');

    $('.tab').click(function() {
      
        $('.tab').removeClass('active');
        $('.tab-pane').removeClass('active');

        $(this).addClass('active');
        $($(this).data('target')).addClass('active');
    });

    $('.slider').slick({
        // Options
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
          {
            breakpoint: 1360,
            settings: {
                dots: true,
                arrows: false
            }
        },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: true,
                  arrows: false
              }
          }
      ]
    });
  })(jQuery);
  
