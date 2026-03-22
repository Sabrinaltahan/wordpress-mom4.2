<?php get_header(); ?>

<section class="contact-page">
    <div class="container">
        <div class="contact-box">
            <h1>Kontakta oss</h1>
            <p class="contact-intro">
                Har du frågor eller vill du boka en värdering? Fyll i formuläret nedan så återkommer vi så snart som möjligt.
            </p>

            <div class="contact-form-wrap">
                <?php the_content(); ?>
            </div>

            <div class="contact-details">
                <strong>RealEstate AB</strong><br>
                Sveavägen 155, 113 46 Stockholm<br>
                Telefon: 08-234 567<br>
                E-post: info@realestate.se<br>
                Öppettider:<br>
                Mån–Fre: 09.00–17.00<br>
                Lör: 10.00–14.00
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>