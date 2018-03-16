<footer>
    <?php
        $args = array(
                'theme_location' => 'header-menu',
                'container'      => 'nav',
                'after'          => '<span class="seperator"> | </span>'
        );
        wp_nav_menu($args);
    ?>
    <div class="location">
        <p>2301 Alpha Beta Avenue Mountain Top, KK, TRIP 60231</p>
        <p>Phone Number: +900-89-785-7800</p>
    </div>

    <p class="copyright">All rights reserved <?php echo date('Y');?></p>
</footer>




<?php wp_footer(); ?>
</body>
</html>