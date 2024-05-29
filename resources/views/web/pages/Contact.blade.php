@extends('web.common.app')

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class="las la-envelope"></i>
                        </div>

                        <h3>Email Here</h3>
                        <p><a
                                href="https://templates.envytheme.com/cdn-cgi/l/email-protection#3e565b5252517e525b5c51105d5153"><span
                                    class="__cf_email__"
                                    data-cfemail="acc4c9c0c0c3ecc0c9cec382cfc3c1">[email&#160;protected]</span></a></p>
                        <p><a
                                href="https://templates.envytheme.com/cdn-cgi/l/email-protection#7a161f18153a121f16161554191517"><span
                                    class="__cf_email__"
                                    data-cfemail="4f232a2d200f272a232320612c2022">[email&#160;protected]</span></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class="las la-map-marker"></i>
                        </div>

                        <h3>Location Here</h3>
                        <p><a href="https://www.google.com/maps/search/medical+center+in+London,+UK/@51.5118992,-0.0848015,15z/data=!3m1!4b1"
                                target="_blank">2750 Quadra Street Victoria Road, New York, Canada</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class="las la-phone"></i>
                        </div>

                        <h3>Call Here</h3>
                        <p><a href="tel:1234567890">+123 456 7890</a></p>
                        <p><a href="tel:2414524526">+241 452 4526</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <span>Contact Us</span>
                <h2>Drop us Message for any Query</h2>
            </div>

            <div class="contact-form">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required
                                    data-error="Please enter your name" placeholder="Your Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required
                                    data-error="Please enter your email" placeholder="Your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required
                                    data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                    data-error="Please enter your subject" placeholder="Your Subject">
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
                            <button type="submit" class="default-btn">
                                Send Message
                                <span></span>
                            </button>

                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="map-area pb-100">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1597734647280!5m2!1sen!2sbd"></iframe>
        </div>
    </div>

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
