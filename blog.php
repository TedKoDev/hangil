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
    <h1>Our Certificate & Online Programs For 2023</h1>
  </section>

  <!-- blog page content   -->
  <section class="blog-content">
    <div class="row">
      <div class="blog-left">
        <img src="images/certificate.jpg" alt="" />
        <h2>Online Certificate Programs</h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
          slightly believable.
        </p>
        <br />
        <p>
          If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
          repeat predefined chunks as necessary, making this the first true generator on the Internet.
        </p>
        <br />
        <p>
          It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
          always free from repetition, injected humour, or non-characteristic words etc.
        </p>

        <div class="comment-box">
          <h3>
            Leave a Comment
            <i class="fa-solid fa-comment"></i>
          </h3>
          <form class="comment-form">
            <input type="text" placeholder="Enter Name" />
            <input type="email" placeholder="Enter Email" />
            <textarea rows="5" placeholder="Your comment"></textarea>
            <button type="submit" class="hero-btn red-btn">Post Comment</button>
          </form>
        </div>
      </div>
      <div class="blog-right">
        <h3>Post Categories</h3>
        <div>
          <span>Business Analytics</span>
          <span>21</span>
        </div>
        <div>
          <span>Data Science</span>
          <span>28</span>
        </div>
        <div>
          <span>Machine Learning</span>
          <span>33</span>
        </div>
        <div>
          <span>AutoCAD</span>
          <span>11</span>
        </div>
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