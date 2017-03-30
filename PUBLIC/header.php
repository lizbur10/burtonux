<?php

//Call the function to get page and menu info for the current page

require_once("functions.php");
$current_page = basename($_SERVER['SCRIPT_NAME']);
$page_info = get_page_info($current_page);
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
		<title><?php echo $page_info['page_title']; ?></title>
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
 	 					for ($i = 0; $i < $page_info['count']; $i++) {
 	 						echo "<li" . 
 	 						$page_info['class'][$i] .
 	 						"><a href=\"" .
 	 						$page_info['menu_links'][$i] .
 	 						"\">" .
 	 						$page_info['menu_labels'][$i] .
 	 						"</a></li>";
 	 					}
					?>
 					</ul>
				</nav>
			</header>
