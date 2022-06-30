<?php

// Template Name: Stores and Restaurants

get_header('', array('dark_menu' => true, 'no_curves' => true));

$title = get_field('title');
$sub_title = get_field('sub_title');
$products = get_field('products') ?? false;
?>

<section class="temp_intro trans-all-4">
	<div class="temp_intro_container">
		<h1 class="title"><?php echo $title; ?></h1>
		<div class="default_text">
			<p><?php echo $sub_title; ?></p>
		</div>
		<div class="mix_items">
			<ul>
				<?php if ($products) : ?>
					<?php foreach ($products as $product) : ?>
						<?php
						$product_img = $product['image']['url'];
						$stores = $product['stores'] ?? false;
						?>
						<li>
							<figure>
								<img src="<?php echo $product_img; ?>" alt="">
							</figure>
							<ul>
								<?php if ($stores) : ?>
									<?php foreach ($stores as $store) : ?>
										<li>
											<a href="https://7-eleven.se/hitta-butik/" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/images/partner-seven.png" alt="">
											</a>
										</li>
									<?php endforeach; ?>
								<?php endif; ?>
<!--								<li>-->
<!--									<a href="https://7-eleven.se/hitta-butik/" target="_blank">-->
<!--										<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/partner-seven.png" alt="">-->
<!--									</a>-->
<!--								</li>-->
<!--								<li>-->
<!--									<a href="http://www.ica.se/" target="_blank">-->
<!--										<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-ica.png" alt="">-->
<!--									</a>-->
<!--								</li>-->
<!--								<li>-->
<!--									<a href="https://www.mathem.se/varumarke/hooked" target="_blank">-->
<!--										<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-mathem.png" alt="">-->
<!--									</a>-->
<!--								</li>-->
<!--								<li>-->
<!--									<a href="https://www.citygross.se/sok?Q=hooked&page=0&store" target="_blank">-->
<!--										<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-gross.png" alt="">-->
<!--									</a>-->
<!--								</li>-->
							</ul>
						</li>
					<?php endforeach; ?>
				<?php endif; ?>
<!--				<li>-->
<!--					<figure>-->
<!--						<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/product-1.png" alt="Toonish Curry">-->
<!--					</figure>-->
<!--					<ul>-->
<!--						<li>-->
<!--							<a href="http://www.ica.se/" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-ica.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="https://www.mathem.se/varumarke/hooked" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-mathem.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="https://www.citygross.se/sok?Q=hooked&page=0&store" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-gross.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</li>-->
<!--				<li>-->
<!--					<figure>-->
<!--						<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/product-2.png" alt="Toonish Mayo">-->
<!--					</figure>-->
<!--					<ul>-->
<!--						<li>-->
<!--							<a href="http://www.ica.se/" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-ica.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</li>-->
<!--				<li>-->
<!--					<figure>-->
<!--						<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/product-5.png" alt="Toonish Tomato">-->
<!--					</figure>-->
<!--					<ul>-->
<!--						<li>-->
<!--							<a href="https://www.mathem.se/varumarke/hooked" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-mathem.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="https://www.citygross.se/sok?Q=hooked&page=0&store" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-gross.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="https://www.coop.se/handla/varor/vegetariskt/farskt/ovrig-vegetariskt/vaxtbaserad-tonfisk-7350127680016" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-coop.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</li>-->
<!--				<li>-->
<!--					<figure>-->
<!--						<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/product-4.png" alt="Toonish Tomato & Chilli">-->
<!--					</figure>-->
<!--					<ul>-->
<!--						<li>-->
<!--							<a href="https://www.mathem.se/varumarke/hooked" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-mathem.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="https://www.citygross.se/sok?Q=hooked&page=0&store" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-gross.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="https://www.coop.se/handla/varor/vegetariskt/farskt/ovrig-vegetariskt/vaxtbaserad-tonfisk-7350127680016" target="_blank">-->
<!--								<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/coming-coop.png" alt="">-->
<!--							</a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</li>-->
			</ul>
		</div>
		<div class="two_columns">
			<h3 class="widget_title">Can’t find the products in your store?</h3>
			<div class="default_text">
				<p>Talk to the staff and tell them to bring it in. All ICA, Coop and City Gross stores can stock our products with just a click, since they are available centrally. That means you can help us save more fish by talking to the staff in your store!</p>
			</div>
		</div>
	</div>
</section>

