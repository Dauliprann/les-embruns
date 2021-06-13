<?php
/*
Template Name: Nos vins
*/
get_header();

$wine_types = get_terms([
    'taxonomy' => "wine_type",
    'hide_empty' => true,
]);

$wine_categories = get_terms([
    'taxonomy' => "wine_category",
    'hide_empty' => true,
]);

foreach ($wine_types as $wine_type) { ?>
    <section class="<?php echo $wine_type->slug; ?> my-4">
        <div class="container">
            <img class="wine-header" src="<?php echo get_field('wine_type_img', $wine_type->taxonomy.'_'.$wine_type->term_id)['sizes']['large']; ?>" alt="Image vin blanc">
            <h2 class="title_h2 mt-3">Nos <?php echo $wine_type->name; ?></h2>
            <?php
            foreach ($wine_categories as $wine_category) {
                $args = array(
                    'post_type' => 'vins',
                    'posts_per_page' => 100,
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'wine_type',
                            'field' => 'slug',
                            'terms' => array($wine_type->slug)
                        ),
                        array(
                            'taxonomy' => 'wine_category',
                            'field' => 'slug',
                            'terms' => array($wine_category->slug)
                        ),
                    )
                );
                $wp_query = new WP_Query($args);
?>

                <div<?php if ($wine_category->slug == 'coup-de-coeur') { ?> class="heart-stroke"<?php } ?>>
                    <?php if ($wine_category->slug == 'coup-de-coeur') { ?><h4 class="title_h4"><i class="fa fa-heart"></i>Nos coups de cœur</h4><?php } ?>
                    <ul class="row">
                        <?php while ($wp_query->have_posts()) {
                            $wp_query->the_post(); ?>
                            <li class="col-md-6"><i class="fa fa-circle" style="color:<?php echo get_field('bullet_color',$wine_type->taxonomy.'_'.$wine_type->term_id) ?>;"></i><?php the_title() ?><?php if (!empty(get_field('wine_prod', get_the_ID()))) { echo ', '.get_field('wine_prod', get_the_ID()); } ?><?php if (!empty(get_field('wine_year', get_the_ID()))) { echo ', '.get_field('wine_year', get_the_ID()); } ?></li>
                        <?php } ?>
                    </ul>
                </div>

            <?php }
            wp_reset_query();
            ?>
        </div>
    </section>
<?php } ?>

<div class="container my-3 my-md-5">
    <div class="text-center mt-3">
        <a href="<?php echo get_field('button_book')['link']; ?>" class="button">
            <?php echo get_field('button_book')['label']; ?>
        </a>
    </div>
</div>

<?php get_footer(); ?>
