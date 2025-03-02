
        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <!-- Filtres dynamiques -->
                <?php
                $terms = get_terms([
                    'taxonomy' => 'portfolio_category',
                    'hide_empty' => true,
                    'orderby' => 'include' 
                ]);

                if (!empty($terms)) : ?>
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active"><?php _e('All', 'sailtor'); ?></li>
                        <?php foreach ($terms as $term) : ?>
                            <li data-filter=".filter-<?php echo sanitize_title($term->slug); ?>">
                                <?php echo esc_html($term->name); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <!-- Items de portfolio -->
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <?php
                    $portfolio_query = new WP_Query([
                        'post_type' => 'portfolio',
                        'posts_per_page' => 9,
                        'order' => 'ASC'
                    ]);

                    while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                        $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                        $filter_class = $terms ? ' filter-' . sanitize_title($terms[0]->slug) : '';
                    ?>

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item<?php echo $filter_class; ?>">
                            <div class="image-wrapper">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('portfolio-thumbnail', [
                                        'class' => 'img-fluid',
                                        'alt' => esc_attr(get_the_title())
                                    ]); ?>
                                <?php endif; ?>

                                <div class="portfolio-info">
                                    <h4><?php the_title(); ?></h4>
                                    <?php if ($client = get_field('client')) : ?>
                                        <p><?php echo esc_html($client); ?></p>
                                    <?php endif; ?>

                                    <div class="portfolio-links">
                                        <?php
                                        $gallery = array_filter([
                                            get_field('image_1'),
                                            get_field('image_2'),
                                            get_field('image_3'),
                                            get_field('image_4')
                                        ]);

                                        if (!empty($gallery)) : ?>
                                            <a href="<?php echo esc_url($gallery[0]); ?>"
                                                class="glightbox preview-link"
                                                data-gallery="gallery-<?php the_ID(); ?>">
                                                <i class="bi bi-zoom-in"></i>
                                            </a>
                                            <?php foreach (array_slice($gallery, 1) as $image) : ?>
                                                <a href="<?php echo esc_url($image); ?>"
                                                    class="glightbox"
                                                    data-gallery="gallery-<?php the_ID(); ?>"
                                                    style="display: none;"></a>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                        <a href="<?php the_permalink(); ?>" class="details-link">
                                            <i class="bi bi-link-45deg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
