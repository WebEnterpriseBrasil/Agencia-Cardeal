<?php 

/*
Template Name: Documentação
*/

?>

<?php get_header(); ?>
<main>
<div class="container">
    <div>
     <h2 class="heading-2">
        <?php the_title()?>
     </h2>
    </div>
    <?php the_content() ?>
</div>
</main>
<?php get_footer(); ?>
