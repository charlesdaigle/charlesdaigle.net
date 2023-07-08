<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html id="home" lang="en">
<?php include_once './navbar.php'?>
<head>

<?php include_once './head.php'?>

</head>

<body>
	<div class="container-fluid">
		<div class="row first animate__animated animate__fadeIn animate__delay-1s"><h1 id="about">Charles Daigle STEM Tutoring and Enrichment</h1></div>
		<div class="row animate__animated animate__fadeIn animate__delay-1s"><h2 class="subtitle">Let's get your child excited about how the world works.</h2></div>
		<div class="row justify-content-center animate__animated animate__fadeIn">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<img class="img-fluid pic" src="../images/pic.jpg">
			</div>
			<div class="col-lg-8 col-md-6 col-sm-6">
			<iframe class="animate__animated animate__fadeIn animate__delay-1s" src="https://docs.google.com/forms/d/e/1FAIpQLSdSv-YdzUtnonmuu08OIAOIQ2ylaqpOJoycw8uwL5lXeiwC9Q/viewform?embedded=true" height="600px" width="100%" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
		</div>
		
		</div>

		<div class="row mt-2 justify-content-center animate__animated animate__fadeIn animate__delay-1s">
			<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<p>With over four years of working with kids in STEM subjects, I understand the best ways to not only enrich your child in STEM, but to equip them with resources so that they <b>seek the knowledge themselves</b>.
						</p>
					</div>
			</div>
		</div>
		<div class="row mt-2 justify-content-center animate__animated animate__fadeIn animate__delay-1s">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h3>Extra Resources</h3>
				<div class="card">
					<p>These STEM resources inspire me. Here are three things I watch for fun:</p>
						<ul>
							<li><a target="blank" class="text-link" href="https://www.youtube.com/@3blue1brown/featured">3 Blue 1 Brown</a> -- a talented visual math teacher who can make accessible the most obscure of math concepts.</li>
							<li><a target="blank" class="text-link" href="https://www.youtube.com/@SabineHossenfelder">Sabine Hossenfelder</a> -- an inspired physicist making videos. I have always been a big fan of her videos.</li>
							<li><a target="blank" class="text-link" href="https://www.youtube.com/@MichaelPennMath">Michael Penn</a> -- a talented blackboard math teacher who can always makes me say: "Wow!" His <a target="blank" class="text-link" href="https://www.michael-penn.net/teaching">philosophy of teaching</a> is also great. I aim to foster the cooperative skills he teaches in my own class.</li>
						</ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h3 id="references">References</h3>
				<div class="card">
					<p>I am honored to be represented by these people. Please let me know if you'd like to contact them.</p>
						<ul>
							<li><a target="blank" class="text-link" href="https://coe.northeastern.edu/people/salama-iman/">Professor Salama Iman.</a> She has been an amazing professor for multiple years -- she has also won the <a target="blank" class="text-link" href="https://hkn.ieee.org/">HKN</a> Northeastern Professor of the Year award multiple years in a row! I have learned so much under her tutelage.</li>
							<li><a target="blank" class="text-link" href="https://camd.northeastern.edu/faculty/victor-zappi/">Professor Victor Zappi.</a> He has been an incredibly diverse professor who teaches electrical engineering, C++, acoustics, and music in his classes. Nobody else is quite as capable when it comes to speedrunning an entire topic for beginners -- this person is a talented teacher. He also hosts hackathons sometimes!</li>
							<li>Rachel -- they are parents to one kid I have been proud to tutor for 4 years. We've focused on math enrichment and entrance exam prep.</li>
						</ul>
				</div>
			</div>
		</div>
	</div>
	<hl>
	<p>
		This site is made by me, from raw PHP, JavaScript, and CSS (really SCSS with a watcher script)
	</p>
</body>

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



