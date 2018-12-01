<?php 

function get_page_info($current_page) {
	$pages = array(
		array(
			"page" => "about.php",
			"add_to_menu" => true,
			"menu_label" => "About", 
			"page_title" => "About Me"
		),
		array(
			"page" => "index.php",
			"add_to_menu" => true,
			"menu_label" => "Portfolio",
			"page_title" => "Portfolio of Liz Burton"
		),
		array(
			"page" => "resume.php",
			"add_to_menu" => true,
			"menu_label" => "Resum&eacute;", 
			"page_title" => "Resum&eacute; of Liz Burton"
		),
		array(
			"page" => "proj-seniors-outdoors.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Seniors Outdoors redesign",
			"sub_of" => "index.php",
			"prev_link" => "index.php",
			"prev_link_label" => "back to portfolio",
			"next_link" => "ux-appledore-banding.php",
			"next_link_label" => "appledore"
		),
		array(
			"page" => "proj-appledore-banding.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "appledorebanding.org",
			"sub_of" => "index.php",
			"prev_link" => "index.php#appledore-banding",
			"prev_link_label" => "back to portfolio",
			"next_link" => "ux-knitty.php",
			"next_link_label" => "knitty"
		),
		array(
			"page" => "proj-email-editor.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Email editor",
			"sub_of" => "index.php",
			"prev_link" => "index.php#next-gen-editor",
			"prev_link_label" => "back to portfolio",
			"next_link" => "ux-np-site-visits.php",
			"next_link_label" => "site visits"
		),
		array(
			"page" => "proj-mobile-app.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Mobile app",
			"sub_of" => "index.php",
			"prev_link" => "index.php#mobile-app",
			"prev_link_label" => "back to portfolio",
			"next_link" => "ux-email-editor.php",
			"next_link_label" => "email editor"
		),
		array(
			"page" => "proj-burtonux.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "BurtonUX.com Development",
			"sub_of" => "index.php",
			"prev_link" => "index.php#burtonux",
			"prev_link_label" => "back to portfolio",
			"next_link" => "dev-clumpies.php",
			"next_link_label" => "clumpies"
		),
		array(
			"page" => "proj-other.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Other projects",
			"sub_of" => "index.php",
			"prev_link" => "index.php#other-projects",
			"prev_link_label" => "back to portfolio",
			"next_link" => "dev-landon-hotel.php",
			"next_link_label" => "landon hotel"
		),
		array(
			"page" => "proj-np-site-visits.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Non-profit site visits",
			"sub_of" => "resume.php",
			"prev_link" => "resume.php",
			"prev_link_label" => "back to resum&eacute;"
		)
	);

	for($i = 0; $i < count($pages); $i++) {
		if (($current_page == $pages[$i]["page"]) && ($pages[$i]["sub_of"]) ) {
			$hook = $pages[$i]["sub_of"];

		}
	}

	$count = 0;
	for($i = 0; $i < count($pages); $i++) {
		if ($pages[$i]['add_to_menu']) {
			$page_info['menu_labels'][$count] = $pages[$i]['menu_label'];
			$page_info['menu_links'][$count] = $pages[$i]['page'];
			if ( ($current_page == $pages[$i]["page"]) || ( $hook == $pages[$i]["page"]) ) {
				$page_info['class'][$count] = " class=\"selected\"";
			} else {
				$page_info['class'][$count] = null;
			}
			$count++;
		}
		if ($current_page == $pages[$i]["page"]) {
			$page_info['page_title'] = $pages[$i]["page_title"];
			if ($pages[$i]["sub_of"]) {
				$page_info['prev_link'] = $pages[$i]["prev_link"];
				$page_info['prev_link_label'] = $pages[$i]["prev_link_label"];
				$page_info['next_link'] = $pages[$i]["next_link"];
				$page_info['next_link_label'] = $pages[$i]["next_link_label"];
			}
		}
	} 

	$page_info['count'] = $count;
	return $page_info;

}
?>