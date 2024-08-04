@extends('web.common.app')

@section('content')



    <!-- Start Main Slider Area -->
    <div class="home-slides owl-carousel owl-theme">
        <div class="main-slider-item"> </div>
        <div class="main-slider-item item-two"></div>
        <div class="main-slider-item item-three"> </div>
    </div>
    <!-- End Main Slider Area -->

    <!-- Start Top Services Area -->
    <section class="top-services-area cust-to-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="slider_filter">
                        <div class="slider-btn ">
                            <a href="{{ url('/') }}" class="default-btn">
                                Offers
                                <span></span>
                            </a>

                            <a href="{{ url('/upload-prescription') }}" class="default-btn">
                                Upload Prescription
                                <span></span>
                            </a>
                        </div>



                        <div class="form">
                            <i class="fa fa-search"></i>
                            <input type="text" onkeyup="GetTest(this.value)" class="form-control form-input"
                                placeholder="Search for Test/Package( KFT, Full Body etc.)">
                            <span class="left-pan"><i class=" flaticon-loupe" style=""></i></span>
                            <div id="listofsearchresults">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="page-title-content">


                        <!-- <div class="slider-btn mt-3">
                                                <a href="{{ url('/appointment') }}" class="default-btn">
                                                    Book Appointment
                                                    <span></span>
                                                </a>
                                            </div> -->

                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- End Top Services Area -->



    <!-- <div class="page-title-area item-bg-3 mb-5">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="page-title-content">
                                    <div class="slider-btn mb-3">
                                        <a href="{{ url('/') }}" class="default-btn">
                                            Offers
                                            <span></span>
                                        </a>

                                        <a href="{{ url('/upload-prescription') }}" class="default-btn">
                                            Upload Prescription
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="row height d-flex justify-content-center align-items-center">

                                        <div class="col-md-9">

                                            <div class="form">
                                                <i class="fa fa-search"></i>
                                                <input type="text" onkeyup="GetTest(this.value)" class="form-control form-input"
                                                    placeholder="Search for Test/Package( KFT, Full Body etc.)">
                                                <span class="left-pan"><i class=" flaticon-loupe" style=""></i></span>
                                                <div id="listofsearchresults">

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="slider-btn mt-3">
                                        <a href="{{ url('/appointment') }}" class="default-btn">
                                            Book Appointment
                                            <span></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->



    <style>
        form.example {
            position: relative;
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid #282A35;
            border-radius: 25px;
            float: left;
            width: 80%;
            padding-left: 25px;
            background: white;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-right: 0;
            border-right: 1px solid #04AA6D;
            outline: 0;
        }

        form.example button {
            border-radius: 25px;
            float: left;
            width: 20%;
            padding: 10px;
            background: #04AA6D;
            color: white;
            font-size: 17px;
            border: 1px solid #282A35;
            border-left: none;
            cursor: pointer;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        #listofsearchresults {
            display: none;
            position: absolute;
            background-color: #282A35;
            background-color: #fff;
            color: #000;
            width: 100%;
            top: 47px;
            z-index: 2;
            border-left: 1px solid #282A35;
            border-right: 1px solid #282A35;
            border-bottom: 1px solid #282A35;
            text-align: left;
        }

        #listofsearchresults a {
            background-color: #e2e3e9;
            background-color: #fff;
            color: #777;
            text-decoration: none;
            display: block;
            padding: 10px 30px;
            width: 100%;
            opacity: 0.95;
        }

        .search_active {
            background-color: #ffecee !important;
            color: #000 !important;
        }


        .form {

            position: relative;
        }

        .form .fa-search {

            position: absolute;
            top: 20px;
            left: 20px;
            color: #9ca3af;

        }

        .form span {

            position: absolute;
            right: 17px;
            top: 13px;
            padding: 2px;
            border-left: 1px solid #d1d5db;

        }

        .left-pan {
            padding-left: 7px;
        }

        .left-pan i {

            padding-left: 10px;
        }

        .form-input {

            height: 55px;
            text-indent: 33px;
            border-radius: 5px;
        }

        .form-input:focus {

            box-shadow: none;
            border: none;
        }


        .table-header {
            position: relative;
            text-align: center;
            padding: 14px 6px 5px 5px;
            background: #11e7f9;
            border-radius: 10px 10px 0px 0px;
        }

        .table-header h2 {
            position: relative;
            display: inline-block;
            font-size: 25px;
            line-height: 30px;
            color: #000;
            font-weight: 700;
            margin-bottom: 0;
            transition: all 500ms ease;
        }

        .table-header h3 {
            color: #000;
        }

        .table-header h2,
        .table-header h3,
        .table-header h2 {
            color: #000;
        }

        .table-header h2 span {
            position: absolute;
            display: inline-block;
            left: -22px;
            bottom: 0px;
            font-size: 30px;
            line-height: 30px;
            margin: 0;
            transition: all 500ms ease;
        }

        .table-header span {
            position: relative;
            display: block;
            font-size: 16px;
            line-height: 26px;
            font-family: "Titillium Web", sans-serif;
            font-weight: 700;
            margin: 0;
            text-transform: capitalize;
            transition: all 500ms ease;
        }

        .table-header {
            position: relative;
            text-align: center;
            padding: 20px;
            background: #2A88D3;
        }

        .table-header h3 {
            color: #fff;
        }
    </style>


    @php
        $packages = get_Packeges();
        $TestData = TestData();
    @endphp

    @empty(!$packages)
        <section class="pricing-area pt-100">
            <div class="container">
                <div class="section-title">
                    {{-- <span>Our Packages</span> --}}
                    <h2 class="m-0">Top Health Packages</h2>
                </div>


                <div class="row box">


                    @foreach ($packages as $package)
                        {{-- @json($package) --}}

                        <div class="col-lg-4 col-md-6">
                            <div class="single-pricing-box">
                                {{-- <div class="price">
                                    <span style="  text-decoration: line-through; ">₹{{ $package->mrp_price }}</span>
                                    ₹{{ $package->price }}
                                </div>

                                <div class="pricing-header">
                                    <h3> {{ Str::words($package->test_name, 5, '...') }}</h3>
                                </div> --}}


                                <div class="table-header">
                                    <h3 style="color:#fff; font-size: 22px; margin-bottom:2px; line-height: 20px">
                                        {{ $package->test_name }}</h3>
                                    <!-- <h3><span>₹ {{ $package->price }}</span></h3> -->
                                    <span class="prc_cut">Price : ₹
                                        <span style="text-decoration: line-through;">{{ $package->mrp_price }}</span>
                                        <span style=" font-size:22px; position:relative; top:-3px; right:-3px;">
                                            {{ $package->price }}</span></span>
                                </div>
                                <div class="table-content">
                                    <div class="title">
                                        <h4>Includes: {{ $package->parameter_count }} Parameters</h4>
                                    </div>

                                    <ul class="pricing-features">
                                        {{-- @dd($package) --}}
                                        @foreach ($package->tests as $test)
                                            <li class="pricing_li">
                                                <i class="las la-check-circle"></i>
                                                <h4>
                                                    {{-- <img class="packaage-icon" src="{{ asset('img/blod.png') }}" /> --}}
                                                    {{ $test->test->test_name }}
                                                </h4>
                                                @if ($test->test->short_desc_1 != null)
                                                    <span>( {{ $test->test->short_desc_1 }} )</span>
                                                @endif

                                            </li>
                                        @endforeach



                                    </ul>
                                </div>
                                <div class="pricing-btn">

                                    <a href=""><img src="{{ asset('img/whatsapp.png') }}" width="32"
                                            alt="whatsapp"></a>

                                    <a href="{{ url('/test-detail') }}/{{ encryptWithPasscode($package->id) }}"
                                        class="default-btn">
                                        Book Now
                                        <span></span>
                                    </a>

                                    <a href=""><img src="{{ asset('img/call-me-back.png') }}" width="32"
                                            alt="whatsapp"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endempty

    <div class="partner-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2 class="m-0">Tests</h2>
            </div>
            <div class="partner-slider owl-carousel owl-theme">
                {{-- <div class="partner-item"> --}}

                @foreach ($TestData as $test)
                    <div class="partner-item">
                        <div class="single-services-item">
                            <a href="{{ url('/test-detail') }}/{{ encryptWithPasscode($test->id) }}">
                                <div class="icon">
                                    @if (request()->getHost() == '127.0.0.1')
                                        @if ($test->icon)
                                            <img src="{{ url($test->icon) }}" />
                                        @endif
                                    @else
                                        @if ($test->icon)
                                            <img src="{{ url('public/' . $test->icon) }}" />
                                        @endif
                                    @endif

                                </div>
                            </a>

                            <h3>
                                <a href="{{ url('/test-detail') }}/{{ encryptWithPasscode($test->id) }}">
                                    {{-- {{ Str::words($test->test_name, 3, '...') }} --}}
                                    {{ $test->test_name }}
                                </a>
                            </h3>
                            <p>{{ Str::words($test->short_desc, 18, '...') }}</p>
                            <div class="row mt-2">
                                <div class="price col-md-6">
                                    <span
                                        style="  text-decoration: line-through; font-size:14px">₹{{ $test->mrp_price }}</span>
                                    ₹{{ $test->price }}
                                </div>
                                <a href="{{ url('/book-appointment') }}/{{ encryptWithPasscode($test->id) }}"
                                    class="read-more-btn col-md-6 pt-0 mt-0">Book Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- </div> --}}
            </div>
        </div>
    </div>
    <section class="top-services-area">
        <div class="container">
            <div class="section-title">
                <h2 class="m-0">Test & Package</h2>
            </div>
            <div class="row">

                @foreach (get_Categoryes() as $category)
                    <div class="col-lg-3 col-md-6 col-6">
                        <a href="{{ url('/test') }}/{{ encryptWithPasscode($category->id) }}">
                            <div class="top-services-item">
                                <div class="icon">
                                    @if (request()->getHost() == '127.0.0.1')
                                        @if ($category->icon)
                                            <img src="{{ url($category->icon) }}" />
                                        @endif
                                    @else
                                        @if ($category->icon)
                                            <img src="{{ url('public/' . $category->icon) }}" />
                                        @endif
                                    @endif
                                    {{-- <i class="flaticon-lab-tool"></i> --}}
                                </div>

                                <h3>
                                    {{-- {{ Str::words($category->name, 3, '...') }} --}}
                                    {{ $category->name }}
                                </h3>
                                {{-- <p>{{ Str::words($category->description, 18, '...') }} --}}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach

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
                        <h3>Welcome to Thexpertlab: Your Partner in Precision Health Diagnostics </h3>
                        <p>Welcome to Thexpertlab, your trusted partner in health and wellness. At Thexpertlab, we are
                            committed to providing high-quality diagnostic services to help you understand and manage
                            your
                            health. Our state-of-the-art facilities and experienced professionals ensure accurate and
                            reliable results for a range of essential tests. .</p>


                        <ul class="about-list">
                            <li>
                                <i class="las la-check-circle"></i>
                                Precision Diagnostics
                            </li>
                            <li>
                                <i class="las la-check-circle"></i>
                                Revolutionizing Patient Interaction
                            </li>
                            <li>
                                <i class="las la-check-circle"></i>
                                Insightful Health
                            </li>
                            <li>
                                <i class="las la-check-circle"></i>
                                Anatomical Discovery
                            </li>
                        </ul>
                        <div class="about-btn">
                            <a href="{{ url('/about') }}" class="default-btn">
                                Read More
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


    <section class="why-choose-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-content">
                        <span>Why Choose Us</span>
                        <h3>Over 02 Years Of Experience With Best Results </h3>
                        <strong>Your full-service lab for clinical trials. Our mission is to ensure the generation of
                            accurate and precise findings. </strong>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Free Home Sampling</h4>
                            <p>We offer convenient home sampling services, allowing you to provide samples from the
                                comfort
                                of your home. Our trained professionals ensure safe and hygienic sample collection,
                                providing you with accurate results without the need to visit the lab.

                                .</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>High- End Technology</h4>
                            <p>At Thexpertlab, we utilize the latest technology and advanced equipment to perform a wide
                                range of diagnostic tests. Our state-of-the-art facilities ensure high precision and
                                reliability in every test we conduct.
                            </p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Patient Support</h4>
                            <p>Our dedicated support team is here to assist you every step of the way. From answering
                                your
                                queries to providing detailed explanations of your test results, we are committed to
                                supporting your health journey .</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>500 + Different Tests</h4>
                            <p>We offer an extensive range of over 500 diagnostic tests, covering various aspects of
                                health
                                and wellness. From routine blood tests to specialized genetic screenings, we have the
                                expertise to provide comprehensive insights into your health.

                            </p>
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
