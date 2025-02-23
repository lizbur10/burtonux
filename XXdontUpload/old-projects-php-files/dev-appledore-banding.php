<?php
include("header.php");
?>

		<section id="content" class="project">
<!-- 			<div class="navlinks">
				<p class="navlink-left"><a class="text-link" href="<?php echo $page_info['prev_link']; ?>">&laquo; <?php echo $page_info['prev_link_label']; ?></a></p>
				<p class="navlink-right"><a class="text-link" href="<?php echo $page_info['next_link']; ?>"><?php echo $page_info['next_link_label']; ?> &raquo;</a></p>
			</div>
 -->
			<div class="project-header">
				<h2>Freelance Project: AppledoreBanding.org</h2>
				<h4>Wordpress theming, PHP, HTML/CSS, SASS, responsive design, mobile first, Javascript/jQuery</h4>
			</div>
			<figure class="right">
				<a target="_blank" href="http://appledorebanding.org/"><img src="img/projects/appledore_frontPage.jpg" alt="BurtonUX Portfolio Site"></a>
			</figure>

			<div>
				<h3>The Project</h3>
				<p>Development phase of freelance research, design, and development project for the Appledore Island Migration Station.</p> 
				<p>The site was launched in Spring 2016.</p>

				<h3>The Result</h3>
				<p>Using WordPress as the CMS, I developed a dedicated website with the following features:</p>
				<ul>
					<li>A custom home page that displays images, general information about the banding station, and recent news and updates</li>
					<li>Daily reports that include a list of the birds banded that day, a narrative, and pictures</li>
					<li>A tool for scheduling volunteers and posting the schedule calendar</li>
					<li>A summary page showing the cumulative list of birds banded for the season</li>	
				</ul>
				<p>I continue to maintain and update the site as webmaster.</p>
				<h3>Development Details</h3>
				<p>I used the following techniques to develop the site:</p>
				<ul>
					<li>Custom pages were created for the home page, daily report landing page, individual daily report pages, season Banding Summary page, and Banding Station Staff page.</li>
					<li>Custom post types were created for home page news items, staff scheduler and staff profiles.</li>
					<li>Custom fields were created (using the <a target="_blank" class="text-link" href="https://www.advancedcustomfields.com/">Advanced Custom Fields plugin</a>) for the daily reports, volunteer schedule, staff profiles, and home page photo gallery.</li>
					<li>The image slider was programmed using PHP to access the photo gallery custom field and populate the images, and using JQuery to run the animation.</li>
					<li>The Season Banding Summary page, which is created dynamically, was programmed using PHP.</li>
				</ul>
				<p>Planned improvements and additions:</p>
				<ul>
					<li>Address performance issues (slow loading)</li>
					<li>Create archives of daily reports and banding summaries from previous seasons</li>
					<li>Develop a web application to centralize and streamline data entry for the station</li>
				</ul>
				<p><a class="text-link" href="ux-appledore-banding.php">Details of research &amp; design phase</a>
				<p><a class="text-link" href="http://appledorebanding.org/" target="_blank">Live site</a></p>
				<p><a class="text-link" href="https://github.com/lizbur10/appledorebanding" target="_blank">Github repo</a></p>
			</div>

			<div class="navlinks">
				<p class="navlink-left"><a class="text-link" href="<?php echo $page_info['prev_link']; ?>">&laquo; <?php echo $page_info['prev_link_label']; ?></a></p>
<!-- 				<p class="navlink-right"><a class="text-link" href="<?php echo $page_info['next_link']; ?>"><?php echo $page_info['next_link_label']; ?> &raquo;</a></p>
 -->			</div>
		</section>

<?php include("footer.php"); ?>
