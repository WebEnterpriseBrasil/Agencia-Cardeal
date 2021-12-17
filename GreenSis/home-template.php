<?php 

/*
Template Name: Home
*/

?>

<?php get_header(); ?>
    <?php
    if( have_rows('home_blocks') ):
        $count = 0;
    // Loop through rows.
    while( have_rows('home_blocks') ) : the_row();

        $text = get_sub_field('home_blocks_text');
        $image = get_sub_field('home_blocks_image');
        $count ++;
    ?>

        <?php if ($count == 1 || $count == 2) { ?>
            <section class="acf <?php 
                if ($count == 1) {
                    echo "foto-sorriso";
                }
                if ($count === 2) {
                    echo 'segunda-sessao';
                }    
            ?>"> 
                <div class="block text left">
                    <div class="inner">
                        <article>
                            <?php echo $text ?>
                        </article>
                    </div>
                </div>
                <div class="block image right"> 
                    <div class="inner">
                        <?php 
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-responsive"  />
                            <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php }
        
        if ($count == 3) { ?>
        <section class="terceira-sessao"> 
            <div class="block text right">
                <div class="inner">
                    <article>
                        <?php echo $text ?>
                    </article>
                </div>
            </div>
            <div class="block image left"> 
                <div class="inner">
                    <?php 
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-responsive"  />
                        <?php endif; ?>
                </div>
            </div>
        </section>

    <?php }

    // End loop.
    endwhile;

    endif;
    ?>
<?php get_footer(); ?>