<?php if (have_rows('flexible_content')) :
    while (have_rows('flexible_content')) : the_row();
        if (get_row_layout() == 'img_text') :
            get_template_part('template-parts/flexibles/img-text');
        elseif (get_row_layout() == 'standard') :
            get_template_part('template-parts/flexibles/standard');
        elseif (get_row_layout() == 'gifts') :
            get_template_part('template-parts/flexibles/gifts');
        elseif (get_row_layout() == 'commitment') :
            get_template_part('template-parts/flexibles/commitment');
        endif;
    endwhile;
endif; ?>