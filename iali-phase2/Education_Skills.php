<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Education_Skills.css" />
    <link rel="stylesheet" href="reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&family=Rubik+Iso&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Rampart+One&family=Rubik+Iso&display=swap" rel="stylesheet">
    <title>Education/Skills</title>
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
    <div class="wrapper2">
        <aside class="education">
      <hgroup >
            <h3 class="h3">
                <a id='Education'>Education
                    
            </h3>
            <hr>
        
        </hgroup>
        <p>
            <li>
                Cranford Community College 2014-2022
            </li>
            <li>
                Queen Mary University of London 2022-present
            </li>
    
    
        </p>
    </aside>
    <article class="skills">
      <hgroup >
            <h5 class="h5">
                <a id='Skills'>Skills
                    
            </h5>
            <hr>
        
        </hgroup>
        <p>

            <li>
              Java
            </li>
            <li>
              Html
            </li>
            <li>
              CSS
            </li>
    
        </p>

    </article>
    </div>
  </body>
</html>
