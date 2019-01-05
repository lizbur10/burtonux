<?php include("header.php"); ?>

		<section id="content" class="project">
<!-- 			<div class="navlinks">
				<p class="navlink-left"><a class="text-link" href="<?php echo $page_info['prev_link']; ?>">&laquo; <?php echo $page_info['prev_link_label']; ?></a></p>
				<p class="navlink-right"><a class="text-link" href="<?php echo $page_info['next_link']; ?>"><?php echo $page_info['next_link_label']; ?> &raquo;</a></p>
			</div>
 -->		<div class="project-header with-links">
				<h2>9 Miles East Scheduling App | Full-stack Web Development<br /><span>- Project under development -<span></h2>
				<h4>React/Redux, Ruby on Rails API, RESTful Routing, CSS</h4>
				<div class="project-links">
					<p>
						<a class="text-link" href="https://github.com/lizbur10/nme-account-manager" target="_blank">Github repo</a>
						<a class="text-link" href="https://vimeo.com/305343788" target="blank">Demo video</a>
					</p>
				</div>
			</div>
			<figure>
				<img class="add-border" src="img/projects/9me_demo.gif" width="640" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</figure>

			<div>
				<h3>The Project</h3>
				<p>As the final project for the Flatiron School Full Stack Web Development program, I started working on a scheduling app for <a href="https://www.9mileseast.com/" target="_blank">9 Miles East</a>, a local family-owned farm that provides prepared meals to companies and individuals.</p>
			</div>
<!-- 			<img class="right" src="../img/projects/SO-prototype.jpg" alt="Seniors Outdoors prototypes">
 -->
			<div>
				<h3>The Problem</h3>
				<p>The farm delivers in two markets (Albany and Boston), has corporate and individual customers as well as catering clients, and about a dozen account managers. Because of this, the weekly schedule is big and complicated. The company currently uses a Google Spreadsheet to develop and share the schedule, which is both unwieldy and error-prone.</p>
			</div>

			<div>
				<h3>Development Details</h3>
				<p>The project includes (or will eventually include) the following elements:</p>
				<ul class="triangle-list">
                    <li>A front-end built using React</li>
					<li>A Rails API to handle data persistence</li>
					<li>Redux to handle changes to application state</li>
					<li>(Planned) Connection to the <a class="text-link" href="https://www.constantcontact.com" target="_blank">Constant Contact</a> API to access and update client account information used in email marketing</li>
				</ul>
			</div>

			<div>
				<h3>The Result</h3>
				<p>When complete, the planned application will include the following features:</p>
				<ul class="triangle-list">
                    <li>Account login and authentication for company employees</li>
					<li>A single, centralized location to store and maintain account information</li>
					<li>A user-friendly interface to facilitate creating, modifying, and viewing the schedule</li>
					<li>Filtering capability to enable individual account managers to view their own schedule for a week or for a given day</li>
				</ul>
			</div>

			<div>
				<h3>My Role</h3>
				<p>Solo project</p>
			</div>
			<div class="navlinks">
				<!-- <p class="navlink-left"><a class="text-link" href="<?php echo $page_info['sub_of']; ?>">&laquo; <?php echo $page_info['prev_link_label']; ?></a></p> -->
				<p class="navlink-left"><a class="text-link" href="portfolio.php">&laquo; back to portfolio</a></p>
 				<p class="navlink-right"><a class="text-link" href="<?php echo $page_info['next_link']; ?>"><?php echo $page_info['next_link_label']; ?> &raquo;</a></p>
			</div>
		</section>

<?php include("footer.php"); ?>
