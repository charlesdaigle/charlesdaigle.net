<!DOCTYPE html>
<html lang="en">
	<head>

		<?php include_once './head.php'?>

	</head>
	<body>
		<div class="container-fluid">
			<?php include_once './navbar.php'?>
			<h1 class="post-title">All Projects</h1>
			<div class="row">


				<!-- Cards
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
				<?php
					include_once './project.php';
					$files = scanForProjects();
					$projects = getProjects($files);
					foreach($projects as $proj){
						include './card.php';
					}
				?>

					
			</div>
			
			<?php include './foot.php' ?>
		</div>

	</body>

</html>
	