<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">

            <a href="{{ url('/appointment') }}" class="btn-appot">
                Book Appointment
                <span></span>
            </a>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/lab.PNG') }}" class="black-logo" alt="image">
                            <img src="{{ asset('assets/img/lab.PNG') }}" class="white-logo" alt="image">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore aliqua.</p>
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/" class="facebook" target="_blank">
                                <i class="lab la-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" class="twitter" target="_blank">
                                <i class="lab la-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/" class="pinterest" target="_blank">
                                <i class="lab la-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" class="linkedin" target="_blank">
                                <i class="lab la-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Our Services</h3>

                    <ul class="quick-links">
                        {{-- <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="projects.html">Free Consultation</a>
                        </li> --}}
                        <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="{{ url('/about') }}">Chemistry</a>
                        </li>
                        {{-- <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="team.html">Expert Team</a>
                        </li> --}}
                        <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="{{ url('/services') }}">Forensic Services</a>
                        </li>
                        {{-- <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="testimonials.html">Testimonial</a>
                        </li> --}}
                        <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="{{ url('/faq') }}">Scientific</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Quick Links</h3>

                    <ul class="quick-links">
                        <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="{{ url('/about') }}">About Company</a>
                        </li>
                        <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="{{ url('/services') }}">Services</a>
                        </li>
                        <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="{{ url('/contact') }}">Contact</a>
                        </li>
                        <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="{{ url('/faq') }}">FAQ</a>
                        </li>
                        {{-- <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="blog.html">BLog</a>
                        </li>
                        <li>
                            <i class="las la-angle-double-right"></i>
                            <a href="pricing.html">Gallery</a>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Information</h3>

                    <ul class="footer-contact-info">
                        <li>
                            <i class="las la-phone"></i>
                            <span>Phone</span>
                            <a href="tel:882569756">882-569-756</a>
                        </li>
                        <li>
                            <i class="las la-envelope"></i>
                            <span>Email</span>
                            <a href=""><span>abc@gmail.com</span></a>
                        </li>
                        <li>
                            <i class="las la-map-marker-alt"></i>
                            <span>Address</span>
                            <a href="#">50 Nortambiya, UK.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright-area">
    <div class="container">
        <p>
            Copyright ©
            <script>
                document.write(new Date().getFullYear())
            </script> Thexpertlab. All Rights Reserved by
            <a href="#" target="_blank">
                Thexpertlab
            </a>
        </p>
    </div>
</div>
<div class="go-top">
    <i class="las la-long-arrow-alt-up"></i>
</div>

<div class="whatsapp btn-wat">
    <a href=""><img src="{{ asset('img/whatsapp.png') }}" width="40" alt="whatsapp"></a>
</div>

<div class="call-phone btn-call">
    <a href=""><img src="{{ asset('img/call-me-back.png') }}" width="40" alt="whatsapp"></a>
</div>
