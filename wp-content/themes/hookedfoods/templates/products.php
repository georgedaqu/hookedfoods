<?php

// Template Name: Products

get_header('', array('dark_menu' => true, 'no_curves' => true)); ?>

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

<section class="products_intro">
	<div class="products_intro_container">
		<h1 class="title">It's not fish but fish..ish</h1>
		<div class="products_listing">
			<article class="single trans-all-4">
				<figure>
					<a href="#toonish_original">
						<img src="<?php echo get_template_directory_uri(); ?>/images/toonish.png" alt="">
					</a>
					<figcaption>Toonish</figcaption>
				</figure>
				<div class="default_text">
					<p>Available in restaurants</p>
				</div>
			</article>
			<article>
				<div class="products_items trans-all-4">
					<figure>
						<a href="#mayo">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product-2.png" alt="Toonish Mayo">
						</a>
					</figure>
					<figure>
						<a href="#curry">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product-1.png" alt="Toonish Curry">
						</a>
					</figure>
					<figure>
						<a href="#skagen">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product-3.png" alt="Toonish Skagen">
						</a>
					</figure>
					<figure>
						<a href="#tomato">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product-5.png" alt="Toonish Tomato">
						</a>
					</figure>
					<figure>
						<a href="#chilli">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product-4.png" alt="Toonish Tomato & Chilli">
						</a>
					</figure>
				</div>
				<div class="figcaption">Toonish mixes</div>
				<div class="default_text">
					<p>Available in 200+ stores</p>
				</div>
			</article>
		</div>
	</div>
	<div class="bob">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/images/bob-2.svg" alt="Bob">
		</figure>
		<div class="callout">
			<img src="<?php echo get_template_directory_uri(); ?>/images/bob-callout.svg" alt="">
			<span>Not the prettiest packaging you've seen for sure, but trust me, what's inside is absolutely spectacular</span>
		</div>
	</div>
</section>

