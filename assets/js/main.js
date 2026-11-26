javascript
document.addEventListener(
    'DOMContentLoaded',
    function () {

        const header =
            document.querySelector(
                '#site-header'
            );

        const toggle =
            document.querySelector(
                '.mobile-menu-toggle'
            );

        const navigation =
            document.querySelector(
                '#primary-navigation'
            );


        /*
        ================================
        HEADER SCROLL
        ================================
        */

        if (header) {

            const updateHeader =
                function () {

                    if (window.scrollY > 40) {

                        header.classList.add(
                            'scrolled'
                        );

                    } else {

                        header.classList.remove(
                            'scrolled'
                        );

                    }

                };
                updateHeader();


            window.addEventListener(
                'scroll',
                updateHeader,
                {
                    passive: true
                }
            );

        }


        /*
        ================================
        MOBILE MENU
        ================================
        */

        if (toggle && navigation) {

            toggle.addEventListener(
                'click',
                function () {

                    const isOpen =
                        toggle.classList.toggle(
                            'is-open'
                        );


                    navigation.classList.toggle(
                        'is-open',
                        isOpen
                    );
                    toggle.setAttribute(
                        'aria-expanded',
                        String(isOpen)
                    );


                    toggle.setAttribute(
                        'aria-label',
                        isOpen
                            ? 'Close menu'
                            : 'Open menu'
                    );

                }
            );


            /*
            Close menu after clicking link
            */

            navigation.addEventListener(
                'click',
                function (event) {

                    if (
                        event.target.closest(
                            'a'
                        )
                    ) {

                        toggle.classList.remove(
                            'is-open'
                        );

                        navigation.classList.remove(
                            'is-open'
                        );

                        toggle.setAttribute(
                            'aria-expanded',
                            'false'
                        );
                        toggle.setAttribute(
                            'aria-label',
                            'Open menu'
                        );

                    }

                }
            );

        }

    }
);