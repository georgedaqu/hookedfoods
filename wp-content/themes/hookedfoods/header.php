<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scripts/swiper/swiper.css">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/swiper/swiper.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/gsap/gsap.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/gsap/scrollmagic.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/gsap/animation.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">
	<meta name=“google-site-verification” content=“us2MNPyz4sRipf96XXUPiTzmfnbtVrxoS-4EzpJfVTk” />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-K8GFFMGC6T"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-K8GFFMGC6T');
	</script> -->
	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="509015b3-2a4b-4833-9878-b4c43c2f1dae" data-blockingmode="auto" type="text/javascript"></script>

	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M95V327');</script>

	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/78019a63220749d0023d31607/46fc6f224a74c93b762f01298.js");</script>



</head>
<body>

<div class="logo">
	<a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo(); ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php echo get_bloginfo(); ?>">
	</a>
</div>

<div class="resp_menu_toggle">
	<div></div>
	<div></div>
	<div></div>
</div>

<div class="resp_menu_wrap">
	<div class="resp_menu_body">
		<div class="container_wrap">
			<?php
				wp_nav_menu([
					'theme_location'	=> 'hamburger_menu',
					'menu'				=> 'hamburger_menu',
					'container'			=> 'nav',
					'container_class'	=> '',
					'menu_class'		=> ''
				]);
			?>
			<div class="contact_drop_wrap" id="drop_item">
				<ul class="contact_drop">
					<li>
						<a href="mailto:example@gmail.com" title="E-mail">
							<span>E-mail:</span>
							<span>hello@hookedfoods.com</span>
						</a>
					</li>
					<li>
						<a href="tel:+995555555" title="Phone">
							<span>Phone:</span>
							<span>+46735412814</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="ribbon_wrap">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_cyan.svg" alt="" class="ribbon">
			<img src="<?php echo get_template_directory_uri(); ?>/images/fish_lover.svg" alt="" class="graphic">
		</div>
	</div>
</div>

<header <?php if($args['dark_menu']): ?>class="dark_menu"<?php endif; ?>>
	<div class="header_left">
		<?php if($args['no_curves']): ?>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/hero_top_left.svg" alt="" class="corner no-select">
		<?php endif; ?>
	</div>
	<?php
		wp_nav_menu([
			'theme_location'	=> 'header_menu',
			'menu'				=> 'header_menu',
			'container'			=> 'nav',
			'container_class'	=> '',
			'menu_class'		=> ''
		]);
	?>
	<div class="header_right">
		<?php if($args['no_curves']): ?>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/hero_top_right.svg" alt="" class="corner no-select">
		<?php endif; ?>
	</div>
</header>

<script>
	$(document).ready(function() {
		$("#menu-item-29").mouseenter(function() {
			$("#drop_item").slideDown();
		});
		$("#menu-item-29").mouseleave(function() {
			$("#drop_item").slideUp();
		});
	});
</script>