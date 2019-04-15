<?php
include("header.php");
?>

		<section id="content" class="project">
<!-- 			<div class="navlinks">
				<p class="navlink-left"><a class="text-link" href="<?php echo $page_info['prev_link']; ?>">&laquo; <?php echo $page_info['prev_link_label']; ?></a></p>
				<p class="navlink-right"><a class="text-link" href="<?php echo $page_info['next_link']; ?>"><?php echo $page_info['next_link_label']; ?> &raquo;</a></p>
			</div>
 -->
			<div class="project-header with-links">
				<h2>BurtonUX.com | Design, Development </h2>
				<h4>HTML/CSS, SASS, responsive design, mobile first, PHP, Javascript/jQuery</h4>
				<div class="project-links">
					<p>
						<a class="text-link" href="https://github.com/lizbur10/burtonux" target="_blank">Github repo</a>
					</p>
				</div>
			</div>
			<figure>
				<img class="add-border" src="img/projects/burtonux.jpg" alt="BurtonUX Portfolio Site">
			</figure>

			<div>
				<h3>The Project</h3>
				<p>As the final project for the Minneapolis College of Art and Design (MCAD) Responsive Design class, design and develop a site to:</p>
				<ul>
					<li>share my background and qualifications</li>
					<li>showcase projects that demonstrate my skills and experience in research, design, and Web development.</li>
				</ul>
				<p>I have continued to develop and refine the site since completing the class project and I use it as my portfolio site.</p>
				<h3>Development Details</h3>
				<p>I used the following techniques to develop the site:</p>
				<ul>
					<li>HTML/CSS with SASS</li>
					<li>PHP to include separate header and footer files in each page</li>
					<li>PHP to create the page title, menu and selected page indicator programmatically</li>
					<li>Media queries and Modernizr to make the site mobile responsive</li>
				</ul> 
				<p><a class="text-link" href="https://github.com/lizbur10/burtonux" target="_blank">Github repo</a></p>
			</div>

			<div>
				<h3>My Role</h3>
				<p>Solo project</p>
			</div>

			<div class="navlinks">
                <?php if ($page_info["prev_link"]) { include("nav-links/prev-link.php"); } ?>
                <?php if ($page_info["next_link"]) { include("nav-links/next-link.php"); } ?>
            </div>
		</section>

<?php include("footer.php"); ?>
