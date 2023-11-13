<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        @stack('style-alt')
        <title>Tiket Wisata - Desa Edelweiss</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ route('homepage') }}" class="nav__logo">
                    Wonokitri<span>Tourism.</span>
                </a>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                                <i class="bx bx-home-alt"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-trip"></i>
                                <span>Paket Wisata</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>Homestay</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- theme -->
                <i class="bx bx-moon change-theme" id="theme-button"></i>

                <a target="_blank" href="https://api.whatsapp.com/send?phone=6282229833757&text=I want to booking" class="button nav__button">Pesan Sekarang</a>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="{{ route('homepage') }}" class="footer__logo">
                        Wonokitri<span>Tourism.</span>
                    </a>
                    <p class="footer__description">
                        Booking Paket Wisata Desa Edelweiss <br />
                        Dengan Lebih Mudah & Cepat
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">About</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Company</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="http://127.0.0.1:8000/login" class="footer__link"
                                    >Login 
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Support</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="http://127.0.0.1:8000/contact" class="footer__link"> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Follow us</h3>

                        <ul class="footer__social">
                            <a href="https://www.youtube.com/channel/UCVI8Zm3xfW7lzr6HuiPvufw" class="footer__social-link">
                                <i class="bx bxl-youtube"></i>
                            </a>
                            <a href="https://www.instagram.com/desa.edelweiss_wonokitri/?igshid=aWRhdW1mOWRiZGdp" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            <a href="https://www.tiktok.com/@desaedelweisswonokitri?_d=secCgYIASAHKAESPgo8woITk6J9eexLNLWFPWtHbjewejYWdlZ90mcz3HeBZIrrkMyPkY8fIa1PrAY3jaJbOKUyI8lqldp5FFuOGgA%3D&checksum=542bf23a5ab367ceaad6d56f8392c7e2a7262737c253702b403681b2ab554fce&sec_uid=MS4wLjABAAAAmf1DuvdZjWJIzvSgRUhD_cKULDw53QQraUFpmR9M5zKWgpKgvxVF4067j0hDQ9If&sec_user_id=MS4wLjABAAAAPdsWEJZ6iycBFHJMsLqD5Te5U8Yv64V0BDO0RpD4nR5jBNG2UU7LucwZJn4zvuht&share_app_id=1340&share_author_id=7272991620684088325&share_link_id=b305362c-fa43-4b32-bcb1-504257de77da&sharer_language=id&timestamp=1699456890&u_code=e6cd7j7iaekh26&ugbiz_name=Account&user_id=7199983197987718149&utm_campaign=client_share&utm_source=copy&_r=1" class="footer__social-link">
                                <i class="bx bxl-tiktok"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; 2023 Desa Edelweiss Wonokitri | Powered by TIM PPK ORMAWA Universitas Yudharta Pasuruan
                </span>
                <div class="footer__privacy">
                    <a href="#">Terms & Agreements</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')
    </body>
</html>
