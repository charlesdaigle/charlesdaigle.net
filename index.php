<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php include './head.php'?>

  </head>
  <?php 
    $ACTIVE = 
    include './navbar.php'
  ?>
  <body>
    <div class="container-fluid">

      <div class="row first animate__animated animate__fadeIn">
        <div class="col col-lg-4 col-md-6 col-sm-6">
          <h1 class="name animate__animated animate__fadeInDown animate__delay-1s">Charles N. Daigle</h1>
          <img class="img-fluid" src="images/pic.jpg">
        </div>
      </div>
      <div class="row animate__animated animate__fadeInUp animate__delay-1s">
        <div class="col col-lg-6 col-md-6 col-sm-6">
          <h2>About</h2>
          <p>
            Welcome! My name is Charlie, and I am studying Electrical Engineering and Music Technology at Northeastern University. My interests vary widely, and include:
          </p>
          <ul>
            <li>analog/digital electronics</li>
            <li>data science</li>
            <li>web development/design</li>
            <li>piano, guitar, <a class="text-link" href="https://en.wikipedia.org/wiki/Mouth_trumpet">mouth trumpet</a></li>
            <li>physics</li>
            <li>mathematics</li>
          </ul>
        </div>
      </div>

      <div class="row animate__animated animate__fadeInUp">

        <h2>Selected Projects</h2>

        <!-- Cards
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <?php
          // TODO: Change to a set of curated project files
          // Reference a single list of project files
          // Iterate over project data files in ./projects/...
          include 'project.php';
          $files = scanForProjects();
          $projects = getProjects($files);
          foreach($projects as $proj){

        ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <!--below will link to URL:
                      'post.php?id=<insert project name>'         -->
              <div class="card">

                <a class="stretched-link" 
                   href=<?php echo "'post.php?id=" . $proj->id . "'"?>>

                  <h2 class="card-title">
                    <?php echo($proj->title)?></h2>
                  <h4 class="card-dateCreated">
                    <?php echo($proj->dateCreated)?></h4>
                  <p class="card-description">
                    <?php echo($proj->description)?></p>

                  <div class="projectTags">
                    <?php
                      // Print each tag in a project
                      $proj->displayProjectTags__Card(); ?>
                  </div>
                </a>

              </div>
            </div>
        <?php }?>

          
      </div>
      
    </div>
  </div>
    <!-- End Document
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <?php include './foot.php' ?>

  <script>
    $( document ).ready(function() {
      $(".navbar").addClass(["animate__animated", "animate__fadeInDown", "animate__delay-1s"])
    });
  </script>
  </body>
</html>


  
