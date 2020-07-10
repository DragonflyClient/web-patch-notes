const nav = document.querySelector('.nav');
const ham = document.querySelector('.ham-wrapper');
const socials = document.querySelector('.socials');

nav.classList.remove('nav-active');
ham.classList.remove('ham-active');

// Hamburger Menu
ham.addEventListener('click', toggleNav);

// Open / Close the nav menu
function toggleNav() {
    if (nav.classList.contains("nav-active")) {
        setTimeout(function () {
            nav.style.display = "none"
            console.log("here")
        }, 400)
    } else {
        if(nav.classList.contains("dfo")) {
            nav.classList.remove("dfo")
        }
        nav.style.display = "flex"
    }
    setTimeout(function () {
        nav.classList.toggle('nav-active');
        ham.classList.toggle('ham-active');
        socials.classList.toggle('socials-active');
    }, 5)
}

// Close the nav menu
function closeMenu(e) {
    nav.classList.remove('nav-active');
    ham.classList.remove('ham-active');
}

function scrollToTop() {
    $("html, body").animate({scrollTop: 0}, 400)
    closeMenu()
}

window.addEventListener("resize", function () {
    // Nav
    if (nav.classList.contains("nav-active")) {
        setTimeout(function () {
            nav.style.display = "none"
            console.log("here")
        }, 400)
    } else {
        nav.style.display = "flex"
    }
})

// Change direction of logo anchor
window.addEventListener("scroll", function () {
    const logoImg = document.querySelector("#logo a")
    if (document.documentElement.scrollTop > 0) {
        /* logoImg.setAttribute("href", "''")*/
        logoImg.removeAttribute("href")
    } else {
        logoImg.setAttribute("href", "https://inceptioncloud.net/dragonfly")
    }
})

if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}