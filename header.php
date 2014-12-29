<?php/** 	The template for displaying Header.** 	@package ThemeIsle*/?><!DOCTYPE html><html <?php language_attributes(); ?>><head>	<meta charset="<?php bloginfo( 'charset' ); ?>"/>	<meta name="viewport" content="width=device-width, initial-scale=1.0">	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'title' ); ?>">	<meta name="description" content="<?php bloginfo( 'description' ); ?>">	<title><?php wp_title( '|', true, 'right' ); ?></title>	<?php wp_head(); ?></head><body <?php body_class(); ?>><?php$header_image = get_header_image();if ( ! empty( $header_image )) {?><header style="background-image: url('<?php header_image(); ?>'); "><?php } else { ?><header class="header-responsive"	style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/header.png');"><?php}?><div class="layer"><div class="inner"><div class="header-top cf">			<?php		if ( get_theme_mod( 'ti_header_logo', get_template_directory_uri()."/images/logo.png" ) ) {			?>			<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'title' ); ?>" id="logo">				<img src="<?php echo get_theme_mod( 'ti_header_logo', get_template_directory_uri()."/images/logo.png" ); ?>" alt="<?php bloginfo( 'title' ); ?>"			     title="<?php bloginfo( 'title' ); ?>"/>			</a>	 		<?php } else {				echo '<div id="no-logo">';					echo '<h1 class="site-title">';						echo '<a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a>';					echo '</h1>';					echo '<h2 class="site-description">'.get_bloginfo( 'description' ).'</h2>';				echo '</div>';		}		?>	<p class="call-for-action">		<?php			?>			<?php			if ( get_theme_mod( 'ti_header_contact_title','Contact us now: ' ) ) {				echo get_theme_mod( 'ti_header_contact_title','Contact us now: ' );			}			?>			<span>						<?php						if ( get_theme_mod( 'ti_header_contact_telephone','(+4) 0746.000.111' ) ) {							echo '<a href="tel:' . get_theme_mod( 'ti_header_contact_telephone','(+4) 0746.000.111' ) . '" title="' . get_theme_mod( 'ti_header_contact_telephone','(+4) 0746.000.111' ) . '">' . get_theme_mod( 'ti_header_contact_telephone','(+4) 0746.000.111' ) . '</a>';						}						?>					</span>	</p><!--/.call-for-action--></div><!--/header-top--><nav>	<div class="navigation-menu">		<div class="openresponsivemenu">			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32"			     height="32" viewBox="0 0 32 32">				<path					d="M0 12h22v4h-22v-4zM0 6h22v4h-22v-4zM0 18h22v4h-22v-4zM0 24h22v4h-22v-4zM24 18l4 6 4-6h-8zM32 16l-4-6-4 6h8z"></path>			</svg>		</div>		<!--/.openresponsivemenu-->		<div class="nav-container">			<?php			wp_nav_menu(				array(					'theme_location' => 'top-menu',				)			);			?>		</div>	</div>	<!--/.navigation-menu-->	<ul class="navigation-socials">			<li>				<a href="<?php echo get_theme_mod( 'ti_header_facebook_link' ); ?>" title="Facebook"				   class="facebook-icon" target="_blank">				</a><!--/.facebook-icon-->			</li>			<li>				<a href="<?php echo get_theme_mod( 'ti_header_twitter_link' ); ?>" title="Twitter" class="twitter-icon"				   target="_blank">				</a><!--/.twitter-icon-->			</li>			<li>				<a href="<?php echo get_theme_mod( 'ti_header_youtube_link' ); ?>" title="YouTube" class="youtube-icon"				   target="_blank">				</a><!--/.youtube-icon-->			</li>	</ul>	<!--/.navigation-socials--></nav><!--/nav--></div></div><!--/layer--></header>