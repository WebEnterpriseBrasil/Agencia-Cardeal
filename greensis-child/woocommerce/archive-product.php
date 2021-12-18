
<?php get_header(); ?>

<div class="container">
    <section class="loja-texto">
        <div>
        <?php 
        $page_id = 5;  //Page ID
        $page_data = get_page( $page_id ); 

        //store page title and content in variables
        $content = apply_filters('the_content', $page_data->post_content);
        ?>
            <h1>Loja</h1>
            <?php echo $content; ?>
            </div>
        </div>
    </section>
    <section class="servicos">
     <?php echo do_shortcode('[products limit="3" columns="3" orderby="id" order="DESC" visibility="visible"]'); ?>
    </section>
</div>

<?php get_footer(); ?>