<section class="product_gallery" id="toonish_original">
	<div class="product_gallery_container">
		<div class="product_gallery_slider swiper-container">
			<div class="swiper-wrapper magnific">
				<div class="swiper-slide">
					<figure>
						<a href="<?php echo get_template_directory_uri(); ?>/images/product_gallery1.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product_gallery1.jpg" alt="">
						</a>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="<?php echo get_template_directory_uri(); ?>/images/product_gallery2.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product_gallery2.jpg" alt="">
						</a>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="<?php echo get_template_directory_uri(); ?>/images/product_gallery3.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product_gallery3.jpg" alt="">
						</a>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="<?php echo get_template_directory_uri(); ?>/images/product_gallery4.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product_gallery4.jpg" alt="">
						</a>
					</figure>
				</div>
			</div>
			<a href="javascript:void(0);" class="product_gallery_slider_nav product_gallery_slider_prev" title="Previous">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow.svg" alt="">
			</a>
			<a href="javascript:void(0);" class="product_gallery_slider_nav product_gallery_slider_next" title="Next">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow.svg" alt="">
			</a>
		</div>
		<div class="product_gallery_right">
			<h3 class="widget_title">Toonish Original</h3>
			<div class="default_text">
				<p>Hooked Toonish is a vegan substitute for tuna.  Did we mention it is super delicious too? There are many creative ways to eat Toonish - in bowls, sushi, pastas, wraps, sandwiches, salads, tacos, pizzas - you name it.</p>
				<p>Try some Toonish in your meal next time and sea what happens!</p>
			</div>
			<div class="product_features">
				<ul>
					<li>Made of sustainable soy beans, sun flower oil and algae</li>
					<li>Only natural ingredients</li>
					<li>No fishy business</li>
				</ul>
			</div>
			<div class="find_store">
				<a href="<?php site_url(); ?>/stores-restaurants" title="Find the closest store">
					<span>
						<img src="<?php echo get_template_directory_uri(); ?>/images/marker.svg" alt="">
					</span>
					<strong>Find the closest store</strong>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="ingredients toonish ings">
	<div class="ingredients_container">
		<div class="toggle_trigger <?php if(strpos($url, 'toonish') !== false){echo "toggled";}?>">
			<a href="javasript:void(0);" title="Ingredients and Nutrients">
				<strong>Ingredients and Nutrients</strong>
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/toggle_arrow3.svg" alt="">
				</span>
			</a>
		</div>
		<div class="toggle_container <?php if(strpos($url, 'toonish') !== false){echo "toggled";}?>">
			<div class="toggle_body">
				<div class="toggle_left">
					<h3 class="widget_title">Ingredients</h3>
					<div class="default_text">
						<p>Water, wheat protein, soy protein, sunflower oil, wheat flour, vinegar, natural starch, apple & yeast extract, natural flavoring, salt, algae, beet root powder, paprika extract.</p>
					</div>
					<h3 class="widget_title">Nutritional Values</h3>
					<table>
						<tr>
							<th>Nutritional values per 100g</th>
							<th>&nbsp;</th>
						</tr>
						<tr>
							<td>Energy</td>
							<td>700 kJ/167 kcal</td>
						</tr>
						<tr>
							<td>Fat</td>
							<td>7.6 g</td>
						</tr>
						<tr>
							<td>Of which saturates</td>
							<td>0.9 g</td>
						</tr>
						<tr>
							<td>Carbohydrate</td>
							<td>6.6 g</td>
						</tr>
						<tr>
							<td>Sugars</td>
							<td>0.1 g</td>
						</tr>
						<tr>
							<td>Fibre</td>
							<td>1.3</td>
						</tr>
						<tr>
							<td>Protein</td>
							<td>17.2 g</td>
						</tr>
						<tr>
							<td>Salt</td>
							<td>1.1 g</td>
						</tr>
					</table>
				</div>
				<div class="toggle_right">
					<div class="toggle_right_columns">
						<div class="ribbon_wrap small">
							<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_yellow.svg" alt="" class="ribbon">
							<span>
								<big>17%</big>
								<small>protein</small>
							</span>
						</div>
						<figure class="strong">
							<img src="<?php echo get_template_directory_uri(); ?>/images/strong.svg" alt="">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product_item purple skagen" id="skagen">
	<div class="product_item_container">
		<h2 class="subtitle">Toonish Mixes</h2>
		<h3 class="widget_title">Toonish Skagen</h3>
		<div class="product_item_columns">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/product-3.png" alt="">
			</figure>
			<div class="default_text">
				<p>Toonish Skagen is a ready-to-eat Swedish classic that goes perfect on a toast, baked potato, in a wrap or to any of your favorite festive foods. A no fishy mix for both the festive and everyday occasions. Finally a plant-based Skagen to the Swedish Midsummer, Christmas and Easter tables!</p>
			</div>
		</div>
		<div class="toggle_trigger">
			<a href="javasript:void(0);" title="Ingredients and Nutrients">
				<strong>Ingredients and Nutrients</strong>
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/toggle_arrow3.svg" alt="">
				</span>
			</a>
		</div>
		<div class="toggle_container">
			<div class="toggle_body">
				<div class="toggle_left">
					<h3 class="widget_title">Nutritional Values</h3>
					<table>
						<tr>
							<th>Nutritional values per 100g</th>
							<th>&nbsp;</th>
						</tr>
						<tr>
							<td>Energy</td>
							<td>1121 kJ/268 kcal</td>
						</tr>
						<tr>
							<td>Fat</td>
							<td>23.9 g</td>
						</tr>
						<tr>
							<td>Of which saturates</td>
							<td>1.24 g</td>
						</tr>
						<tr>
							<td>Carbohydrate</td>
							<td>4.83 g</td>
						</tr>
						<tr>
							<td>Of which sugars</td>
							<td>0.85 g</td>
						</tr>
						<tr>
							<td>Protein</td>
							<td>8.69 g</td>
						</tr>
						<tr>
							<td>Salt</td>
							<td>1.53 g</td>
						</tr>
					</table>
				</div>
				<div class="toggle_right">
					<h3 class="widget_title">Ingredients</h3>
					<div class="default_text">
						<p>Toonish 40% (water, vegetable protein (wheat, soy), sunflower oil, starch (wheat, potatoes) vinegar, natural aroma), salt, algae, apple extract, beetroot powder, pepper extract), vegan mayonnaise (rapeseed oil, water, wine vinegar, sugar, salt, stabilisers (E415, E1450), preservatives (E202), spices), seaweed caviar (seaweed caviar extract, water, salt, spices (cayenne, pepper, turmeric, bay leaf, leek), aromas (dill, dragon), acidity regulators (E211, E202), colouring (E160C, E160a)), red onion, dill, concentrated lemon juice, salt, black pepper, preservatives (E202, E211).</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product_item yellower curry" id="curry">
	<div class="product_item_container">
		<h3 class="widget_title">Toonish Curry</h3>
		<div class="product_item_columns">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/product-1.png" alt="">
			</figure>
			<div class="default_text">
				<p>Toonish Curry is a ready-to-eat mix that goes perfect on a toast, in a wrap, baguette, salad or baked potato. Our Toonish mixed with curry, herbs, spices and paprika makes this one a true must-have in the fridge!</p>
			</div>
		</div>
		<div class="toggle_trigger">
			<a href="javasript:void(0);" title="Ingredients and Nutrients">
				<strong>Ingredients and Nutrients</strong>
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/toggle_arrow3.svg" alt="">
				</span>
			</a>
		</div>
		<div class="toggle_container">
			<div class="toggle_body">
				<div class="toggle_left">
					<h3 class="widget_title">Nutritional Values</h3>
					<table>
						<tr>
							<th>Nutritional values per 100g</th>
							<th>&nbsp;</th>
						</tr>
						<tr>
							<td>Energy</td>
							<td>1335 kJ/319 kcal</td>
						</tr>
						<tr>
							<td>Fat</td>
							<td>29.5 g</td>
						</tr>
						<tr>
							<td>Of which saturates</td>
							<td>1.44 g</td>
						</tr>
						<tr>
							<td>Carbohydrate</td>
							<td>6.28 g</td>
						</tr>
						<tr>
							<td>Of which sugars</td>
							<td>0.94 g</td>
						</tr>
						<tr>
							<td>Protein</td>
							<td>7.82 g</td>
						</tr>
						<tr>
							<td>Salt</td>
							<td>1.21 g</td>
						</tr>
					</table>
				</div>
				<div class="toggle_right">
					<h3 class="widget_title">Ingredients</h3>
					<div class="default_text">
						<p>Toonish 40% (water, vegetable protein (wheat, soy), sunflower oil, starch (wheat, potatoes) vinegar, natural aroma), salt, algae, apple extract, beetroot powder, pepper extract), vegan mayonnaise (rapeseed oil, water, wine vinegar, sugar, salt, stabilisers (E415, E1450), preservatives (E202), spices), red pepper, leek, parsley, apple, concentrated lemon juice, curry 1,3% (turmeric, coriander, fennel, cumin, black pepper, fenugreek seeds, cayenne pepper), salt, black pepper, preservatives (E202, E211).</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product_item beige mayo" id="mayo">
	<div class="product_item_container">
		<h3 class="widget_title">Toonish Mayo</h3>
		<div class="product_item_columns">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/product-2.png" alt="">
			</figure>
			<div class="default_text">
				<p>Toonish Mayo is a simple mix with just Toonish and plant-based mayo! If you’re in the mood to create your own plant-based tuna mix - then this one is your go-to. Just add your favorite ingredients and spices and you’re all set. It’s almost like Toonish Original, which makes it ideal to use like regular tuna: in your pasta, salad or tuna melt. Or enjoy just as it is, from the jar!</p>
			</div>
		</div>
		<div class="toggle_trigger">
			<a href="javasript:void(0);" title="Ingredients and Nutrients">
				<strong>Ingredients and Nutrients</strong>
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/toggle_arrow3.svg" alt="">
				</span>
			</a>
		</div>
		<div class="toggle_container">
			<div class="toggle_body">
				<div class="toggle_left">
					<h3 class="widget_title">Nutritional Values</h3>
					<table>
						<tr>
							<th>Nutritional values per 100g</th>
							<th>&nbsp;</th>
						</tr>
						<tr>
							<td>Energy</td>
							<td>1330 kJ/317 kcal</td>
						</tr>
						<tr>
							<td>Fat</td>
							<td>28.6 g</td>
						</tr>
						<tr>
							<td>Of which saturates</td>
							<td>1.5 g</td>
						</tr>
						<tr>
							<td>Carbohydrate</td>
							<td>4.96 g</td>
						</tr>
						<tr>
							<td>Of which sugars</td>
							<td>0.7 g</td>
						</tr>
						<tr>
							<td>Protein</td>
							<td>10.7 g</td>
						</tr>
						<tr>
							<td>Salt</td>
							<td>1.14 g</td>
						</tr>
					</table>
				</div>
				<div class="toggle_right">
					<h3 class="widget_title">Ingredients</h3>
					<div class="default_text">
						<p>Toonish 40% (water, vegetable protein (wheat, soy), sunflower oil, starch (wheat, potatoes) vinegar, natural aroma), salt, algae, apple extract, beetroot powder, pepper extract), vegan mayonnaise (rapeseed oil, water, wine vinegar, sugar, salt, stabilisers (E415, E1450), preservatives (E202), spices), preservatives (E202, E211).</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product_item pink chilli" id="chilli">
	<div class="product_item_container">
		<h3 class="widget_title">Toonish Tomato & Chilli</h3>
		<div class="product_item_columns">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/product-4.png" alt="">
			</figure>
			<div class="default_text">
				<p>Toonish Tomato & Chili is a ready-to-eat tomato mix with a hint of spiciness that goes perfect on your pasta, pizza, wraps or spicy tuna melts. Garlic, herbs, chili and spices makes it delicious to eat straight from the jar too. Enjoy cold or warm!</p>
			</div>
		</div>
		<div class="toggle_trigger">
			<a href="javasript:void(0);" title="Ingredients and Nutrients">
				<strong>Ingredients and Nutrients</strong>
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/toggle_arrow3.svg" alt="">
				</span>
			</a>
		</div>
		<div class="toggle_container">
			<div class="toggle_body">
				<div class="toggle_left">
					<h3 class="widget_title">Nutritional Values</h3>
					<table>
						<tr>
							<th>Nutritional values per 100g</th>
							<th>&nbsp;</th>
						</tr>
						<tr>
							<td>Energy</td>
							<td>463 kJ/111 kcal</td>
						</tr>
						<tr>
							<td>Fat</td>
							<td>5.73 g</td>
						</tr>
						<tr>
							<td>Of which saturates</td>
							<td>0.52 g</td>
						</tr>
						<tr>
							<td>Carbohydrate</td>
							<td>7.42 g</td>
						</tr>
						<tr>
							<td>Of which sugars</td>
							<td>2.29 g</td>
						</tr>
						<tr>
							<td>Protein</td>
							<td>6.65 g</td>
						</tr>
						<tr>
							<td>Salt</td>
							<td>1.17 g</td>
						</tr>
					</table>
				</div>
				<div class="toggle_right">
					<h3 class="widget_title">Ingredients</h3>
					<div class="default_text">
						<p>Crushed tomatoes, toonish 37% (water, vegetable protein (wheat, soy), sunflower oil, starch (wheat, potatoes) vinegar, natural aroma), salt, algae, apple extract, beetroot powder, pepper extract), onion, garlic, rapeseed oil, chives, tomato purée, sriracha sauce (red chili, vinegar, sugar, tomato purée, natural flavouring, garlic oil, thickeners (E415), preservatives (E211, E202)), salt, sugar, water, modified potato starch, preservatives, (E202, E211), onion powder, basil, oregano.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product_item skin tomato" id="tomato">
	<div class="product_item_container">
		<h3 class="widget_title">Toonish Tomato</h3>
		<div class="product_item_columns">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/product-5.png" alt="">
			</figure>
			<div class="default_text">
				<p>Toonish Tomato is a ready-to-eat mix that goes perfect in pasta, on pizza, in wraps or tuna melts. Toonish combined with tomato, garlic, herbs and spices makes this one an easy addition to your simple home cooking! Enjoy it cold or warm.</p>
			</div>
		</div>
		<div class="toggle_trigger">
			<a href="javasript:void(0);" title="Ingredients and Nutrients">
				<strong>Ingredients and Nutrients</strong>
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/toggle_arrow3.svg" alt="">
				</span>
			</a>
		</div>
		<div class="toggle_container">
			<div class="toggle_body">
				<div class="toggle_left">
					<h3 class="widget_title">Nutritional Values</h3>
					<table>
						<tr>
							<th>Nutritional values per 100g</th>
							<th>&nbsp;</th>
						</tr>
						<tr>
							<td>Energy</td>
							<td>469 kJ/112 kcal</td>
						</tr>
						<tr>
							<td>Fat</td>
							<td>6.31 g</td>
						</tr>
						<tr>
							<td>Of which saturates</td>
							<td>0.57 g</td>
						</tr>
						<tr>
							<td>Carbohydrate</td>
							<td>6.38 g</td>
						</tr>
						<tr>
							<td>Of which sugars</td>
							<td>2.07 g</td>
						</tr>
						<tr>
							<td>Protein</td>
							<td>6.79 g</td>
						</tr>
						<tr>
							<td>Salt</td>
							<td>1.3 g</td>
						</tr>
					</table>
				</div>
				<div class="toggle_right">
					<h3 class="widget_title">Ingredients</h3>
					<div class="default_text">
						<p>Crushed tomatoes, toonish 37% (water, vegetable protein (wheat, soy), sunflower oil, starch (wheat, potatoes) vinegar, natural aroma), salt, algae, apple extract, beetroot powder, pepper extract), onion, rapeseed oil, tomato purée, garlic, salt, sugar, water, modified potato starch, preservatives, (E202, E211), onion powder, basil, oregano.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php the_content() ?>
