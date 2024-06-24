@extends('web.common.app')

@section('content')
<div class="home-slides owl-carousel owl-theme pb-70">
    <div class="main-slider-item">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-slider-content">
                        <h1>Laboratory for Testing and Medical Research</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt labore
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida risus</p>
                        <div class="slider-btn">
                            <a href="{{ url('/appointment') }}" class="default-btn">
                                Book Appointment
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="main-slider-item item-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-slider-content">
                        <h1>Science is Nothing But Perception</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt labore
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida risus</p>
                        <div class="slider-btn">
                            <a href="{{ url('/appointment') }}" class="default-btn">
                                Book Appointment
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="main-slider-item item-three">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-slider-content">
                        <h1>Surgical Lab With A Protective Layer</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt labore
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida risus</p>
                        <div class="slider-btn">
                            <a href="{{ url('/appointment') }}" class="default-btn">
                                Book Appointment
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="top-services-area">
    <div class="container">
        <div class="row">

            @foreach (get_Categoryes() as $category)

            <div class="col-lg-3 col-md-6">
                <a href="{{ url('/services-details') }}">
                    <div class="top-services-item">
                        <div class="icon">
                            @if (request()->getHost() == '127.0.0.1')
                            <img src="{{url($category->icon)}}" />
                            @else
                            <img src="{{url('public/'.$category->icon)}}" />
                            @endif
                            {{-- <i class="flaticon-lab-tool"></i> --}} </div>

                        <h3>
                            {{ Str::words($category->name, 3, '...')}}

                        </h3>
                        <p>{{ Str::words($category->description, 18, '...') }}
                        </p>
                    </div>
                </a>
            </div>

            @endforeach





            {{-- <div class="col-lg-3 col-md-6">
                <div class="top-services-item">
                    <div class="icon">
                        <i class="flaticon-laboratory"></i>
                    </div>
                    <h3>
                        <a href="{{ url('/services-details') }}">
            Advanced Microscopy
            </a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                labore</p>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="top-services-item">
            <div class="icon">
                <i class="flaticon-biological"></i>
            </div>
            <h3>
                <a href="{{ url('/services-details') }}">
                    Molecular Biology
                </a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                labore</p>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="top-services-item ">
            <div class="icon">
                <i class="flaticon-test"></i>
            </div>
            <h3>
                <a href="{{ url('/services-details') }}">
                    Pathology Testing
                </a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                labore</p>
        </div>
    </div> --}}
    </div>
    </div>
</section>

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

{{-- <section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Services</span>
            <h2>Our Core Services</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon">
                        <i class="flaticon-microscope"></i>
                    </div>
                    <h3>
                        <a href="#">Advanced Microscopy</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    </p>
                    <a href="{{ url('/services-details') }}" class="read-more-btn">Read More +</a>
</div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="single-services">
        <div class="icon">
            <i class="flaticon-laboratory"></i>
        </div>
        <h3>
            <a href="{{ url('/services-details') }}">Molecular Biology</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
        </p>
        <a href="{{ url('/services-details') }}" class="read-more-btn">Read More +</a>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="single-services">
        <div class="icon">
            <i class="flaticon-sugar-blood-level"></i>
        </div>
        <h3>
            <a href="{{ url('/services-details') }}">Diabetes Testing</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
        </p>
        <a href="{{ url('/services-details') }}" class="read-more-btn">Read More +</a>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="single-services">
        <div class="icon">
            <i class="flaticon-lab-tool"></i>
        </div>
        <h3>
            <a href="{{ url('/services-details') }}">Chemical Research</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
        </p>
        <a href="{{ url('/services-details') }}" class="read-more-btn">Read More +</a>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="single-services">
        <div class="icon">
            <i class="flaticon-lungs"></i>
        </div>
        <h3>
            <a href="{{ url('/services-details') }}">Anatomical Pathology</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
        </p>
        <a href="{{ url('/services-details') }}" class="read-more-btn">Read More +</a>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="single-services">
        <div class="icon">
            <i class="flaticon-heart"></i>
        </div>
        <h3>
            <a href="{{ url('/services-details') }}">Heart Disease</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
        </p>
        <a href="{{ url('/services-details') }}" class="read-more-btn">Read More +</a>
    </div>
</div>
</div>
</div>

<div class="services-shape">
    <div class="shape1">
        <img src="{{ asset('assets/img/services-shape/shape1.png') }}" alt="image">
    </div>
    <div class="shape2">
        <img src="{{ asset('assets/img/services-shape/shape2.png') }}" alt="image">
    </div>
</div>
</section> --}}

