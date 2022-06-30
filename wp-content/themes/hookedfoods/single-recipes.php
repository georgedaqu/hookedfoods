<?php get_header('', array('dark_menu' => true, 'no_curves' => true)); ?>
<?php
if ( have_posts() ){
	while ( have_posts() ){
		the_post();
		$recipeAuthor = get_field_object('author');
		$recipeAuthorValue = $recipeAuthor['value'];
		$recipeAuthorName = $recipeAuthor['choices'][$recipeAuthorValue];
		$recipeFeatured = get_field('featured');
		$recipeFeaturedImage = get_field('featured_image');
		$time = get_field('time');
		$servings = get_field('servings');
		$ingredientsSubtitle = get_field('ingredients_subtitle');
		$ingredients = get_field('ingredients');
		$preparation = get_field('preparation');
		$authorStyle = get_field('author_widget_type');
		$authorCaption = get_field('author_caption');
		$authorSubtitle = get_field('author_subtitle');
		$image_1 = get_field('image_1');
		$redBadge = get_field('red_badge');
		$image_2 = get_field('image_2');
		$video = get_field('video_file');
		$background = get_field('colored_background') ? 'alt' : '';
		$mainID = get_the_ID();
		?>
			<section class="recipes_inside_hero">
				<div class="recipes_inside_hero_container">
					<h1 class="title"><?php the_title() ?></h1>
					<div class="author">by <?php echo $recipeAuthorName?></div>
					<ul>
						<li>Cooking time: <?php echo $time ?> min</li>
						<li><?php echo $servings ?> servings</li>
					</ul>
					<div class="back_to">
						<a href="<?php site_url(); ?>/recipes" title="Back to recipes">Back to recipes</a>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/recipes_curves.svg" alt="" class="curves_bot">
			</section>

			<section class="recipes_featured_image">
				<?php the_post_thumbnail('recipe-inside') ?>
			</section>

			<section class="recipes_texts <?php echo $background ?>">
				<div class="recipes_columns">
					<div class="recipes_column">
						<h3 class="widget_title">Ingredients</h3>
						<?php
							if($ingredientsSubtitle){
								?>
									<h3 class="widget_title small"><?php echo $ingredientsSubtitle ?></h3>
								<?php
							}
						?>
						<ul>
							<?php
								foreach( $ingredients as $ingredient){
									$extra_margin = $ingredient['extra_margin'];
									?>
										<li class="<?php echo $extra_margin[0]; ?>">
											<span><?php echo $ingredient['ingredient_item'] ?></span>
										</li>
									<?php
								}
							?>
						</ul>
					</div>
					<div class="recipes_column">
						<h3 class="widget_title">Preparation</h3>
						<ol>
							<?php
								foreach( $preparation as $prep){
									?>
										<li>
											<span><?php echo $prep['preparation_item'] ?></span>
										</li>
									<?php
								}
							?>
							<!-- <li>Start by heating the oven to 250°C. Pre-heat an oven plate in the oven.</li>
							<li>Mix flour with baking soda and salt. Add 2 tablespoons olive oil and yoghurt and mix into a dough. Knead the dough with your hands. Roll the dough in two pizza bases or one large that cover the oven plate. Put it on a baking paper.</li>
							<li>Mix Toonish Tomat with crushed tomatoes, garlic and 2 tablespoons olive oil. Spread out a thin layer of the mix onto the pizza bases.</li>
							<li>Sprinkle over grated cheese, sliced red onion and kalamata olives. Let bake in the oven for 10-12  minutes. Top it with ruccola and drizzle some additional olive oil over the pizza. Enjoy!</li> -->
						</ol>
					</div>
				</div>
			</section>
			<?php
				if($authorStyle == 'double'){
					?>
						<section class="author_widget style1">
							<div class="author_captions">
								<h3 class="widget_title center"><?php echo $authorCaption ?></h3>
								<div class="default_text">
									<p><?php echo $authorSubtitle ?></p>
								</div>
							</div>
							<div class="author_media">
								<figure>
									<div class="image">
										<img src="<?php echo $image_1['sizes']['author-style-1'] ?>" alt="<?php echo $image_1['alt']?>">
										<?php if($redBadge) : ?>
											<div class="ribbon_wrap">
												<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_red.svg" alt="" class="ribbon">
												<img src="<?php echo get_template_directory_uri(); ?>/images/fish_lover.svg" alt="" class="graphic">
											</div>
										<?php else : ?>
											<div class="ribbon_wrap">
												<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_cyan.svg" alt="" class="ribbon">
												<img src="<?php echo get_template_directory_uri(); ?>/images/fish_lover.svg" alt="" class="graphic">
											</div>
										<?php endif; ?>
									</div>
								</figure>
								<figure>
									<div class="image">
									<img src="<?php echo $image_2['sizes']['author-style-1'] ?>" alt="<?php echo $image_2['alt']?>">
									</div>
								</figure>
							</div>
						</section>
					<?php
				}else{
					?>
						<section class="author_widget style2">
							<div class="author_captions">
								<h3 class="widget_title center"><?php echo $authorCaption ?></h3>
								<div class="default_text">
									<p><?php echo $authorSubtitle ?></p>
								</div>
							</div>
							<div class="author_media">
								<figure>
									<div class="image">
										<img src="<?php echo $image_1['sizes']['author-style-2'] ?>" alt="<?php echo $image_1['alt']?>">
									</div>
								</figure>
							</div>
						</section>
					<?php
				}
			?>

			<?php
				if($video){
					if($background == 'alt'){
						?>
							<section class="recipes_video">
								<div class="recipes_video_container">
									<h3 class="widget_title center">Video Recipe</h3>
									<div class="video_wrap">
										<video controls preload="false">
											<source src="<?php echo $video['url']; ?>" type="video/mp4">
										</video>
									</div>
								</section>
							<?php
						}
					}
				}
			?>

			<section class="more_recipes <?php echo $background ?>">
				<div class="more_recipes_container">
					<h3 class="widget_title">More recipes</h3>
					<div class="more_recipes_slider swiper-container">
						<div class="swiper-wrapper">
							<?php
								$posts = get_posts( array(
									'numberposts' => -1,
									'category'    => 0,
									'orderby'     => 'date',
									'order'       => 'DESC',
									'include'     => array(),
									'exclude'     => array(),
									'meta_key'    => '',
									'meta_value'  =>'',
									'post_type'   => 'recipes',
									'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
								) );

								foreach( $posts as $post ){
									setup_postdata($post);
									$time = get_field('time');
									$servings = get_field('servings');
									if($mainID != get_the_ID()){
										?>
											<div class="swiper-slide">
												<figure>
													<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
														<?php the_post_thumbnail('recipe-listing') ?>
													</a>
												</figure>
												<div class="recipe_texts">
													<h3 class="widget_title small center">
														<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
															<?php the_title() ?>
														</a>
													</h3>
													<div class="recipe_components">
														<div class="time">
															<img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt="">
															<span><?php echo $time ?> min</span>
														</div>
														<div class="serving"><?php echo $servings ?> servings</div>
													</div>
												</div>
											</div>
										<?php
									}
								}

								wp_reset_postdata(); // сброс
							?>
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
				<?php if($background == 'alt'){ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/curves7.svg" alt="" class="curves_bot">
						<?php
					}else{
				?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/curves8.svg" alt="" class="curves_bot">
				<?php } ?>
			</section>
		<?php
	} else {
		echo wpautop();
	}
?>


<?php get_footer('', array('yellow_background' => true)); ?>
