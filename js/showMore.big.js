
// Get the list, all items, and the button
const showMoreBtn = document.getElementById('showMoreBtn');
let showMoreContent;
if (showMoreBtn) 
  showMoreContent = showMoreBtn.innerHTML;

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
        item.style.display = 'block';
      });
      showMoreBtn.textContent = showLessText;
      showMoreBtn.dataset.shown = 'true';
    }
  }
  
  // Attach event listener
  if(showMoreBtn)  showMoreBtn.addEventListener('click', showMore);
  
  // Initialize
  limitItems();