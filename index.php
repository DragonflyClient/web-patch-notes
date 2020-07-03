<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Patchnotes | Overview</title>
      <link rel="icon" href="../assets/Dragon.svg">
      <link rel="stylesheet" href="https://cdn.icnet.dev/web/drgn/patchnotes/css/patchnotes-style.css">
      <link rel="stylesheet" href="https://cdn.icnet.dev/web/drgn/css/header-style.css">
      <link rel="stylesheet" href="https://cdn.icnet.dev/web/drgn/patchnotes/css/fonts.css">
      <meta name="description" content="All information about updates to the Dragonfly modification">
      <link rel="stylesheet" href="https://cdn.icnet.dev/web/drgn/css/style.css">
      <!-- IONICONS -->
      <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
      <!-- AOS -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
   </head>

   <body>
      <div class="header" data-aos="fade-down" id="navbar">
         <div class="upper-wrapper">
            <div class="logo">
               <a href="/"><img src="../assets/Dragon.png" alt="" class="logo-img" /></a>
            </div>
            <div class="ham-wrapper">
               <div class="line line1"></div>
               <div class="line line2"></div>
               <div class="line line3"></div>
            </div>
         </div>
         <div class="nav" id="nav" style="font-size: 20px;">
            <ul>
               <li class="item" onclick="closeMenu()">
                  <a href="/dragonfly">Home</a>
               </li>
               <li class="item" onclick="closeMenu()"><a href="https://icnet.dev/discord">Discord</a></li>
               <li class="item" onclick="closeMenu()">
                  <a href="/dragonfly/download">Download</a>
               </li>
               <div class="socials">
                  <a href="https://instagram.com/inceptioncloud" target="_blank">
                     <i class="fab fa-instagram"></i
                     ></a>
                  <a href="https://twitter.com/inceptioncloud" target="_blank">
                     <i class="fab fa-twitter"></i></a>
                  <a href="https://discord.gg/VS2eN2z" target="_blank">
                     <i class="fab fa-discord"></i
                     ></a>
               </div>
            </ul>
         </div>
      </div>
      <div class="main" data-aos="zoom-out-up">
         <h1>Patchnotes</h1>
         <div class="wrapper">
             <?php
             $dir = 'patch';
             $files = scandir($dir);
             rsort($files);
             foreach ($files as $value) {
                 if (substr($value, 0, 1) != "." && !endsWith($value, ".png")) {
                     echo "<div class=\"patch-box\" data-aos=\"fade-up\"><a href=\"./patch/" . substr($value, 0, -5) . "\">" . substr($value, 1, -5) . "</a>";
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
      <footer>
         <div class="f-upper">
            <div class="f-desc">
               <img onclick="scrollToTop()" src="../assets/Dragon.svg" alt="">
               <p>Play like a monster. Play with Dragonfly.</p>
               <p>&copy; 2020 InceptionCloud Network</p>
            </div>
            <div class="links-wrapper">
               <div class="f-links">
                  <h3>Useful links</h3>
                  <ul>
                     <li><a onclick="scrollToTop()">Home</a></li>
                     <li><a href="https://inceptioncloud.net/dragonfly/patchnotes/">Updates</a></li>
                     <li><a href="https://inceptioncloud.net/privacy">Privacy notice</a></li>
                     <li><a href="https://inceptioncloud.net/dragonfly/download">Download</a></li>
                  </ul>
               </div>

               <div class="f-links">
                  <h3>Latest updates</h3>
                  <ul>
                     <li><a href="">v1.0.6.0-alpha</a></li>
                     <li><a href="">v1.0.5.0-alpha</a></li>
                     <li><a href="">v1.0.4.0-alpha</a></li>
                     <li><a href="https://inceptioncloud.net/dragonfly/patchnotes/patch/v1.0.3.0-alpha">v1.0.3.0-alpha</a></li>
                     <li>
                        <a href="https://inceptioncloud.net/dragonfly/patchnotes/patch/v1.0.2.0-alpha">v1.0.2.0-alpha</a>
                     </li>
                     <li>
                        <a href="https://inceptioncloud.net/dragonfly/patchnotes/patch/v1.0.1.0-alpha">v1.0.1.0-alpha</a>
                     </li>
                  </ul>
               </div>
               <div class="f-links">
                  <h3>Work with us</h3>
                  <ul>
                     <li><a href="#">Developer</a></li>
                     <li><a href="#">Moderator</a></li>
                     <li><a href="#">Designer</a></li>
                     <li><a href="#">Content Creator</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="f-lower">
            <div class="f-socials">
               <h3>Follow us on social media to stay up to date</h3>
               <a href="https://instagram.com/inceptioncloud">
                  <ion-icon name="logo-instagram"></ion-icon>
               </a>
               <a href="https://twitter.com/inceptioncloud">
                  <ion-icon name="logo-twitter"></ion-icon>
               </a>
               <a href="https://discord.com/invite/NUGbCgW">
                  <i class="fab fa-discord"></i>
               </a>
            </div>
         </div>
      </footer>
      <!-- AOS -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" type="text/javascript"></script>
      <script src="https://cdn.icnet.dev/web/drgn/js/aos.js"></script>
      <script src="https://cdn.icnet.dev/web/drgn/patchnotes/js/main.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
      <script>let els = document.getElementsByClassName("patch-box"); let count = 1; Array.prototype.forEach.call(els, function(el) {el.setAttribute("data-aos-delay", 200 * count);count++; console.log(200 * count)});</script>
   </body>
</html>