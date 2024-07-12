@extends('web.common.app')

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>About</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="{{ asset('assets/img/about/about-1.jpg') }}" alt="image">
                        <img src="{{ asset('assets/img/about/about-2.jpg') }}" alt="image">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content">
                        <span>About Us</span>
                        <h3>Accredited quality We'll provide you Always Latest Technology</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis suspendisse ultrice.</p>
                        <p class="p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida. commodo
                            viverra maecenas accumsan lacus vel facilisis.</p>

                        <ul class="about-list">
                            <li>
                                <i class="las la-check-circle"></i>
                                Led by Passionate Experts
                            </li>
                            <li>
                                <i class="las la-check-circle"></i>
                                Safe Diagnoses and Effective Therapies
                            </li>
                            <li>
                                <i class="las la-check-circle"></i>
                                Fully Equipment
                            </li>
                            <li>
                                <i class="las la-check-circle"></i>
                                Affordable Health Packages
                            </li>
                        </ul>
                        <div class="about-btn">
                            <a href="#" class="default-btn">
                                Discover More
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
            <img src="{{ asset('assets/img/about/shape.png') }}" alt="image">
        </div>
    </section>

    {{-- <section class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Expert Team</span>
                <h2>Our Expert Scientist</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{ asset('assets/img/team/team1.jpg') }}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Alex Maxwel</h3>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{ asset('assets/img/team/team2.jpg') }}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Justin Roberto</h3>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{ asset('assets/img/team/team3.jpg') }}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Louis Agassiz</h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{ asset('assets/img/team/team4.jpg') }}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Carl Anderson</h3>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="why-choose-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-content">
                        <span>Why Choose Us</span>
                        <h3>Over 20 Years of Experience With Best Results</h3>
                        <strong>Your full-service lab for clinical trials. Our mission is to ensure the generation of
                            accurate and precise findings</strong>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Free Home Sampling</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                dolore. magna aliqua.</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>High- End Technology</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                dolore. magna aliqua.</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Patient Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                dolore. magna aliqua.</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>500 + Different Tests</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                dolore. magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-choose-image">
                        <img src="{{ asset('assets/img/why-choose.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our Packages</span>
                <h2>Our Pricing Plan</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-box">
                        <div class="price">
                            $120
                        </div>

                        <div class="pricing-header">
                            <h3>Basic Care</h3>
                        </div>

                        <ul class="pricing-features">
                            <li>
                                <i class="las la-check"></i>
                                Complete Blood Count
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Liver Function Blood Test
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Comprehensive Metabolic
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Female general Health Panel
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Transmitted Diaseases
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Cholesterol Lipid Levels
                            </li>
                        </ul>

                        <div class="pricing-btn">
                            <a href="#" class="default-btn">
                                Choose Plan
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-box">
                        <div class="price">
                            $150
                        </div>

                        <div class="pricing-header">
                            <h3>Essential Care</h3>
                        </div>

                        <ul class="pricing-features">
                            <li>
                                <i class="las la-check"></i>
                                Complete Blood Count
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Liver Function Blood Test
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Comprehensive Metabolic
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Female general Health Panel
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Transmitted Diaseases
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Cholesterol Lipid Levels
                            </li>
                        </ul>

                        <div class="pricing-btn">
                            <a href="#" class="default-btn">
                                Choose Plan
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-box">
                        <div class="price">
                            $220
                        </div>

                        <div class="pricing-header">
                            <h3>Total Care</h3>
                        </div>

                        <ul class="pricing-features">
                            <li>
                                <i class="las la-check"></i>
                                Complete Blood Count
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Liver Function Blood Test
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Comprehensive Metabolic
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Female general Health Panel
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Transmitted Diaseases
                            </li>
                            <li>
                                <i class="las la-check"></i>
                                Cholesterol Lipid Levels
                            </li>
                        </ul>

                        <div class="pricing-btn">
                            <a href="#" class="default-btn">
                                Choose Plan
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="feedback-area pb-100">
        <div class="container">
            <div class="section-title">
                <span>Testimonial</span>
                <h2>What Our Clients Say</h2>
            </div>

            <div class="row">
                <div class="feedback-slides owl-carousel owl-theme">
                    <div class="single-feedback-item">
                        <div class="icon">
                            <i class="las la-quote-left"></i>
                        </div>

                        <div class="testimonial-desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                        </div>

                        <div class="client-info">
                            <img src="{{ asset('assets/img/client/client4.jpg') }}" alt="image">
                            <h3>David Luis</h3>
                            <span>Founder & CEO</span>
                        </div>
                    </div>

                    <div class="single-feedback-item">
                        <div class="icon">
                            <i class="las la-quote-left"></i>
                        </div>

                        <div class="testimonial-desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                        </div>

                        <div class="client-info">
                            <img src="{{ asset('assets/img/client/client5.jpg') }}" alt="image">
                            <h3>Steven Smith</h3>
                            <span>Developer</span>
                        </div>
                    </div>

                    <div class="single-feedback-item">
                        <div class="icon">
                            <i class="las la-quote-left"></i>
                        </div>

                        <div class="testimonial-desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                        </div>

                        <div class="client-info">
                            <img src="{{ asset('assets/img/client/client6.jpg') }}" alt="image">
                            <h3>Sarah Lucy</h3>
                            <span>Designer</span>
                        </div>
                    </div>

                    <div class="single-feedback-item">
                        <div class="icon">
                            <i class="las la-quote-left"></i>
                        </div>

                        <div class="testimonial-desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                        </div>

                        <div class="client-info">
                            <img src="{{ asset('assets/img/client/client1.jpg') }}" alt="image">
                            <h3>James Anderson</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="fun-facts-area bg-ffffff pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact-two">
                        <h3>
                            <span class="odometer" data-count="25">00</span>
                        </h3>
                        <p>Winning Award</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact-two">
                        <h3>
                            <span class="odometer" data-count="55">00</span>
                        </h3>
                        <p>Our Equipment</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact-two">
                        <h3>
                            <span class="odometer" data-count="425">00</span>
                        </h3>
                        <p>Complete Cases</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact-two">
                        <h3>
                            <span class="odometer" data-count="125">00</span>
                        </h3>
                        <p>Expertise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-area bg-white pb-70 pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <div class="single-services-item">
                        <div class="icon">
                            <img src="{{ asset('assets/img/On-timeSampleCollection.png') }}" alt="" />
                        </div>
                        <h3>
                            <a href="#">On-Time Free Home Simple Collection
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="single-services-item">
                        <div class="icon">

                            <img src="{{ asset('assets/img/DOCTORCONSULTATION.jpg') }}" alt="" />
                        </div>
                        <h3>
                            <a href="#">DOCTOR CONSULTATION</a>
                        </h3>

                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="single-services-item">
                        <div class="icon">

                            <img src="{{ asset('assets/img/NABL.png') }}" alt="" />
                        </div>
                        <h3>
                            <a href="#">NABL Certified Labs</a>
                        </h3>

                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="single-services-item">
                        <div class="icon">
                            <img src="{{ asset('assets/img/6179923.png') }}" alt="" />
                        </div>
                        <h3>
                            <a href="#">24/7 Service
                            </a>
                        </h3>

                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="single-services-item">
                        <div class="icon">
                            <img src="{{ asset('assets/img/GUARANTEEDACCURACY.jpg') }}" alt="" />
                        </div>
                        <h3>
                            <a href="#">GUARANTEED ACCURACY
                            </a>
                        </h3>
                    </div>
                </div>



                <div class="col-lg-2 col-md-6">
                    <div class="single-services-item">
                        <div class="icon">

                            <img src="{{ asset('assets/img/HONESTPRICES.png') }}" alt="" />
                        </div>
                        <h3>
                            <a href="#">HONEST PRICES</a>
                        </h3>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="newsletter-area ptb-100">
        <div class="container">
            <div class="newsletter-inner">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h2>Subscribe To Our Newsletter</h2>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form class="newsletter-form">
                            <input type="email" class="input-newsletter" placeholder="Your Email" name="EMAIL"
                                required autocomplete="off">

                            <button type="submit">
                                Subscribe Now
                            </button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
