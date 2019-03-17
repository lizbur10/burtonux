<?php 

function get_page_info($current_page) {
	$pages = array(
		array(
			"page" => "index.php",
			"add_to_menu" => true,
			"menu_label" => "About", 
			"page_title" => "Liz Burton - About Me"
		),
		array(
			"page" => "portfolio.php",
			"add_to_menu" => true,
			"menu_label" => "Portfolio",
			"page_title" => "Liz Burton - Portfolio"
		),
		array(
			"page" => "resume.php",
			"add_to_menu" => true,
			"menu_label" => "Resum&eacute;", 
			"page_title" => "Liz Burton - Resum&eacute;"
		),
		array(
			"page" => "proj-9me.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Liz Burton Portfolio - 9 Miles East Scheduling App",
			"sub_of" => "portfolio.php",
			"prev_link" => "portfolio.php",
			"prev_link_label" => "back to portfolio",
			"next_link" => "proj-appledore-data-entry.php",
			"next_link_label" => "next project"
		),
		array(
			"page" => "proj-appledore-data-entry.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Liz Burton Portfolio - Appledore Data Entry App",
			"sub_of" => "portfolio.php",
			"prev_link" => "proj-9me.php",
			"prev_link_label" => "previous project",
			"next_link" => "proj-seniors-outdoors.php",
			"next_link_label" => "next project"
		),
		array(
			"page" => "proj-seniors-outdoors.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Liz Burton Portfolio - Seniors Outdoors redesign",
			"sub_of" => "portfolio.php",
			"prev_link" => "proj-appledore-data-entry.php",
			"prev_link_label" => "previous project",
			"next_link" => "proj-burtonux.php",
			"next_link_label" => "next project"
		),
		array(
			"page" => "proj-burtonux.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Liz Burton Portfolio - BurtonUX.com Development",
			"sub_of" => "portfolio.php",
			"prev_link" => "proj-seniors-outdoors.php",
			"prev_link_label" => "previous project",
			"next_link" => "proj-appledore-banding.php",
			"next_link_label" => "next project"
		),
		array(
			"page" => "proj-appledore-banding.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Liz Burton Portfolio - appledorebanding.org",
			"sub_of" => "portfolio.php",
			"prev_link" => "proj-burtonux.php",
			"prev_link_label" => "previous project",
			"next_link" => "proj-mobile-app.php",
			"next_link_label" => "next project"
		),
		array(
			"page" => "proj-mobile-app.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Liz Burton Portfolio - Constant Contact mobile app",
			"sub_of" => "portfolio.php",
			"prev_link" => "proj-appledore-banding.php",
			"prev_link_label" => "previous project",
			"next_link" => "proj-email-editor.php",
			"next_link_label" => "next project"
		),
		array(
			"page" => "proj-email-editor.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Liz Burton Portfolio - Constant Contact Email editor",
			"sub_of" => "portfolio.php",
			"prev_link" => "proj-mobile-app.php",
			"prev_link_label" => "previous project",
			"next_link" => "proj-other.php",
			"next_link_label" => "next project"
		),
		array(
			"page" => "proj-other.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Liz Burton Portfolio - Other projects",
			"sub_of" => "portfolio.php",
			"prev_link" => "proj-email-editor.php",
			"prev_link_label" => "previous project"
		),
		// BLOG POSTS //
		array(
			"page" => "blog.php",
			"add_to_menu" => true,
			"menu_label" => "Blog", 
			"page_title" => "Liz Burton Blog",
			"sub_of" => "blog.php",
			"prev_link" => "blog-030919.php",
			"prev_link_label" => "previous post"
		),
		array(
			"page" => "blog-030919.php",
			"add_to_menu" => false,
			"menu_label" => null, 
			"page_title" => "Liz Burton Blog",
			"sub_of" => "blog.php",
			// "prev_link" => "blog-03XX19.php",
			// "prev_link_label" => "previous post",
			"next_link" => "blog.php",
			"next_link_label" => "next post"
		),
		// END OF BLOG POSTS //
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
			if ($pages[$i]["prev_link"]) {
				$page_info['prev_link'] = $pages[$i]["prev_link"];
				$page_info['prev_link_label'] = $pages[$i]["prev_link_label"];
			}
			if ($pages[$i]["next_link"]) {
				$page_info['next_link'] = $pages[$i]["next_link"];
				$page_info['next_link_label'] = $pages[$i]["next_link_label"];
			}
		}
	} 

	$page_info['count'] = $count;
	return $page_info;

}
?>