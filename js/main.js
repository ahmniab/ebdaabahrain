document.addEventListener('DOMContentLoaded', function() {
  // Check if screen is large (Bootstrap lg breakpoint)
  function isLargeScreen() {
    return window.innerWidth >= 992;
  }

  // Get all dropdown elements
  const dropdowns = document.querySelectorAll('.dropdown');

  // Handle hover behavior
  dropdowns.forEach(dropdown => {
    // Mouse enter (hover in)
    dropdown.addEventListener('mouseenter', function() {
      if (isLargeScreen()) {
        this.classList.add('show');
        this.querySelector('.dropdown-menu').classList.add('show');
      }
    });

    // Mouse leave (hover out)
    dropdown.addEventListener('mouseleave', function() {
      if (isLargeScreen()) {
        this.classList.remove('show');
        this.querySelector('.dropdown-menu').classList.remove('show');
      }
    });

    // Prevent click from opening dropdown on large screens
    const toggle = dropdown.querySelector('.dropdown-toggle');
    if (toggle) {
      toggle.addEventListener('click', function(e) {
        if (isLargeScreen()) {
          e.preventDefault();
          e.stopPropagation();
        }
      });
    }
  });

  // Handle window resize
  window.addEventListener('resize', function() {
    if (!isLargeScreen()) {
      dropdowns.forEach(dropdown => {
        dropdown.classList.remove('show');
        const menu = dropdown.querySelector('.dropdown-menu');
        if (menu) menu.classList.remove('show');
      });
    }
  });
});

// Display statistics numbers directly without animation for better performance
document.addEventListener('DOMContentLoaded', async function() {
  // Hide loader when page is loaded
  document.getElementById('loader').classList.add('hidden');

});


// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(async anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});


$(document).ready(function() {
  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
      $('.back-to-top').addClass('show');
    } else {
      $('.back-to-top').removeClass('show');
    }
  });

  $('.back-to-top').click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 800);
  });

  // Hide loader after 3 seconds if load event doesn't fire
  setTimeout(function() {
    $('#loader').addClass('hidden');
  }, 3000);

  // Smooth scrolling for anchor links
  $('a[href^="#"]').on('click', function(e) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
      e.preventDefault();
      $('html, body').stop().animate({
        scrollTop: target.offset().top - 80
      }, 1000);
    }
  });


});