<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <h2>Hitta ditt drömhem hos oss</h2>
        <p>Vi erbjuder moderna och bekväma bostäder över hela Sverige.</p>
        <a href="<?php echo get_permalink(get_page_by_path('om-oss')); ?>" class="btn">Läs mer</a>
    </div>
</section>

<section class="properties">
    <div class="container">
        <h2>Våra fastigheter</h2>

        <div class="grid">
            <div class="property-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/property1.jpg" alt="Modern Villa">
                <h3>Modern Villa</h3>
                <p>Pris: 4.500.000 kr</p>
            </div>

            <div class="property-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/property2.jpg" alt="Lägenhet i centrum">
                <h3>Lägenhet i Centrum</h3>
                <p>Pris: 2.100.000 kr</p>
            </div>

            <div class="property-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/property3.jpg" alt="Familjehus">
                <h3>Familjehus</h3>
                <p>Pris: 3.200.000 kr</p>
            </div>

            <div class="property-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/property4.jpg" alt="Lyxig bostadsrätt">
                <h3>Lyxig bostadsrätt</h3>
                <p>Pris: 5.750.000 kr</p>
            </div>
        </div>
    </div>
</section>

<section class="properties">
    <div class="container">
        <h2>Nyheter</h2>

        <div class="grid">
            <?php
            $latest_posts = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 4
            ));

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post();
            ?>
                <div class="property-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php else : ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/property1.jpg" alt="<?php the_title_attribute(); ?>">
                        </a>
                    <?php endif; ?>

                   <h3>
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
</h3>

<a href="<?php the_permalink(); ?>" class="read-more-btn">
    Läs mer
</a>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <div class="property-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/property1.jpg" alt="Nyhet">
                    <h3>Inga nyheter ännu</h3>
                    <p>Lägg till nyheter från WordPress adminpanelen för att visa dem här.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>