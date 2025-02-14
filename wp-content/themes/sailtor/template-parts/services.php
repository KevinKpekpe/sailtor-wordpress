<section id="services" class="services section">
    <div class="container">
        <div class="row gy-4">
            <?php
            $services_query = new WP_Query(array(
                'post_type'      => 'service',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC'
            ));

            $animation_delay = 100;

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
                    $icon_class = get_field('icon_class');
                    $service_link = get_field('service_link');
                    $custom_excerpt = get_field('service_excerpt');
            ?>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $animation_delay; ?>">
                        <div class="service-item d-flex position-relative h-100">
                            <?php if ($icon_class) : ?>
                                <i class="bi <?php echo esc_attr($icon_class); ?> icon flex-shrink-0"></i>
                            <?php endif; ?>

                            <div>
                                <h4 class="title">
                                    <a href="<?php echo $service_link ? esc_url($service_link) : get_permalink(); ?>"
                                        class="stretched-link">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <?php if ($custom_excerpt) : ?>
                                    <p class="description"><?php echo esc_html(the_excerpt()); ?></p>
                                <?php else : ?>
                                    <p class="description"><?php echo get_the_excerpt(); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

            <?php
                    $animation_delay += 100;
                endwhile;
            else :
                echo '<p>Aucun service à afficher pour le moment.</p>';
            endif;

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>