<!-- <section class="products_intro">
	<div class="products_intro_container">
		<h1 class="title">It's not fish but fish..ish</h1>
		<div class="products_listing">
			<article>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/toonish.png" alt="">
					<figcaption>Toonish</figcaption>
				</figure>
				<div class="default_text">
					<p>Available in restaurants and selected Ica & Hemköp deli counters</p>
				</div>
			</article>
			<article>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/product2.png" alt="">
					<figcaption>Toonish Tomat</figcaption>
				</figure>
				<div class="default_text">
					<p>Available in 200 stores</p>
				</div>
			</article>
		</div>
	</div>
	<div class="bob">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/images/bob.png" alt="Bob">
		</figure>
		<div class="callout">
			<img src="<?php echo get_template_directory_uri(); ?>/images/callout.svg" alt="">
			<span>Not the prettiest packaging you've seen for sure, but trust me, what's inside is absolutely spectacular</span>
		</div>
	</div>
</section>

<section class="toonish_tomat">
	<div class="toonish_tomat_container">
		<div class="toonish_tomat_left">
			<h3 class="widget_title">Toonish Tomat</h3>
			<div class="default_text">
				<p>Hooked Toonish Tomat is a vegan substitute for tuna in a premium tomato sauce. Available in three flavours: Tomato, Tomato & Chili and Tomato & Garlic.</p>
			</div>
			<div class="product_features">
				<ul>
					<li>The taste you love</li>
					<li>Takes away no fish from the oceans</li>
					<li>55% lower CO2 emissions</li>
					<li>Free from heavy metals and microplastics</li>
				</ul>
			</div>
			<div class="toonish_tomat_products">
				<img src="<?php echo get_template_directory_uri(); ?>/images/product2.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/product3.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/product1.png" alt="">
			</div>
			<div class="find_store">
				<a href="<?php site_url(); ?>/stores-restaurants" title="Find the closest store">
					<span>
						<img src="<?php echo get_template_directory_uri(); ?>/images/marker.svg" alt="">
					</span>
					<strong>Find the closest store</strong>
				</a>
			</div>
		</div>
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/images/toonish_tomat.jpg" alt="">
		</figure>
	</div>
