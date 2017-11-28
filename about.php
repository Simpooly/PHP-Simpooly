<?php
$pageTitle = "About";
$section = "about";

include('inc/header.php');
 ?>

<div class="wrapper">

	<div>
		<h1><?php echo $pageTitle; ?></h1>

	</div>

	<div class="box parent" style="overflow: auto;">
		<h2>It's SimpOoly delightful to meet you!</h2>


		<img src="inc/img/self2.jpg" alt="Krista Jekel">


		<div class="about-text">


			<p>As a self-starter in the computer science field, I have spent my free time doing online classes, tutorials, and tracks gaining knowledge of basic development languages. Improving and expanding on those skills, I had the opportunity to provide web updates and data entry into various websites upon customer needs.
			<br>
			<br>
			<p>I am currently spending time working on personal projects to perfect and practice the detail orienting skills of HTML, CSS, JavaScript, jQuery. I was exposed to the world of PHP and Wordpress development and would like to dive in deeper into those topics as well. I have also found JavaScript developing fulfilling and plan to explore the different facets of that language. Through learning development on my own I have become conscious of soft skills such as time-management, habit forming, and self-motivation.
			<br>
			<br>
			<h2 class="accent">Simplicity  |  Curiosity  |  Quirky</h2>
			<p>Over the years these three things, simplicity, curiosity, and quirkiness have become extremely important to who I am and what I put out in the world. Simplicity represents the ability to look past thing that are not contributing to my life or my process so I can make room and focus on what's most important. Simple design maximizes efficiency and allows the user to not get caught up in too many excessive details. Curiosity is the foundation of growth and learning. I am dedicated to gaining knowledge and knowing more about whatever language, project or situation I come to. I am capable of finding information on my own and enjoy researching things I don't yet understand. Quirk is that extra spice, just the right amount of uniqueness and spontaneity to make things interesting. My life philosophies translate into my work. Simple design well thought out and reliable user face with just the right amount of spice! </p>
			<br>
			<br>
			<button class="treehouse-btn" href="#">Team Treehouse</button>
			<button class="skills-btn" href="#">Skills</button>



		</div>






	</div>

	<!--popup treehouse-->
	<div id="popup" class="hide">
		<div class="popup-inner">
			<div class="report-card treehouse"></div>
				<p><a class="close" href="#">Close</a></p>
				<a class="close ex" href="#">x</a>
			</div>
		</div>
	</div>

	<div id="skills-popup" class="hide">
		<div class="popup-inner skills">
			<h2>Skills</h2>

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
			<!-- <table class="skills">

				<tr>
					<td>HTML</td>
					<td>HTML5</td>
					<td>CSS</td>
				</tr>
				<tr>
					<td>CSS3</td>
					<td>JQuery</td>
					<td>JavaScript</td>
				</tr>
				<tr>
					<td>SASS</td>
					<td>Wordpress</td>
					<td>PHP</td>
				</tr>
				<tr>
					<td>Bootstrap</td>
					<td>GitHub</td>
					<td> API </td>
				</tr>
				<tr>
					<td>JSON</td>

				</tr>
			</table> -->
			<p><a class="close" href="#">Close</a></p>
			<a class="close ex" href="#">x</a>
		</div>
	</div>

</div><!--wrapper end -->


<?php include('inc/footer.php'); ?>
