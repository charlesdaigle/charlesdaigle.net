<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html id="home" lang="en">
	<head>

		<?php include_once './head.php'?>

	</head>
		<?php include_once './navbar.php'?>
	<body>
		<div class="container-fluid">


			<div class="row first animate__animated animate__fadeIn">
				<div class="col col-lg-4 col-md-6 col-sm-6">
					<h1 class="name animate__animated animate__fadeInDown animate__delay-1s">Charles N. Daigle</h1>
					<img class="img-fluid pic" src="./images/pic.jpg">
				</div>
			</div>

			<div class="row animate__animated animate__fadeInUp animate__delay-1s">
				<div class="col col-lg-6 col-md-6 col-sm-12">
					<h2 id="about">About</h2>
					<div class="card business-card">
						<p>
							Welcome! My name is Charlie, and I am studying Electrical Engineering and Music Technology at Northeastern University in <b>Boston, MA</b>. My interests vary widely, and include:
						</p>
						<ul>
							<li>analog/digital electronics</li>
							<li>data science</li>
							<li>web development/design</li>
							<li>piano, guitar, <a class="text-link" href="https://en.wikipedia.org/wiki/Mouth_trumpet" target="_blank">mouth trumpet</a></li>
							<li>physics</li>
							<li>mathematics</li>
						</ul>
						<p>
							This site is a work in progress. Most of it is programmed by me, and you can check out the project files on <a class="text-link" href="https://github.com/charlesdaigle/charlesdaigle.net" target="_blank">GitHub.</a>
						</p>
					</div>
				</div>
				<div class="col col-lg-4 col-md-6 col-sm-12">
					<h2 id="contact">Contact</h2>

					<div class='card'>
						<ul class='contact-card'>
							<li class="text-link">
								<a tabindex = 0
								   onclick="copyToClipboard()" 
								   data-bs-toggle="popover"
								   data-bs-trigger="focus" 
								   data-bs-placement="top" 
								   data-bs-content="Copied to clipboard!">
								<i class="fas fa-paper-plane"></i>
								&emsp;
								<!-- Obfuscated to defend against spam!
								--------------------------------------->
								
									daigle 
									<span class="smol">dot</span> 
									c 
									<span class="smol">at</span> 
									northeastern.edu
							</li>
							<li class="text-link">
								<a href="https://linkedin.com/in/charlesdaigle" target="_blank">
									<i class="fab fa-linkedin"></i>
									&emsp;
									linkedin.com/in/charlesdaigle
								</a>
							</li>
							<li class="text-link">
								<a href="https://github.com/charlesdaigle" target="_blank">
									<i class="fab fa-github"></i>
									&emsp;
									github.com/charlesdaigle
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			
			<div class="row justify-content-around animate__animated animate__fadeInUp animate__delay-2s">
			<h2>Selected Projects</h2>
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
			<div class="row animate__animated animate__fadeInUp animate__delay-2s">
				<div class="col">
					<a class='navbar-link button' href='all_projects.php'>All projects...</a>
				</div>

			</div>
			
		</div>
	</div>

	<?php include './foot.php' ?>

	<script>
		$( document ).ready(function() {
			$(".navbar").addClass(["animate__animated", "animate__fadeInDown", "animate__delay-1s"]);
			$(window).scrollTop(0);
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

		$('.navbar-collapse').collapse('hide');
	</script>
	

	<!-- End Document
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

	</body>
</html>


	
