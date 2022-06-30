<?php 
	//Template Name: Home Page
?>
<?php get_header('', array('dark_menu' => true, 'no_curves' => false)); ?>
<section class="hero">
	<img src="<?php echo get_template_directory_uri(); ?>/images/hero_bot_left.svg" alt="" class="corner_left no-select">
	<img src="<?php echo get_template_directory_uri(); ?>/images/hero_bot_right.svg" alt="" class="corner_right no-select">
	<img src="<?php echo get_template_directory_uri(); ?>/images/hero_bot_right_dots.svg" alt="" class="corner_right_dots no-select">
	<div class="hero_body">
		<h1>The new generation of seafood</h1>
		<div class="hero_images">
			<img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" alt="">
			<img class="mobile" src="<?php echo get_template_directory_uri(); ?>/images/hero-mobile.png" alt="">
		</div>
		<h2>100% plant-based</h2>
		<div class="more trans-all-4">
			<a href="<?php site_url(); ?>/stores-restaurants" class="round_button" title="Find your closest store">
				<strong>Find your closest store</strong>
				<span class="circle_small"></span>
				<span class="circle_big"></span>
			</a>
		</div>
	</div>
</section>

<section class="hook">
	<div class="hook_container">
		<div class="hook_left">
			<h2 class="hook_title">90% of the fish population is extinct, overused or in crisis</h2>
			<div class="hook_desc">
				<p>But hey, fish lover! We also love fish. That's why we came up with Hooked, the new generation of seafood. The taste you love and the nutrients you want, but 100% plant-based. Good for our oceans and our health.</p>
			</div>
			<div class="hook_ride">
				<h3>Let's ride the wave of change!</h3>
				<a href="<?php site_url(); ?>/our-mission" class="round_button dark" title="Our story">
					<strong>Our story</strong>
					<span class="circle_small"></span>
					<span class="circle_big"></span>
				</a>
			</div>
		</div>
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/images/hook.svg" alt="">
		</figure>
	</div>
</section>

<section class="message">
	<h3>No Overfishing</h3>
	<h3>No bycatch</h3>
	<h3>No fishy business</h3>
</section>

<section class="taglines" id="set-color" data-color-default="#f5be6b" data-color="#5dafbd">
	<div class="taglines_container">
		<h3 class="taglines_title"><u>No</u> difference for you</h3>
		<h3 class="taglines_title"><u>All</u> the difference for the sea</h3>
		<div class="taglines_body">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/product2.png" alt="">
			</figure>
			<div class="taglines_taglies_wrap" id="pinMaster">
				<div class="taglines_taglines" id="pinContainer">
					
				</div>
				<div class="taglines_wrap">
					<div class="tagline tag1 turqoise">
						<p>We want to rock the boat of traditional seafood consumption, because it’s steering us and life in oceans to deep deep water. The benefits of plant-based seafood with the same great taste are just too many. That’s why we started Hooked two years ago. Now our first product, Hooked Toonish, is finally here!</p>
					</div>
					<div class="tagline tag2 bordeaux">
						<h3>The taste you love</h3>
					</div>
					<div class="tagline tag4">
						<h3>55% lower CO2 emissions than tuna</h3>
					</div>
					<div class="tagline tag5">
						<h3>Free from heavy metals and microplastics</h3>
					</div>
					<div class="tagline tag3">
						<h3>Takes away <u>no</u> fish from the oceans</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="hero">
	<img src="<?php echo get_template_directory_uri(); ?>/images/hero_bot_left.svg" alt="" class="corner_left no-select">
	<img src="<?php echo get_template_directory_uri(); ?>/images/hero_bot_right.svg" alt="" class="corner_right no-select">
	<img src="<?php echo get_template_directory_uri(); ?>/images/hero_bot_right_dots.svg" alt="" class="corner_right_dots no-select">
	<div class="hero_body">
		<h1>The new generation of seafood</h1>
		<div class="hero_images">
			<img src="<?php echo get_template_directory_uri(); ?>/images/product1.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/images/product2.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/images/product3.png" alt="">
		</div>
		<h2>100% plant-based</h2>
		<div class="more trans-all-4">
			<a href="<?php site_url(); ?>/stores-restaurants" class="round_button" title="Find your closest store">
				<strong>Find your closest store</strong>
				<span class="circle_small"></span>
				<span class="circle_big"></span>
			</a>
		</div>
	</div>
