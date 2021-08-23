<html lang="en">
  <head>

    <?php include './head.php';
          ini_set('display_errors', 1);
          ini_set('display_startup_errors', 1);
          error_reporting(E_ALL);?>

  </head>

<?php
    if(isset($_GET["tag"])){
        $tag_id = $_GET["tag"];
    }
?>

<?php include './navbar.php'; ?>
<div class="container-fluid">

    <div class="row">
        <a href="./index.php">Home</a>   
    </div>

    <h1 class="tag-title">
        <span class="badge badge-primary"><?php echo $tag_id?></span>
    </h1>

    <div class="row">

      <?php
        // Find projects in ./projects/... by tag
        include 'project.php';
        $projects = getProjectsByTag($tag_id);
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

<?php include './foot.php'; ?>
</html>