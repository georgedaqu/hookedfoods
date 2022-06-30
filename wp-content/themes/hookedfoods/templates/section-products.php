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
<article class="articles-js">
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