</section>

<section class="hook">
	<div class="hook_container">
		<div class="hook_left">
			<h2 class="hook_title">90% of the fish population is extinct, overused or in crisis</h2>
			<div class="hook_desc">
				<h4>But hey, fellow fish lover!</h4>
				<p>We also love fish. That's why we came up with Hooked, the new generation of seafood. The taste you love and the nutrients you want. But 100% plant-based. Good for our oceans and our health.</p>
			</div>
			<div class="hook_ride">
				<h3>Let's ride the wave of change!</h3>
				<a href="<?php site_url(); ?>/our-mission" class="round_button dark" title="Our story">
					<strong>Our story</strong>
					<span class="circle_small"></span>
					<span class="circle_big"></span>
				</a>
			</div>
		</div>
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/images/hook.svg" alt="">
		</figure>
	</div>
</section>

<section class="message">
	<h3>No Overfishing</h3>
	<h3>No bycatch</h3>
	<h3>No fishy business</h3>
</section>

<section class="taglines" id="set-color" data-color-default="#f5be6b" data-color="#5dafbd">
	<div class="taglines_container">
		<h3 class="taglines_title"><u>No</u> difference for you</h3>
		<h3 class="taglines_title"><u>All</u> the difference for the sea</h3>
		<div class="taglines_body">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/product2.png" alt="">
			</figure>
			<div class="taglines_taglies_wrap" id="pinMaster">
				<div class="taglines_taglines" id="pinContainer">
					
				</div>
				<div class="taglines_wrap">
					<div class="tagline tag1 turqoise">
						<p>We want to rock the boat of traditional seafood consumption, because it’s steering us and life in oceans to deep deep water. The benefits of plant-based seafood with the same great taste are just too many. That’s why we started Hooked two years ago. Now our first product, Hooked Toonish, is finally here!</p>
					</div>
					<div class="tagline tag2 bordeaux">
						<h3>The taste you love</h3>
					</div>
					<div class="tagline tag4">
						<h3>55% lower CO2 emissions than tuna</h3>
					</div>
					<div class="tagline tag5">
						<h3>Free from heavy metals and microplastics</h3>
					</div>
					<div class="tagline tag3">
						<h3>Takes away <u>no</u> fish from the oceans</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<script>
	let controller1 = new ScrollMagic.Controller();
	let rotation_animation = gsap.timeline();
	rotation_animation.to(".taglines_taglines", {
		y: "-100%",
	})
	let scene = new ScrollMagic.Scene({
		triggerElement: ".taglines",
		duration: "300%",
		triggerHook: 0
	}).setTween(rotation_animation).setPin(".taglines").addTo(controller1);
	var controller = new ScrollMagic.Controller();
	var tl = gsap.timeline();
	const taglines = $('.tagline');
	taglines.each(function(i){
		tl.fromTo(
			$(this), 1, {
				top: 50,
				opacity: 0
			}, {
				top: 0,
				opacity: 1
			}
		).to(taglines[i - 1], 0.2 , {
			top: -100,
			opacity: 0,
			ease: Power4.easeOut
		}, '-=1')
		new ScrollMagic.Scene({
			triggerElement: ".taglines",
			triggerHook: 0,
			duration: "300%"
		}).setTween(tl).addTo(controller1);
	})
</script>

