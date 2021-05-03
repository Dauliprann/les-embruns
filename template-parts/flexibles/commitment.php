<section class="engagements my-4 py-4 bg-red">
    <div class="container">
        <h3 class="title_h2 text-center"><?php the_sub_field('title'); ?></h3>
        <div class="my-3 my-md-5 row">
            <?php if (have_rows('items')) :
                while (have_rows('items')) : the_row(); ?>
                    <div class="col-md-4 item">
                        <img src="<?php echo get_sub_field('img')['sizes']['medium']; ?>" alt="">
                        <p><?php the_sub_field('desc'); ?></p>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
        <div class="text-center">
            <a href="<?php echo get_sub_field('button')['link']; ?>" class="button"><?php echo get_sub_field('button')['label']; ?></a>
        </div>
    </div>
</section>