<?php

function filter_projects()
{
    $authors = $_POST['authors'];
    $events = $_POST['events'];
    $products = $_POST['products'];
    $meta_query = array('relation' => 'AND');

    if(empty($authors) && empty($events) && empty($products)){
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
        exit;
    }

    if (!empty($authors)) {
        $meta_query[] = [
            'key'        => 'author',
            'value'        => $authors,
            'compare'   => 'IN'
        ];
    } 
    if (!empty($events)) {
        $meta_query[] = [
            'key'        => 'events',
            'value' => '"('. implode('|', $events) .')"',
            'compare'   => 'REGEXP'
        ];
    }
    if (!empty($products)) {
        $meta_query[] = [
            'key'        => 'products',
            'value'        => $products,
            'compare'   => 'IN'
        ];
    }

    $recipes = new WP_Query([
        'post_type'         => 'recipes',
        'post_status'       => 'publish',
        'posts_per_page'    => -1,
        'orderby'           => 'title',
        'order'             => 'ASC',
        'meta_query' => $meta_query,
    ]);

    if ($recipes->have_posts()) {
        while ($recipes->have_posts()) {
            $recipes->the_post();
            echo get_template_part('templates/section', 'products');
        };
    }else{
        echo '<div id="noresult-js"><h1>No Results!</h1></div>';
    }
    exit;
}
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');
