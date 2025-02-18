<?php
/*
Template Name: About Page
*/
get_header();
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">About</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="current">About</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->



  <!-- About 2 Section -->
  <section id="about-2" class="about-2 section">
    <div class="container" data-aos="fade-up">
      <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-5">
          <div class="about-img">
            <?php
            $about_image = get_field('about_portrait_image');
            if ($about_image): ?>
              <img src="<?php echo esc_url($about_image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($about_image['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-7">
          <h3 class="pt-0 pt-lg-5"><?php the_field('about_heading'); ?></h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li>
              <a class="nav-link active" data-bs-toggle="pill" href="#about-2-tab1">
                <?php the_field('tab1_label'); ?>
              </a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#about-2-tab2">
                <?php the_field('tab2_label'); ?>
              </a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#about-2-tab3">
                <?php the_field('tab3_label'); ?>
              </a>
            </li>
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="about-2-tab1">
              <?php the_field('tab1_content'); ?>
            </div><!-- End Tab 1 Content -->

            <div class="tab-pane fade" id="about-2-tab2">
              <?php the_field('tab2_content'); ?>
            </div><!-- End Tab 2 Content -->

            <div class="tab-pane fade" id="about-2-tab3">
              <?php the_field('tab3_content'); ?>
            </div><!-- End Tab 3 Content -->

          </div>

        </div>
      </div>
    </div>
  </section><!-- /About 2 Section -->


  <!-- Stats Section -->
  <section id="stats" class="stats section light-background">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">

        <?php
        $clients       = get_field('nombre_de_clients') ?: 232;
        $projets       = get_field('nombre_de_projets') ?: 521;
        $heures        = get_field('heures_de_support') ?: 1453;
        $collaborateurs = get_field('nombre_de_collaborateurs') ?: 32;
        ?>

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0"
              data-purecounter-end="<?php echo esc_attr($clients); ?>"
              data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Clients</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0"
              data-purecounter-end="<?php echo esc_attr($projets); ?>"
              data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0"
              data-purecounter-end="<?php echo esc_attr($heures); ?>"
              data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0"
              data-purecounter-end="<?php echo esc_attr($collaborateurs); ?>"
              data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Workers</p>
          </div>
        </div><!-- End Stats Item -->

      </div>
    </div>
  </section>
  <!-- /Stats Section -->

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
<?php
  $skills_title    = get_theme_mod( 'skills_section_title', 'Skills' );
$skills_subtitle = get_theme_mod( 'skills_section_subtitle', 'Check Our Skills' );

// Récupération des données pour chaque skill
$skills = [
    [
        'name'       => get_theme_mod( 'skill1_name', 'HTML' ),
        'percentage' => get_theme_mod( 'skill1_percentage', 100 ),
    ],
    [
        'name'       => get_theme_mod( 'skill2_name', 'CSS' ),
        'percentage' => get_theme_mod( 'skill2_percentage', 90 ),
    ],
    [
        'name'       => get_theme_mod( 'skill3_name', 'JavaScript' ),
        'percentage' => get_theme_mod( 'skill3_percentage', 75 ),
    ],
    [
        'name'       => get_theme_mod( 'skill4_name', 'PHP' ),
        'percentage' => get_theme_mod( 'skill4_percentage', 80 ),
    ],
    [
        'name'       => get_theme_mod( 'skill5_name', 'WordPress/CMS' ),
        'percentage' => get_theme_mod( 'skill5_percentage', 90 ),
    ],
    [
        'name'       => get_theme_mod( 'skill6_name', 'Photoshop' ),
        'percentage' => get_theme_mod( 'skill6_percentage', 55 ),
    ],
];
?>

<!-- Skills Section -->
<section id="skills" class="skills section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2><?php echo esc_html( $skills_title ); ?></h2>
    <p><?php echo esc_html( $skills_subtitle ); ?><br></p>
  </div><!-- End Section Title -->
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row skills-content skills-animation">
      
      <!-- Première colonne : 3 compétences -->
      <div class="col-lg-6">
        <?php for ( $i = 0; $i < 3; $i++ ) : 
          $skill = $skills[ $i ];
          ?>
          <div class="progress">
            <span class="skill">
              <span><?php echo esc_html( $skill['name'] ); ?></span>
              <i class="val"><?php echo esc_html( $skill['percentage'] ); ?>%</i>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar"
                   aria-valuenow="<?php echo esc_attr( $skill['percentage'] ); ?>"
                   aria-valuemin="0"
                   aria-valuemax="100"
                   style="width: <?php echo esc_attr( $skill['percentage'] ); ?>%;">
              </div>
            </div>
          </div><!-- End Skills Item -->
        <?php endfor; ?>
      </div>
      
      <!-- Seconde colonne : 3 compétences -->
      <div class="col-lg-6">
        <?php for ( $i = 3; $i < 6; $i++ ) : 
          $skill = $skills[ $i ];
          ?>
          <div class="progress">
            <span class="skill">
              <span><?php echo esc_html( $skill['name'] ); ?></span>
              <i class="val"><?php echo esc_html( $skill['percentage'] ); ?>%</i>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar"
                   aria-valuenow="<?php echo esc_attr( $skill['percentage'] ); ?>"
                   aria-valuemin="0"
                   aria-valuemax="100"
                   style="width: <?php echo esc_attr( $skill['percentage'] ); ?>%;">
              </div>
            </div>
          </div><!-- End Skills Item -->
        <?php endfor; ?>
      </div>
      
    </div>
  </div>
</section><!-- /Skills Section -->



</main>

<?php get_footer(); ?>