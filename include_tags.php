<?php
foreach($tags as $tag){
?>
  <a class="badge badge-primary" href=<?php 
            echo "'tag_sorted.php?tag=" . $tag . "'"?>>

            <?php echo $tag?>
  </a>
<?php }?>