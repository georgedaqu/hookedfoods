<footer <?php if(isset($args['yellow_background'])): ?>class="yellow_background"<?php endif; ?>>
	<div class="footer_container">
		<div class="footer_top">
			<div class="footer_subscribe trans-all-4">
				<h3 class="footer_title">Subscribe to newsletter</h3>
				<?php echo do_shortcode('[mc4wp_form id="46"]'); ?>
				<div class="eit">
					<img src="<?php echo get_template_directory_uri(); ?>/images/eit.png" alt="">
					<div class="desc">Hooked is supported by EIT Food, supported by the European Institute of Innovation and Technology (EIT)</div>
				</div>
			</div>
			<div class="footer_instagram">
				<h3 class="footer_title">Our Instagram</h3>
				<div class="insta_items">
					<?php echo do_shortcode('[instagram-feed]'); ?>
				</div>
			</div>
		</div>
		<div class="footer_bot">
			<?php
				wp_nav_menu([
					'theme_location'	=> 'hamburger_menu',
					'menu'				=> 'hamburger_menu',
					'container'			=> 'nav',
					'container_class'	=> 'footer_menu',
					'menu_class'		=> ''
				]);
			?>
			<div class="footer_about">
				<h3 class="footer_title">About Hooked Foods</h3>
				<div class="footer_about_desc">
					<p>Hooked is an impact startup developing plant-based seafood to lead the transition to a healthier seafood ecosystem.</p>
				</div>
			</div>
		</div>
		<div class="no_fishy_business">
			<img src="<?php echo get_template_directory_uri(); ?>/images/no_fishy_business.png" alt="No Fishy Business">
		</div>
	</div>
</footer>

<script>
	if($(window).width() <= 768){
		var gallery_slider = new Swiper('.gallery_slider', {
			speed: 1000,
			loop: false,
			freeMode: false,
			slidesPerView: 1.5
		});
	}
	var product_gallery_slider = new Swiper('.product_gallery_slider', {
		speed: 1000,
		loop: true,
		freeMode: false,
		slidesPerView: 1,
		navigation: {
			nextEl: '.product_gallery_slider_next',
			prevEl: '.product_gallery_slider_prev',
		},
	});
	var more_recipes_slider = new Swiper('.more_recipes_slider', {
		speed: 1000,
		loop: true,
		freeMode: false,
		spaceBetween: 30,
		slidesPerView: 1,
		navigation: {
			nextEl: '.more_recipes_slider_next',
			prevEl: '.more_recipes_slider_prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
			1024: {
				slidesPerView: 3,
			}
		}
	});
</script>

<?php wp_footer(); ?>

</body>
</html>