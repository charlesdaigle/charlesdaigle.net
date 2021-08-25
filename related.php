<div class="row">

  <h2>Related Posts</h2>

  <!-- Cards
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php

    include_once './project.php';
    $files = scanForProjects();
    $projects = getProjects($files);
    $related_proj_info = $project->get_related__ByTag(3);
    $related_projs = array_column($related_proj_info, 'proj');
    foreach($related_projs as $proj){
    	include './card.php';
    }
   ?>

    
</div>