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
                while ( have_rows('fale_com') ) : the_row();
                    $name = get_sub_field('name');
                    $photo = get_sub_field('photo');
                    $about_fc = get_sub_field('about');
        ?>  
        <section class="One">
            <div class="boxes reverse">
                <div class="box right">
                    <p> <strong class="heading-4"><?php echo $name ?> </strong> <BR>
                    <?php echo $about_fc?> </p>
                </div>
                <div class="box left">                
                   <figure>
                        <img src="<?php echo $photo ?>" class="One img-responsive"  alt="Entrevistado" >
                        <a href="mailto:#" class="btn-gs">Fale com a Bia </a> 
                   </figure>
                     
                </div>
            </div>
        </section>
        
        <section class="Two">
            <div class="boxes">
                <div class="box left">                
                    <p> <strong class="heading-4"><?php echo $name ?> </strong><br>
                    <?php echo $about_fc?> </p>
                 </div>
                 <div class="box right">
                     <figure>
                     <img src="<?php echo $photo ?>" class="Two img-responsive"  alt="Entrevistado" >
                  
                        <a href="mailto:#" class="btn-gs">Fale com a Carol</a>
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