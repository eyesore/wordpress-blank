<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /> <?php } ?>
<title><?php wp_title('|',true,'right'); ?></title>

<link rel=author href=<?php echo get_template_directory_uri(); ?>/humans.txt>
<link rel="shortcut icon" href=<?php echo get_template_directory_uri(); ?>/icon.png>
<link rel=apple-touch-icon-precomposed href=<?php echo get_template_directory_uri(); ?>/icon.png />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>	
	<header>
		<div class="wrapper">
			<div class="top-logo">
				<a href="<?php site_url(); ?>/">
					<?php echo eye_get_theme_logo(); ?>
				</a>
			</div>
			<div class="right-section">
				<div class="top-phone">
					<?php echo eye_get_phone_link(); ?>
				</div>
			</div> 		
		</div>		
		<div class="clear"></div>
	</header>