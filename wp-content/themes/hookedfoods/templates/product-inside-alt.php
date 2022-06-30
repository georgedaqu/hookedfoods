<?php

// Template Name: Recipe Inside Alt

get_header('', array('dark_menu' => true, 'no_curves' => true)); ?>

<section class="recipes_inside_hero">
	<div class="recipes_inside_hero_container">
		<h1 class="title">Toonish Tomato mix with baked potato</h1>
		<div class="author">by Jävligt Gott</div>
		<ul>
			<li>Cooking time: 30 min</li>
			<li>2-3 servings</li>
		</ul>
		<div class="back_to">
			<a href="<?php site_url(); ?>/recipes" title="Back to recipes">Back to recipes</a>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/recipes_curves.svg" alt="" class="curves_bot">
</section>

<section class="recipes_featured_image">
	<img src="<?php echo get_template_directory_uri(); ?>/images/recipe_inside3.jpg" alt="Toonish Express pizza">
</section>

<section class="recipes_texts alt">
	<div class="recipes_columns">
		<div class="recipes_column">
			<h3 class="widget_title">Ingredients</h3>
			<h3 class="widget_title small">Mix</h3>
			<ul>
				<li>
					<span>2.5 dl flour</span>
				</li>
				<li>
					<span>1.5 tsp baking soda</span>
				</li>
				<li>
					<span>1 krm salt</span>
				</li>
				<li>
					<span>2 tbsp + 2 tbsp olive oil</span>
				</li>
				<li>
					<span>1 dl natural yoghurt</span>
				</li>
				<li>
					<span>1 jar Toonish Tomat</span>
				</li>
				<li>
					<span>0.5 jar crushed tomatoes</span>
				</li>
				<li>
					<span>1 garlic clove, grated</span>
				</li>
				<li>
					<span>3-4 dl medium-aged cheese, grated</span>
				</li>
				<li>
					<span>1 red onion, sliced</span>
				</li>
				<li>
					<span>1 handful kalamata olives</span>
				</li>
				<li>
					<span>1 handful ruccola</span>
				</li>
			</ul>
		</div>
		<div class="recipes_column">
			<h3 class="widget_title">Preparation</h3>
			<ol>
				<li>Start by heating the oven to 250°C. Pre-heat an oven plate in the oven.</li>
				<li>Mix flour with baking soda and salt. Add 2 tablespoons olive oil and yoghurt and mix into a dough. Knead the dough with your hands. Roll the dough in two pizza bases or one large that cover the oven plate. Put it on a baking paper.</li>
				<li>Mix Toonish Tomat with crushed tomatoes, garlic and 2 tablespoons olive oil. Spread out a thin layer of the mix onto the pizza bases.</li>
				<li>Sprinkle over grated cheese, sliced red onion and kalamata olives. Let bake in the oven for 10-12  minutes. Top it with ruccola and drizzle some additional olive oil over the pizza. Enjoy!</li>
			</ol>
		</div>
	</div>
</section>

<section class="author_widget style2">
	<div class="author_captions">
		<h3 class="widget_title center">Recipe by Gustav Johansson</h3>
		<div class="default_text">
			<p>Gustav from Jävligt Gott is a cookbook author and foodblogger at Sweden's biggest vegan food blog.</p>
		</div>
	</div>
	<div class="author_media">
		<figure>
			<div class="image">
				<img src="<?php echo get_template_directory_uri(); ?>/images/recipe_alt.jpg" alt="">
			</div>
		</figure>
	</div>
</section>

<section class="recipes_video">
	<div class="recipes_video_container">
		<h3 class="widget_title center">Video Recipe</h3>
		<div class="video_wrap">
			<iframe src="https://www.youtube.com/embed/QvbHl8kKJZY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</section>

<section class="more_recipes alt">
	<div class="more_recipes_container">
		<h3 class="widget_title">More recipes</h3>
		<div class="more_recipes_slider swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<figure>
						<a href="#" title="Toonish Express pizza">
							<img src="<?php echo get_template_directory_uri(); ?>/images/recipe1.jpg" alt="Toonish Express pizza">
						</a>
					</figure>
					<div class="recipe_texts">
						<h3 class="widget_title small center">Toonish Express pizza</h3>
						<div class="recipe_components">
							<div class="time">
								<img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt="">
								<span>35 min</span>
							</div>
							<div class="serving">2 servings</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="#" title="Spicy Toonish Melt">
							<img src="<?php echo get_template_directory_uri(); ?>/images/recipe2.jpg" alt="Spicy Toonish Melt">
						</a>
					</figure>
					<div class="recipe_texts">
						<h3 class="widget_title small center">Spicy Toonish Melt</h3>
						<div class="recipe_components">
							<div class="time">
								<img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt="">
								<span>35 min</span>
							</div>
							<div class="serving">2 servings</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="#" title="Crispy Cheesy Toonish Taco">
							<img src="<?php echo get_template_directory_uri(); ?>/images/recipe3.jpg" alt="Crispy Cheesy Toonish Taco">
						</a>
					</figure>
					<div class="recipe_texts">
						<h3 class="widget_title small center">Crispy Cheesy Toonish Taco</h3>
						<div class="recipe_components">
							<div class="time">
								<img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt="">
								<span>35 min</span>
							</div>
							<div class="serving">2 servings</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="#" title="Toonish Sriracha Noodles">
							<img src="<?php echo get_template_directory_uri(); ?>/images/recipe4.jpg" alt="Toonish Sriracha Noodles">
						</a>
					</figure>
					<div class="recipe_texts">
						<h3 class="widget_title small center">Toonish Sriracha Noodles</h3>
						<div class="recipe_components">
							<div class="time">
								<img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt="">
								<span>35 min</span>
							</div>
							<div class="serving">2 servings</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="#" title="Toonish Tomato pasta with caper">
							<img src="<?php echo get_template_directory_uri(); ?>/images/recipe5.jpg" alt="Toonish Tomato pasta with caper">
						</a>
					</figure>
					<div class="recipe_texts">
						<h3 class="widget_title small center">Toonish Tomato pasta with caper</h3>
						<div class="recipe_components">
							<div class="time">
								<img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt="">
								<span>35 min</span>
							</div>
							<div class="serving">2 servings</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<figure>
						<a href="#" title="Creamy Toonish Pasta ">
							<img src="<?php echo get_template_directory_uri(); ?>/images/recipe6.jpg" alt="Creamy Toonish Pasta ">
						</a>
					</figure>
					<div class="recipe_texts">
						<h3 class="widget_title small center">Creamy Toonish Pasta </h3>
						<div class="recipe_components">
							<div class="time">
								<img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt="">
								<span>35 min</span>
							</div>
							<div class="serving">2 servings</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="more_recipes_slider_nav trans-all-4">
			<a href="javascript:void(0);" class="more_recipes_slider_prev" title="Previous">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow.svg" alt="">
			</a>
			<a href="javascript:void(0);" class="more_recipes_slider_next" title="Next">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow.svg" alt="">
			</a>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/curves7.svg" alt="" class="curves_bot">
</section>

<?php get_footer(); ?>