<?php

//Information about each page for nav and page title

$pages = array(
	array(
		"page" => "index.php",
		"add_to_menu" => true,
		"menu_label" => "About",
		"page_title" => "burtonux.com"
	),
	array(
		"page" => "ux-projects.php",
		"add_to_menu" => true,
		"menu_label" => "UX Research &amp; Design",
		"page_title" => "UX projects"
	),
	array(
		"page" => "dev-projects.php",
		"add_to_menu" => true,
		"menu_label" => "Web Development",
		"page_title" => "Web development projects"
	),
	array(
		"page" => "resume.php",
		"add_to_menu" => true,
		"menu_label" => "Resum&eacute;", 
		"page_title" => "Liz Burton resum&eacute;"
	),
	array(
		"page" => "contact.php",
		"add_to_menu" => true,
		"menu_label" => "Contact", 
		"page_title" => "Contact me"
	),
	array(
		"page" => "ux-mobile-app.php",
		"add_to_menu" => false,
		"menu_label" => null, 
		"page_title" => "Mobile app",
		"sub_of" => "ux-projects.php"
	),
	array(
		"page" => "ux-email-editor.php",
		"add_to_menu" => false,
		"menu_label" => null, 
		"page_title" => "Email editor",
		"sub_of" => "ux-projects.php"
	),
	array(
		"page" => "ux-np-site-visits.php",
		"add_to_menu" => false,
		"menu_label" => null, 
		"page_title" => "Non-profit site visits",
		"sub_of" => "ux-projects.php"
	),
	array(
		"page" => "ux-seniors-outdoors.php",
		"add_to_menu" => false,
		"menu_label" => null, 
		"page_title" => "Seniors Outdoors redesign",
		"sub_of" => "ux-projects.php"
	),
	array(
		"page" => "ux-appledore-banding.php",
		"add_to_menu" => false,
		"menu_label" => null, 
		"page_title" => "appledorebanding.com design",
		"sub_of" => "ux-projects.php"
	),
	array(
		"page" => "ux-knitty.php",
		"add_to_menu" => false,
		"menu_label" => null, 
		"page_title" => "knitty.com Redesign",
		"sub_of" => "ux-projects.php"
	),
	array(
		"page" => "dev-burtonux.php",
		"add_to_menu" => false,
		"menu_label" => null, 
		"page_title" => "BurtonUX.com Development",
		"sub_of" => "dev-projects.php"
	),
	array(
		"page" => "dev-seniors-outdoors.php",
		"add_to_menu" => false,
		"menu_label" => null, 
		"page_title" => "Seniors Outdoors Development",
		"sub_of" => "dev-projects.php"
	),
	array(
		"page" => "dev-appledore-banding.php",
		"add_to_menu" => false,
		"menu_label" => null, 
		"page_title" => "AppledoreBanding.com Development",
		"sub_of" => "dev-projects.php"
	)
);

$current_page = basename($_SERVER['SCRIPT_NAME']);
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
		<script>
		    $(function() {
				$(".no-touchevents nav li").hover(function() {
					$(this).toggleClass("menu-hover-state");
				});
			});

		</script>
		<?php for($i = 0; $i < count($pages); $i++) {
			if ($current_page == $pages[$i]["page"]) {
				echo "<title>" . $pages[$i]["page_title"] . "</title>";
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
 	 				<?php 
 	 					$hook = null;
						for($i = 0; $i < count($pages); $i++) {
							if (($current_page == $pages[$i]["page"]) && ($pages[$i]["sub_of"]) ) {
								$hook = $pages[$i]["sub_of"];
							}
						}
						for($i = 0; $i < count($pages); $i++) {
		 					if ($pages[$i]["add_to_menu"]) {
								echo "<li";
								if ( ($current_page == $pages[$i]["page"]) || ($pages[$i]["page"] == $hook) ) {
									echo " class=\"selected\"";
								}
								echo "><a href=\"" . $pages[$i]["page"] . "\">" . $pages[$i]["menu_label"] . "</a></li>";
							}
						}
					?>
 					</ul>
				</nav>
			</header>
