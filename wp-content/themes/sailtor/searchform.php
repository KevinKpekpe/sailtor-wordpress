<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" name="s" placeholder="Search..." value="<?php echo get_search_query(); ?>">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
</form>
