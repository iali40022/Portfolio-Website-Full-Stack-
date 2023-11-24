<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="Portfolio.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Blaka+Ink&display=swap" rel="stylesheet">

    <title>Portfolio</title>
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
    <div class="wrapper3">
          <aside class="miniproject">
      <hgroup >
            <h2 class="h2">
                <a id='Miniproject'>Dinosaur Game
                    
            </h2>
            <hr>
        
        </hgroup>
        <p>
            For my module procedural programming, we had to complete a miniproject for a chosen a game. My chosen idea was a Dinosaur
            game which I had to code in Java. I created a system where I looked after the dinosaurs in my setting and controlled their anger
            and hunger so as to keep them safe from themselves and others. My miniproject reached the highest level which I'm proud of.
    
    
        </p>
    </aside>
    <article class="shirts">
      <hgroup >
            <h6 class="h6">
                <a id='Shirts'>Shirts Forms
                    
            </h6>
            <hr>
        
        </hgroup>
        <p>
            I created a shirts form using html and css where the user can select their shirt size, number and etc. Then adding their 
            details just like a normal shopping website when ordering. This is something I'm proud of.

    
        </p>

    </article>
    <aside class="movies">
      <hgroup >
            <h1 class="h1">
                <a id='Movies'>Movie Ranking
                    
            </h1>
            <hr>
        
        </hgroup>
        <p>
            I created a webpage that had a table of my favourite movies that were ranked from 1-5, with a picture of one or two of the respective cast
            members in the movie. The pictures of the mast members could be clicked on and it would redirect you to their imdb page. I used css 
            and html for this webpage.
      
    
    
        </p>
    </aside>
    </div>
  </body>
</html>
