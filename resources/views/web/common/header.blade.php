<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="top-left">
                    <li>
                        <i class="las la-envelope"></i>
                        <a href=""><span>abc@gmail.com</span></a>
                    </li>

                    <li>
                        <i class="las la-phone-volume"></i>
                        <a href="tel:821456679">+91 000000 00 000 </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <ul class="top-right">
                    <li>
                        <i class="las la-clock"></i>
                        Opening Hour: 9:00 am - 9:00 pm
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" class="black-logo" alt="image">
                        <img src="{{ asset('assets/img/logo-2.png') }}" class="white-logo" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" class="black-logo" alt="image">
                    <img src="{{ asset('assets/img/logo-2.png') }}" class="white-logo" alt="image">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('appointment') }}" class="nav-link {{ request()->is('appointment') ? 'active' : '' }}">
                                appointment
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                                About
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('services') }}" class="nav-link {{ request()->is('services') ? 'active' : '' }}">
                                Services
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                                Contact
                            </a>
                        </li>

                        @auth
                        <li class="nav-item">
                            <a href="{{ url('admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                Dashboard
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ url('login') }}" class="nav-link {{ request()->is('login') ? 'active' : '' }}">
                                Login
                            </a>
                        </li>

                        @endauth



                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="option-item">
                            <i class="search-btn flaticon-loupe"></i>
                            <i class="close-btn flaticon-cancel"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text">

                                        <button class="search-button" type="submit">
                                            <i class="flaticon-loupe"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="option-item">
                            <i class="search-btn flaticon-loupe"></i>
                            <i class="close-btn flaticon-cancel"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text">

                                        <button class="search-button" type="submit">
                                            <i class="flaticon-loupe"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sidebar-modal">
    <div class="sidebar-modal-inner">
        <div class="sidebar-about-area">
            <div class="title">
                <h2>About Us</h2>
                <p>We believe brand interaction is key in communication. Real innovations and a positive customer
                    experience are the heart of successful communication. No fake products and services. The
                    customer is king, their lives and needs are the inspiration.</p>
            </div>
        </div>

        <div class="sidebar-instagram-feed">
            <h2>Instagram</h2>
            <ul>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/img/instagram/instagram1.jpg') }}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/img/instagram/instagram2.jpg') }}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/img/instagram/instagram3.jpg') }}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/img/instagram/instagram4.jpg') }}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/img/instagram/instagram5.jpg') }}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/img/instagram/instagram6.jpg') }}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/img/instagram/instagram7.jpg') }}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/img/instagram/instagram8.jpg') }}" alt="image">
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-contact-area">
            <div class="contact-info">
                <div class="contact-info-content">
                    <h2>
                        <a href="tel:+0881306298615">
                            +088 130 629 8615
                        </a>
                        <span>OR</span>
                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#deb2bbbcb19eb9b3bfb7b2f0bdb1b3">
                            <span>abc@gmail.com</span>
                        </a>
                    </h2>

                    <ul class="social">
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="lab la-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="lab la-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="lab la-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="lab la-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="lab la-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <span class="close-btn sidebar-modal-close-btn">
            <i class="flaticon-cancel"></i>
        </span>
    </div>
</div>
