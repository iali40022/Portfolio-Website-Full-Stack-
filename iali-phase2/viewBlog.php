<?php
session_start();


include 'db_config.php';


$sql = "SELECT * FROM blog";
$result = mysqli_query($conn, $sql);

// fetch all the blog posts into an array
$posts = array();
while ($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}

// sort the array based on the date of each blog post
usort($posts, function($i, $a) {
    return strtotime($a['date']) <=> strtotime($i['date']);
});

// start the HTML output
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="viewBlog.css">
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="index.php" />
    <link rel="stylesheet" href="blog.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Blog</title>
  </head>
  <body>
    <header class="site-header">
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
      <?php
      // loop through each blog post in reverse order and display it in a box
      foreach (($posts) as $post) {
        $title = $post['title'];
        $content = $post['content'];
        $date = $post['date'];
        $blogID = $post['blogID'];
      ?>
      <div class="blog-post">
        <h2><?php echo $title; ?></h2>
        <p><?php echo $content; ?></p>
        <p>Posted on <?php echo $date; ?></p>
      </div>
      <?php } ?>
    </div>
  </body>
</html>