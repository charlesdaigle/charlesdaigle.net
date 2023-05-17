<html lang="en">
  <head>

    <?php include_once './head.php';
          ini_set('display_errors', 1);
          ini_set('display_startup_errors', 1);
          error_reporting(E_ALL);?>

  </head>

<?php
    if(isset($_GET["tag"])){
        $tag_id = $_GET["tag"];
    }
?>

<?php include_once './navbar.php'; ?>
<div class="container-fluid">

    <h1 class="tag-title">
        <span class="badge badge-primary"><?php echo $tag_id?></span>
    </h1>

    <div class="row">

      <?php
        // Find projects in ./projects/... by tag
        include_once 'project.php';
        $projects = getProjectsByTag($tag_id);
        foreach($projects as $proj){
          include 'card.php';
      ?>

      <?php }?>
    </div>
</div>

<?php include_once './foot.php' ?>
</html>