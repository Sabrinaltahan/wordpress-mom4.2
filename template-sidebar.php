<?php
/*
Template Name: Sida med sidebar
*/
get_header();
?>

<section class="page-with-sidebar">
    <div class="container two-column-layout">
        <main class="main-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    echo '<h1>' . get_the_title() . '</h1>';
                    the_content();
                endwhile;
            endif;
            ?>
        </main>

        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</section>

<?php get_footer(); ?>