@extends('web.common.app')

@section('content')
    <div>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>{{$test->test_name}}</h2>
                            <ul>
                                <li><a href="{{ url('/test') }}/{{$test->category_id}}">{{@$test->category->name}}</a></li>
                                <li>{{$test->test_name}}</li>
                            </ul>
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
                            <img src="{{url($test->banner)}}" alt="image">
                        </div>

                        <div class="services-details-desc">
                        <!-- <h3>Short Description</h3> -->
                           <p class="pt-5">{{$test->short_desc}}</p>
                           <!-- <h3>Description 1</h3> -->
                           <p class="pb-5">{!! $test->desc_1 !!}</p>
                           <!-- <h3>Description 2</h3> -->
                           <p class="pb-5">{!! $test->desc_2 !!}</p>

                            <div class="services-details-faq">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">Branding is simply a
                                            more efficient way? <i class="las la-plus"></i></a>
                                        <p class="accordion-content show">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            incididunt ut labore et dolore magna aliqua.</p>
                                    </li>

                                    <!-- <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">Why we are the best in this
                                            fields? <i class="las la-plus"></i></a>
                                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            incididunt ut labore et dolore magna aliqua.</p>
                                    </li> -->

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area" id="secondary">
                            <!-- <section class="widget widget_search">
                                <form class="search-form search-top">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label class="">
                                    <button type="submit">
                                        <i class="flaticon-loupe"></i>
                                    </button>
                                </form>
                            </section> -->

                            <section class="widget widget_services_list">
                                <h3 class="widget-title">Our Research</h3>

                                <ul>
                                    @forelse($tests as $test)
                                    <li >
                                        <a href="{{url('test-detail')}}/{{$test->id}}">
                                           {{$test->test_name}}
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

                            <!-- <section class="widget widget_download_list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="las la-file-alt"></i>
                                            Download Pdf File
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="las la-book"></i>
                                            Download DOC
                                        </a>
                                    </li>
                                </ul>
                            </section> -->

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
        <section class="services-area bg-white pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <div class="icon">
                                <i class="flaticon-sugar-blood-level"></i>
                            </div>
                            <h3>
                                <a href="{{ url('/services-details') }}">Diabetes Testing</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            <a href="{{ url('/services-details') }}" class="read-more-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <div class="icon">
                                <i class="flaticon-lab-tool"></i>
                            </div>
                            <h3>
                                <a href="{{ url('/services-details') }}">Chemical Research</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            <a href="{{ url('/services-details') }}" class="read-more-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <div class="icon">
                                <i class="flaticon-lungs"></i>
                            </div>
                            <h3>
                                <a href="{{ url('/services-details') }}">Anatomical Pathology</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            <a href="{{ url('/services-details') }}" class="read-more-btn">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->

        <!-- Start Newsletter Area -->
        <div class="newsletter-area pb-100">
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
