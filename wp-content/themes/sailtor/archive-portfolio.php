<?php get_header(); ?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <section id="portfolio" class="portfolio section">
    <?php get_template_part('template-parts/portfolio'); ?>
    </section>
</main>
<?php get_footer() ?>