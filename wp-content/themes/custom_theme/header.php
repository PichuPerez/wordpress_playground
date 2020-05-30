<!DOCTYPE html>

<head <?php language_attributes() ?> >
<meta name="viewport" content="width=device-width, intial-scale=1" />
<meta charsert="<?php bloginfo( 'charset' )?>" />
<?php  wp_head(); ?>
</head>
<body <?php body_class()?> >
<header id="header">
				<div class="inner">
					<a href="<?php echo site_url()?>" class="logo">introspect</a>
					<nav id="nav">
						<a href="<?php echo site_url()?>">Home</a>
						<a href="<?php echo site_url('/about')?>">About</a>
						<a href="<?php echo site_url('/blog')?>">Blog</a>
						<a href="<?php echo site_url('/privacy-policy')?>">Privacy Policy</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

