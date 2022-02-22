<?php 

/*
Template Name: Sis
*/

?>

<?php get_header(); ?>
<main>
    
    <div class="container">    
    <?php 
        if( have_rows('sis') ):
            while ( have_rows('sis') ) : the_row();
            $about = get_sub_field('about');
            $phrase_sis = get_sub_field('phrase_sis');
    ?>  
        <section class="Sis">
        <h2 class="heading-2">Sis</h2>
        <div class="boxes">
            <div class="box left"> 
                <?php 
                    echo $about;
                ?>   
            </div>
            <div class="box right">
                <?php 
                    echo $phrase_sis;?>  
            </div>
        </div>
        </section>

        <?php
            endwhile;
            else :
            endif;
        ?>
        <?php 
            if( have_rows('fale_com') ):
                $count = 0;
                while ( have_rows('fale_com') ) : the_row();
                    $name = get_sub_field('name');
                    $photo = get_sub_field('photo');
                    $about_fc = get_sub_field('about');
                    $email = get_sub_field('mail');
                    $count ++;
        ?>  

        <section class="
            <?php 
                if ($count == 1) {
                    echo "One";
                }
                if ($count == 2) {
                    echo 'Two';
                }    
            ?>"> 
            <div class="boxes <?php  if ($count == 1) { echo "reverse";} ?>">
                <div class="box <?php  if ($count == 1) { echo "right";} if ($count == 2) { echo 'left';}  ?>">
                    <p> <strong class="heading-4"><?php echo $name ?> </strong> <BR>
                    <?php echo $about_fc?> </p>
                </div>
                <div class="box <?php  if ($count == 1) { echo "left";} if ($count == 2) { echo 'right';}  ?>">                
                   <figure>
                        <img src="<?php echo $photo ?>" class="One img-responsive"  >
                        <a href="mailto:<?php echo $email ?>" class="btn-gs">Fale com a <?php  if ($count == 1) { echo "Bia";} if ($count == 2) { echo 'Carol';}  ?></a> 
                   </figure>
                     
                </div>
            </div>
        </section>
        <?php 
                endwhile;
            endif;
        ?>
</div>
</main>


<?php get_footer(); ?>