<section class="temp_original">
	<div class="temp_original_container">
		<h2 class="subtitle">Toonish Original</h2>
		<div class="default_text">
			<p>Available at restaurants</p>
		</div>
		<div class="temp_plate">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/plate.jpg" alt="">
				<div class="ribbon_wrap small">
					<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_yellow.svg" alt="" class="ribbon">
					<span>
					<big>17%</big>
					<small>protein</small>
				</span>
				</div>
			</figure>
			<div class="default_text">
				<p>Enjoy our Toonish Original in a wide range of dishes at selected restaurants. Poké bowls, wraps, sandwiches, salads or toasts. Can't find Toonish in your favourite restaurant? Tell them about us and we'll do our best to make them Hooked.</p>
			</div>
		</div>
		<div class="temp_restaurants">
			<ul>
				<li>
					<a href="https://www.chouchou.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/chouchou.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.sthlmbrunchclub.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant3.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.wearerubs.com/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant5.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.sushiyama.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant4.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://mischmasch.nu" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant6.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://7-eleven.se/hitta-butik/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/partner-seven.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.pressbyran.se/kontakt/hitta-butik/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/store1.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://kafeplattan.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant8.png" alt="">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="bob">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/images/bob-3.svg" alt="Bob">
		</figure>
		<div class="callout">
			<img src="<?php echo get_template_directory_uri(); ?>/images/callout-big.svg" alt="">
			<span>pss, ask for their "Toonish Skagen Baugette"</span>
			<ul>
				<li>
					<a href="https://7-eleven.se/hitta-butik/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/partner-seven.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.pressbyran.se/kontakt/hitta-butik/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/store1.png" alt="">
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="additional_partners">
	<div class="additional_patrtners_container">
		<h2 class="subtitle">Do you want to sell our Toonish Mixes in your store?</h2>
		<div class="partner_items trans-all-4">
			<ul>
				<li>
					<a href="http://www.ica.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/coming-ica.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.coop.se/handla/varor/vegetariskt/farskt/ovrig-vegetariskt/vaxtbaserad-tonfisk-7350127680016" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/coming-coop.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.citygross.se/sok?Q=hooked&page=0&store" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/coming-gross.png" alt="">
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="partners_columns">
	<div class="partners_column_item">
		<div class="partners_column_left">
			<h3>ICA:</h3>
			<div class="default_text">
				<p>Our Toonish Skagen, Toonish Curry and Toonish Mayo are centrally listed at ICA, so all ICA stores can purchase these products directly from the central warehouse.</p>
			</div>
		</div>
		<div class="partners_column_right">
			<h4>Article numbers at ICA:</h4>
			<ul>
				<li>Toonish Skagen: 222146</li>
				<li>Toonish Curry: 222145</li>
				<li>Toonish Mayo: 222144</li>
			</ul>
		</div>
	</div>
	<div class="partners_column_item">
		<div class="partners_column_left">
			<h3>Coop:</h3>
			<div class="default_text">
				<p>Our Toonish Tomat and Toonish Tomat & Chili are centrally listed at Coop, so all Coop stores can purchase these products directly from the central warehouse.</p>
			</div>
		</div>
		<div class="partners_column_right">
			<h4>Article numbers at Coop</h4>
			<ul>
				<li>Toonish Tomat: 11616</li>
				<li>Toonish Tomat & Chili: 11631</li>
			</ul>
		</div>
	</div>
	<div class="partners_column_item">
		<div class="partners_column_left">
			<h3>City Gross:</h3>
			<div class="default_text">
				<p>Toonish Skagen, Toonish Curry, Toonish Tomato and Toonish Tomato & Chili are centrally listed at City Gross and can thus be purchased centrally here as well.</p>
			</div>
		</div>
		<div class="partners_column_right">
			<h4>Article numbers at Bergendahls </h4>
			<ul>
				<li>Toonish Skagen: 680016</li>
				<li>Toonish Curry: 680023</li>
				<li>Toonish Tomat: 680030</li>
				<li>Toonish Tomat & Chili: 680047</li>
			</ul>
		</div>
	</div>
</section>

<section class="gallery_slides skin">
	<div class="slider_wrapper">
		<div class="gallery_slider swiper-container magnific">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="<?php echo get_template_directory_uri(); ?>/images/gal1.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/gal1.jpg" alt="">
					</a>
				</div>
				<div class="swiper-slide">
					<a href="<?php echo get_template_directory_uri(); ?>/images/gal2.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/gal2.jpg" alt="">
					</a>
				</div>
				<div class="swiper-slide">
					<a href="<?php echo get_template_directory_uri(); ?>/images/gal3.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/images/gal3.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<h2 class="subtitle">Do you want to offer Toonish Original in your restaurant?</h2>
	<div class="gallery_slides_bot">
		<a href="<?php site_url(); ?>/contact-us" class="round_button dark" title="Contact us">
			<strong>Contact us</strong>
			<span class="circle_small"></span>
			<span class="circle_big"></span>
		</a>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/curves8.svg" alt="" class="curves_bot">
</section>

<?php get_footer('', array('yellow_background' => true)); ?>
