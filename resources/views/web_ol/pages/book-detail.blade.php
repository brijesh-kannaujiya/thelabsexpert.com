@extends('web.common.app')

@section('content')
    <div class="page-title-area item-bg-2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Appointment</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Appointment</span>
                <h2>Make An Appointment</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="appointment-inner">
                        <div class="appointment-content">
                            <h3>Testing by Our Expert Lab Scientists</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
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
                </div>

                <div class="col-lg-6">
                    <div class="appointment-form-others">
                        @if (session()->has('success'))
                            <div class="callout callout-success">
                                <h5 class="text-success mb-2">
                                    <i class="fa fa-check"></i> {{ session()->get('success') }}
                                </h5>
                            </div>
                        @endif
                        <form action="{{ route('submit-appointment') }}" method="POST">
                            <input type="hidden" name="test_name" value="{{ $test->test_name }}">
                            <input type="hidden" name="test_id" value="{{ $test->id }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <input type="phone" name="phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea cols="30" rows="6" name="message" class="form-control" placeholder="Message"></textarea>
                            </div>

                            <button type="submit">Send a Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback-area pb-100">
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
                            <img src="{{ asset('assets/img/team/team1.jpg') }}" alt="image">
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
                            <img src="{{ asset('assets/img/team/team2.jpg') }}" alt="image">
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
                            <img src="{{ asset('assets/img/team/team3.jpg') }}" alt="image">
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
                            <img src="{{ asset('assets/img/team/team4.jpg') }}" alt="image">
                            <h3>James Anderson</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection
