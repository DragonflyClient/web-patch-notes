const nav = document.querySelector('.nav');
const ham = document.querySelector('.ham-wrapper');
const socials = document.querySelector('.socials');

if (nav.classList.contains('nav-active')) {
    nav.classList.remove('nav-active');
    ham.classList.remove('ham-active');
}

// Hamburger Menu
ham.addEventListener('click', toggleNav);

// Open / Close the nav menu
function toggleNav() {
    if (nav.classList.contains("nav-active")) {
        setTimeout(function () {
            nav.style.display = "none"
            nav.style.position = "fixed"
        }, 350)
    } else {
        if (nav.classList.contains("dfo")) {
            nav.classList.remove("dfo")
        }
        nav.style.display = "flex"
        nav.style.position = "sticky"
    }
    setTimeout(function () {
        nav.classList.toggle('nav-active');
        ham.classList.toggle('ham-active');
        socials.classList.toggle('socials-active');
    }, 5)
}

// Show popup when url contains "patchnotes/patch"
let popupShown = false
window.addEventListener('load', function () {
    console.log(window.location.href.indexOf('patchnotes'))
    if (window.location.href.indexOf('patchnotes') > -1 && localStorage.getItem("popupShown") !== "true") {
        console.log(window.location.href)
        setTimeout(function () {
            Swal.fire({
                icon: 'info',
                title: 'Patch Notes have moved!',
                html:
                    'Click <a href="../releasenotes" style="color: #ef852e">here</a>, ' +
                    'to take a look at the new place of the release notes'
            })
        }, 850)
    }
    popupShown = true
    localStorage.setItem("popupShown", "true")
})

// Close the nav menu
function closeMenu(e) {
    nav.classList.remove('nav-active');
    ham.classList.remove('ham-active');
}

function scrollToTop() {
    $("html, body").animate({ scrollTop: 0 }, 400)
    closeMenu()
}
window.addEventListener("load", function () {
    if (!document.getElementById("news")) {
        nav.style.position = "fixed"
    }
})

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