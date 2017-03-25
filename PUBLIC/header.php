<!--
Working on making the header and nav dynamic
DONE: PHP files created & hooked to header.html & footer.html
Need to create code for nav to correctly show selected page
-->
<?php

$pages = array(
	"index.php" => array(
		"menu_label" => "About",
		"page_title" => "burtonux.com"
		),
	"ux-projects.php" => array(
		"menu_label" => "UX Research &amp; Design",
		"page_title" => "UX projects"
		),
	"dev-projects.php" => array(
		"menu_label" => "Web Development",
		"page_title" => "Web development projects"
		),
	"resume.php" => array(
		"menu_label" => "Resum&eacute;", 
		"page_title" => "Liz Burton resum&eacute;"
		),
	"contact.php" => array(
		"menu_label" => "Contact", 
		"page_title" => "Contact me"
		)
	);
$current_page = basename($_SERVER['SCRIPT_NAME']);
$keys = array_keys($pages);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="modernizr.js"></script>
		<script src="jquery-1.11.3.min.js"></script>
		<script src="mobile-menu.js"></script>
		<script async charset="utf-8" src="//cdn.thinglink.me/jse/embed.js"></script>
<!-- 		<script>
			 // function to set the height on fly
			 function autoHeight() {
			   $('#content').css('min-height', 0);
			   $('#content').css('min-height', (
			     $(document).height() 
			     - $('#header').height() 
			     - $('#footer').height()
			   ));
			 }

			 // onDocumentReady function bind
			 $(document).ready(function() {
			   autoHeight();
			 });

			 // onResize bind of the function
			 $(window).resize(function() {
			   autoHeight();
			 });
		</script>
 -->		<script>
		    $(function() {
				$(".no-touchevents nav li").hover(function() {
					$(this).toggleClass("menu-hover-state");
				});
			});

		</script>
		<?php for($i = 0; $i < count($pages); $i++)
			foreach($pages[$keys[$i]] as $key => $value) {
				if ($current_page == $keys[$i]) {
					if ($key == "page_title") {
						echo "<title>" . $value . "</title>";
					}
				}
			}
		?>
		<link rel="icon" type="image/ico" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="CSS/normalize.css">
		<link rel="stylesheet" type="text/css" href="CSS/css.css">
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
	</head>

	<body>
<!-- 		<div class="wrapper"> -->
			<header id="header">
				<nav class="hamburger-menu">
					<img class="hamburger" src="img/hamburger.png">
				</nav>
				<a href="index.php"><img class="logo" src="img/logos/logo_purple.png" onmouseover="this.src='img/logos/logo_blue.png';" onmouseout="this.src='img/logos/logo_purple.png';" alt="liz burton's logo"></a>
				<nav class="main-menu">
	 				<ul>
	 				<?php for($i = 0; $i < count($pages); $i++) {
						echo "<li";
						if ($current_page == $keys[$i]) {
							echo " class=\"selected\"";
						}
						foreach($pages[$keys[$i]] as $key => $value) {
							if ($key == "menu_label") {
								echo "><a href=" . $keys[$i] . ">" . $value . "</a></li>";
							}
						}
					}
					?>
					</ul>
				</nav>
			</header>
