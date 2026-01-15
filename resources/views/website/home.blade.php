@extends("layouts.website")
@section("title", "Grace Collections - Home")



@section("content")




    <!-- Banner One Start -->
        <section class="banner-one">
            <div class="banner-one__one-shape-bg"
                style="background-image: url({{ asset('website/images/shapes/banner-one-shape-bg.png') }});"></div>
            <div class="banner-one__shape-one"
                style="background-image: url({{ asset('website/images/shapes/banner-one-shape-1.png') }});"></div>

            <div class="banner-one__shape-two"></div>
            <div class="container">
                <div class="banner-one__inner">
                    <div class="banner-one__sub-title-box">
                        <p>Great design services <br> without the pretentiousness.!</p>
                    </div>
                    <div class="banner-one__content-one" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-delay="0">
                        <h2 class="banner-one__big-title-one">Digital</h2>
                    </div>
                    <div class="banner-one__content-two" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="500">
                        <ul class="banner-one__content-two-list">
                            <li>
                                <div class="banner-one__content-two-single">
                                    <h3>WEB <br> DESIGN</h3>
                                </div>
                            </li>
                            <li>
                                <div class="banner-one__content-two-single-two">
                                    <img src="{{ asset('website/images/icon/banner-one-icon-man.png') }}" alt="">
                                </div>
                            </li>
                        </ul>
                        <h2 class="banner-one__big-title-two">Solution</h2>
                    </div>
                    <div class="banner-one__details-box">
                        <div class="banner-one__text-box-one">
                            <p>We believe that the surest measure of success is when our partners with us more than half
                                It's more than just the visuals. We're here to support your growth.</p>
                            <a href="#">View all Services<span class="icon-arrow-up-right"></span></a>
                        </div>
                        <div class="banner-one__review-box">
                            <ul class="banner-one__review-list">
                                <li>
                                    <div class="banner-one__review-img">
                                        <img src="{{ asset('website/images/resources/banner-one-review-img-1-1.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-one__review-img">
                                        <img src="{{ asset('website/images/resources/banner-one-review-img-1-2.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-one__review-img">
                                        <img src="{{ asset('website/images/resources/banner-one-review-img-1-3.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-one__review-count-box">
                                        <h3 class="odometer" data-count="15">00</h3>
                                        <span>K+</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="banner-one__review-text-box">
                                <div class="banner-one__review-text">
                                    <p>Excellent</p>
                                    <div class="banner-one__review-text-count-box">
                                        <h3 class="odometer" data-count="4000">00</h3>
                                        <span>+</span>
                                    </div>
                                    <p>Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner One End -->

@endsection