</section> -->

<?php if(strpos($url, 'product-tom') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.toonish_tomat").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>
<?php if(strpos($url, 'mayo') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.mayo").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>
<?php if(strpos($url, 'curry') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.curry").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>
<?php if(strpos($url, 'skagen') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.skagen").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>
<?php if(strpos($url, 'tomato') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.tomato").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>
<?php if(strpos($url, 'chilli') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.chilli").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>

<!-- <section class="how_to_cook">
	<div class="how_to_cook_container">
		<h3 class="widget_title">How to cook</h3>
		<ul>
			<li>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/cook1.svg" alt="">
				</figure>
				<h4>in pasta</h4>
			</li>
			<li>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/cook2.svg" alt="">
				</figure>
				<h4>on the pizza</h4>
			</li>
			<li>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/cook3.svg" alt="">
				</figure>
				<h4>on sandwich</h4>
			</li>
			<li>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/cook4.svg" alt="">
				</figure>
				<h4>in a stew</h4>
			</li>
		</ul>
		<h3 class="how_to_cook_tagline">Or just heat it up, it is ready to eat!</h3>
	</div>
</section> -->

<?php if(strpos($url, 'tomat') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.ingredients.tomat").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>

<!-- <section class="ingredients tomat">
	<div class="ingredients_container">
		<div class="toggle_trigger <?php if(strpos($url, 'tomat') !== false){echo "toggled";}?>">
			<a href="javasript:void(0);" title="Nutrients and ingridients">
				<strong>Nutrients and ingridients</strong>
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/toggle_arrow.svg" alt="">
				</span>
				<em>
					<u>Click to View</u>
					<img src="<?php echo get_template_directory_uri(); ?>/images/view.svg" alt="">
				</em>
			</a>
		</div>
		<div class="toggle_container <?php if(strpos($url, 'tomat') !== false){echo "toggled";}?>">
			<div class="toggle_body">
				<div class="toggle_left">
					<h3 class="widget_title">Nutritional Values</h3>
					<table>
						<tr>
							<th>Nutritional values per 100g</th>
							<th>&nbsp;</th>
						</tr>
						<tr>
							<td>Energy</td>
							<td>482 kJ/115 kcal</td>
						</tr>
						<tr>
							<td>Fat</td>
							<td>6.18 g</td>
						</tr>
						<tr>
							<td>Of which saturates</td>
							<td>0.56 g</td>
						</tr>
						<tr>
							<td>Carbohydrate</td>
							<td>7.32 g</td>
						</tr>
						<tr>
							<td>Sugars</td>
							<td>2.94 g</td>
						</tr>
						<tr>
							<td>Protein</td>
							<td>6.89 g</td>
						</tr>
						<tr>
							<td>Salt</td>
							<td>1.37 g</td>
						</tr>
					</table>
				</div>
				<div class="toggle_right">
					<h3 class="widget_title">Ingredients</h3>
					<div class="default_text">
						<p>Chopped tomatoes, toonish 37% (water, vegetable protein (wheat, soy), sunflower oil, starch (wheat, potatoes), vinegar, natural aroma, salt, algae, (chondrus crispus), apple extract, beetroot powder, pepper extract), onion, ketchup, rapeseed oil, tomato puree, garlic, salt, sugar, water, preservatives, modified potato starch.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product_gallery">
	<div class="product_gallery_container">
		<div class="product_gallery_slider swiper-container">
			<div class="swiper-wrapper magnific">
				<div class="swiper-slide">
					<figure>
						<a href="<?php echo get_template_directory_uri(); ?>/images/product_gallery1.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product_gallery1.jpg" alt="">
						</a>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="<?php echo get_template_directory_uri(); ?>/images/product_gallery2.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product_gallery2.jpg" alt="">
						</a>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="<?php echo get_template_directory_uri(); ?>/images/product_gallery3.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product_gallery3.jpg" alt="">
						</a>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="<?php echo get_template_directory_uri(); ?>/images/product_gallery4.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/images/product_gallery4.jpg" alt="">
						</a>
					</figure>
				</div>
			</div>
			<a href="javascript:void(0);" class="product_gallery_slider_nav product_gallery_slider_prev" title="Previous">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow.svg" alt="">
			</a>
			<a href="javascript:void(0);" class="product_gallery_slider_nav product_gallery_slider_next" title="Next">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow.svg" alt="">
			</a>
		</div>
		<div class="product_gallery_right">
			<h3 class="widget_title">Toonish</h3>
			<div class="default_text">
				<p>Hooked Toonish is a vegan substitute for tuna.  Did we mention it is super delicious too? There are many creative ways to eat Toonish - in bowls, sushi, pastas, wraps, sandwiches, salads, tacos, pizzas - you name it.</p>
				<p>Try some Toonish in your meal next time and sea what happens!</p>
			</div>
			<div class="product_features">
				<ul>
					<li>Made of sustainable soy beans, sun flower oil and algae</li>
					<li>Only natural ingredients</li>
					<li>No fishy business</li>
				</ul>
			</div>
			<div class="find_store">
				<a href="<?php site_url(); ?>/stores-restaurants" title="Find the closest store">
					<span>
						<img src="<?php echo get_template_directory_uri(); ?>/images/marker.svg" alt="">
					</span>
					<strong>Find the closest store</strong>
				</a>
			</div>
		</div>
	</div>
</section> -->


<?php if(strpos($url, 'product-too') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.product_gallery").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>

<?php if(strpos($url, 'toonish') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.ingredients.toonish").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>

<!-- <section class="ingredients toonish">
	<div class="ingredients_container">
		<div class="toggle_trigger <?php if(strpos($url, 'toonish') !== false){echo "toggled";}?>">
			<a href="javasript:void(0);" title="Nutrients and ingridients">
				<strong>Nutrients and ingridients</strong>
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/toggle_arrow.svg" alt="">
				</span>
				<em>
					<u>Click to View</u>
					<img src="<?php echo get_template_directory_uri(); ?>/images/view.svg" alt="">
				</em>
			</a>
		</div>
		<div class="toggle_container <?php if(strpos($url, 'toonish') !== false){echo "toggled";}?>">
			<div class="toggle_body">
				<div class="toggle_left">
					<h3 class="widget_title">Ingredients</h3>
					<div class="default_text">
						<p>Water, wheat protein, soy protein, sunflower oil, wheat flour, vinegar, natural starch, apple & yeast extract, natural flavoring, salt, algae, beet root powder, paprika extract.</p>
					</div>
					<h3 class="widget_title">Nutritional Values</h3>
					<table>
						<tr>
							<th>Nutritional values per 100g</th>
							<th>&nbsp;</th>
						</tr>
						<tr>
							<td>Energy</td>
							<td>700 kJ/167 kcal</td>
						</tr>
						<tr>
							<td>Fat</td>
							<td>7.6 g</td>
						</tr>
						<tr>
							<td>Of which saturates</td>
							<td>0.9 g</td>
						</tr>
						<tr>
							<td>Carbohydrate</td>
							<td>6.6 g</td>
						</tr>
						<tr>
							<td>Sugars</td>
							<td>0.1 g</td>
						</tr>
						<tr>
							<td>Fibre</td>
							<td>1.3</td>
						</tr>
						<tr>
							<td>Protein</td>
							<td>17.2 g</td>
						</tr>
						<tr>
							<td>Salt</td>
							<td>1.1 g</td>
						</tr>
					</table>
				</div>
				<div class="toggle_right">
					<div class="toggle_right_columns">
						<div class="ribbon_wrap small">
							<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_yellow.svg" alt="" class="ribbon">
							<span>
								<big>17%</big>
								<small>protein</small>
							</span>
						</div>
						<figure class="strong">
							<img src="<?php echo get_template_directory_uri(); ?>/images/strong.svg" alt="">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- <section class="impact">
	<div class="impact_container">
		<div class="impact_left">
			<h2 class="subtitle">Impact</h2>
			<div class="default_text">
				<p>1 tuna is saved for every 4 kg of Toonish we sell, given that it replaces the same amount of tuna. CO2 emissions are reduced by 3,36 kg compared to tuna for every kilo Toonish.</p>
				<p>With our current sales estimates for 2021, the consumption of Hooked Toonish will save more than 12 000 fishes and 168 tonnes of CO2 emission.</p>
				<p>We hope and expect these numbers to grow to 580 000 saved fishes and 12 000 saved tonnes of CO2 emissions a year by 2023, as we extend our product line and grow in the European market.</p>
			</div>
		</div>
		<div class="impact_right">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/impact.jpg" alt="">
			</figure>
			<div class="default_text">
				<p>Do you want to know how we have calculated? Read more <a href="#">here</a></p>
			</div>
		</div>
	</div>
	<a href="<?php site_url(); ?>/our-mission" class="round_button dark alter" title="Our Mission">
		<strong>Our Mission</strong>
		<span class="circle_small"></span>
		<span class="circle_big"></span>
	</a>
	<img src="<?php echo get_template_directory_uri(); ?>/images/curves3.svg" alt="" class="curves_bot">
</section> -->

<?php if(strpos($url, 'impact') !== false): ?>
	<script>
		$(window).on("load", function(){
			var simagle = $(window).height() / 10;
			var zemodan = $("section.impact").offset().top;
			$(window).scrollTop(zemodan - simagle);
		});
	</script>
<?php endif; ?>

<script>
	$(window).on("load resize scroll", function(){
		var from_top = $(window).scrollTop();
		var section_height1 = $("section.toonish_tomat").offset().top;
		var section_height2 = $("section.impact").offset().top;
		if(from_top > section_height1){
			$("section.toonish_tomat, section.how_to_cook").addClass("colored");
		}else{
			$("section.toonish_tomat, section.how_to_cook").removeClass("colored");
		}
		if(from_top > section_height2){
			$("section.impact").addClass("colored");
		}else{
			$("section.impact").removeClass("colored");
		}
	});
</script>

<?php get_footer(); ?>