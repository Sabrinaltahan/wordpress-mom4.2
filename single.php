<?php get_header(); ?>

<section class="single-news">
    <div class="container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article>
                <h1><?php the_title(); ?></h1>

                <p class="date"><?php echo get_the_date(); ?></p>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; endif; ?>

    </div>
</section>

<?php get_footer(); ?>