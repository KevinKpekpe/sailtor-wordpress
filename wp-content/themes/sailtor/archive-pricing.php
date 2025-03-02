<?php get_header(); ?>
<main class="main">

    <!-- Titre de la page -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Pricing</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="current">Pricing</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Section de tarification -->
    <section id="pricing" class="pricing section">
        <div class="container">
            <div class="row gy-3">
                <?php
                // Récupérer tous les plans tarifaires
                $args = array(
                    'post_type' => 'pricing',
                    'posts_per_page' => -1,
                );
                $pricing_query = new WP_Query($args);
                $delay = 100;

                if ($pricing_query->have_posts()) :
                    while ($pricing_query->have_posts()) : $pricing_query->the_post();
                        $plan_price = get_field('plan_price');
                        $plan_features = get_field('plan_features');
                        $is_featured = get_field('is_featured');
                        $is_advanced = get_field('is_advanced_');

                        // Classes dynamiques
                        $plan_class = 'pricing-item';
                        if ($is_featured) $plan_class .= ' featured';

                        // Parser les fonctionnalités
                        $features_list = explode("\n", $plan_features);
                ?>
                        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                            <div class="<?php echo $plan_class; ?>">
                                <?php if ($is_advanced) : ?>
                                    <span class="advanced">Avancé</span>
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                                <h4><sup>$</sup><?php echo esc_html($plan_price); ?><span> / mois</span></h4>
                                <ul>
                                    <?php
                                    foreach ($features_list as $feature) {
                                        $feature = trim($feature);
                                        if (!empty($feature)) {
                                            if (strpos($feature, '-') === 0) {
                                                $feature_name = substr($feature, 1);
                                                echo '<li class="na">' . esc_html($feature_name) . '</li>';
                                            } else {
                                                echo '<li>' . esc_html($feature) . '</li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-buy">Acheter</a>
                                </div>
                            </div>
                        </div>
                <?php
                        $delay += 100;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

</main>
<?php get_footer() ?>