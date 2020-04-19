<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patch Notes</title>
    <link rel="icon" href="../assets/logo.svg">
    <link rel="stylesheet" href="./patchnotes-style.css">
    <link rel="stylesheet" href="../css/header-style.css">
</head>

<body>
    <div class="header">
      <div class="upper-wrapper">
        <div class="logo">
          <a href="/"><img src="../assets/logo-header.svg" alt="" /></a>
        </div>
        <div class="ham-wrapper">
          <div class="line line1"></div>
          <div class="line line2"></div>
          <div class="line line3"></div>
        </div>
      </div>
      <div class="nav">
        <ul>
          <li class="item" onclick="closeMenu()">
            <a href="#features">Features</a>
          </li>
          <li class="item" onclick="closeMenu()"><a href="#faq">FAQ</a></li>
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
    <div class="main">
      <h1>Patch Notes</h1>
      <div class="wrapper">
        <?php 
          $dir    = 'patch';
          $files = scandir($dir);
          rsort($files);
          foreach($files as $value) {
              if (substr( $value, 0, 1 ) != "." && !endsWith($value, ".png")) {
                  echo "<div class=\"patch-box\"><a href=\"./patch/$value\">" . substr($value, 1, -5) . "</a>";
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
    
</body>
<script src="./main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</html>