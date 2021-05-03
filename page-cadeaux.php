<?php
/*
Template Name: Pour offrir
*/
get_header();

$args = array(
    'post_type' => 'cadeau',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'ASC',
);

$my_query = new WP_Query($args);
?>

<?php if ($my_query->have_posts()) :
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <section class="my-4 py-md-3">
            <div class="container">
                <div class="row">
                    <?php if (get_field('gift_place_img', get_the_ID()) == 'left') { ?>
                        <div class="col-md-6 plats">
                            <img src="<?php echo get_the_post_thumbnail_url(''); ?>" alt="Image cadeaux">
                        </div>
                    <?php } ?>
                    <div class="col-md-6 intitules">
                        <h2 class="title_h2"><?php the_title(); ?></h2>
                        <ul class="d-flex align-items-center justify-content-center flex-column">
                            <?php while (have_rows('gift_list')) : the_row(); ?>
                                <li><?php the_sub_field('item'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php if (get_field('gift_place_img', get_the_ID()) == 'right') { ?>
                        <div class="col-md-6 plats">
                            <img src="<?php echo get_the_post_thumbnail_url(''); ?>" alt="Image cadeaux">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php endwhile;
    wp_reset_query();
endif; ?>

<div class="container my-3 my-md-5">
    <div class="text-center mt-3">
        <a href="<?php echo get_field('contact_button')['link']; ?>" class="button">
            <?php echo get_field('contact_button')['label']; ?>
        </a>
    </div>
</div>

<?php get_footer(); ?>

