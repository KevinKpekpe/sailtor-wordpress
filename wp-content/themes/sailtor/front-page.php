<?php get_header(); ?>
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <?php if (have_rows('heroes_image_1')) : while (have_rows('heroes_image_1')) : the_row() ?>
                    <div class="carousel-item active">
                        <img src="<?php the_sub_field('hero_image_1') ?>" alt="">
                        <div class="carousel-container">
                            <h2><?php the_sub_field('hero_title_1') ?><br></h2>
                            <p><?php the_sub_field('hero_description_1') ?></p>
                            <a href="#featured-services" class="btn-get-started">Get Started</a>
                        </div>
                    </div><!-- End Carousel Item -->
            <?php endwhile;
            endif; ?>

            <?php if (have_rows('heroes_image_2')) : while (have_rows('heroes_image_2')) : the_row() ?>
                    <div class="carousel-item">
                        <img src="<?php the_sub_field('hero_image_2') ?>" alt="">
                        <div class="carousel-container">
                            <h2><?php the_sub_field('hero_title_2') ?><br></h2>
                            <p><?php the_sub_field('hero_description_2') ?></p>
                            <a href="#featured-services" class="btn-get-started">Get Started</a>
                        </div>
                    </div><!-- End Carousel Item -->
            <?php endwhile;
            endif; ?>

            <?php if (have_rows('heroes_image_3')) : while (have_rows('heroes_image_3')) : the_row() ?>
                    <div class="carousel-item">
                        <img src="<?php the_sub_field('hero_image_3') ?>" alt="">
                        <div class="carousel-container">
                            <h2><?php the_sub_field('hero_title_3') ?><br></h2>
                            <p><?php the_sub_field('hero_description_3') ?></p>
                            <a href="#featured-services" class="btn-get-started">Get Started</a>
                        </div>
                    </div><!-- End Carousel Item -->
            <?php endwhile;
            endif; ?>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2><?php the_field('about_title') ?></h2>
            <p><?php the_field('about_description') ?><br></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        <?php the_field('about_content') ?>
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span><?php the_field('about_list_item_1') ?></span></li>
                        <li><i class="bi bi-check2-circle"></i> <span><?php the_field('about_list_item_2') ?></span></li>
                        <li><i class="bi bi-check2-circle"></i> <span><?php the_field('about_list_item_3') ?></span></li>
                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p> <?php the_field('about_sub_content') ?> </p>
                    <a href="about.html" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <?php get_template_part('template-parts/clients'); ?>

    <?php get_template_part('template-parts/services'); ?>
    <section id="portfolio" class="portfolio section">
        <div class="container section-title" data-aos="fade-up">
            <h2><?php _e('Portfolio', 'sailtor'); ?></h2>
            <p><?php _e('Our latest works', 'sailtor'); ?></p>
        </div>
        
    <?php get_template_part('template-parts/portfolio'); ?>
    </section>
</main>
<?php get_footer() ?>