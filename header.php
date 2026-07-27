<!-- edited -->

<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="user-scalable=1, width=device-width, initial-scale=1.0, maximum-scale=2.0">
<meta name="referrer" content="origin">

<meta id="MetaKeywords" name="KEYWORDS" content="podcasting,podcasts,podcast standards project,podcast standards">

<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=IBM+Plex+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Inter:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">



<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<h1>Podcast Standards Project</h1>
			<a href="/"><img src="https://podstandards.org/wp-content/uploads/2023/06/PSP-fulllogo-black-orange.svg"></a>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
</nav>
	<div class="dark">
		<section>
			<h1><?php if ( is_front_page() ) :
				bloginfo( 'description' );
			else :
				wp_title('');
			endif; ?></h1>
		</section>
	</div>
</header>
<div id="container">
<main id="content" role="main">