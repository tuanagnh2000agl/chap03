<?php

$title = "Wordpresso2 | Home";
$description = "";
$keyword = "";

if(is_404()){
	$title = "Wordpress | 404 ERROR";
	$description = "";
	$keyword = "";
}else if(is_archive()){
	$ar_title = get_the_archive_title();
	$ar_title = explode(":",$ar_title);
	$ar_title = strip_tags($ar_title[1]);
	$title = "Wordpress | Archive ".$ar_title;
	$description = "";
	$keyword = "";
}else {
	$title = "Wordpress | ".get_the_title();
	$description = "";
	$keyword = "";
}

?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keyword; ?>">
