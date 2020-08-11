<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Release Notes | Overview</title>
      <link rel="icon" href="../assets/Dragon.svg">
      <link rel="stylesheet" href="https://cdn.icnet.dev/web/drgn/patchnotes/css/patchnotes-style.css">
      <link rel="stylesheet" href="https://cdn.icnet.dev/web/drgn/css/header-style.css">
      <link rel="stylesheet" href="https://cdn.icnet.dev/web/drgn/patchnotes/css/fonts.css">
      <meta name="description" content="All information about updates to the Dragonfly modification">
      <meta name="keywords" content="Minecraft, InceptionCloud, Modifiaction, Minecraftmod, Dragonfly, IC, ICN, Release, Patchnotes,">
      <meta name="description" content="Latest news about the Dragonfly Minecraft modification">
      <link rel="stylesheet" href="https://cdn.icnet.dev/web/drgn/components/css/footer.css">
      <!-- IONICONS -->
      <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
      <!-- AOS -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
   </head>

   <body>
      <div class="header" data-aos="fade-down" id="navbar" style="width: 100vw">
        <div class="upper-wrapper">
    <div class="logo" id="logo">
        <a href="/" onclick="scrollToTop()"><img class="logo-img" src="https://playdragonfly.net/assets/Dragon.png"
                alt="" /></a>
    </div>
    <div class="ham-wrapper">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
    </div>
</div>
<div style="font-size: 19px" class="nav dfo" id="nav">
    <ul>
        <li class="item" onclick="closeMenu()">
            <a href="https://playdragonfly.net">Home</a>
        </li>
        <li class="item" onclick="closeMenu()">
            <a href="https://ideas.playdragonfly.net/">Ideas</a>
        </li>
        <li class="item" onclick="closeMenu()">
            <a href="https://playdragonfly.net/patchnotes">Updates</a>
        </li>
        <li class="item" onclick="closeMenu()">
            <a href="https://playdragonfly.net/download">Download</a>
        </li>
        <li class="item dropdown dropdown-account">
            <a id="drgn-account-login" href="#">
                <div class="drgn-information" onclick="toggleDropdown(this)">
                    <span style="pointer-events: none;" id="drgn-accountname" class="dropbtn">Log in</span><span
                        style="pointer-events: none;" id="drgn-accountname-icon"><i
                            class="fas fa-angle-down"></i></span>
                </div>
                <div id="myDropdown" class="dropdown-content">
                    <div class="dropdown-item" href="#" onclick="logOut()" data-toggle="modal"
                        data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </div>
                </div>
            </a>
        </li>
        <div class="socials">
            <a href="https://instagram.com/inceptioncloud">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://twitter.com/inceptioncloud">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://discord.gg/VS2eN2z">
                <i class="fab fa-discord"></i>
            </a>
        </div>
    </ul>
</div>
      </div>
      <div class="main" data-aos="zoom-out-up">
         <h1>Release Notes</h1>
         <div class="wrapper">
             <?php
             $dir = 'release';
             $files = scandir($dir);
             rsort($files);
             foreach ($files as $value) {
                 if (substr($value, 0, 1) != "." && !endsWith($value, ".png")) {
                     echo "<div class=\"patch-box\" data-aos=\"fade-up\"><a href=\"./release/" . substr($value, 0, -5) . "\">" . substr($value, 1, -5) . "</a>";
                     echo "<div class=\"patch-img\" style=\"background-image: url('./release/" . substr($value, 0, -5) . ".png')\"></div></div>";
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
      <div id="footer"></div>
      <!-- AOS -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" type="text/javascript"></script>
      <script src="https://cdn.icnet.dev/web/drgn/js/aos.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script async>
          $("#footer").load("https://cdn.icnet.dev/web/drgn/components/footer.html");
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
      <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
      <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
      <script>let els = document.getElementsByClassName("patch-box"); let count = 1; Array.prototype.forEach.call(els, function(el) {el.setAttribute("data-aos-delay", 200 * count);count++; console.log(200 * count)});</script>
      <script src="https://cdn.icnet.dev/web/drgn/patchnotes/js/main.js"></script>
      <script src="https://cdn.icnet.dev/web/drgn/js/common.js"></script>
   </body>
</html>