<?php get_header(); ?>
<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0"><?php the_title(); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <div class="container">
    <div class="row">
      <div class="col-lg-8">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
              <div class="container">
                <article class="article">

                  <div class="post-img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                    <?php endif; ?>
                  </div>

                  <h2 class="title"><?php the_title(); ?></h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                          <?php the_author(); ?>
                        </a>
                      </li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                        <a href="<?php the_permalink(); ?>">
                          <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                            <?php echo get_the_date(); ?>
                          </time>
                        </a>
                      </li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                        <a href="<?php comments_link(); ?>">
                          <?php comments_number('0 Commentaires', '1 Commentaire', '% Commentaires'); ?>
                        </a>
                      </li>
                    </ul>
                  </div><!-- End meta top -->

                  <div class="content">
                    <?php the_content(); ?>
                  </div><!-- End post content -->

                  <div class="meta-bottom">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                      <?php the_category(', '); ?>
                    </ul>

                    <i class="bi bi-tags"></i>
                    <ul class="tags">
                      <?php the_tags('<li>', '</li><li>', '</li>'); ?>
                    </ul>
                  </div><!-- End meta bottom -->

                </article>
              </div>
            </section><!-- /Blog Details Section -->

            <?php if (comments_open() || absint(get_comments_number()) > 0) {
                comments_template();
            } ?>

          <?php endwhile;
        else: ?>
          <p>Désolé, cet article n’existe pas.</p>
        <?php endif; ?>

      </div>
      <div class="col-lg-4 sidebar">
        <div class="widgets-container">

          <!-- Search Widget -->
          <div class="search-widget widget-item">
            <h3 class="widget-title"><?php esc_html_e('Recherche', 'textdomain'); ?></h3>
            <?php get_search_form(); ?>
          </div><!--/Search Widget -->

          <!-- Categories Widget -->
          <div class="categories-widget widget-item">
            <h3 class="widget-title"><?php esc_html_e('Catégories', 'textdomain'); ?></h3>
            <ul class="mt-3">
              <?php
              wp_list_categories(array(
                'title_li'   => '',
                'show_count' => true,
                'style'      => 'list',
                'hide_empty' => false,
              ));
              ?>
            </ul>
          </div><!--/Categories Widget -->

          <!-- Recent Posts Widget -->
          <div class="recent-posts-widget widget-item">
            <h3 class="widget-title"><?php esc_html_e('Articles Récents', 'textdomain'); ?></h3>
            <?php
            $recent_posts = wp_get_recent_posts(array(
              'numberposts' => 5,
              'post_status' => 'publish'
            ));
            foreach ($recent_posts as $post) : ?>
              <div class="post-item">
                <a href="<?php echo esc_url(get_permalink($post['ID'])); ?>">
                  <?php if (has_post_thumbnail($post['ID'])) : ?>
                    <?php echo get_the_post_thumbnail($post['ID'], 'custom-thumbnail', array('class' => 'flex-shrink-0')); ?>
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/default-thumbnail.jpg'); ?>" alt="<?php esc_attr_e('Miniature', 'textdomain'); ?>" class="flex-shrink-0">
                  <?php endif; ?>
                </a>
                <div>
                  <h4><a href="<?php echo esc_url(get_permalink($post['ID'])); ?>"><?php echo esc_html($post['post_title']); ?></a></h4>
                  <time datetime="<?php echo esc_attr(get_the_date('c', $post['ID'])); ?>"><?php echo get_the_date('', $post['ID']); ?></time>
                </div>
              </div><!-- End recent post item-->
            <?php endforeach;
            wp_reset_query();
            ?>
          </div><!--/Recent Posts Widget -->
        </div>
      </div>

    </div>
  </div>

</main>
<?php get_footer(); ?>