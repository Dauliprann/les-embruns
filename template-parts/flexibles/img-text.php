<section class="my-5">
    <div class="container">
        <div class="row">
            <?php if (get_sub_field('place_img')=='gauche') { ?>
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div<?php if (get_sub_field('show_deco')==1) { ?> class="deco"<?php } ?>>
                    <img src="<?php echo get_sub_field('img')['sizes']['large']; ?>" alt="Image d'accueil">
                </div>
            </div>
            <?php } ?>
            <div class="col-lg-6">
                <h2 class="title_h2"><?php the_sub_field('title'); ?></h2>
                <div class="py-3">
                    <?php echo nl2br(get_sub_field('content')); ?>
                </div>
                <?php if (get_sub_field('show_button')==1  && get_sub_field('button')) { ?>
                <div class="text-center mt-3">
                    <a href="<?php echo get_sub_field('button')['link']; ?>" class="button">
                        <?php echo get_sub_field('button')['label']; ?>
                    </a>
                </div>
                <?php } ?>
            </div>
            <?php if (get_sub_field('place_img')=='droite') { ?>
                <div class="col-lg-6 mt-3 mt-lg-0">
                    <div<?php if (get_sub_field('show_deco')==1) { ?> class="deco"<?php } ?>>
                        <img src="<?php echo get_sub_field('img')['sizes']['large']; ?>" alt="Image d'accueil">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>