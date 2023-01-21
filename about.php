<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <!-- 반응형 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/cc06229e4b.js" crossorigin="anonymous"></script>
  <title>University Website Design - Easy Tutorials</title>
</head>

<body>
  <!-- ----------------header -------------- -->
  <section class="sub-header">
    <nav>
      <a href="index.php"> <img src="images/logo.png" alt="logo" /></a>
      <div class="nav-links" id="nav-links">
        <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="course.php">Courses</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <i class="fa-solid fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>About Us</h1>
  </section>
  <!------------------about us content ---------------->
  <section class="about-us">
    <div class="row">
      <div class="about-col">
        <h1>We are the world's largest University</h1>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
          slightly believable.
        </p>
        <a href="#" class="hero-btn red-btn">EXPLORE NOW</a>
      </div>
      <div class="about-col">
        <img src="images/about.jpg" alt="about" />
      </div>
    </div>
  </section>

  <!-- Footer  -->
  <section class="footer">
    <h4>About US</h4>
    <p>
      There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
      believable.
    </p>

    <div class="icons">
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-linkedin"></i>
      <i class="fa-brands fa-youtube"></i>
    </div>
    <p>Made with <i class="fa-regular fa-heart"></i> By Easy Tutorials</p>
  </section>

  <!-- JavaScript for Toggle Menu -->
  <script>
    var navLinks = document.getElementById("nav-links");

    function showMenu() {
      navLinks.style.right = "0";
    }

    function hideMenu() {
      navLinks.style.right = "-200px";
    }
  </script>
</body>

</html>