<section class="toonish">
	<div class="toonish_container">
		<div class="toonish_texts">
			<h3 class="toonish_title">Toonish Original</h3>
			<h4 class="toonish_sub_title">Available in restaurants</h4>
			<div class="toonish_desc">
				<p>Toonish Original is our plant-based alternative to tuna. Toonish is served at restaurants in everything from toasts and burgers to poké bowls and salads. Enjoy your favorite food with your new source of protein.</p>
				<p>Made of <span><strong>RTRS</strong></span> certified soy and wheat protein, sunflower oil and algae</p>
				<div class="arrow">
					<img src="<?php echo get_template_directory_uri(); ?>/images/toonish-arrow.svg" alt="">
				</div>
			</div>
			<div class="toonish_buttons">
				<a href="<?php site_url(); ?>/stores-restaurants" class="round_button white" title="Find your closest restaurant">
					<strong>Find your closest restaurant</strong>
					<span class="circle_small"></span>
					<span class="circle_big"></span>
				</a>
				<a href="<?php site_url(); ?>/products/?toonish" class="round_button" title="Product Details">
					<strong>Product Details</strong>
					<span class="circle_small"></span>
					<span class="circle_big"></span>
				</a>
			</div>
		</div>
		<figure>
			<div class="image">
				<img src="<?php echo get_template_directory_uri(); ?>/images/toonish_image.jpg" alt="">
			</div>
			<figcaption>Read more about our RTRS certified soy <a href="https://responsiblesoy.org/?lang=en" target="_blank">here</a></figcaption>
			<div class="ribbon_wrap small">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_yellow.svg" alt="" class="ribbon">
				<span>
					<big>17%</big>
					<small>protein</small>
				</span>
			</div>
		</figure>
	</div>
</section>

<section class="gallery_slides">
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
</section>

<section class="coming trans-all-4">
	<div class="coming_container">
		<div class="coming_texts">
			<h3 class="coming_title">Toonish Mixes</h3>
			<h4 class="coming_subtitle">Available in retail stores</h4>
			<div class="coming_desc">
				<p>Explore our ready-to-eat Toonish mixes that go perfect in wraps, salads, pasta, pizza, sandwich or just straight from the jar.</p>
			</div>
		</div>
		<div class="coming_content">
			<div class="arrow">
				<span>Which one is your favorite?</span>
				<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="">
			</div>
			<div class="coming_images">
				<figure>
					<a href="<?php site_url(); ?>/products/?mayo" title="Toonish Mayo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/product-2.png" alt="Toonish Mayo">
					</a>
				</figure>
				<figure>
					<a href="<?php site_url(); ?>/products/?curry" title="Toonish Curry">
						<img src="<?php echo get_template_directory_uri(); ?>/images/product-1.png" alt="Toonish Curry">
					</a>
				</figure>
				<figure>
					<a href="<?php site_url(); ?>/products/?skagen" title="Toonish Skagen">
						<img src="<?php echo get_template_directory_uri(); ?>/images/product-3.png" alt="Toonish Skagen">
					</a>
				</figure>
				<figure>
					<a href="<?php site_url(); ?>/products/?tomato" title="Toonish Tomato">
						<img src="<?php echo get_template_directory_uri(); ?>/images/product-5.png" alt="Toonish Tomato">
					</a>
				</figure>
				<figure>
					<a href="<?php site_url(); ?>/products/?chilli" title="Toonish Tomato & Chilli">
						<img src="<?php echo get_template_directory_uri(); ?>/images/product-4.png" alt="Toonish Tomato & Chilli">
					</a>
				</figure>
			</div>
		</div>
		<div class="coming_buttons">
			<a href="<?php site_url(); ?>/stores-restaurants" class="round_button white" title="Find closest store">
				<strong>Find closest store</strong>
				<span class="circle_small"></span>
				<span class="circle_big"></span>
			</a>
			<a href="<?php site_url(); ?>/products/?toonish" class="round_button cyan" title="Product Details">
				<strong>Product Details</strong>
				<span class="circle_small"></span>
				<span class="circle_big"></span>
			</a>
		</div>
		<div class="coming_logos">
			<a href="http://www.ica.se/" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/images/coming-ica.png" alt="">
			</a>
			<a href="https://www.coop.se/handla/varor/vegetariskt/farskt/ovrig-vegetariskt/vaxtbaserad-tonfisk-7350127680016" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/images/coming-coop.png" alt="">
			</a>
			<a href="https://www.mathem.se/varumarke/hooked" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/images/coming-mathem.png" alt="">
			</a>
			<a href="https://www.citygross.se/sok?Q=hooked&page=0&store" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/images/coming-gross.png" alt="">
			</a>
		</div>
	</div>
