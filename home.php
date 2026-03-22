<?php get_header(); ?>

<section class="properties">
    <div class="container">
        <h2>Nyheter</h2>

        <div class="grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <div class="property-card">

                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php else : ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/property1.jpg" alt="">
                        </a>
                    <?php endif; ?>

                    <a href="<?php the_permalink(); ?>">
                       <h3>
                       <a href="<?php the_permalink(); ?>">
                     <?php the_title(); ?>
                         </a>
                         </h3>

<a href="<?php the_permalink(); ?>" class="read-more-btn">
    Läs mer
</a>
                        <span class="date"><?php echo get_the_date(); ?></span>
                    </a>

                </div>

            <?php endwhile; else : ?>
                <p>Inga nyheter hittades.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>