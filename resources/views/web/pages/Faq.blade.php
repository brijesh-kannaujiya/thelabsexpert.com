@extends('web.common.app')

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Faq</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Faq</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="faq-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Faq</span>
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-accordion-content">
                <ul class="accordion">
                    <li class="accordion-item">
                        <a class="accordion-title active" href="javascript:void(0)">
                            <i class="las la-plus"></i>
                            Which material types can you work with?
                        </a>

                        <p class="accordion-content show">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                            ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                        </p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="las la-plus"></i>
                            What access do I have on the free plan?
                        </a>

                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="las la-plus"></i>
                            Can I have multiple activities in a single feature?
                        </a>

                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="las la-plus"></i>
                            Which material types can you work with?
                        </a>

                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="las la-plus"></i>
                            Why Choose Our Services In Your Business?
                        </a>

                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="las la-plus"></i>
                            How To Get Start With Us?
                        </a>

                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="las la-plus"></i>
                            Why Choose Our Services In Your Business?
                        </a>

                        <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                    </li>
                </ul>
            </div>

            <div class="faq-contact">
                <div class="section-title">
                    <span>Questions</span>
                    <h2>Do You Have Any Questions?</h2>
                </div>

                <div class="faq-contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required
                                        data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                        data-error="Please enter your subject" placeholder="Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required
                                        data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input name="gridCheck" value="I agree to the terms and privacy policy."
                                            class="form-check-input" type="checkbox" id="gridCheck" required>

                                        <label class="form-check-label" for="gridCheck">
                                            I agree to the <a href="#">terms</a> and <a href="#">privacy
                                                policy</a>
                                        </label>
                                        <div class="help-block with-errors gridCheck-error"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="send-btn">
                                    <button type="submit" class="default-btn">
                                        Send Message
                                        <span></span>
                                    </button>
                                </div>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
