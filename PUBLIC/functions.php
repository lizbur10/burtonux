<?php 

function get_page_info($current_page) {
	$pages = array(
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
			"page" => "contact.php",
			"add_to_menu" => true,
			"menu_label" => "Contact", 
			"page_title" => "Contact info"
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

/*function get_page_info($current_page) {
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
			"page_title" => "UX projects",
			"nav_link_label" => "ux projects"
		),
		array(
			"page" => "dev-projects.php",
			"add_to_menu" => true,
			"menu_label" => "Web Development",
			"page_title" => "Web development projects",
			"nav_link_label" => "dev projects"
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
			"sub_of" => "ux-projects.php",
			"prev_link" => "ux-projects.php",
			"prev_link_label" => "ux project list",
			"next_link" => "ux-email-editor.php",
			"next_link_label" => "email editor"
		),
		array(
			"page" => "ux-email-editor.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Email editor",
			"sub_of" => "ux-projects.php",
			"prev_link" => "ux-mobile-app.php",
			"prev_link_label" => "mobile app",
			"next_link" => "ux-np-site-visits.php",
			"next_link_label" => "site visits"
		),
		array(
			"page" => "ux-np-site-visits.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Non-profit site visits",
			"sub_of" => "ux-projects.php",
			"prev_link" => "ux-email-editor.php",
			"prev_link_label" => "email editor",
			"next_link" => "ux-seniors-outdoors.php",
			"next_link_label" => "seniors outdoors"
		),
		array(
			"page" => "ux-seniors-outdoors.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Seniors Outdoors redesign",
			"sub_of" => "ux-projects.php",
			"prev_link" => "ux-np-site-visits.php",
			"prev_link_label" => "site visits",
			"next_link" => "ux-appledore-banding.php",
			"next_link_label" => "appledore"
		),
		array(
			"page" => "ux-appledore-banding.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "appledorebanding.com design",
			"sub_of" => "ux-projects.php",
			"prev_link" => "ux-seniors-outdoors.php",
			"prev_link_label" => "seniors outdoors",
			"next_link" => "ux-knitty.php",
			"next_link_label" => "knitty"
		),
		array(
			"page" => "ux-knitty.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "knitty.com Redesign",
			"sub_of" => "ux-projects.php",
			"prev_link" => "ux-appledore-banding.php",
			"prev_link_label" => "appledore",
			"next_link" => "ux-projects.php",
			"next_link_label" => "ux project list"
		),
		array(
			"page" => "dev-seniors-outdoors.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Seniors Outdoors Development",
			"sub_of" => "dev-projects.php",
			"prev_link" => "dev-projects.php",
			"prev_link_label" => "dev project list",
			"next_link" => "dev-appledore-banding.php",
			"next_link_label" => "appledore"
		),
		array(
			"page" => "dev-appledore-banding.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "AppledoreBanding.com Development",
			"sub_of" => "dev-projects.php",
			"prev_link" => "dev-seniors-outdoors.php",
			"prev_link_label" => "seniors outdoors",
			"next_link" => "dev-burtonux.php",
			"next_link_label" => "burtonux"
		),
		array(
			"page" => "dev-burtonux.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "BurtonUX.com Development",
			"sub_of" => "dev-projects.php",
			"prev_link" => "dev-appledore-banding.php",
			"prev_link_label" => "appledore banding",
			"next_link" => "dev-clumpies.php",
			"next_link_label" => "clumpies"
		),
		array(
			"page" => "dev-clumpies.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Clumpies Rebuild",
			"sub_of" => "dev-projects.php",
			"prev_link" => "dev-burtonux.php",
			"prev_link_label" => "burtonux",
			"next_link" => "dev-landon-hotel.php",
			"next_link_label" => "landon hotel"
		),
		array(
			"page" => "dev-landon-hotel.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Landon Hotel Image Carousel",
			"sub_of" => "dev-projects.php",
			"prev_link" => "dev-clumpies.php",
			"prev_link_label" => "clumpies",
			"next_link" => "dev-sanctuary.php",
			"next_link_label" => "sanctuary"
		),
		array(
			"page" => "dev-sanctuary.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Sanctuary WordPress Site",
			"sub_of" => "dev-projects.php",
			"prev_link" => "dev-landon-hotel.php",
			"prev_link_label" => "landon hotel",
			"next_link" => "dev-projects.php",
			"next_link_label" => "dev project list"
		)
	);
*/

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