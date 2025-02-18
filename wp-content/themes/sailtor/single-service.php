<?php get_header(); ?>
<main class="main">
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0"><?php the_title(); ?></h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'sailtor'); ?></a></li>
                <li><a href="<?php echo get_post_type_archive_link('service'); ?>"><?php _e('Service', 'sailtor'); ?></a></li>
                <li class="current"><?php the_title(); ?></li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">

                <!-- Sidebar -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="services-list">
                        <?php
                        $current_service_id = get_the_ID();

                        $services_query = new WP_Query(array(
                            'post_type' => 'service',
                            'posts_per_page' => -1,
                            'post_status' => 'publish'
                        ));

                        if ($services_query->have_posts()) :
                            while ($services_query->have_posts()) : $services_query->the_post();
                                $is_active = get_the_ID() === $current_service_id; ?>

                                <a href="<?php the_permalink(); ?>"
                                    <?php if ($is_active) echo 'class="active"'; ?>>
                                    <?php the_title(); ?>
                                </a>

                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>

                    <?php if ($excerpt = get_field('service_excerpt')) : ?>
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo esc_html($excerpt); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Contenu principal -->
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>"
                            alt="<?php the_title_attribute(); ?>"
                            class="img-fluid services-img">
                    <?php endif; ?>

                    <h3><?php the_title(); ?></h3>

                    <?php the_content(); ?>

                    <?php
                    $features = get_field('caracteristiques');
                    $icon_class = get_field('icon_class');

                    if ($features) : ?>
                        <ul>
                            <?php foreach (['caracteristique_1', 'caracteristique_2', 'caracteristique_3'] as $field) :
                                if (!empty($features[$field])) : ?>
                                    <li>
                                        <?php if ($icon_class) : ?>
                                            <i class="<?php echo esc_attr($icon_class); ?>"></i>
                                        <?php endif; ?>
                                        <span><?php echo esc_html($features[$field]); ?></span>
                                    </li>
                            <?php endif;
                            endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if ($service_link = get_field('service_link')) : ?>
                        <div class="mt-4">
                            <a href="<?php echo esc_url($service_link); ?>"
                                class="btn btn-primary"
                                target="_blank">
                                <?php _e('Discover the service', 'sailtor'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>