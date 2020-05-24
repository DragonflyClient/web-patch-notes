<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patchnotes | Overview</title>
    <link rel="icon" href="https://cdn.icnet.dev/web/mcicn/assets/img/svg/logo.svg">
    <link rel="stylesheet" href="https://cdn.icnet.dev/web/mcicn/patchnotes/css/patchnotes-style.css">
    <link rel="stylesheet" href="https://cdn.icnet.dev/web/mcicn/css/header-style.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
    <div class="header" data-aos="fade-down" id="navbar">
      <div class="upper-wrapper">
        <div class="logo">
          <a href="/"><img src="https://cdn.icnet.dev/web/mcicn/assets/img/svg/logo-header.svg" alt="" class="logo-img"/></a>
        </div>
        <div class="ham-wrapper">
          <div class="line line1"></div>
          <div class="line line2"></div>
          <div class="line line3"></div>
        </div>
      </div>
      <div class="nav" id="nav">
        <ul>
          <li class="item" onclick="closeMenu()">
            <a href="/">Home</a>
          </li>
          <li class="item" onclick="closeMenu()"><a href="../#faq">FAQ</a></li>
          <li class="item" onclick="closeMenu()">
            <a href="/download">Download</a>
          </li>
          <div class="socials">
            <a href="https://instagram.com/inceptioncloud" target="_blank">
              <i class="fab fa-instagram"></i
            ></a>
            <a href="https://twitter.com/inceptioncloud" target="_blank">
              <i class="fab fa-twitter"></i
            ></a>
            <a href="https://discord.gg/VS2eN2z" target="_blank">
              <i class="fab fa-discord"></i
            ></a>
          </div>
        </ul>
      </div>
    </div>
    <div class="main" data-aos="zoom-in">
      <h1>Patchnotes</h1>
      <div class="wrapper">
        <?php 
          $dir    = 'patch';
          $files = scandir($dir);
          rsort($files);
          foreach($files as $value) {
              if (substr( $value, 0, 1 ) != "." && !endsWith($value, ".png")) {
                   echo "<div class=\"patch-box\"><a href=\"./patch/" . substr($value, 0, -5) . "\">" . substr($value, 1, -5) . "</a>";
                  echo "<div class=\"patch-img\" style=\"background-image: url('./patch/" . substr($value, 0, -5) . ".png')\"></div></div>";
              }
          }
  
          function endsWith($haystack, $needle)
          {
              $length = strlen($needle);
              if ($length == 0) {
              return true;
          }
  
          return (substr($haystack, -$length) === $needle);
          }
        ?>
      </div>
    </div>
    <!-- AOS -->
    <script
      src="https://unpkg.com/aos@2.3.1/dist/aos.js"
      type="text/javascript"
    ></script>
    <script>
      AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

        offset: 0,
        delay: 0,
        duration: 300,
        easing: 'ease',
        once: true,
        mirror: false,
        anchorPlacement: 'top',
      });
    </script>
    <script src="https://cdn.icnet.dev/web/mcicn/patchnotes/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>
</html>