<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="AboutMe_Experience.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
    <title>About Me/Skills</title>
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
    <div class="wrapper">
       <aside class="about">
      <hgroup >
            <h3 class="h3">
                <a id='About Me'>About Myself
                    
            </h3>
            <hr>
        
        </hgroup>
        <p>
            My name is Ilyas Ali and I am a student at Queen Mary University of London. I am a quite yet outgoing person when I'm around the right people.
           

            In terms of education however, I would like to qualify with a first in my respective degree and branch out into a specialisation of my choice in a masters,
            aiming to be fully prepared and equipped with all the skills I need in work.
    
    
    
        </p>
        <figure>
            <img src="pictureofme.jpg" alt="Ilyas Ali" title="Ilyas Ali" width="300" height="300" />
            <figcaption>Ilyas Ali</figcaption>
        </figure>
    </aside>
    <article class="experience">
      <hgroup >
            <h4 class="h4">
                <a id='Experience'>Experience
                    
            </h4>
            <hr>
        
        </hgroup>
        <p>

            <li>
              Mail Sorter during year 12
            </li>
            <li>
              Tutor for GCSE students and primary
            </li>
            <li>
              Door Supervisor
            </li>
    
        </p>

    </article>

    </div>
   
  </body>
</html>
