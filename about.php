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

		

		<div class="about-text">
		
			
			<p>Simplicity with a quirk. As a self-starter in the computer science field, I have spent my free time doing online classes, tutorials, and tracks gaining knowledge of basic development languages. Improving and expanding on those skills I had the opportunity to provide web updates and data entry into various websites.
			<br>
			<br>
			I am currently spending time working on personal projects to perfect and practice the detail orienting skills of HTML, CSS, JavaScript, jQuery. I was exposed to the world of PHP and Wordpress development and would like to dive in deeper into those topics as well. Through learning development on my own I have become conscious of soft skills such as time-management, habit forming, and self-motivation. 'Id like to develope...skill, i would consider myself well versed at..., i am familiar with..., presentations.. preperation is where i excell, not quick on your feet, time management is about prioritizing'
			<br>
			<br>
			Eager to learn more and gain skill sets in the development community I am planning on seeking out an internship or student position while taking on individual clients and opportunities in my free time.'something about direction you want to go, javascript?  profeshinal enthusiasm, enthusiastic, coordinated, develope, applications, bugs,algorithms, programming, coding, computer systems, customer needs, data aquisition, data entry,data migration, data processing, troubleshooting, deadlines, implementation, documentation,organizing, integration, systems,prototype, reliability, security, source code,statistical knowledge, configuration, servers,maitained, analyzed,contributed, created, designed, developed, formulated, identified,preformed, provided, resolved,'</p>
			

			<br>
			<br>

			<p>Testamonial page? Open badges?Life and work <b>philosophy</b>- simple and efficuant with a quirk. well desinged simple makes getting around easier...simple as a design element</p>
			
			<button class="treehouse-btn" href="#">Team Treehouse</button>
			<button class="skills-btn" href="#">Skills</button>

			

		</div>

		<div class="image">
				<img src="inc/img/self2.jpg" alt="Krista Jekel" style="width:400px">
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

	<div id="skills-popup" class="hide">
		<div class="popup-inner skills">
			<h2>Skills</h2>
			<table class="skills">
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
					<td>PHP</td>					
				</tr>
			</table>
			<p><a class="close" href="#">Close</a></p>
			<a class="close ex" href="#">x</a>
		</div>
	</div>

</div><!--wrapper end -->


<?php include('inc/footer.php'); ?>
