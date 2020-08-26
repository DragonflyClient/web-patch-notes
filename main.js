// Hamburger Menu
nav.classList.remove('nav-active');
ham.classList.remove('ham-active');
console.log('nav test active')
let navOpen = false
ham.addEventListener('click', e => {

    if (!navOpen) {
        nav.classList.add('nav-active')
        ham.classList.add('ham-active')
        socials.classList.add('socials-active')
        if (news && news.getAttribute('closed') !== "true") {
            console.log('first if')
            setTimeout(() => {
                hideNews()
            }, 250);
        } else {
            console.log('first else')
            hideNews()
        }
        navOpen = true
    } else {
        if (news && news.getAttribute('closed') !== "true") {
            showNews()
            setTimeout(() => {
                nav.classList.remove('nav-active')
                ham.classList.remove('ham-active')
                socials.classList.remove('socials-active')
            }, 250);
        } else {
            nav.classList.remove('nav-active')
            ham.classList.remove('ham-active')
            socials.classList.remove('socials-active')
        }

        navOpen = false
    }
})

function hideNews() {
    let op = "-"
    if (news.getAttribute('closed') !== "true") {
        news.style.transform = `translateY(${op}${news.offsetHeight}px)`
        document.getElementById("navbar").style.transform = `translateY(${op}${news.offsetHeight}px)`
        document.getElementById("navbar").style.top = `${news.offsetHeight}px`
    }

    console.log(op, `translateY(${op}${news.offsetHeight}px)`)

    if (news.getAttribute('closed') == "true" && width < 1000) {
        document.getElementById("features").style.paddingTop = "0px"
        document.getElementById("features").style.marginTop = "-50px"
    }
    console.log(news.getAttribute('closed') == "true")
    if (news.getAttribute('closed') == "true") {
        landing.style.transform = `translateY(-${news.offsetHeight}px)`
    }
}
function showNews() {
    if (news.getAttribute('closed') !== "true") {
        news.style.transform = `translateY(0px)`
        document.getElementById("navbar").style.transform = `translateY(0px)`
        document.getElementById("navbar").style.top = `0px`
    }
}

if (news) {
    newsCloseBtn.addEventListener("click", manageNews)
}

function manageNews() {
    console.log('closing')
    news.style.transform = `translateY(-${news.offsetHeight}px)`
    document.getElementById("navbar").style.transform = `translateY(-${news.offsetHeight}px)`
    document.getElementById("navbar").style.top = `${news.offsetHeight}px`
    localStorage.setItem('newsClosed', 'true')
    news.setAttribute('closed', 'true')
    hideNews()
}

// Close the nav menu
function closeMenu() {
    nav.classList.remove('nav-active');
    ham.classList.remove('ham-active');
}