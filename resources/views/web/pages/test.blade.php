@extends('web.common.app')

@section('content')
<div>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>{{$category->name}}</h2>
                        <ul>
                            <li><a href="{{ url('/appointment') }}">Home</a></li>
                            <li>{{$category->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Services Area -->
    <section class="services-area bg-ffffff pt-100 pb-70">
        <div class="container">
            <div class="row">
                @forelse ($tests as $test)
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <a href="{{ url('/test-detail') }}/{{encryptWithPasscode($test->id)}}">
                            <div class="icon">
                                @if (request()->getHost() == '127.0.0.1')
                                <img src="{{url($test->icon)}}" />
                                @else
                                <img src="{{url('public/'.$test->icon)}}" />
                                @endif

                            </div>
                        </a>

                        <h3>
                            <a href="{{ url('/test-detail') }}/{{encryptWithPasscode($test->id)}}"> {{ Str::words($test->test_name, 3, '...')}}</a>
                        </h3>
                        <p>{{ Str::words($test->short_desc,18, '...') }}</p>
                        <a href="{{ url('/book-appointment') }}/{{encryptWithPasscode($test->id)}}" class="read-more-btn">Book Now</a>
                    </div>

                </div>
                @empty
                <div class="col-md-12">
                    <div class="top-services-item">
                        <p>No Data found</p>
                    </div>
                </div>
                @endforelse

            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- <section class="top-services-area mt-3">
        <div class="container">
            <div class="row">

                @forelse ($tests as $test)
                <div class="col-lg-3 col-md-6">
                    <a href="{{ url('/test') }}/{{$test->id}}">
                        <div class="top-services-item">
                            <div class="icon">
                                <img src="{{url($test->banner)}}" />
                            </div>
                            <h3>
                                {{ Str::words($test->test_name, 3, '...')}}

                            </h3>
                            <p>{{ Str::words($test->short_desc, 18, '...') }}
                            </p>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-md-12">
                    <div class="top-services-item">
                        <p>No Data found</p>
                    </div>
                </div>
                @endforelse

            </div>
        </div>
    </section> -->
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
                            <input type="email" class="input-newsletter" placeholder="Your Email" name="EMAIL" required autocomplete="off">

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