<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="jquery-1.11.3.min.js"></script>
		<script>
		    $(function() {
		    	var selected = false;
				$("nav li a").hover(function() {
					if ( $(this).attr("class") == "selected") {
						selected = true;
						$(this).toggleClass("selected").toggleClass("menu-hover-state");
					} else {
						$(this).toggleClass("menu-hover-state");
					}
				}, function() {
					if (selected) {
						$(this).toggleClass("selected").toggleClass("menu-hover-state");
						selected = false;
					} else {
						$(this).toggleClass("menu-hover-state");
					}
				});
				$(".project-menu-item").hover(function() {
					$("ul.sub-nav").toggleClass("visually-hidden");
				});
				$("nav li li").hover(function() {
					$(".project-menu-item>a").toggleClass("menu-hover-state");
				});
			});
		</script>
		<title>Contact Me</title>
		<link rel="icon" type="image/ico" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="CSS/normalize.css">		
		<link rel="stylesheet" type="text/css" href="CSS/contact.css">
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
	</head>

	<body class="contact">
		<header>
			<a href="index.html"><img class="logo" src="img/logos/logo_purple.png" onmouseover="this.src='img/logos/logo_blue.png';" onmouseout="this.src='img/logos/logo_purple.png';" alt="liz burton's logo"></a>
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li class="project-menu-item"><a href="projects.html">Projects</a>
						<ul class="sub-nav visually-hidden">
							<li><a href="projects/mobile-app.html">Constant Contact Mobile App</a></li>
							<li><a href="projects/galileo.html">Constant Contact Email Editor</a></li>
							<li><a href="projects/np-site-visits.html">Non-profit Site Visits</a></li>
							<li><a href="projects/seniors-outdoors.html">Seniors Outdoors</a></li>
							<li><a href="projects/knitty.html">Knitty.com</a></li>
							<li><a href="projects/class-projects.html">Development class projects</a></li>
						</ul>
					</li>
					<li><a href="resume.html">Resum&eacute;</a></li>
					<li><a class="selected" href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</header>

		<section>
			<h1 class="visually-hidden">Contact Liz Burton</h1>
			<?php
			    $name = $_POST['name'];
			    $email = $_POST['email'];
			    $message = $_POST['message'];
		        $from = 'From: BurtonUX Contact Form'; 
			    $to = 'liz.burton147@gmail.com'; 
			    $subject = 'Hello';
			    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				if ($_POST['submit']) {
				    if (mail ($to, $subject, $body, $from)) { 
				        echo '<p>Your message has been sent!</p>';
				    } else { 
				        echo '<p>Something went wrong, go back and try again!</p>'; 
				    }
				}
			?>

			<h2>Contact Me</h2>
				<form method="post" action="contact.php">
				  <input type="text" name="name" placeholder="Name"><br>
				  <input type="email" name="email" placeholder="*Email" required><br>
				  <input type="textarea" name="message" placeholder="*Message" required><br>
				  <input type="submit" name="submit" value="Send" class="button">
				</form>
		</section>

		<footer>
			<h3>Contact:</h3>
			<ul>
				<li id="email"><a href="mailto:liz.burton147@gmail.com"><span>liz.burton147@gmail.com</span></a></li>
				<li id="linkedin"><a href="https://www.linkedin.com/in/burtonux" target="_blank"><span>www.linkedin.com/in/burtonux</span></a></li>
				<li id="phone"><span>(773) 710-8686</span></li>
			</ul>
		</footer>
	</body>
</html>