php
<?php

/**
 * ITENTER Enterprise
 * Front Page
 */

get_header();

?>

<main id="primary" class="site-main">


    <?php

    /*
    ========================================
    HERO
    ========================================
    */

    get_template_part(
        'template-parts/hero'
    );


    /*
    ========================================
    SERVICES
    ========================================
    */

    get_template_part(
        'template-parts/services'
    );


    /*
    ========================================
    ABOUT
    ========================================
    */

    get_template_part(
        'template-parts/about'
    );


    /*
    ========================================
    PRODUCTS
    ========================================
    */

    get_template_part(
        'template-parts/products'
    );


    /*
    ========================================
    TECHNOLOGY
    ========================================
    */

    get_template_part(
        'template-parts/technology'
    );


    /*
    ========================================
    PORTFOLIO
    ========================================
    */

    get_template_part(
        'template-parts/portfolio'
    );


    /*
    ========================================
    STATISTICS
    ========================================
    */

    get_template_part(
        'template-parts/statistics'
    );


    /*
    ========================================
    TESTIMONIALS
    ========================================
    */

    get_template_part(
        'template-parts/testimonials'
    );


    /*
    ========================================
    CONTACT
    ========================================
    */

    get_template_part(
        'template-parts/contact'
    );

    ?>


</main>


<?php
get_footer();