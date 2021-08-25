<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<?php include_once './head.php'?>

	</head>
	<?php include_once './navbar.php'?>
	<body>
		<div class="container-fluid">

			<div class="row first animate__animated animate__fadeIn">
				<div class="col col-lg-4 col-md-6 col-sm-6">
					<h1 class="name animate__animated animate__fadeInDown animate__delay-1s">Charles N. Daigle</h1>
					<img class="img-fluid" src="images/pic.jpg">
				</div>
			</div>
			<div id="about" class="row animate__animated animate__fadeInUp animate__delay-1s">
				<div class="col col-lg-6 col-md-6 col-sm-12">
					<h2>About</h2>
					<p>
						Welcome! My name is Charlie, and I am studying Electrical Engineering and Music Technology at Northeastern University. My interests vary widely, and include:
					</p>
					<div class="business-card">
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
				<div class="col col-lg-6 col-md-6 col-sm-12">
					<h2>Contact</h2>

					<ul class='business-card'>
						<li>daigle.c@northeastern.edu</li>
						<li>
							<a href="https://linkedin.com/in/charlesdaigle" target="_blank">linkedin.com/in/charlesdaigle
							</a>
						</li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>

			<div class="row justify-content-around animate__animated animate__fadeInUp">
				<div class="col">
					<h2>Selected Projects</h2>
				</div>
				<div class="col">
					<a class='navbar-link button' href='all_projects.php'>All projects...</a>
				</div>
			</div>
			<div class="row animate__animated animate__fadeInUp">
				<!-- Cards
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
				<?php

					// Display hand-curated list of projects

					include_once './project.php';
					$files = array('mobile_effects_unit.md',
												 'wahtz_wah.md',
												 'eight_bit_computer.md');
					$selected_projects = getProjects($files);
					foreach($selected_projects as $proj){
						include './card.php';
					}
				?>

					
			</div>
			<div class="row">
				<div class="col">
				</div>

			</div>
			
		</div>
	</div>
	
	<?php include './foot.php' ?>

	<!-- End Document
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

	<script>
		$( document ).ready(function() {
			$(".navbar").addClass(["animate__animated", "animate__fadeInDown", "animate__delay-1s"])
		});
	</script>
	</body>
</html>


	
