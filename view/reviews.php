<section class="reviews">
    <div class="contain">
        <div class="reviews__arrow"></div>
        <h1 class="block_title">ОТЗЫВЫ</h1>
        <?php if ( $my_query->have_posts() ) {
            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <div class="reviews__box">
                    <iframe width="100%" height="315" src="<?php echo get_post_meta( get_the_ID(), "place", 1 ); ?>"
                            frameborder="0" allowfullscreen=""></iframe>
                </div>
            <?php endwhile;
        }
        wp_reset_query(); ?>
    </div>
</section>