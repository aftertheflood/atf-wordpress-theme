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
	<?php 
		$description = get_bloginfo("description");
		if(is_single()){
			$description = get_the_excerpt();
		}
	?>

		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta name="description" content="<?php echo $description; ?>" >
		<meta name="keywords" content="">
		<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo get_the_title()." - ".get_bloginfo('name'); ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo get_permalink() ?>" />
<meta property="og:site_name" content="After the flood" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="<?php echo $description; ?>" />
<meta name="twitter:title" content="<?php echo get_bloginfo('name').' '.the_title(); ?>" />
<meta name="twitter:site" content="@AfterthefloodCo" />
<meta name="twitter:creator" content="@AfterthefloodCo" />
<meta name="google-site-verification" content="qBYFT3NHHBrDZDbI_EMkLuh5zOpkbNKnJsacxkE9Au8" />

<?php 
$articlePromoImage = get_post_meta($post->ID, 'promo-image', true);
if($articlePromoImage){
	echo '<meta name="twitter:image" content="'.get_site_url().$articlePromoImage.'">';
	echo '<meta property="og:image" content="'.get_site_url().$articlePromoImage.'">';
} else {
	echo '<meta name="twitter:image" content="'.get_site_url().'/wp-content/themes/atf-wordpress-theme/assets/images/default-twitter.png">';
	echo '<meta property="og:image" content="'.get_site_url().'/wp-content/themes/atf-wordpress-theme/assets/images/default-facebook.png">';
}

?>
<title><?php echo get_the_title()." - ".get_bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body class="<?php echo $pageTag.$single ?>">
		<?php wp_body_open(); ?>
		<div class="page-layout" id="page-top">
    <?php get_header(); ?>
    <main class="content" id="content" role="main">