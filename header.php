php
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<div class="site-wrapper">


<header
    class="site-header"
    id="site-header"
>
<div class="container header-container">


        <!-- Logo -->

        <div class="site-branding">

            <?php if ( has_custom_logo() ) : ?>

                <?php the_custom_logo(); ?>

            <?php else : ?>

                <a
                    class="site-logo"
                    href="<?php echo esc_url( home_url( '/' ) ); ?>"
                >
                    ITENTER
                </a>

            <?php endif; ?>

        </div>


        <!-- Navigation -->
         <nav
            class="main-navigation"
            id="primary-navigation"
            aria-label="<?php esc_attr_e( 'Primary Navigation', 'itenter' ); ?>"
        >

            <?php

            wp_nav_menu(
                [
                    'theme_location' => 'primary_menu',
                    'menu_class'     => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                ]
            );

            ?>

        </nav>


        <!-- Header CTA -->

        <div class="header-actions">

            <a
                href="#contact"
                class="btn btn-primary"
            >
                Get Started
            </a>

        </div>


        <!-- Mobile Menu -->
         <button
            class="mobile-menu-toggle"
            type="button"
            aria-controls="primary-navigation"
            aria-expanded="false"
            aria-label="<?php esc_attr_e( 'Open menu', 'itenter' ); ?>"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>


    </div>


</header>
