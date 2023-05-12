<head>
    <?php include_once './navbar.php'?>
    <?php include_once './head.php' ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container-fluid">
        <div class='row'>
            <div class='col col-lg-8 col-md-10 col-sm-12'>
                <?php
                include './project.php';
                include './Parsedown.php';

                if(isset($_GET["id"])){
                    $post_id = $_GET["id"];
                    $project = getProjectByName($post_id);
                    $page = getProjectPage($project);

                    $Parsedown = new Parsedown();

                    echo "<h1 class='post-title'>" . $project->title . "</h1>";
                    echo "<h4 class='post-description'>" . $project->description . "</h4>";
                    echo "<p style='display: inline; vertical-align: middle;'>" . $project->dateCreated . "</p>";

                    echo "<hr style='color: #dedede;'>";

                    echo "<div class='blog-content'>";

                    echo $Parsedown->text($page);


                    echo "</div>";

                }

                ?>
            </div>
        </div>
        <div class='row'>
            <div class='col col-lg-12 col-md-12 col-sm-12'>
                <?php include './related.php'?>
            </div>
        </div>
    </div>

            <script>
                $( document ).ready(function() {
                   $("img").addClass("img-fluid");
               });
           </script>

</body>

<?php include './foot.php';?>