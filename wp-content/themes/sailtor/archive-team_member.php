<?php get_header(); ?>
<main class="main">
<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Team</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'sailtor'); ?></a></li>
                <li class="current">Team</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->
    <!-- Team Section -->
    <section id="team" class="team section">
        <div class="container">
            <div class="row gy-4">
                <?php
                $args = array(
                    'post_type'      => 'team_member',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC'
                );
                $team_query = new WP_Query($args);
                if ($team_query->have_posts()) :
                    $delay = 100;
                    while ($team_query->have_posts()) : $team_query->the_post();
                        $job_title = get_field('job_title');
                        $twitter   = get_field('twitter');
                        $facebook  = get_field('facebook');
                        $instagram = get_field('instagram');
                        $linkedin  = get_field('linkedin');
                ?>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($delay); ?>">
                            <div class="team-member d-flex align-items-start">
                                <div class="pic">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => get_the_title()));
                                    }
                                    ?>
                                </div>
                                <div class="member-info">
                                    <h4><?php the_title(); ?></h4>
                                    <?php if ($job_title) : ?>
                                        <span><?php echo esc_html($job_title); ?></span>
                                    <?php endif; ?>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="social">
                                        <?php if ($twitter) : ?>
                                            <a href="<?php echo esc_url($twitter); ?>"><i class="bi bi-twitter-x"></i></a>
                                        <?php endif; ?>
                                        <?php if ($facebook) : ?>
                                            <a href="<?php echo esc_url($facebook); ?>"><i class="bi bi-facebook"></i></a>
                                        <?php endif; ?>
                                        <?php if ($instagram) : ?>
                                            <a href="<?php echo esc_url($instagram); ?>"><i class="bi bi-instagram"></i></a>
                                        <?php endif; ?>
                                        <?php if ($linkedin) : ?>
                                            <a href="<?php echo esc_url($linkedin); ?>"><i class="bi bi-linkedin"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                <?php
                        $delay += 100; // Incrémenter le délai pour l'animation
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>' . __('Aucun membre trouvé.', 'mytheme') . '</p>';
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- /Team Section -->

</main>
<?php get_footer() ?>