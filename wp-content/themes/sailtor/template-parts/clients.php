<!-- Clients Section -->
<section id="clients" class="clients section light-background">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <?php for ($i = 1; $i <= 6; $i++) : 
                $client_logo = get_theme_mod("client_logo_$i"); 
                if ($client_logo) : ?>
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="<?php echo esc_url($client_logo); ?>" class="img-fluid" alt="Client <?php echo $i; ?>">
                    </div><!-- End Client Item -->
                <?php endif;
            endfor; ?>
        </div>
    </div>
</section><!-- /Clients Section -->
