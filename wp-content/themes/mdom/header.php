<?php
?><!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
</head>
<body <?php body_class(); ?>>
		<header>
			<div class="container">
				<div class="d-flex aligncenter sb">
					<?php if(is_front_page()) { ?>
						<div class="home-link d-flex aligncenter">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo1.svg" alt="" />
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo11.svg" alt="" />
								<span><?php _e('Real Estate Experts in GOLDEN VISA e PROPERTY IN PORTUGAL','mdom'); ?></span>
							</div>
						</div>
					<?php } else { ?>
						<a class="home-link d-flex aligncenter" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo1.svg" alt="" />
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo11.svg" alt="" />
								<span><?php _e('Real Estate Experts in GOLDEN VISA e PROPERTY IN PORTUGAL','mdom'); ?></span>
							</div>
						</a>
					<?php } ?>
					<div>
						<div class="top">
							<ul class="lang"><?php pll_the_languages(array( 'show_flags' => 0,'show_names' => 1 )); ?></ul>
							<div class="open-menu">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container'=>'nav','menu_id' => 'primary-menu' ) ); ?>
					</div>
				</div>
			</div>
		</header>
		<main>
