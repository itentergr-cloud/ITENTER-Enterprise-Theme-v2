php
<footer class="site-footer">

    <div class="container">

        <div class="footer-content">

            <div class="footer-brand">

                <a
                    href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    class="site-logo"
                >
                    ITENTER
                </a>

                <p>
                    Digital solutions for the future of business.
                </p>

            </div>


            <div class="footer-navigation">

                <?php

                wp_nav_menu(
                    [
                        'theme_location' => 'primary_menu',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ]
                );

                ?>

            </div>

        </div>


        <div class="footer-bottom">
            <p>
                © <?php echo esc_html( wp_date( 'Y' ) ); ?>
                ITENTER Information Technology.
                All rights reserved.
            </p>

        </div>

    </div>

</footer>


</div><!-- .site-wrapper -->


<?php wp_footer(); ?>

</body>

</html>
