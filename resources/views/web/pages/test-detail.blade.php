@extends('web.common.app')

@section('content')
    <div>


        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>{{ $test->test_name }}</h2>
                            <ul>
                                <li><a
                                        href="{{ url('/test') }}/{{ encryptWithPasscode($test->category_id) }}">{{ $test->category->name ?? '' }}</a>
                                </li>
                                <li>{{ $test->test_name }}</li>
                            </ul>
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
        </div>
        <!-- End Page Title Area -->

        <!-- Start Services Details Area -->
        <section class="services-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="services-details-image">
                            @if (request()->getHost() == '127.0.0.1')
                                @if ($test->banner)
                                    <img src="{{ url($test->banner) }}" />
                                @endif
                            @else
                                @if ($test->banner)
                                    <img src="{{ url('public/' . $test->banner) }}" />
                                @endif
                            @endif
                        </div>

                        <div class="services-details-desc pb-3">
                            <div class="row">
                                <h3>{{ $test->test_name }}</h3>
                                <div>
                                    <span style="  text-decoration: line-through; ">₹{{ $test->mrp_price }}</span>
                                    ₹{{ $test->price }}
                                </div>
                            </div>

                            @php
                                $Chieldtests = $test->tests;
                                $parameters = $test->parameters;
                            @endphp

                            {{-- @if (!$Chieldtests) --}}
                            <!-- <h3>Short Description</h3> -->
                            <p class="pt-3">{{ $test->short_desc }}</p>
                            <!-- <h3>Description 1</h3> -->
                            <p class="pb-5 text-white">{!! $test->desc_1 !!}</p>
                            <!-- <h3>Description 2</h3> -->
                            <p class="pb-5 text-white">{!! $test->desc_2 !!}</p>
                            {{-- @endif --}}

                            <div class="services-details-faq">
                                <ul class="accordion">
                                    @foreach ($parameters as $key => $parameter)
                                        <li class="accordion-item">
                                            <a class="accordion-title @if ($key == 0) active @endif"
                                                href="javascript:void(0)">{{ $parameter->name }} <i
                                                    class="las la-plus"></i></a>
                                            <div
                                                class="accordion-content @if ($key == 0) show @endif text-stone-950">
                                                {!! $parameter->description !!}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>




                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area" id="secondary">

                            <section class="widget widget_services_list">
                                <h3 class="widget-title">Related Test</h3>

                                <ul>
                                    @forelse($tests as $test)
                                        <li>
                                            <a href="{{ url('test-detail') }}/{{ encryptWithPasscode($test->id) }}">
                                                {{ $test->test_name }}
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </li>
                                    @empty
                                        <li>
                                            No Data Found
                                        </li>
                                    @endforelse

                                </ul>
                            </section>


                            <section class="widget widget_contact">
                                <div class="text">
                                    <span>Emergency</span>
                                    <a href="tel:098798768753">0987-9876-8753</a>
                                </div>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Details Area -->

        <!-- Start Services Area -->
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
        <!-- End Services Area -->

        <!-- Start Newsletter Area -->
        <div class="newsletter-area pb-100 pt-100">
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
        <!-- End Newsletter Area -->

    </div>
@endsection
