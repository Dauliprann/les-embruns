<section class="my-4 py-5<?php if (get_sub_field('bg_pink')) { ?> bg-red<?php }; ?>">
    <div class="container">
        <?php if (get_sub_field('title_type') == 0) { ?>
            <h3 class="title_h3 text-center"><?php the_sub_field('title'); ?></h3>
        <?php } else { ?>
            <h2 class="title_h2 text-center"><?php the_sub_field('title'); ?></h2>
        <?php } ?>
        <div class="my-4"><?php echo nl2br(get_sub_field('text')); ?></div>
        <?php if (get_sub_field('show_button') == 1 && get_sub_field('button')) { ?>
            <div class="text-center mt-3">
                <a href="<?php echo get_sub_field('button')['link']; ?>" class="button"><?php echo get_sub_field('button')['label']; ?></a>
            </div>
        <?php } ?>
    </div>
</section>