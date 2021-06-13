<?php
/*
Template Name: Contact
*/
get_header();
?>


<section class="my-4 py-md-3">
    <div class="container">
        <h2 class="title_h2">Restaurant Les Embruns, Bistrot Gourmand, Île de Ré</h2>
        <?php the_content(); ?>
    </div>
</section>

<section class="my-4 py-md-3">
    <div class="container contact_form">
        <h2 class="title_h2">Contactez-nous</h2>
        <?php echo do_shortcode('[contact-form-7 id="28834" title="Formulaire de contact"]'); ?>
        <?php the_field('maps'); ?>
    </div>
</section>

<section class="mt-4 py-md-3 bg-red">
    <div class="container">
        <h2 class="title_h2">Nos partenaires</h2>
        <div class="row">
            <?php if (have_rows('partenaires')) :
                while (have_rows('partenaires')) : the_row(); ?>
                    <div class="col-4 col-md-2 d-flex align-items-center justify-content-center mb-3"><a target="_blank" href="<?php the_sub_field('link'); ?>"><img src="<?php echo get_sub_field('logo')['url']; ?>" alt=""></a></div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