</section>

<section class="recipes_wrap front">
	<h3 class="recipes_title">Cooking with Toonish</h3>
	<div class="recipes_items">
		<?php
			$args = array(
				'post_type' => 'recipes',
				'post_status' => 'publish',
				'posts_per_page' => 6,
				'orderby' => 'title',
				'order' => 'ASC',
			);
			$loop = new WP_Query( $args ); 
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php
				$recipeFeaturedImage = get_field('featured_image');
				$time = get_field('time');
				$servings = get_field('servings');
				$recipeAuthor = get_field('author');
				$author_image = get_field('author_image');
				$author_picture = $author_image['url'];
				if($recipeAuthor == 'jennie_wallden'){
					$cook = "Jennie Wallden";
				}
				if($recipeAuthor == 'javligt_gott'){
					$cook = "Jävligt Gott";
				}
				if($recipeAuthor == 'christmas' || $recipeAuthor == 'new_year'){
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
	<div class="reciopes_buttons">
		<a href="<?php site_url(); ?>/recipes" class="round_button white" title="Discover more recipes">
			<strong>Discover more recipes</strong>
			<span class="circle_small"></span>
			<span class="circle_big"></span>
		</a>
	</div>
</section>

<script>
	$(window).on("load resize scroll", function(){
		var from_top = $(window).scrollTop();
		var section_height = $("section.health").offset().top;
		if(from_top > section_height){
			$("section.health").addClass("colored");
		}else{
			$("section.health").removeClass("colored");
		}
	});
</script>

<section class="health">
	<div class="health_container">
		<div class="health_top">
			<div class="ribbon_wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_cyan.svg" alt="" class="ribbon">
				<img src="<?php echo get_template_directory_uri(); ?>/images/fish_lover.svg" alt="" class="graphic">
			</div>
			<div class="health_texts">
				<h3 class="health_title">For the Oceans...</h3>
				<div class="health_desc">
					<p>The difference between fish and Hooked is minimal for you, but immense for life in water, the oceans and the future. We invite you to the not so fishy movement towards oceans full of life and mouth-watering seafood without the catch! Welcome onbord!</p>
				</div>
			</div>
		</div>
		<div class="health_bot">
			<a href="<?php site_url(); ?>/our-mission" class="round_button white alt" title="Our mission">
				<strong>Our mission</strong>
				<span class="circle_small"></span>
				<span class="circle_big"></span>
			</a>
			<div class="health_texts">
				<h3 class="health_title">...and for your Health</h3>
				<div class="health_desc">
					<p>Hooked develops products that are like seafood, but harmless. Both to the planet and to our health. We work hard on making sure our plant-based seafood has all the health benefits of traditional seafood while certainly excluding all the heavy metals and microplastics.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="waves">
	<img src="<?php echo get_template_directory_uri(); ?>/images/curves1.svg" alt="" class="curves">
	<img src="<?php echo get_template_directory_uri(); ?>/images/waves.jpg" alt="" class="bak">
	<div class="waves_container">
		<a href="<?php site_url(); ?>/stores-restaurants" class="round_button white alter" title="Stores &amp; Restaurants">
			<strong>Stores &amp; Restaurants</strong>
			<span class="circle_small"></span>
			<span class="circle_big"></span>
		</a>
		<div class="waves_texts">
			<h3 class="waves_title">Is eating Hooked Toonish just a drip in the ocean towards healthier oceans?</h3>
			<div class="waves_desc">
				<p>Yes it is. But small streams make great rivers. Together we can make a significant direct impact by eating plant-based seafood that doesn’t harm our oceans, while also inspiring other consumers and organizations to behavioural changes.</p>
			</div>
			<h4 class="waves_subtitle">Let’s ride the wave of change</h4>
		</div>
	</div>
</section>

<section class="hooked">
	<div class="curves_image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/curves2_1.svg" alt="" class="curve1">
		<img src="<?php echo get_template_directory_uri(); ?>/images/curves2_2.svg" alt="" class="curve2">
		<img src="<?php echo get_template_directory_uri(); ?>/images/hooked.png" alt="" class="image">
	</div>
	<div class="hooked_container">
		<div class="callouts">
			<h3>We are</h3>
			<h4>are you?</h4>
		</div>
		<div class="embedded_video">
			<div class="video_wrap">
				<iframe src="https://www.youtube.com/embed/QvbHl8kKJZY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="more">
			<a href="<?php site_url(); ?>/stores-restaurants" class="round_button dark alt" title="Try Hooked">
				<strong>Try Hooked</strong>
				<span class="circle_small"></span>
				<span class="circle_big"></span>
			</a>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/curves3.svg" alt="" class="curves_bot">
</section>

<!-- <section class="toonish">
	<div class="toonish_container">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/images/toonish_image.jpg" alt="">
		</figure>
		<div class="toonish_texts">
			<h3 class="toonish_title">Toonish</h3>
			<div class="toonish_desc">
				<p>Our Toonish Original is currently only sold to restaurants. The Toonish is served in everything from toasts, burgers, poke bowls and salads. Enjoy your favorite food with your new favorite source of protein.</p>
				<p>Made of soy- and wheat protein, sunflower oil and algae.</p>
			</div>
			<div class="toonish_showcase_wrap">
				<div class="toonish_showcase">
					<img src="<?php echo get_template_directory_uri(); ?>/images/toonish_graphic.svg" alt="" class="graphic">
					<img src="<?php echo get_template_directory_uri(); ?>/images/toonish_dish.png" alt="" class="image">
					<div class="ribbon_wrap small">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_yellow.svg" alt="" class="ribbon">
						<span>
							<big>17%</big>
							<small>protein</small>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gallery_slides">
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
	<div class="gallery_buttons">
		<a href="<?php site_url(); ?>/stores-restaurants" class="round_button white" title="Find your closest restaurant">
			<strong>Find your closest restaurant</strong>
			<span class="circle_small"></span>
			<span class="circle_big"></span>
		</a>
		<a href="<?php site_url(); ?>/products/?toonish" class="round_button" title="Nutrients &amp; ingridients">
			<strong>Nutrients &amp; ingridients</strong>
			<span class="circle_small"></span>
			<span class="circle_big"></span>
		</a>
	</div>
</section>

<section class="coming">
	<div class="coming_container">
		<div class="coming_texts">
			<h3 class="coming_title">Toonish Tomat</h3>
			<h4 class="coming_subtitle">Available in stores</h4>
			<div class="coming_desc">
				<p>Our first product sold at supermarkets contains Hooked Toonish in a premium tomato sauce.</p>
			</div>
		</div>
		<div class="coming_content">
			<div class="arrow">
				<span>Which one is your favorite?</span>
				<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="">
			</div>
			<div class="coming_images">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/product1.png" alt="">
					<figcaption>Tomat &amp; Chili</figcaption>
				</figure>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/product2.png" alt="">
					<figcaption>Tomat</figcaption>
				</figure>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/product3.png" alt="">
					<figcaption>Tomat &amp; Vitlök</figcaption>
				</figure>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/coming.svg" alt="" class="coming_bak">
		</div>
		<div class="coming_addition">
			<p>Use it on your pasta, pizza, tacos, sandwich or be creative;) Ready to eat, as it is or heated up.</p>
		</div>
		<div class="more trans-all-4">
			<a href="<?php site_url(); ?>/products/?tomat" class="round_button white" title="Nutrients &amp; Ingredients">
				<strong>Nutrients &amp; Ingredients</strong>
				<span class="circle_small"></span>
				<span class="circle_big"></span>
			</a>
		</div>
	</div>
