<?php include("header.php"); ?>

		<section id="content" class="project">
			<div class="project-header with-links">
				<h2>AppledoreBanding.org | Research, Design, Development</h2>
				<h4>Requirements gathering, information architecture, Wordpress theming, PHP, HTML/CSS, SASS, responsive design, mobile first, Javascript/jQuery</h4>
				<div class="project-links">
					<p>
						<a class="text-link" href="http://appledorebanding.org" target="_blank">Live site</a>
						<a class="text-link" href="https://github.com/lizbur10/appledorebanding" target="_blank">Github repo</a>
					</p>
				</div>
			</div>
			<figure>
				<a target="_blank" href="http://appledorebanding.org/"><img class="add-border" src="img/projects/appledore_frontPage.jpg" alt="AppledoreBanding.org Design"></a>
			</figure>

			<div>
				<h3>The Project</h3>
				<p>As a freelance project, I designed and developed a dedicated website for the Appledore Island Migration Station on Appledore Island, Maine. </p>
			</div>

			<div>
				<h3>The Problem</h3>
				<p>The banding station's online presence was limited to a couple of faculty pages on a university website, designed for banding station volunteers. As a result, the information was difficult to locate and difficult for banding station staff to keep updated. Furthermore, the station had no public-facing online presence that might serve to attract potential new volunteers and supporters.</p>
			</div>

			<div>
				<h3>The Approach</h3>
				<p>I started by interviewing the head bander to gather information about her goals for the new site and then expanded the research to include all banding station volunteers. I then sketched out a proposed site map, created several style tiles showing some options for the visual treatment of the site, and worked with the head bander to <a class="text-link" target="_blank" href="http://burtonux.com/AIMS_styleTile/">finalize the style tile</a>. Once the design was finalized, I developed the site using WordPress as the CMS.</p>
				<h3>Development Details</h3>
				<p>I used the following techniques to develop the site:</p>
				<ul>
					<li>Custom pages were created for the home page, daily report landing page, individual daily report pages, season Banding Summary page, and Banding Station Staff page.</li>
					<li>Custom post types were created for home page news items, staff scheduler and staff profiles.</li>
					<li>Custom fields were created (using the <a target="_blank" class="text-link" href="https://www.advancedcustomfields.com/">Advanced Custom Fields plugin</a>) for the daily reports, volunteer schedule, staff profiles, and home page photo gallery.</li>
					<li>The image slider was programmed using PHP to access the photo gallery custom field and populate the images, and using JQuery to run the animation.</li>
					<li>The Season Banding Summary page, which is created dynamically, was programmed using PHP.</li>
				</ul>
				<p>The site was launched in May 2016. </p>
				<p><a class="text-link" href="http://appledorebanding.org/" target="_blank">Live site</a></p>
				<p><a class="text-link" href="https://github.com/lizbur10/appledorebanding" target="_blank">Github repo</a></p>

			</div>

			<div>
				<h3>The Result</h3>
				<p>The features of the new website include:</p>
				<ul>
					<li>engaging content to attract and retain site visitors, including images and updates of banding activity during banding seasons</li>
					<li>general information about the station and the research being conducted</li>
					<li>scheduling and logistical information for station volunteers</li>
					<li>the use of Wordpress as a CMS to make it easy to add and update content</li>
				</ul>
			</div>

			<div>
				<h3>My Role</h3>
				<p>Solo project: I did all design and development work.</p>
			</div>


			<div class="navlinks">
                <?php if ($page_info["prev_link"]) { include("nav-links/prev-link.php"); } ?>
                <?php if ($page_info["next_link"]) { include("nav-links/next-link.php"); } ?>
            </div>

		</section>

<?php include("footer.php"); ?>