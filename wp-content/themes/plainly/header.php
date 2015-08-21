<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Plainly
 */

$customeFields = get_post_custom();

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php if ($customeFields['og:url'] && (sizeof($customeFields['og:url']) > 0)) { ?>
<meta property="og:url" content="<?= $customeFields['og:url'][0] ?>">
<?php } ?>

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">	
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'plainly' ); ?></a>

	<header class="site-header" role="banner">
		<div class="banner">
			<h1 class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="tagline"><?php bloginfo( 'description' ); ?></h2>
			<div class="nav-wrap">
				<input type="checkbox" id="main-nav-state-checkbox" />
				<label for="main-nav-state-checkbox" class="burger"></label>
				<nav class="main-nav">
					<ul>
						<li><a href="/articles">Articles</a></li>
						<li><a href="/">About</a></li>
						<li><a href="https://linkedin.com/in/jcaveman" target="_blank">LinkedIn</a></li>
						<li><a href="https://facebook.com/jcaveman" target="_blank">Facebook</a></li>
					</ul>
					<?php //get_sidebar(); ?>
				</nav>
			</div>
		</div>
	</header>

	<div class="hero"></div>

	<div id="content" class="site-content">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			