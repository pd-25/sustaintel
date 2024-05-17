<script src="{{ asset('frontend/js/script.js') }}" defer></script>
    <script src="{{ asset('frontend/owl-carousel/js/owl.carousel.js') }}"></script>
    <!-- End Owl pranab-->
    <script>
        $(document).ready(function() {
            var owl = $('#owl-clogo');
            owl.owlCarousel({
                items: 6,
                loop: true,
                nav: false,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 5
                    },
                    1000: {
                        items: 6
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            var owl = $('#owl-services');
            owl.owlCarousel({
                items: 3,
                loop: true,
                nav: false,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            var owl = $('#owl-testimonial');
            owl.owlCarousel({
                items: 2,
                loop: true,
                nav: false,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script>
    <script>
        const menu = document.querySelector(".menu");
        const menuSection = menu.querySelectorAll(".menu-icon");
        const menuArrow = menu.querySelector(".menu-mobile-arrow");
        const menuClosed = menu.querySelector(".menu-mobile-close");
        const menuTrigger = document.querySelector(".menu-mobile-trigger");
        const menuOverlay = document.querySelector(".overlay");
        let subMenu;
        let hasChildren;
        menuSection.forEach(function(el) {
            el.addEventListener("click", (e) => {
                e.stopPropagation();
                if (e.target.closest(".menu-item-has-children")) {
                    hasChildren = e.target.closest(".menu-item-has-children");
                    hasChildren.style.position = 'inherit'
                    showSubMenu(hasChildren);
                }
            });
        })
        menuArrow.addEventListener("click", () => {
            hideSubMenu();
        });
        menuTrigger.addEventListener("click", () => {
            toggleMenu();
        });
        menuClosed.addEventListener("click", () => {
            toggleMenu();
        });
        menuOverlay?.addEventListener("click", () => {
            toggleMenu();
        });

        function toggleMenu() {
            menu.classList.toggle("active");
            menuOverlay.classList.toggle("active");
        }

        function showSubMenu(hasChildren) {
            subMenu = hasChildren.querySelector(".menu-subs");
            subMenu.classList.add("active");
            subMenu.style.animation = "slideLeft 0.5s ease forwards";
            const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
            menu.querySelector(".menu-mobile-title").innerHTML = menuTitle;
            menu.querySelector(".menu-mobile-header").classList.add("active");
        }

        function hideSubMenu() {
            hasChildren.style.position = 'relative'
            subMenu.style.animation = "slideRight 0.5s ease forwards";
            setTimeout(() => {
                subMenu.classList.remove("active");
            }, 300);
            menu.querySelector(".menu-mobile-title").innerHTML = "";
            menu.querySelector(".menu-mobile-header").classList.remove("active");
        }
        window.onresize = function() {
            if (this.innerWidth > 991) {
                if (menu.classList.contains("active")) {
                    toggleMenu();
                }
            }
        };
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            //jquery for toggle sub menus
            $('.sub-btn').click(function() {
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            //jquery for expand and collapse the sidebar
            $('.menu-btn').click(function() {
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility", "hidden");
            });

            $('.close-btn').click(function() {
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
            });
        });
    </script>
    @yield('script')