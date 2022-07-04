<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/navStyle.css"/>
    <title>Navigation bar</title>
  </head>
  <body>
    <header>
      <div id="brand"><a id="a" href="#">Gym Shark</a></div>
      <nav>
        <ul id="ul">
          <li><a href="home.php">Home</a></li>
          <li><a href="#contact-us">Contact Us</a></li>
          <li><a href="#about-us-page">About Us</a></li>
          <li><a href="pricingAndPackage/priceAndPackage.php">Prices And Packages</a></li>
          <li id="login"><a href="./loginAndRegister/Login/login.php" >Login</a></li>
          
        </ul>
      </nav>
      <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="#contact-us">Contact Us</a></li>
          <li><a href="#result-map">About Us</a></li>
          <li><a href="#">Membership</a></li>
          <li id="login"><a href= "loginAndRegister/Login/login.php" >Login</a></li>
          
        </ul>
      </div>
    </header>
    <script src="Javascript/navJs.js"></script>
  </body>
</html>
