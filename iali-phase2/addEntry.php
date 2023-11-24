<?php
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="index.php" />
    <link rel="stylesheet" href="blog.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
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
    <div class="blog-box">
      <form action="addPost.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required /><br /><br />
        <label for="content">Content:</label><br />
        <textarea
          id="content"
          name="content"
          rows="10"
          cols="50"
          required
        ></textarea
        ><br /><br />

        <input type="reset" id="clear" value="Clear" />
        <input type="submit" id="submit" value="Submit" />
      </form>
    </div>

    <script src="blog.js" defer></script>

  </body>
</html>
