<?php include("header.php"); ?>

		<section id="content" class="project">
<!-- 			<div class="navlinks">
				<p class="navlink-left"><a class="text-link" href="<?php echo $page_info['prev_link']; ?>">&laquo; <?php echo $page_info['prev_link_label']; ?></a></p>
				<p class="navlink-right"><a class="text-link" href="<?php echo $page_info['next_link']; ?>"><?php echo $page_info['next_link_label']; ?> &raquo;</a></p>
			</div>
 -->		<div class="project-header with-links">
				<h2>SeniorsOutdoors.com | Research, Design, Development</h2>
				<h4>Content inventory, information architecture, prototyping (paper, Axure), user testing (card sort, reverse card sort), Wordpress theming, PHP, HTML/CSS, responsive design, Javascript/jQuery</h4>
				<div class="project-links">
					<p>
						<a class="text-link" href="http://seniorsoutdoors.org" target="_blank">Live site</a>
						<a class="text-link" href="https://github.com/lizbur10/SO_NextGen" target="_blank">Github repo</a>
					</p>
				</div>
			</div>
			<figure>
				<a href="http://seniorsoutdoors.org/" target="_blank"><img class="add-border" src="img/projects/SOHomePage.jpg" alt="New site"></a>
				<figcaption>Redesigned Site</figcaption>
			</figure>

			<div>
				<h3>The Project</h3>
				<p>As a freelance project, I redesigned the website for Seniors Outdoors, a club for active seniors in Durango, Colorado.</p>
			</div>
<!-- 			<img class="right" src="../img/projects/SO-prototype.jpg" alt="Seniors Outdoors prototypes">
 -->
			<div>
				<h3>The Problem</h3>
				<p>The club's <a href="http://old.seniorsoutdoors.org/" class="text-link" target="_blank">previous site</a> was dated and had a shallow structure with long pages of dense text, making content on the site difficult to access. In addition, club members were increasingly expressing a desire to be able to access information from their mobile devices, which the old site did not support.</p>
			</div>
			<figure>
				<a href="http://old.seniorsoutdoors.org/" target="_blank"><img src="img/projects/SO_old.jpg" alt="Current Seniors Outdoors site"></a>
				<figcaption>Previous Site</figcaption>
			</figure>

			<div>
				<h3>The Approach</h3>
				<p>The project included a number of activities:</p>
				<ol>
					<li>Content inventory and proposed restructuring of the site's information architecture</li>
					<li>User testing consisting of a card sort and tree test to validate and refine the proposed IA</li>
					<li>Development of both paper &amp; pencil and Axure prototypes </li>
					<li>Development of the redesigned site using WordPress as the CMS</li>
				</ol>
			</div>

			<div>

				<h3>Development Details</h3>
				<p>I used the following techniques to develop the site:</p>
				<ul class="triangle-list">
					<li>A commercial events plugin (<a target="_blank" class="text-link" href="https://theeventscalendar.com/">The Events Calendar</a>) was used and customized to accommodate the club's outing specifics.</li> 
					<li>Custom pages were created for the home page and the printable list view of the schedule.</li>
					<li>Custom fields were created (using the <a target="_blank" class="text-link" href="https://www.advancedcustomfields.com/">Advanced Custom Fields plugin</a>) for the individual events and the home page photo gallery.</li>
					<li>The image slider was programmed with PHP to access the photo gallery custom field and populate the images, and with JQuery to run the animation.</li>
					<li>Using a commercial import plugin (<a target="_blank" class="text-link" href="http://www.wpallimport.com/">WP All Import</a>), I created a template that enables the club's webmaster to upload the events using an Excel spreadsheet.</li>
				</ul>
				<p>The site was launched in March 2017 and is being maintained and updated by the club's webmaster with minimal support needed from me. The site has received positive feedback from users. 
				<p><a class="text-link" href="http://seniorsoutdoors.org" target="_blank">Live site</a></p>
				<p><a class="text-link" href="https://github.com/lizbur10/SO_NextGen" target="_blank">Github repo</a></p>
			</div>
			<div>
				<h3>The Result</h3>
				<p>Features of the redesigned site include:</p>
				<ul class="triangle-list">
					<li>A fresher, more modern look</li>
					<li>A custom home page that displays images from a recent outing, provides information about upcoming events, and highlights new events and schedule changes</li>
					<li>Dynamic presentation of the club's extensive schedule of outings</li>
					<li>Both a calendar view and a printable list view of the schedule</li>
					<li>A mechanism for uploading outings from a spreadsheet</li>
					<li>User-friendly WordPress interface that enables the club's webmaster to update and modify information on the site.</li>
					<li>Improved accessibility and performance for mobile users</li>
				</ul>
			</div>

			<div>
				<h3>My Role</h3>
				<p>Solo project: I did all research, design and development work.</p>
			</div>
			<div class="navlinks">
				<!-- <p class="navlink-left"><a class="text-link" href="<?php echo $page_info['prev_link']; ?>">&laquo; <?php echo $page_info['prev_link_label']; ?></a></p> -->
				<p class="navlink-left"><a class="text-link" href="portfolio.php">&laquo; back to portfolio</a></p>
 				<p class="navlink-right"><a class="text-link" href="<?php echo $page_info['next_link']; ?>"><?php echo $page_info['next_link_label']; ?> &raquo;</a></p>
			</div>
		</section>

<?php include("footer.php"); ?>
