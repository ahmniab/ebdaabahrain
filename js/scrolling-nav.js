//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 200) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
		if ( $('html').attr('lang') == 'ar' ) {
            $("#logo").attr("src", "assets/img/logo_arabic_gray.png");
        } else {
            $("#logo").attr("src", "assets/img/LOGO_ENG_GREY.PNG");
        }
		    
        $("#lang-switch").css("top","15px");
        $("#lang-switch li i").css("color","#000");
		$("#lang-switch span").css("color","#61d2b4");

    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
		if ( $('html').attr('lang') == 'ar' ) {
            $("#logo").attr("src", "assets/img/logo_arabic_white.png");
        } else {
            $("#logo").attr("src", "assets/img/LOGO_ENG_WHITE.PNG");
        }

        $("#lang-switch").css("top","20px");
        $("#lang-switch li i").css("color","#61d2b4");
		$("#lang-switch span").css("color","#fff");

    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
