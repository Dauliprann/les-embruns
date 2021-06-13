<section class="pleasure my-2 pt-4 my-md-4 pt-md-5 bg-red">
    <div class="container">
        <h3 class="title_h3 text-center"><?php the_sub_field('title'); ?></h3>
        <p class="text-center"><?php the_sub_field('txt'); ?></p>
        <div class="gifts my-3 row justify-content-around">
            <a href="<?php echo get_sub_field('link'); ?>" class="item d-flex align-items-center justify-content-center" style="background: url('<?php echo get_sub_field('bg_img')['url']; ?>');">
                <div class="text-center">
                    <?php the_sub_field('label_gift');?>
                </div>
            </a>
        </div>
    </div>
</section>