function scrollToTop() { $('html, body').animate({ scrollTop: 0 }, 400), closeMenu(); }
window.addEventListener('load', function () {
    function closeMenu() { nav.classList.remove('nav-active'); ham.classList.remove('ham-active'); }
    const nav = document.querySelector('.nav'), ham = document.querySelector('.ham-wrapper'), socials = document.querySelector('.socials'), header = document.getElementById('header') || document.getElementById('navbar'); ham.addEventListener('click', toggleNav); function toggleNav() {
        nav.classList.toggle('nav-active')
        ham.classList.toggle('ham-active'); setTimeout(() => { socials.classList.toggle("socials-active") }, 500);
    }
});

// Change logo href based on scroll position
window.addEventListener('scroll', function () {
    if (window.pageYOffset > 0) {
        document.querySelector('.logo a').href = '#'
        console.log(window.pageYOffset, 'greater')
    } else {
        document.querySelector('.logo a').href = 'https://playdragonfly.net'
        console.log(window.pageYOffset, 'less')
    }
})