<section class="pricing-area">
    <div class="container">
        <div class="section-title">
            <span>Our Packages</span>
            <h2>Our Pricing Plan</h2>
        </div>

        <div class="row">

            @foreach (get_Packeges() as $package)
            {{-- @json($package->tests) --}}

            <div class="col-lg-4 col-md-6">
                <div class="single-pricing-box">
                    <div class="price">
                        <span style="  text-decoration: line-through; ">₹{{$package->mrp_price}}</span>
                        ₹{{$package->price}}
                    </div>

                    <div class="pricing-header">
                        <h3>{{$package->name}}</h3>
                    </div>

                    <ul class="pricing-features">

                        @foreach ($package->tests as $test)
                        {{-- @json($test->test) --}}
                        <li>
                            <i class="las la-check"></i>
                            {{$test->test->test_name}}
                        </li>
                        @endforeach

                    </ul>

                    <div class="pricing-btn">
                        <a href="{{url('services-details/')}}/" class="default-btn">
                            Choose Plan
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>

            @endforeach



            {{-- <div class="col-lg-4 col-md-6">
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
            </div> --}}
        </div>
    </div>
</section>

<section class="projects-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Recent Project</span>
            <h2>Our Recent Project Case</h2>
        </div>

        <div class="projects-slider owl-carousel owl-theme">
            <div class="projects-item">
                <div class="image">
                    <a href="#">
                        <img src="{{ asset('assets/img/projects/projects1.jpg') }}" alt="image">
                    </a>

                    <div class="icon">
                        <a href="#">
                            <i class="las la-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <h3>
                        <a href="{{ url('/services-details') }}">Chemical Research</a>
                    </h3>
                    <span>Lab Research</span>
                </div>
            </div>

            <div class="projects-item">
                <div class="image">
                    <a href="#">
                        <img src="{{ asset('assets/img/projects/projects2.jpg') }}" alt="image">
                    </a>

                    <div class="icon">
                        <a href="#">
                            <i class="las la-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <h3>
                        <a href="#">Biochemistry Test</a>
                    </h3>
                    <span>Chemistry</span>
                </div>
            </div>

            <div class="projects-item">
                <div class="image">
                    <a href="#">
                        <img src="{{ asset('assets/img/projects/projects3.jpg') }}" alt="image">
                    </a>

                    <div class="icon">
                        <a href="#">
                            <i class="las la-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <h3>
                        <a href="#">Microbiology Test</a>
                    </h3>
                    <span>Microbiology</span>
                </div>
            </div>

            <div class="projects-item">
                <div class="image">
                    <a href="#">
                        <img src="{{ asset('assets/img/projects/projects4.jpg') }}" alt="image">
                    </a>

                    <div class="icon">
                        <a href="#">
                            <i class="las la-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <h3>
                        <a href="#">Histopathology Test</a>
                    </h3>
                    <span>Genetic</span>
                </div>
            </div>

            <div class="projects-item">
                <div class="image">
                    <a href="#">
                        <img src="{{ asset('assets/img/projects/projects1.jpg') }}" alt="image">
                    </a>

                    <div class="icon">
                        <a href="#">
                            <i class="las la-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <h3>
                        <a href="{{ url('/services-details') }}">Chemical Research</a>
                    </h3>
                    <span>Lab Research</span>
                </div>
            </div>

            <div class="projects-item">
                <div class="image">
                    <a href="#">
                        <img src="{{ asset('assets/img/projects/projects2.jpg') }}" alt="image">
                    </a>

                    <div class="icon">
                        <a href="#">
                            <i class="las la-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <h3>
                        <a href="#">Biochemistry Test</a>
                    </h3>
                    <span>Chemistry</span>
                </div>
            </div>

            <div class="projects-item">
                <div class="image">
                    <a href="#">
                        <img src="{{ asset('assets/img/projects/projects3.jpg') }}" alt="image">
                    </a>

                    <div class="icon">
                        <a href="#">
                            <i class="las la-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <h3>
                        <a href="#">Microbiology Test</a>
                    </h3>
                    <span>Microbiology</span>
                </div>
            </div>

            <div class="projects-item">
                <div class="image">
                    <a href="#">
                        <img src="{{ asset('assets/img/projects/projects5.jpg') }}" alt="image">
                    </a>

                    <div class="icon">
                        <a href="#">
                            <i class="las la-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <h3>
                        <a href="#">Histopathology Test</a>
                    </h3>
                    <span>Genetic</span>
                </div>
            </div>
        </div>
    </div>
</section>

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

