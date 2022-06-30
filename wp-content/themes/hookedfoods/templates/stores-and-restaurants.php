<?php

// Template Name: Stores and Restaurants Dev

get_header('', array('dark_menu' => true, 'no_curves' => true)); ?>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyC-9y5aP67d6yS-8mesfDos00Dg5chQzCc"></script>

<?php the_content() ?>
<!-- <section class="stores_restaurants_intro">
	<div class="stores_restaurants_intro_container">
		<h1 class="title">Find the closest store</h1>
		<div class="stores_restaurants_partners">
			<ul>
				<li>
					<a href="https://www.coop.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/partner1.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.mathem.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/partner2.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.citygross.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/partner3.png" alt="">
					</a>
				</li>
			</ul>
		</div>
		<div class="map_wrap">
			<div id="map_stores" class="map"></div>
			<script type="text/javascript">
				google.maps.event.addDomListener(window, "load", init);
				function init(){
					var mapOptions = {
						zoom: 13,
						center: new google.maps.LatLng(59.3276899, 18.0600896),
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						mapTypeControl: false,
						scaleControl: false,
						zoomControl: true,
						streetViewControl: false,
						scrollwheel: false,
						styles: [{
							"featureType": "administrative",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "administrative.locality",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "administrative.neighborhood",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "landscape.man_made",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "landscape.natural",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"color": "#e0efef"
								}
							]
						}, {
							"featureType": "landscape.natural",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "poi",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"hue": "#1900ff"
								},
								{
									"color": "#c0e8e8"
								}
							]
						}, {
							"featureType": "poi",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "poi",
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "road",
							"elementType": "geometry",
							"stylers": [
								{
									"lightness": 100
								},
								{
									"visibility": "simplified"
								}
							]
						}, {
							"featureType": "road",
							"elementType": "labels",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "transit",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "transit",
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "transit.line",
							"elementType": "geometry",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"lightness": 700
								}
							]
						}, {
							"featureType": "water",
							"elementType": "all",
							"stylers": [
								{
									"color": "#7dcdcd"
								}
							]
						}
					]};
					var mapElement = document.getElementById("map_stores");
					var map = new google.maps.Map(mapElement, mapOptions);
					var locations = [
						[59.3276899, 18.0600896]
					];
					for (i = 0; i < locations.length; i++){
						marker = new google.maps.Marker({
							position: new google.maps.LatLng(locations[i][0], locations[i][1]),
							map: map,
							icon: '<?php echo get_template_directory_uri(); ?>/images/marker.png',
						});
					}
				};
			</script>
			<div class="map_links">
				<a href="<?php site_url(); ?>/products/?product-tom" tite="More about Toonish Tomat">More about Toonish Tomat</a>
				<a href="<?php site_url(); ?>/for-retailers" tite="Are you a retailer?">Are you a retailer?</a>
			</div>
		</div>
	</div>
</section>

<section class="stores_restaurants_nearest">
	<div class="stores_restaurants_nearest_container">
		<h1 class="title">Find the nearest restaurant</h1>
		<div class="stores_restaurants_restaurants">
			<ul>
				<li>
					<a href="https://mahalosthlm.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant1.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.hawaiipoke.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant2.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.sthlmbrunchclub.se/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant3.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/heavenstreetfoodwinner/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant4.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.wearerubs.com/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant5.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://mischmasch.nu" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant6.png" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.foodora.com/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/restaurant7.png" alt="">
					</a>
				</li>
			</ul>
		</div>
		<div class="map_wrap">
			<div id="map_restaurants" class="map"></div>
			<script type="text/javascript">
				google.maps.event.addDomListener(window, "load", init);
				function init(){
					var mapOptions = {
						zoom: 13,
						center: new google.maps.LatLng(59.3276899, 18.0600896),
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						mapTypeControl: false,
						scaleControl: false,
						zoomControl: true,
						streetViewControl: false,
						scrollwheel: false,
						styles: [{
							"featureType": "administrative",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "administrative.locality",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "administrative.neighborhood",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "landscape.man_made",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "landscape.natural",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"color": "#e0efef"
								}
							]
						}, {
							"featureType": "landscape.natural",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "poi",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"hue": "#1900ff"
								},
								{
									"color": "#c0e8e8"
								}
							]
						}, {
							"featureType": "poi",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "poi",
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "road",
							"elementType": "geometry",
							"stylers": [
								{
									"lightness": 100
								},
								{
									"visibility": "simplified"
								}
							]
						}, {
							"featureType": "road",
							"elementType": "labels",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "transit",
							"elementType": "labels.text",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "transit",
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						}, {
							"featureType": "transit.line",
							"elementType": "geometry",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"lightness": 700
								}
							]
						}, {
							"featureType": "water",
							"elementType": "all",
							"stylers": [
								{
									"color": "#7dcdcd"
								}
							]
						}
					]};
					var mapElement = document.getElementById("map_restaurants");
					var map = new google.maps.Map(mapElement, mapOptions);
					var locations = [
						[59.3276899, 18.0600896]
					];
					for (i = 0; i < locations.length; i++){
						marker = new google.maps.Marker({
							position: new google.maps.LatLng(locations[i][0], locations[i][1]),
							map: map,
							icon: '<?php echo get_template_directory_uri(); ?>/images/marker.png',
						});
					}
				};
			</script>
			<div class="map_links">
				<a href="<?php site_url(); ?>/products/?product-too" tite="More about Toonish">More about Toonish</a>
				<a href="<?php site_url(); ?>/for-restaurants" tite="Are you a restaurant?">Are you a restaurant?</a>
			</div>
		</div>
	</div>
</section>

<section class="finding_toonish">
	<div class="finding_toonish_container">
		<div class="finding_toonish_left">
			<h3 class="widget_title">Finding Toonish</h3>
			<div class="default_text">
				<p>The stores marked on the map are supposed to have them in their assortment, but sometimes they just don't, for different reasons. We are working hard on this and striving for making Hooked products available at all supermarkets. But we need your help.</p>
				<p>If you don't see our products in your supermarket, ask the category manager if he or she can add it to the assortment. In that way, we'll together increase the availability of Hooked products and our positive environmental impact.</p>
			</div>
		</div>
		<div class="cloudish">
			<div class="cloudish_text">Read more about our products and what impact we can do by increasing the consumption of plant based seafood.</div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/cloudish.svg" alt="">
		</div>
	</div>
	<div class="finding_toonish_bot dark">
		<a href="<?php site_url(); ?>/products/?impact" class="round_button dark alter" title="Hooked's Impact">
			<strong>Hooked's Impact</strong>
			<span class="circle_small"></span>
			<span class="circle_big"></span>
		</a>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/curves7.svg" alt="" class="curves_bot">
</section> -->

<?php get_footer(); ?>

