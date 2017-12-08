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
				<h3>Just Me!</h3>
				<p >Making things has always given me a sense of purpose and achievement in life. As I have grown, I replaced paper and bottle caps with code and programming. My obsession with gaining more knowledge leads me to continually improving my skills and staying up-to- date on new languages (while occasionally secluding myself on a couch for days with a good book). Through experience I have gained time management skills, as well as the ability to communicate with team members and clients while effectively meeting milestones and deadlines. I'm excited to turn my passion into a career and look forward to speaking with you soon about you, your business and prospective projects.
				</p>
				<!-- <p>I'm available for remote work.</p> -->
				<button class="treehouse-btn" href="#">Team Treehouse</button>
				<button class="skills-btn" href="#">Skills</button>
			</div>

			<div class="philosophy phil-about">
				<h3>Philosophy</h3>
				<p>Living and working by a strong set of principles allows for clarity in difficult situations and improves the quality of your website. Having and maintaining goals throughout the process is important to moving forward on the project and achieving the desired results.</p>

				<div class="philosophy-concept philosophy-concept-about">
					<div class="simplicity">
						<i class="fa fa-cog fa-2x fa-fw" aria-hidden="true"></i>
						<h4>Simple</h4>
						<p>Simplicity represents the ability to look past the things not contributing to the design and usability of your website. Getting rid of unessisary aspects that are clogging up visual space will maximizes efficiency. Allowing users to focus on what is most important in your site.</p>
					</div>
					<div class="curiosity">
						<i class="fa fa-lightbulb-o fa-2x fa-fw" aria-hidden="true"></i>
						<h4>Skillful</h4>
						<p>Within the web industry everything is constantly changing, old languages evolve and new ones pop up. Having an inquisitive development mindset allows me to stay on top of new technologies and provide the most cutting edge user experience available.</p>
					</div>
					<div class="quirky">
						<i class="fa fa-puzzle-piece fa-2x fa-fw" aria-hidden="true"></i>
						<h4>Original</h4>
						<p>Simple doesn't mean boring, it means you have more room to make a <b>big splash!</b> You can choose to be different from your competitors, to promote your products and services that will catch people's eyes and bring in business.</p>
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
