window.addEventListener('load', function () {
  const nav = document.querySelector('.nav'),
    ham = document.querySelector('.ham-wrapper'),
    socials = document.querySelector('.socials');
  function toggleNav() {
    nav.classList.contains('nav-active')
      ? setTimeout(function () {
          (nav.style.display = 'none'), (nav.style.position = 'fixed');
        }, 350)
      : (nav.classList.contains('dfo') && nav.classList.remove('dfo'),
        (nav.style.display = 'flex'),
        (nav.style.position = 'sticky')),
      setTimeout(function () {
        nav.classList.toggle('nav-active'),
          ham.classList.toggle('ham-active'),
          socials.classList.toggle('socials-active');
      }, 5);
  }
  if (nav.classList.contains('nav-active')) {
    nav.classList.remove('nav-active');
    ham.classList.remove('ham-active');
  }
  ham.addEventListener('click', toggleNav);
  function closeMenu(e) {
    nav.classList.remove('nav-active'), ham.classList.remove('ham-active');
  }

  /* Smooth scroll top */
  function scrollToTop() {
    $('html, body').animate({ scrollTop: 0 }, 400), closeMenu();
  }

  /* "Patchnotes have moved" popup */
  let popupShown = !1;
  window.addEventListener('load', function () {
    console.log(window.location.href.indexOf('patchnotes')),
      window.location.href.indexOf('patchnotes') > -1 &&
        'true' !== localStorage.getItem('popupShown') &&
        (console.log(window.location.href),
        setTimeout(function () {
          Swal.fire({
            icon: 'info',
            title: 'Patch Notes have moved!',
            html:
              'Click <a href="../releasenotes" style="color: #ef852e">here</a>, to take a look at the new place of the release notes',
          });
        }, 850)),
      (popupShown = !0),
      localStorage.setItem('popupShown', 'true');
  }),
    window.addEventListener('load', function () {
      document.getElementById('news') || (nav.style.position = 'fixed');
    }),
    window.addEventListener('resize', function () {
      nav.classList.contains('nav-active')
        ? setTimeout(function () {
            (nav.style.display = 'none'), console.log('here');
          }, 400)
        : (nav.style.display = 'flex');
    }),
    window.addEventListener('scroll', function () {
      const e = document.querySelector('#logo a');
      document.documentElement.scrollTop > 0
        ? e.removeAttribute('href')
        : e.setAttribute('href', 'https://inceptioncloud.net/dragonfly');
    }),
    'scrollRestoration' in history && (history.scrollRestoration = 'manual');
});
