document.addEventListener('DOMContentLoaded', function () {
  // Check if screen is large (Bootstrap lg breakpoint)
  function isLargeScreen() {
    return window.innerWidth >= 992;
  }

  // Get all dropdown elements
  const dropdowns = document.querySelectorAll('.dropdown');

  // Handle hover behavior
  dropdowns.forEach(dropdown => {
    // Mouse enter (hover in)
    dropdown.addEventListener('mouseenter', function () {
      if (isLargeScreen()) {
        this.classList.add('show');
        this.querySelector('.dropdown-menu').classList.add('show');
      }
    });

    // Mouse leave (hover out)
    dropdown.addEventListener('mouseleave', function () {
      if (isLargeScreen()) {
        this.classList.remove('show');
        this.querySelector('.dropdown-menu').classList.remove('show');
      }
    });

    // Prevent click from opening dropdown on large screens
    const toggle = dropdown.querySelector('.dropdown-toggle');
    if (toggle) {
      toggle.addEventListener('click', function (e) {
        if (isLargeScreen()) {
          e.preventDefault();
          e.stopPropagation();
        }
      });
    }
  });

  // Handle window resize
  window.addEventListener('resize', function () {
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
document.addEventListener('DOMContentLoaded', async function () {
  // Hide loader when page is loaded
  document.getElementById('loader').classList.add('hidden');

});


// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(async anchor => {
  anchor.addEventListener('click', function (e) {
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


$(document).ready(function () {
  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.back-to-top').addClass('show');
    } else {
      $('.back-to-top').removeClass('show');
    }
  });

  $('.back-to-top').click(function (e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    })
  });


  // Smooth scrolling for anchor links
  $('a[href^="#"]').on('click', function (e) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
      e.preventDefault();
      $('html, body').stop().animate({
        scrollTop: target.offset().top - 80
      }, 1000);
    }
  });


});

// Get the list, all items, and the button
const showMoreBtn = document.getElementById('showMoreBtn');
const showMoreContent = showMoreBtn.innerHTML;

const MAX_ITEMS = 6;

// Initially hide items beyond the 6th
function limitItems() {
  items.forEach((item, index) => {
    if (index >= MAX_ITEMS) {
      item.style.display = 'none';
    }
  });

  // If there are 6 or fewer items, hide the button
  if (items.length <= MAX_ITEMS) {
    showMoreBtn.style.display = 'none';
  }
}

// Toggle to show all items
function showMore() {
  let isAllShown = showMoreBtn.dataset.shown === 'true';

  if (isAllShown) {
    // Hide back to 6
    items.forEach((item, index) => {
      if (index >= MAX_ITEMS) {
        item.style.display = 'none';
      }
    });
    showMoreBtn.innerHTML = showMoreContent;
    showMoreBtn.dataset.shown = 'false';
  } else {
    // Show all
    items.forEach(item => {
      item.style.display = 'list-item';
    });
    showMoreBtn.textContent = showLessText;
    showMoreBtn.dataset.shown = 'true';
  }
}

// Attach event listener
showMoreBtn.addEventListener('click', showMore);

// Initialize
limitItems();