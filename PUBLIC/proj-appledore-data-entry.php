<?php include("header.php"); ?>

		<section id="content" class="project">
<!-- 			<div class="navlinks">
				<p class="navlink-left"><a class="text-link" href="<?php echo $page_info['prev_link']; ?>">&laquo; <?php echo $page_info['prev_link_label']; ?></a></p>
				<p class="navlink-right"><a class="text-link" href="<?php echo $page_info['next_link']; ?>"><?php echo $page_info['next_link_label']; ?> &raquo;</a></p>
			</div>
 -->		<div class="project-header with-links">
				<h2>Appledore Data Entry App | Full Stack Web Development<br /><span>- Project under development -<span></h2>
				<h4>Ruby on Rails, JavaScript</h4>
				<div class="project-links">
					<p>
						<a class="text-link" href="https://github.com/lizbur10/rails-portfolio-project" target="_blank">Github repo</a>
					</p>
				</div>
			</div>
			<figure>
				<iframe class="add-border" src="https://player.vimeo.com/video/278508330" width="640" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</figure>

			<div>
				<h3>The Project</h3>
				<p>As one of the portfolio projects for the Flatiron School Full Stack Web Developer program, I started working on a data entry application for the Appledore Island Migration Banding Station.</p>
			</div>
<!-- 			<img class="right" src="../img/projects/SO-prototype.jpg" alt="Seniors Outdoors prototypes">
 -->
			<div>
				<h3>The Problem</h3>
				<p>The Appledore banding station operates daily during spring and fall migration. On each day of banding, the bander in charge is responsible for the data entry of the list of birds banded that day and for creating a daily report that includes the banded list and a written summary for the day. Currently, the data entry is done in large Excel spreadsheets and the daily reports are written and sent out using the bander's email client. Rather than try to filter and copy and paste the banded list from the spreadsheet (which includes data for the entire season), banders most often wind up re-creating the banded list in the email. This process is both time-consuming and error-prone. </p>
			</div>

			<div>
				<h3>Development Details</h3>
				<p>I used the following tools/techniques in developing the app:</p>
				<ul class="triangle-list">
                    <li>The Ruby on Rails framework to build the app and handle data persistence</li>
                    <li>User authentication either using a conventional login process or through Google</li>
                    <li>JavaScript to render pages dynamically</li>
				</ul>
			</div>

			<div>
				<h3>The Result</h3>
				<p>The ultimate goal for the app is to provide a centralized solution for data entry and report creation that will reduce inconsistency, increase the accuracy of the data, and simplify the process for the banders.</p>
			</div>

			<div>
				<h3>My Role</h3>
				<p>Solo project</p>
			</div>
			<div class="navlinks">
				<p class="navlink-left"><a class="text-link" href="<?php echo $page_info['prev_link']; ?>">&laquo; <?php echo $page_info['prev_link_label']; ?></a></p>
<!-- 				<p class="navlink-right"><a class="text-link" href="<?php echo $page_info['next_link']; ?>"><?php echo $page_info['next_link_label']; ?> &raquo;</a></p>
 -->			</div>
		</section>

<?php include("footer.php"); ?>
