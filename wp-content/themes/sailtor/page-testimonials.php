<?php
/*
Template Name: Page des Témoignages
*/
get_header();
?>
<main class="main">
    <!-- Titre de la Page -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Témoignages</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo home_url(); ?>">Accueil</a></li>
                    <li class="current">Témoignages</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Section Témoignages -->
    <section id="testimonials" class="testimonials section">
        <div class="container">
            <div class="row gy-4">
                <?php
                $args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                );
                $testimonials = get_posts( $args );
                $count = 0;
                foreach ( $testimonials as $testimonial ) {
                    $count++;
                    $delay = $count * 100;
                    ?>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <div class="testimonial-item">
                            <?php
                            $image_src = has_post_thumbnail( $testimonial->ID ) ? get_the_post_thumbnail_url( $testimonial->ID, 'medium' ) : get_template_directory_URI() . '/assets/img/testimonials/testimonials-' . $count . '.jpg';
                            ?>
                            <img src="<?php echo $image_src; ?>" class="testimonial-img" alt="">
                            <h3><?php echo get_the_title( $testimonial->ID ); ?></h3>
                            <h4><?php echo get_post_meta( $testimonial->ID, 'job_title', true ); ?></h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span><?php echo $testimonial->post_content; ?></span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>