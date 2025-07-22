
//stories script start
(function($) {
  $.fn.showMoreStories = function(options) {

    var $totalItems = $('.story-list li').length,
        $visibleItems = $('.story-list li:visible').length,
        settings = $.extend({}, $.fn.showMoreStories.defaults, options),
        i = settings.count,
        countLess = settings.count - 1;

    $('.story-list li:lt(' + settings.count + ')').show();

    $('.more-stories').click(function(el) {
      el.preventDefault();

      if ($visibleItems !== $totalItems) {
        if(i + settings.count <= $totalItems) {
          $visibleItems = i += settings.count;
          $('.story-list li:lt('+ i +')').show();

          if(i == $totalItems) {
            if ( $('html').attr('lang') === 'ar' ) {
                $('.more-stories').text("اقل");
            } else {
                $('.more-stories').text("Show Less");
            }

          }

        } else if (i !== $totalItems) {
          $('.story-list li:gt(' + countLess + ')').show();
          if ( $('html').attr('lang') === 'ar' ) {
              $('.more-stories').text("اقل");
          } else {
              $('.more-stories').text("Show Less");
          }
          $visibleItems = $totalItems;
          i = $totalItems;
        }
      } else if($visibleItems === $totalItems) {
        $('.story-list li:gt(' + countLess + ')').hide();
        if ( $('html').attr('lang') === 'ar' ) {
            $('.more-stories').text("مزيد من القصص");
        } else {
            $('.more-stories').text("More Stories");
        }
        $visibleItems = settings.count;
        i = settings.count;
      }

    });
  };


})(jQuery);
//stories script end


//news script start
(function($) {
  $.fn.showMoreNews = function(options) {

    var $totalItems = $('.news-list li').length,
        $visibleItems = $('.news-list li:visible').length,
        settings = $.extend({}, $.fn.showMoreNews.defaults, options),
        i = settings.count,
        countLess = settings.count - 1;

    $('.news-list li:lt(' + settings.count + ')').show();

    $('.more-news').click(function(el) {
      el.preventDefault();

      if ($visibleItems !== $totalItems) {
        if(i + settings.count <= $totalItems) {
          $visibleItems = i += settings.count;
          $('.news-list li:lt('+ i +')').show();

          if(i == $totalItems) {
            if ( $('html').attr('lang') === 'ar' ) {
                $('.more-news').text("اقل");
            } else {
                $('.more-news').text("Show Less");
            }
          }

        } else if (i !== $totalItems) {
          $('.news-list li:gt(' + countLess + ')').show();
          if ( $('html').attr('lang') === 'ar' ) {
              $('.more-news').text("اقل");
          } else {
              $('.more-news').text("Show Less");
          }
          $visibleItems = $totalItems;
          i = $totalItems;
        }
      } else if($visibleItems === $totalItems) {
        $('.news-list li:gt(' + countLess + ')').hide();
        if ( $('html').attr('lang') === 'ar' ) {
            $('.more-news').text("مزيد من الأخبار");
        } else {
            $('.more-news').text("More News");
        }
        $visibleItems = settings.count;
        i = settings.count;
      }

    });
  };


})(jQuery);
//news script end
