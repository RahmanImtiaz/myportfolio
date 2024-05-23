// DOM elements
const loggedIn = document.getElementById('loggedin');
const loggedOut = document.getElementById('loggedout');
const scrollers = document.querySelectorAll('.scroller');

// scroller animation for skills
addScrollerAnimation();

//duplicate scroller content
function addScrollerAnimation() {
  scrollers.forEach(scroller => {
    const scrollerInner = scroller.querySelector('.scroller-inner');
    const scrollerContent = Array.from(scrollerInner.children);

    scrollerContent.forEach((item) => {
      const duplicate = item.cloneNode(true);
      duplicate.setAttribute('aria-hidden', true);
      scrollerInner.appendChild(duplicate);
    })
  });
}

// blog post clear button prompts
const button = document.getElementById('clearButton');
button.addEventListener('click', confirmPrompt);

function confirmPrompt(event) {
  if (confirm("Are you sure you want to clear blog draft?")) {
    button.disabled = false;
  } else {
    button.disabled = true;
    button.removeAttribute('disabled');
    event.preventDefault();
  }

}

// blog post prompts
const blogButton = document.getElementById('blogButton');
blogButton.addEventListener('click', blogPrompt);

function blogPrompt(event) {
  let title = document.querySelector('input[id="BlogTitle"]');
  let post = document.querySelector('textarea[id="BlogContent"]');
  if (title.value.trim() === '' || post.value.trim() === '') {

    if (title.value.trim() === '') {
      event.preventDefault();
      title.classList.add('errorHighlight');
      setTimeout(function () {
        title.classList.remove('errorHighlight');
      }, 3000);
    }
    if (post.value.trim() === '') {
      event.preventDefault();
      post.classList.add('errorHighlight');
      setTimeout(function () {
        post.classList.remove('errorHighlight');
      }, 3000);
    }
  }
}


// show posts from selected month
function showPosts(monthYear) {
  let monthPosts = document.getElementsByClassName('monthPosts');
  for (let i = 0; i < monthPosts.length; i++) {
      monthPosts[i].style.display = 'none';
  }
 
  if (monthYear === 'all') {
    for (let i = 0; i < monthPosts.length; i++) {
      monthPosts[i].style.display = 'block';
    }
  }

  document.getElementById(monthYear).style.display = 'block';
  return;
}
