<!-- When using a foreach, use "<iterable> as $proj"
-->
<div class="col-lg-4 col-md-6 col-sm-6">
  <!--below will link to URL:
          'post.php?id=<insert project name>'         -->
  <div class="card">

    <?php 
      $line = '<article data-file="' . $proj->fileLink . '" data-target="article">'; 
      echo($line);
      console_log($line);

    ?>

    <a class="stretched-link" 
       href=<?php echo "'post.php?id=" . $proj->id . "'"?>>

      <h2 class="card-title">
        <?php echo($proj->title)?></h2>
      <p>
        <span class="eta"></span> (<span class="words"></span> words)</p>
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
  </article>

  </div>
</div>