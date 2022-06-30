<?php get_header('', array('dark_menu' => false, 'no_curves' => true)); ?>

<section class="recipes_hero">
	<div class="recipes_hero_container">
		<h1 class="title">Our recipes</h1>
		<div class="subtitle">
			<p>Explore our no fishy recipes created by the chefs <span>Jennie Walldén, Jävligt Gott</span> and the chefs at <span>Hooked.</span></p>
		</div>
	</div>
</section>

<?php // if ($_SERVER["REMOTE_ADDR"] == '109.172.158.73') : ?>
	<?php

	$authors_array = get_field_object('field_616ae44895981');
	$authors = $authors_array['choices'];
	$products_array = get_field_object('field_625032d55944d');
	$products = $products_array['choices'];
	$events_array = get_field_object('field_62502f1e5944c');
	$events = $events_array['choices'];
	$count = 0;
	?>
	<section class="reciepes_filter">
		<form action="index.php">
			<div class="filter_items">
				<div class="form_item">
					<div class="filter_title">All Hooked products</div>
					<ul>
						<?php foreach ($products as $product_value => $product_label) : ?>
							<li>
								<input type="checkbox" id="check-<?php echo $count; ?>" class="artform product-js" data-product="<?php echo $product_value; ?>">
								<label for="check-<?php echo $count; ?>"><?php echo $product_label; ?></label>
							</li>
							<?php $count++; ?>
						<?php endforeach; ?>
						<!-- <li>
							<input type="checkbox" id="check-1" class="artform">
							<label for="check-1">Toonish Tomat</label>
						</li>
						<li>
							<input type="checkbox" id="check-2" class="artform">
							<label for="check-2">Toonish Skagen</label>
						</li>
						<li>
							<input type="checkbox" id="check-3" class="artform">
							<label for="check-3">Toonish Curry</label>
						</li>
						<li>
							<input type="checkbox" id="check-4" class="artform">
							<label for="check-4">Toonish Mayo</label>
						</li> -->
					</ul>
				</div>
				<div class="form_item">
					<div class="filter_title">All recipe contributor</div>
					<ul>
						<?php foreach ($authors as $author_value => $author_label) : ?>
							<li>
								<input type="checkbox" id="check-<?php echo $count; ?>" class="artform author-js" data-author="<?php echo $author_value; ?>">
								<label for="check-<?php echo $count; ?>"><?php echo $author_label; ?></label>
							</li>
							<?php $count++; ?>
						<?php endforeach; ?>
						<!-- <li>
							<input type="checkbox" id="check-5" class="artform">
							<label for="check-5">Jennie Walldén</label>
						</li>
						<li>
							<input type="checkbox" id="check-6" class="artform">
							<label for="check-6">Jävligt Gott</label>
						</li>
						<li>
							<input type="checkbox" id="check-7" class="artform">
							<label for="check-7">By Hooked Foods</label>
						</li> -->
					</ul>
				</div>
				<div class="form_item">
					<div class="filter_title">All occasions</div>
					<ul>
						<?php foreach ($events as $event_value => $event_label) : ?>
							<li>
								<input type="checkbox" id="check-<?php echo $count; ?>" class="artform event-js" data-event="<?php echo $event_value; ?>">
								<label for="check-<?php echo $count; ?>"><?php echo $event_label; ?></label>
							</li>
							<?php $count++; ?>
						<?php endforeach; ?>
						<!-- <li>
							<input type="checkbox" id="check-8" class="artform">
							<label for="check-8">Everyday</label>
						</li>
						<li>
							<input type="checkbox" id="check-9" class="artform">
							<label for="check-9">Party</label>
						</li>
						<li>
							<input type="checkbox" id="check-10" class="artform">
							<label for="check-10">Christmas</label>
						</li>
						<li>
							<input type="checkbox" id="check-11" class="artform">
							<label for="check-11">New Year</label>
						</li>
						<li>
							<input type="checkbox" id="check-12" class="artform">
							<label for="check-12">Outdoor</label>
						</li> -->
					</ul>
				</div>
			</div>
		</form>
	</section>

	<section class="recipes_wrap front">
		<div class="recipes_items" id="recipes-wrap-js">
		<?php
			$recipes = new WP_Query([
				'post_type' => 'recipes',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order' => 'ASC',
			]);
			if ($recipes->have_posts()) {
				while ($recipes->have_posts()) {
					$recipes->the_post();
					echo get_template_part('templates/section', 'products');
				};
			}
		?>
		</div>
	</section>

<?php // else: ?>


<!-- <section class="recipes_wrap front">
	<div class="recipes_items">
		<?php
		$args = array(
			'post_type' => 'recipes',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC',
		);
		$loop = new WP_Query($args);
		while ($loop->have_posts()) : $loop->the_post(); ?>
			<?php
			$recipeFeaturedImage = get_field('featured_image');
			$time = get_field('time');
			$servings = get_field('servings');
			$recipeAuthor = get_field('author');
			$author_image = get_field('author_image');
			$author_picture = $author_image['url'];
			if ($recipeAuthor == 'jennie_wallden') {
				$cook = "Jennie Wallden";
			}
			if ($recipeAuthor == 'javligt_gott') {
				$cook = "Jävligt Gott";
			}
			if ($recipeAuthor == 'christmas' || $recipeAuthor == 'new_year') {
				$cook = "Hooked";
			}
			?>
			<article>
				<figure>
					<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
						<?php the_post_thumbnail('recipe-listing') ?>
					</a>
					<div class="avatar">
						<img src="<?php echo $author_picture; ?>" alt="">
					</div>
				</figure>
				<div class="recipe_texts">
					<div>
						<h4>By <?php echo $cook; ?></h4>
						<h3 class="widget_title small center">
							<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
						</h3>
					</div>
					<div class="recipe_components">
						<div class="time">
							<img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt="">
							<span><?php echo $time ?> min</span>
						</div>
						<div class="serving"><?php echo $servings ?> servings</div>
					</div>
				</div>
			</article>
		<?php endwhile;
		wp_reset_postdata();
		?>
	</div>
</section> -->
<?php // endif; ?>

<?php get_footer('', array('yellow_background' => true)); ?>