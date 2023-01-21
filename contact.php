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
    <h1>Contact Us</h1>
  </section>
  <!------------------contact us ---------------->

  <section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.873259570202!2d126.85878931531606!3d37.72265267976892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9974eeafcd75%3A0x9a9bfa578a41980!2zKOyjvCntlZzquLjsl5DrhIjthY0!5e0!3m2!1sko!2skr!4v1674280014554!5m2!1sko!2skr" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

  <section class="contact-us">
    <div class="row">
      <div class="contact-col">
        <div>
          <i class="fa-solid fa-map-marker-alt"></i>
          <span>
            <h5>Address</h5>
            <p>123 Street, New York, USA</p>
          </span>
        </div>
        <div>
          <i class="fa-solid fa-phone"></i>
          <span>
            <h5>+82 023756767</h5>
            <p>Monday to Saturday, 8AM to 6PM</p>
          </span>
        </div>
        <div>
          <i class="fa-solid fa-envelope"></i>
          <span>
            <h5>info@hangil.com</h5>
            <p>Email us your query</p>
          </span>
        </div>
      </div>
      <div class="contac-col">
        <form action="form-handler.php" method="post">
          <input type="text" name="name" placeholder="Enter your name" required />
          <input type="email" name="eamil" placeholder="Enter your email" required />
          <input type="text" name="subject" placeholder="Enter your subject" required />
          <textarea rows="8" name="message" placeholder="Message" required></textarea>
          <button type="submit" class="hero-btn red-btn">Send Message</button>
        </form>
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