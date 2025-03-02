<?php

/**
 * Template Name: Contact
 */

get_header();
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0"><?php the_field('titre_de_la_page'); ?></h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li class="current">Contact</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <?php the_field('google_maps_embed_code'); ?>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p><?php the_field('adresse'); ?></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p><?php the_field('numero_de_telephone'); ?></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p><?php the_field('adresse_email'); ?></p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                <?= do_shortcode('[contact-form-7 id="1672ffd" title="" html_class="php-email-form"]') ?>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>

<?php
get_footer();
?>