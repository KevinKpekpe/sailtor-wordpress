<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">

            <div class="col-lg-4 col-md-6 footer-about">
                <?php dynamic_sidebar( 'footer-about' ); ?>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <?php dynamic_sidebar( 'footer-links-useful' ); ?>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <?php dynamic_sidebar( 'footer-links-services' ); ?>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <?php dynamic_sidebar( 'footer-newsletter' ); ?>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Sailor</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<?php wp_footer(); ?>

</body>

</html>