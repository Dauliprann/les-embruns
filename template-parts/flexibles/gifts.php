<section class="pleasure my-4 py-5 bg-red">
    <div class="container">
        <h3 class="title_h3 text-center"><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('txt'); ?></p>
        <div class="gifts my-3 row justify-content-around">
            <a href="<?php echo get_sub_field('link'); ?>" class="col-5 col-md-3 item d-flex align-items-center justify-content-center cheque">
                <div class="text-center">
                    <?php the_sub_field('label_gift_1');?>
                </div>
            </a>
            <a href="<?php echo get_sub_field('link'); ?>" class="col-5 col-md-3 item d-flex align-items-center justify-content-center coffret">
                <div class="text-center">
                    <?php the_sub_field('label_gift_2');?>
                </div>
            </a>
        </div>
    </div>
</section>