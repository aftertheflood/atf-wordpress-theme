<!-- partials/html-head -->
<?php 
wp_enqueue_style( 'style', get_stylesheet_uri() ); 
global $pageTag;
if(is_single()){
	if ( in_category( 'client' ) ){
		$pageTag = 'clients';
		$single = '-single';
	}else{
		$pageTag = 'journal';
		$single = '';
	}
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>
	<body class="<?php echo $pageTag.$single ?>">
		<?php wp_body_open(); ?>
		<div class="page-layout" id="page-top">
    <?php get_header(); ?>
    <main class="content" id="content" role="main">