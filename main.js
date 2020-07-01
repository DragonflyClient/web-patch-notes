const nav = document.querySelector('.nav');
const ham = document.querySelector('.ham-wrapper');
const socials = document.querySelector('.socials');

nav.classList.remove('nav-active');
ham.classList.remove('ham-active');

// Hamburger Menu
ham.addEventListener('click', toggleNav);

// Open / Close the nav menu
function toggleNav() {
  nav.classList.toggle('nav-active');
  ham.classList.toggle('ham-active');
  socials.classList.toggle('socials-active');
}

// Close the nav menu
function closeMenu(e) {
  nav.classList.toggle('nav-active');
  ham.classList.toggle('ham-active');
}
function scrollToTop() {
  $("html, body").animate({ scrollTop: 0 },  400)
  closeMenu()
}

// Change direction of logo anchor
window.addEventListener("scroll", function () {
  const logoImg = document.querySelector("#logo a")
  if (document.documentElement.scrollTop > 0) {
    logoImg.setAttribute("href", "#")
  } else {
    logoImg.setAttribute("href", "https://inceptioncloud.net/dragonfly")
  }
})

if ('scrollRestoration' in history) {
  history.scrollRestoration = 'manual';
}