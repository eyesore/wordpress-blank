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

<script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script type="text/javascript">
	jQuery(document).ready( function() {
		jQuery('.slider').slick({ dots: false, arrows: false,
			responsive: [{ breakpoint: 768, settings: { arrows: false, centerMode: true, centerPadding: '0', slidesToShow: 1 } }, { breakpoint: 480, settings: { arrows: false, centerMode: true, centerPadding: '0', slidesToShow: 1 } }] });
		// jQuery('a[href^="http://"], a[href^="https://"], a[href^="//"]').not('a[href*="insertclientdomainhere.com/"]').attr('target','_blank');
	});
</script>

</head>

<body <?php body_class(); ?>>	
	<header>
		<div class="wrapper">
			<div class="top-logo">
				<a href="<?php site_url(); ?>/">
					<?php $yourlogo = get_theme_mod( 'your_theme_logo' ); $logoalt = get_bloginfo( 'name', 'display' ); 
					if ( $yourlogo ) : echo '<img src="'.$yourlogo.'" alt="'.esc_attr($logoalt).'" >';
					else : echo '<img src="'.get_template_directory_uri().'/images/ryan-montgomery-attorney.png" alt="Ryan Montgomery Attorney at Law, Columbia South Carolina">'; endif; ?>
				</a>
			</div>
			<div class="right-section">
				<div class="top-phone">
					<?php $yourPhone = get_theme_mod( 'phone_number' ); ?>
					<a href="tel:<?php echo $yourPhone; ?>"><?php echo $yourPhone; ?></a></div>
			</div> 		
		</div>		
		<div class="clear"></div>
	</header>