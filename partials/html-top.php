<!-- partials/html-head -->
<?php 
wp_enqueue_style( 'style', get_stylesheet_uri() ); 
global $pageTag
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>
	<body class="<?php echo $pageTag ?>">
		<?php wp_body_open(); ?>
		<div class="page-layout">
    <?php get_header(); ?>
    <main class="content" id="content" role="main">