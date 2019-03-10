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
		<script src="jquery-3.2.0.min.js"></script>
		<script src="functions.js"></script>
		<script async charset="utf-8" src="//cdn.thinglink.me/jse/embed.js"></script>
		<script src="https://use.fontawesome.com/3f22970e7c.js"></script>
		<title><?php echo $page_info['page_title']; ?></title>
		<link rel="icon" type="image/ico" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="CSS/normalize.css">
		<link rel="stylesheet" type="text/css" href="CSS/css.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oswald|Crimson+Text" rel="stylesheet">
		<!-- <link href="https://fonts.googleapis.com/css?family=Oswald|Slabo+27px" rel="stylesheet"> -->
	</head>

	<body>
<!-- 		<div class="wrapper"> -->
			<header id="header">
<!-- 				<nav class="hamburger-menu">
					<img class="hamburger" src="img/hamburger.png">
				</nav>
 -->				<div class="logo-wrapper">
					<a href="index.php"><img class="logo" src="img/logos/logo_purple_new.png" onmouseover="this.src='img/logos/logo_blue_new.png';" onmouseout="this.src='img/logos/logo_purple_new.png';" alt="liz burton's logo"></a>
				</div>

				<p class="tag-line">Liz Burton is an aspiring full-stack Web developer based in Boston.</p>
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
					<!-- <li><a target="_blank" href="http://burtondev.com/">Blog</a></li> -->
 					</ul>
				</nav>
			</header>