</section> -->

<!-- <script>
	$(window).on("load resize scroll", function(){
		var from_top = $(window).scrollTop();
		var section_height = $("section.health").offset().top;
		if(from_top > section_height){
			$("section.health").addClass("colored");
		}else{
			$("section.health").removeClass("colored");
		}
	});
</script> -->

<!-- <section class="health">
	<div class="health_container">
		<div class="health_top">
			<div class="ribbon_wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_cyan.svg" alt="" class="ribbon">
				<img src="<?php echo get_template_directory_uri(); ?>/images/fish_lover.svg" alt="" class="graphic">
			</div>
			<div class="health_texts">
				<h3 class="health_title">For the Oceans...</h3>
				<div class="health_desc">
					<p>The difference between fish and Hooked is minimal for you, but immense for life in water, the oceans and the future.  We invite you to the not so fishy movement towards oceans full of life and mouth-watering seafood without the catch! Welcome onbord!</p>
				</div>
			</div>
		</div>
		<div class="health_bot">
			<a href="<?php site_url(); ?>/our-mission" class="round_button white alt" title="Our mission">
				<strong>Our mission</strong>
				<span class="circle_small"></span>
				<span class="circle_big"></span>
			</a>
			<div class="health_texts">
				<h3 class="health_title">...and for your Health</h3>
				<div class="health_desc">
					<p>Hooked develops products that are like seafood, but harmless. Both to the planet and to our health. We work hard on making sure our plant-based seafood has all the health benefits of traditional seafood while certainly excluding all the heavy metals and microplastics.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="waves">
	<img src="<?php echo get_template_directory_uri(); ?>/images/curves1.svg" alt="" class="curves">
	<img src="<?php echo get_template_directory_uri(); ?>/images/waves.jpg" alt="" class="bak">
	<div class="waves_container">
		<a href="<?php site_url(); ?>/stores-restaurants" class="round_button white alter" title="Stores &amp; Restaurants">
			<strong>Stores &amp; Restaurants</strong>
			<span class="circle_small"></span>
			<span class="circle_big"></span>
		</a>
		<div class="waves_texts">
			<h3 class="waves_title">Is eating Hooked Toonish just a drip in the ocean towards healthier oceans?</h3>
			<div class="waves_desc">
				<p>Yes it is. But small streams make great rivers. Together we can make a significant direct impact by eating plant-based seafood that doesn’t harm our oceans, while also inspiring other consumers and organizations to behavioural changes.</p>
			</div>
			<h4 class="waves_subtitle">Let’s ride the wave of change</h4>
		</div>
	</div>
</section>

<section class="hooked">
	<div class="curves_image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/curves2_1.svg" alt="" class="curve1">
		<img src="<?php echo get_template_directory_uri(); ?>/images/curves2_2.svg" alt="" class="curve2">
		<img src="<?php echo get_template_directory_uri(); ?>/images/hooked.png" alt="" class="image">
	</div>
	<div class="hooked_container">
		<div class="callouts">
			<h3>We are</h3>
			<h4>are you?</h4>
		</div>
		<div class="embedded_video">
			<div class="video_wrap">
				<iframe src="https://www.youtube.com/embed/QvbHl8kKJZY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="more">
			<a href="<?php site_url(); ?>/stores-restaurants" class="round_button dark alt" title="Try Hooked">
				<strong>Try Hooked</strong>
				<span class="circle_small"></span>
				<span class="circle_big"></span>
			</a>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/curves3.svg" alt="" class="curves_bot">
</section> -->

<?php get_footer(); ?>