<section class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Expert Team</span>
            <h2>Our Expert Scientist</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <div class="image">
                        <img src="{{ asset('assets/img/team/team1.jpg') }}" alt="image">

                        <ul class="social">
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="lab la-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="lab la-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Dr. Ken Morris</h3>
                        <span>Senior Scientist</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <div class="image">
                        <img src="{{ asset('assets/img/team/team2.jpg') }}" alt="image">

                        <ul class="social">
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="lab la-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="lab la-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Dr. Johansen Lisa</h3>
                        <span>Assistant Scientist</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <div class="image">
                        <img src="{{ asset('assets/img/team/team3.jpg') }}" alt="image">

                        <ul class="social">
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="lab la-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="lab la-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Dr. Lodi Kheda</h3>
                        <span>Senior Scientist</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <div class="image">
                        <img src="{{ asset('assets/img/team/team4.jpg') }}" alt="image">

                        <ul class="social">
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="lab la-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="lab la-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Dr. Jacinda Pawten</h3>
                        <span>Assistant Scientist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="appointment-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="appointment-content">
                    <h3>Testing by Our Expert Lab Scientists</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>

                <div class="skill-bar" data-percentage="78%">
                    <p class="progress-title-holder">
                        <span class="progress-title">Sample professional</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter">
                        <div class="progress-content"></div>
                    </div>
                </div>

                <div class="skill-bar" data-percentage="58%">
                    <p class="progress-title-holder">
                        <span class="progress-title">Environmental Testing</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter">
                        <div class="progress-content"></div>
                    </div>
                </div>

                <div class="skill-bar" data-percentage="88%">
                    <p class="progress-title-holder">
                        <span class="progress-title">Advanced Microscopy</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter">
                        <div class="progress-content"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="appointment-form">
                    <div class="content">
                        <h3>Make An Appointment</h3>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Name" placeholder="Enter Your Name">
                                    <i class="las la-user"></i>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Email" placeholder="Enter Email">
                                    <i class="las la-envelope"></i>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Phone" placeholder="Enter Phone Number">
                                    <i class="las la-phone"></i>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <select>
                                        <option value="">Select Category</option>
                                        <option value="">Cardiologists</option>
                                        <option value="">Dermatologists</option>
                                        <option value="">Endocrinologists</option>
                                        <option value="">Gastroenterologists</option>
                                        <option value="">Allergists</option>
                                        <option value="">Immunologists</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <select>
                                        <option value="">Time</option>
                                        <option value="">9:00 am - 9:00 pm</option>
                                        <option value="">8:00 am - 8:00 pm</option>
                                        <option value="">7:00 am - 7:00 pm</option>
                                        <option value="">6:00 am - 6:00 pm</option>
                                        <option value="">5:00 am - 5:00 pm</option>
                                        <option value="">4:00 am - 4:00 pm</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker">
                                        <input type="text" class="form-control" placeholder="Date">
                                        <span class="input-group-addon"></span>
                                    </div>
                                    <i class="las la-calendar"></i>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="appointment-btn">
                                    <button type="submit" class="default-btn">
                                        Book Now
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fun-facts-area pt-100 pb-100">
    <div class="container">
        <div class="fun-facts-inner">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="25">00</span>
                        </h3>
                        <p>Winning Award</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="55">00</span>
                        </h3>
                        <p>Our Equipment</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="425">00</span>
                        </h3>
                        <p>Complete Cases</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="125">00</span>
                        </h3>
                        <p>Expertise</p>
                    </div>
                </div>
            </div>

            <div class="fun-facts-shape">
                <div class="shape1">
                    <img src="{{ asset('assets/img/fun-facts-shape/shape1.png') }}" alt="image">
                </div>
                <div class="shape2">
                    <img src="{{ asset('assets/img/fun-facts-shape/shape2.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Testimonial</span>
            <h2>What Our Clients Say</h2>
        </div>

        <div class="testimonial-slider owl-carousel owl-theme">
            <div class="testimonial-item">
                <div class="info">
                    <img src="{{ asset('assets/img/client/client1.jpg') }}" alt="image">
                    <h3>Ken Morris</h3>
                    <span>Artist</span>
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry Lorem Ipsum</p>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="info">
                    <img src="{{ asset('assets/img/client/client2.jpg') }}" alt="image">
                    <h3>Johansen Lisa</h3>
                    <span>Artist</span>
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry Lorem Ipsum</p>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="info">
                    <img src="{{ asset('assets/img/client/client3.jpg') }}" alt="image">
                    <h3>Lodi Kheda</h3>
                    <span>Artist</span>
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>News</span>
            <h2>Our Latest News</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-item bg-ffffff">
                    <div class="image">
                        <a href="{{ url('services-details') }}">
                            <img src="{{ asset('assets/img/blog/blog1.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>20 Aug 2024</span>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ url('services-details') }}">
                                When I Spent the day at the Medical Facility
                            </a>
                        </h3>
                        <a href="{{ url('services-details') }}" class="blog-btn">Read More +</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item bg-ffffff">
                    <div class="image">
                        <a href="{{ url('services-details') }}">
                            <img src="{{ asset('assets/img/blog/blog2.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>25 Aug 2024</span>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ url('services-details') }}">
                                Research And Verify of a Physics laboratory
                            </a>
                        </h3>
                        <a href="{{ url('services-details') }}" class="blog-btn">Read More +</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="blog-item bg-ffffff">
                    <div class="image">
                        <a href="{{ url('services-details') }}">
                            <img src="{{ asset('assets/img/blog/blog3.jpg') }}" alt="image">
                        </a>
                        <div class="date">
                            <span>30 Aug 2024</span>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ url('services-details') }}">
                                Role of Genetics in treating Low-grade glioma
                            </a>
                        </h3>
                        <a href="{{ url('services-details') }}" class="blog-btn">Read More +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="partner-area ptb-100">
    <div class="container">
        <div class="partner-slider owl-carousel owl-theme">
            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/partner1.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/partner2.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/partner3.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/partner4.png') }}" alt="image">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
