<?php
$pageTitle = "About";
$section = "about";

include('inc/header.php');
 ?>

<div class="wrapper">

	<div class="flex">
		<div class="about-top">
			<div class="bio">
<!-- 				<div class="slogan">
	<i class="fa fa-quote-left fa-2x" aria-hidden="true"></i>
	<h2>It's SimpOoly delightful to meet you!</h2>
		<i class="fa fa-quote-right fa-2x" aria-hidden="true"></i>
</div> -->
				<div class="name">
					<h2>Krista Jekel</h2>
					<h3>Front End Web Developer</h3>
				</div>
			</div>
			<div class="head-shot">
				<img src="inc/img/self2.jpg" alt="Krista Jekel">
			</div>
		</div> <!-- class row end -->


		<div class="about-bottom">
			<div class="experience">
				<h3>Experience</h3>
				<p >As a self-taught web developer I have spent my free time doing online classes, tutorials, and tracks gaining knowledge of basic development languages. Improving and expanding on those skills, I had the opportunity to Intern with Ractoon Inc. and have been working by contract to provide web updates and data entry into various websites upon customer needs. I uderstand HTML, CSS, the basics of JavaScript, jQuery and was exposed to the world of PHP and Wordpress development. I find JavaScript developing fulfilling and would like to dive in deeper to explore all it has to offer in the future.
				</p>
				<button class="treehouse-btn" href="#">Team Treehouse</button>
				<button class="skills-btn" href="#">Skills</button>
			</div>

			<div class="philosophy">
				<h3>Philosophy</h3>
				<p>These important concepts represent my life philosophies and ideasl that translate into my life. Simple design well thought out and reliable user face with just the right amount of spice!</p>

				<div class="philosophy-concept">
					<div class="simplicity">
						<i class="fa fa-cog fa-2x fa-fw" aria-hidden="true"></i>
						<h4>Simplicity</h4>
						<p>Simplicity represents the ability to look past thing that are not contributing to my life or my process so I can make room and focus on what's most important. Simple design maximizes efficiency and allows the user to not get caught up in too many excessive details.</p>
					</div>
					<div class="curiosity">
						<i class="fa fa-lightbulb-o fa-2x fa-fw" aria-hidden="true"></i>
						<h4>Curiosity</h4>
						<p>Curiosity is the foundation of growth and learning. I am dedicated to gaining knowledge and knowing more about whatever language, project or situation I come to. I am capable of finding information on my own and enjoy researching things I don't yet understand.</p>
					</div>
					<div class="quirky">
						<i class="fa fa-puzzle-piece fa-2x fa-fw" aria-hidden="true"></i>
						<h4>Quriky</h4>
						<p>Quirk is that extra spice, just the right amount of uniqueness and spontaneity to make things interesting.</p>
					</div>
				</div>
			</div> <!-- philosophy end -->
		</div> <!-- class row end -->
	</div>
	<!--popup treehouse-->
	<div id="popup" class="hide">
		<div class="popup-inner">
			<div class="report-card treehouse"></div>
				<a class="close ex" href="#"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>

	<div id="skills-popup" class="hide">
		<div class="popup-inner skills">
			<h2>Skills :</h2>

			<ul class="skills">
				<li>HTML</li>
				<li>HTML5</li>
				<li>CSS</li>
				<li>CSS3</li>
				<li>JQuery</li>
				<li>Javascript</li>
				<li>SASS</li>
				<li>WordPress</li>
				<li>PHP</li>
				<li>Bootstrap</li>
				<li>Flexbox</li>
				<li>GitHub</li>
				<li>API</li>
				<li>JSON</li>
				<li>AJAX</li>
			</ul>
			<a class="close ex" href="#"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
		</div>
	</div>

</div><!--wrapper end -->

<?php include('inc/footer.php'); ?>
