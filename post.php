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

<script>
		$( document ).ready(function() {
			$(".navbar").addClass(["animate__animated", "animate__fadeInDown", "animate__delay-1s"])
		});

		function copyToClipboard() {
			let parts = ["daig", "le", ".", "c", "@northeas", "tern", ".", "edu"];
			navigator.clipboard.writeText(parts.join(""));
		}

		var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
		var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		  return new bootstrap.Popover(popoverTriggerEl)
		})
		var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
		  trigger: 'focus'
		})
</script>