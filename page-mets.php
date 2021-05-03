<?php
/*
Template Name: Nos mets
*/
get_header();

$args = array(
    'post_type' => 'menu',
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
                    <?php if (get_field('menu_place_img', get_the_ID()) == 'left') { ?>
                        <div class="col-md-6 plats">
                            <img src="<?php echo get_the_post_thumbnail_url(''); ?>" alt="Image menu">
                        </div>
                    <?php } ?>
                    <div class="col-md-6 intitules">
                        <h2 class="title_h2"><?php the_title(); ?></h2>
                        <ul class="d-flex align-items-center justify-content-center flex-column">
                            <?php while (have_rows('content_menu')) : the_row(); ?>
                                <li><?php the_sub_field('label'); ?></li>
                            <?php endwhile; ?>
                        </ul>

                    </div>
                    <?php if (get_field('menu_place_img', get_the_ID()) == 'right') { ?>
                        <div class="col-md-6 plats">
                            <img src="<?php echo get_the_post_thumbnail_url(''); ?>" alt="Image menu">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php endwhile;
endif;

get_footer(); ?>

