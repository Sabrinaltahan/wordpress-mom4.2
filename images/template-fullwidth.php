<?php
/*
Template Name: Fullbredd sida
*/
get_header();
?>

<section class="page-fullwidth">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                echo '<h1>' . get_the_title() . '</h1>';
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>