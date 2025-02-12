<?php get_header(); ?>
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <?php if(have_rows('heroes_image_1')) : while(have_rows('heroes_image_1')) : the_row()?>
                <div class="carousel-item active">
                <img src="<?php the_sub_field('hero_image_1') ?>" alt="">
                <div class="carousel-container">
                    <h2><?php the_sub_field('hero_title_1') ?><br></h2>
                    <p><?php the_sub_field('hero_description_1') ?></p>
                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->
            <?php endwhile; endif; ?>

            <?php if(have_rows('heroes_image_2')) : while(have_rows('heroes_image_2')) : the_row()?>
                <div class="carousel-item">
                <img src="<?php the_sub_field('hero_image_2') ?>" alt="">
                <div class="carousel-container">
                    <h2><?php the_sub_field('hero_title_2') ?><br></h2>
                    <p><?php the_sub_field('hero_description_2') ?></p>
                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->
            <?php endwhile; endif; ?>

            <?php if(have_rows('heroes_image_3')) : while(have_rows('heroes_image_3')) : the_row()?>
                <div class="carousel-item">
                <img src="<?php the_sub_field('hero_image_3') ?>" alt="">
                <div class="carousel-container">
                    <h2><?php the_sub_field('hero_title_3') ?><br></h2>
                    <p><?php the_sub_field('hero_description_3') ?></p>
                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->
            <?php endwhile; endif; ?>

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
    <!-- Services Section -->
    <section id="services" class="services section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-briefcase icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-card-checklist icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-bar-chart icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-binoculars icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-brightness-high icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Necessitatibus eius consequatur</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Card</li>
                    <li data-filter=".filter-branding">Web</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

</main>
<?php get_footer() ?>