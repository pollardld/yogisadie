<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/../twentyfourteen-child/img/favicon.ico"/>

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900|Rosarivo' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<main>
	
		<header>

			<nav class="site-nav" role="site">
				<div class="logo">
					<a href="/">
						<?php include( get_stylesheet_directory() . '/img/logo.svg' ); ?>
					</a>
				</div>

				<input type="checkbox" name="nav-check" class="nav-check" />
				
				<label for="nav-check" class="nav-label">|||</label>
				
				<div class="mainnav">

					<?php 
						wp_nav_menu( 
							array( 
								'theme_location' => 'primary', 
								'container' => 'none', 
								'menu_class' => 'nav-list'
						)); 
					?>

					<nav class="social" role="social">
						
						<div>
							<a href="https://twitter.com/yogisadie" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false" data-lang="en">Follow</a>
						</div>
						
						<div class="fb-like" data-href="https://www.facebook.com/yogisadie?fref=ts" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>		
					
					</nav>

				</div>

			</nav>

		</header>
	</main>

	<hr class="light">
	<hr class="dark">

	<main>
