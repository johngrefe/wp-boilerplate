<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width" />

	<title><?php wp_title(); ?></title>
	<meta name="description" content="" />

	<?php
	// Cache buster for stylesheet
	$stylesheet = '/style/css/screen.css';
	$style_path = get_template_directory() . $stylesheet;
	$style_uri  = get_bloginfo('template_url') . $stylesheet . '?' . filemtime($style_path);
	?>

	<link rel="stylesheet" href="<?php echo $style_uri; ?>" />

	<?php wp_head(); ?>
</head>
<body>
