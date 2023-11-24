<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width:768px)">
    <link rel="stylesheet" href="reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap"
      rel="stylesheet"
    />
    <title>Portfolio</title>
  </head >
  <body>
    <header>
      <nav class="headerBox">
        <ul class="navBoxList">
          <li>
            <a href="index.php">Home Page</a>
          </li>
          <li>
            <a href="AboutMe_Experience.php#About Me">About Me</a>
          </li>
          <li>
            <a href="AboutMe_Experience.php#Experience">Experience</a>
          </li>
          <li>
            <a href="Education_Skills.php#Education">Education</a>
          </li>
          <li>
            <a href="Education_Skills.php#Skills">Skills</a>
          </li>
          <li>
            <a href="Portfolio.php#Portfolio">Portfolio</a>
          </li>
          <li>
            <a href="addEntry.php#Blog">Blog</a>
          </li>
          <li>
            <a href="viewBlog.php#viewBlog">View Blog</a>
          </li>
          <?php if(isset($_SESSION['email'])) { 
             echo '<li><a href="logout.php">Logout</a></li>';
          } 
          ?>
        </ul>
      </nav>
    </header>
    <div class="Name">
      <figure>
        <img
          src="IlyasLogo2.png"
          alt="Ilyas Ali"
          title="Ilyas Ali"
          width="500"
          height="500"
        />
      </figure>`
    </div>
    <div class="login">
      <a href="signup.html">Sign up</a>
    </div>
    <footer>
      <section class="footer-box">
    <div class="instagram">
      <a href="https://www.instagram.com/_.ilyxs_/">
        <img src="instagram.png" alt="" height="200em;" width="200em;">
      </a>
    </div>
    <div class="email">
      <a href="mailto:ec22473@outlook.com">
        <img src="email_logo.jpg" alt="" height="200em;" width="200em;"> 

      </section>
       
    </footer>
      </a>
    </div>
  </body>
</html>
