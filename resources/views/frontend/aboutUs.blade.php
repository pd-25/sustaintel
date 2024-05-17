@extends('frontend.layout.main')
@section('title', 'About Us')
@section('content')
    <section class="banner-slider" id="inn-banner-slider">
        <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
            <div role="listbox" class="carousel-inner">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div style="background-image: url('frontend/images/inner-banner.jpg')" class="carousel-item active">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content -->






    <section id="inn-pg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>What drives us?</h2>
                </div>
                <div class="col-lg-6 abt-ctn-box mb-lg-5">
                    <p>The world is embracing ESG reporting, with regulations becoming increasingly common. Recognizing
                        the importance of environmental impact assessment, we challenged the status quo of
                        sustainability consulting – a traditionally expensive and time-consuming process. Our strategic
                        services and innovative solutions empower organizations to:</p>
                    <ul class="wel-list">
                        <li>Generate insightful analytics & craft comprehensive ESG reports within a day</li>
                        <li>Help our clients make informed and high-quality strategic decisions </li>
                    </ul>
                    <p>Our service allows you to focus on what matters most: implementing sustainable practices that
                        benefit your business and the planet. We're passionate about harnessing the power of technology
                        to simplify ESG reporting by democratizing ESG data. We believe that transparent and accessible
                        ESG reporting is a cornerstone of building a thriving and sustainable future. </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/inn-about-pic1.jpg') }}" class="img-fluid">
                </div>
            </div>
            <hr>
            <div class="row mt-lg-5 mb-lg-4 justify-content-center">
                <div class="col-lg-6">
                    <div class="mv-box">
                        <img src="{{ asset('frontend/images/miss-icon.png') }}" class="img-fluid">
                        <h3>Mission</h3>
                        <p>We go beyond simply collecting and integrating your data. Our mission is to empower you to
                            make conscious business decisions that drive real environmental impact. By optimizing
                            operations based on actionable insights, you'll reduce your environmental footprint and
                            contribute to building a greener tomorrow. Together, let's build a greener tomorrow.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mv-box">
                        <img src="{{ asset('frontend/images/viss-icon.png') }}" class="img-fluid">
                        <h3>Vision</h3>
                        <p>We envisage to assist firms in integrating their ESG practices with technology for
                            convenience, allowing them to allocate their resources into substantial capabilities.
                            Through our advisory services, we aim to create awareness amongst firms across diverse
                            industries, to make environmentally conscious strategic initiatives, focused at meeting
                            sustainable development goals, while leaving an enduring and an eco-friendly impact. </p>
                    </div>
                </div>

            </div>
            <hr>
            <div class="row mt-lg-5">
                <div class="col-lg-12 text-center mb-lg-3">
                    <h2>Meet the team</h2>
                </div>
                <div class="col-lg-12">
                    <div id="demo-pranab">
                        <div id="owl-team" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="team-box">
                                    <img src="{{ asset('frontend/images/profile-image.jpg') }}" class="img-fluid w-auto">
                                    <h4>Full Name Here</h4>
                                    <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                    <p>Aenean mattis quam a odio dignissim laoreet sed lectus non nu nare vulputate a
                                        et curabitur lobortis nunc neque, eget commodo nisi ultrices id. </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-box">
                                    <img src="{{ asset('frontend/images/profile-image.jpg') }}" class="img-fluid w-auto">
                                    <h4>Full Name Here</h4>
                                    <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                    <p>Aenean mattis quam a odio dignissim laoreet sed lectus non nu nare vulputate a
                                        et curabitur lobortis nunc neque, eget commodo nisi ultrices id. </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-box">
                                    <img src="{{ asset('frontend/images/profile-image.jpg') }}" class="img-fluid w-auto">
                                    <h4>Full Name Here</h4>
                                    <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                    <p>Aenean mattis quam a odio dignissim laoreet sed lectus non nu nare vulputate a
                                        et curabitur lobortis nunc neque, eget commodo nisi ultrices id. </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-box">
                                    <img src="{{ asset('frontend/images/profile-image.jpg') }}" class="img-fluid w-auto">
                                    <h4>Full Name Here</h4>
                                    <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                    <p>Aenean mattis quam a odio dignissim laoreet sed lectus non nu nare vulputate a
                                        et curabitur lobortis nunc neque, eget commodo nisi ultrices id. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var owl = $('#owl-team');
            owl.owlCarousel({
                items: 3,
                loop: true,
                nav: false,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script>

@endsection
