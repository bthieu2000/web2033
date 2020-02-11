<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thembyuos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/multi-slide.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'thembyuos' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$thembyuos_description = get_bloginfo( 'description', 'display' );
			if ( $thembyuos_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $thembyuos_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>.site-branding -->
		<div class="container">
			<div class="d-flex justify-content-between">
			  <div class="p-2 bd-highlight">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/small-facebook-icon-image-20.png" width="30rem"></a>
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/e106ce9c0551cf84c74882fd07aa4796.png" width="30rem"></a>
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/461-4618525_ig-small-instagram-logo-2019-hd-png-download.png" width="30rem"></a>
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/368568.png" width="30rem"></a>
			  </div>
			  <div class="p-2 bd-highlight">
			  </div>
			  <div class="p-2 bd-highlight">
			  	<img src="<?php bloginfo('template_directory'); ?>/img/mail-icons-free-and-small-mail-icon-white-11563266542oea3uz6rp1.png" width="15rem">
				<a href="#" class="text-muted h6 mr-3">sondbhb422000@gmail.com</a>
				<img src="<?php bloginfo('template_directory'); ?>/img/clock.png" width="15rem">
				<a href="#" class="text-muted h6">9:00 AM - 18:00 PM</a>
			  </div>
			</div>
		</div>
		<div class="container-fluid border-top">
				<div class="container">
					<div class="d-flex justify-content-between">
						<div class="p-2 bd-highlight">
							<h1 class="p-md-1 p-sm-1 p-4"><a href="#" style="display: block;color: black;">MODUS</a></h1>
						</div>
						<div class="p-2 bd-highlight"></div>
						<div class="p-2 bd-highlight">
							<nav class="navbar navbar-expand-sm navbar-light mr-auto">
								<button class="navbar-toggler mt-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<?php
										wp_nav_menu( array(
											'menu_class' => 'navbar-nav p-4 p-md-1 p-sm-1',
											'container' => '',
											'menu_id' => '',
											'container_class' => '',
										) );
									?>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<section class="searching">
					<div class="container">
					  	<form class="form-inline">
						    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" width="100rem">
						    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
							<select class="custom-select ml-2">
								<option selected>All categories</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
							<div class="pl-4">
								<img src="<?php bloginfo('template_directory'); ?>/img/49775.png" width="50rem">
								<p class="h6"><strong>SUPPORT 24/7</strong></p>
						     	<label>Hotline:+08 888 888</label>
							</div>
					  	</form>
					</div>
				</section>
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
