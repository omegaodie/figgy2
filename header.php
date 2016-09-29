<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title('|', true, 'left'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php if ( get_theme_mod( 'simplyread_favicon' ) ) : ?>
		<link rel="icon" href="<?php echo esc_url( get_theme_mod( 'simplyread_favicon' ) ); ?>">
		<?php endif; ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
        <script type="text/javascript">
            jQuery("#slideshow > div:gt(0)").hide();

            setInterval(function() { 
              jQuery('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
            },  3000);
        </script>
	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header id="header-section">
				<div class="top-area">
					<div id="inner-header" class="wrap cf">
                <div class="social-icons">
		            <?php echo simplyread_social_icons(); ?>
                </div> <!-- social-icons-->
                <div class="search-bar">
                    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					    <label>
					        <input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:" />
					    </label>
    					<input type="submit" class="search-submit" value="Search" />
					</form>
                </div> <!--search -->
                <div class="clear"></div>
            </div> <!-- inner-header -->
            </div> <!-- top-area -->
				<div id="inner-header" class="wrap cf">
						<?php if ( get_theme_mod( 'simplyread_logo' ) ) : ?>
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo esc_url( get_theme_mod( 'simplyread_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></p>
					 <?php else : ?>
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					<?php endif; ?>
					<nav role="navigation" id="main-navigation">
       					 	
					</nav>
				</div>

			</header>
