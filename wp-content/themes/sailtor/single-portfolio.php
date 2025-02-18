<?php get_header(); ?>

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0"><?php the_title(); ?></h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'sailtor'); ?></a></li>
                <li><a href="<?php echo get_post_type_archive_link('portfolio'); ?>"><?php _e('Portfolio', 'sailtor'); ?></a></li>
                <li class="current"><?php the_title(); ?></li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

            <!-- Slider -->
            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": { "delay": 5000 },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            }
                        }
                    </script>
                    
                    <div class="swiper-wrapper align-items-center">
                        <?php
                        $gallery = array_filter([
                            get_field('image_1'),
                            get_field('image_2'),
                            get_field('image_3'),
                            get_field('image_4')
                        ]);
                        
                        foreach($gallery as $image) : ?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($image); ?>" 
                                     alt="<?php echo esc_attr(get_the_title()); ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Informations du projet -->
            <div class="col-lg-4">
                <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                    <h3><?php _e('Project information', 'sailtor'); ?></h3>
                    <ul>
                        <?php 
                        $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                        if($terms) : ?>
                            <li><strong><?php _e('Category', 'sailtor'); ?>:</strong> 
                                <?php foreach($terms as $key => $term) : ?>
                                    <?php if($key > 0) echo ', '; ?>
                                    <a href="<?php echo get_term_link($term); ?>">
                                        <?php echo esc_html($term->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </li>
                        <?php endif; ?>

                        <?php if($client = get_field('client')) : ?>
                            <li><strong><?php _e('Client', 'sailtor'); ?>:</strong> 
                                <?php echo esc_html($client); ?>
                            </li>
                        <?php endif; ?>

                        <?php if($date = get_field('project_date')) : ?>
                            <li><strong><?php _e('Project date', 'sailtor'); ?>:</strong> 
                                <?php echo esc_html($date); ?>
                            </li>
                        <?php endif; ?>

                        <?php if($url = get_field('project_url')) : ?>
                            <li><strong><?php _e('Project URL', 'sailtor'); ?>:</strong> 
                                <a href="<?php echo esc_url($url); ?>" target="_blank">
                                    <?php echo esc_html(parse_url($url, PHP_URL_HOST)); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                    <h2><?php _e('Project description', 'sailtor'); ?></h2>
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
    </div>
</section><!-- /Portfolio Details Section -->

<?php get_footer(); ?>