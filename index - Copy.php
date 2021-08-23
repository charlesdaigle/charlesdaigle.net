<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php include './head.php'?>

  </head>
  <body>
    <div class="container-fluid">
      <!-- Cards
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      
      <h1 class="name">Charles Daigle</h1>
      <div class="row">
        <div class="col col-lg-4 col-md-6 col-sm-6">

          <img class="img-fluid" src="images/pic.jpg">

        </div>
      </div>

      <div class="row">
      <?php

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
  </body>
</html>
  
