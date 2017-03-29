<?php
include("header.php");
?>

		<section id="content" class="project">
			<div class="navlinks">
				<p class="navlink-left"><a class="text-link" href="">&laquo; prev-project</a></p>
				<p class="navlink-right"><a class="text-link" href="">next-project &raquo;</a></p>
			</div>

			<div class="project-header">
				<h2>Freelance Project: Seniors Outdoors!</h2>
				<h4>Wordpress theming, PHP, HTML/CSS, responsive design, Javascript/jQuery</h4>
			</div>
			<figure class="right">
				<a href="http://seniorsoutdoors.org/" target="_blank" ><img class="add-border" src="img/projects/SOHomePage.jpg" alt="Seniors Outdoors Site Development"></a>
			</figure>

			<div>
				<h3>The Project</h3>
				<p>Development phase of freelance research, design, and development project to redesign the website for Seniors Outdoors!</p> 
				<p>The new site was launched in March 2017. </p>
				<h3>The Result</h3>
				<p>Using WordPress as the CMS, I created a new site with the following features:</p>
				<ul class="triangle-list">
					<li>Dynamic display of the club's extensive schedule of outings</li>
					<li>A custom home page that displays images from a recent outing, provides information about upcoming events, and highlights new events and schedule changes</li>
					<li>Both a calendar view and a printable list view of the schedule</li>
					<li>User-friendly WordPress interface that enables the club's webmaster to update and modify information on the site.</li>
				</ul>
				<p>Over time, my involvement will decrease and responsibility for updating and maintaining the site will be increasingly assumed by the club's webmaster.</p> 
				<h3>Development Details</h3>
				<p>I used the following techniques to develop the site:</p>
				<ul class="triangle-list">
					<li>A commercial events plugin (<a target="_blank" class="text-link" href="https://theeventscalendar.com/">The Events Calendar</a>) was used and customized to accommodate the club's outing specifics.</li> 
					<li>Custom pages were created for the home page and the printable list view of the schedule.</li>
					<li>Custom fields were created (using the <a target="_blank" class="text-link" href="https://www.advancedcustomfields.com/">Advanced Custom Fields plugin</a>) for the individual events and the home page photo gallery.</li>
					<li>The image slider was programmed with PHP to access the photo gallery custom field and populate the images, and with JQuery to run the animation.</li>
					<li>Using a commercial import plugin (<a target="_blank" class="text-link" href="http://www.wpallimport.com/">WP All Import</a>), I created a template that enables the club's webmaster to upload the events using an Excel spreadsheet.</li>
				</ul>
				<p>Because the site is newly-launched, I am currently actively involved in troubleshooting and addressing requests from the membership. I will also be working on a system to create an archive of the club's outings at the end of each season.</p>
				<p><a class="text-link" href="ux-seniors-outdoors.php">Details of research phase</a></p>
				<p><a class="text-link" href="http://seniorsoutdoors.org" target="_blank">Live site</a></p>
				<p><a class="text-link" href="https://github.com/lizbur10/SO_NextGen" target="_blank">Github repo</a></p>
			</div>
			<div class="navlinks">
				<p class="navlink-left"><a class="text-link" href="">&laquo; prev-project</a></p>
				<p class="navlink-right"><a class="text-link" href="">next-project &raquo;</a></p>
			</div>
		</section>

<?php include("footer.php"); ?>
