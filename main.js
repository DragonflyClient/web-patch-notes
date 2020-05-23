/* Selectors */

const nav = document.querySelector('.nav');
const ham = document.querySelector('.ham-wrapper');
const socials = document.querySelector('.socials');
const landing = document.querySelector('.landing');

nav.classList.remove('nav-active');
ham.classList.remove('ham-active');

/* Eventlisteners */
ham.addEventListener('click', toggleNav);

/* Functions */
function toggleNav() {
  nav.classList.toggle('nav-active');
  ham.classList.toggle('ham-active');
  socials.classList.toggle('socials-active');
  event.preventDefault();
}
function closeMenu(e) {
  nav.classList.toggle('nav-active');
  ham.classList.toggle('ham-active');
  e.preventDefault();
}
