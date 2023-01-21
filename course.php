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
  <!------------------header ---------------->
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
    <h1>Our Courses</h1>
  </section>
  <!------------------Course  content ---------------->
  <section class="course">
    <h1>Courses We Offer</h1>
    <p>
      There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
      believable.
    </p>

    <div class="row">
      <div class="course-col">
        <h3>Intermediate</h3>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
          slightly believable.
        </p>
      </div>
      <div class="course-col">
        <h3>Degree</h3>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
          slightly believable.
        </p>
      </div>
      <div class="course-col">
        <h3>Post Graduation</h3>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
          slightly believable.
        </p>
      </div>
    </div>
  </section>

  <!-- facilities  -->

  <section class="facilities">
    <h1>Our Facilites</h1>
    <p>There are many variations of passages of Lorem Ipsum</p>

    <div class="row">
      <div class="facilities-col">
        <img src="images/library.png" />
        <h3>World Class library</h3>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
      </div>
      <div class="facilities-col">
        <img src="images/basketball.png" />
        <h3>World Class Library</h3>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
      </div>
      <div class="facilities-col">
        <img src="images/cafeteria.png" />
        <h3>World Class Cafe</h3>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
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
<?php
?>