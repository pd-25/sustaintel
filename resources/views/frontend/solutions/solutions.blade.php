@extends('frontend.layout.main')
@section('title', 'Solutions')
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
    
    <section id="inn-pg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2>Solutions</h2>
                    <p>We go beyond solving immediate problems – we empower you to be a leader in sustainable practices for
                        the future. Our dedication to integrate ESG and technology to expedite processes by enhancing
                        accuracy pushed us beyond our limits to create the best tools for ESG reporting, Resettlement Plan
                        and ESG Screening. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="inn-solu-box">
                                <img src="{{asset('frontend/images/solution-icon1.png')}}" class="img-fluid pb-3 m-auto">
                                <h4>ESG Data Management & Reporting</h4>
                                <p>Maecenas arcu dui, dapibus eu ullamcorper pharetra viverra mauris, dictum aliquam eu,
                                    ullamcorper fermentum tortor.</p>
                                <a href="{{route('frontend.ecgData')}}" class="banner-btn">Read More</a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-solu-box">
                                <img src="{{asset('frontend/images/solution-icon2.png')}}" class="img-fluid pb-3 m-auto">
                                <h4>Environment & Social Screening</h4>
                                <p>Maecenas arcu dui, dapibus eu ullamcorper pharetra viverra mauris, dictum aliquam eu,
                                    ullamcorper fermentum tortor.</p>
                                <a href="{{route('frontend.envScreen')}}" class="banner-btn">Read More</a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-solu-box">
                                <img src="{{asset('frontend/images/solution-icon3.png')}}" class="img-fluid pb-3 m-auto">
                                <h4>Resettlement Action Plan Framework</h4>
                                <p>Maecenas arcu dui, dapibus eu ullamcorper pharetra viverra mauris, dictum aliquam eu,
                                    ullamcorper fermentum tortor.</p>
                                <a href="{{route('frontend.resetPlan')}}" class="banner-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="top-footer-ctn-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Sit amet consectetur felis justo sit amet felis.</h2>
                    <p>Etiam sit amet risus in risus suscipit vestibulum eget vel arcu. Vivamus cursus eu tortor at rutrum.
                    </p>
                </div>
                <div class="col-lg-3 text-lg-right">
                    <a href="" class="contact-btn mt-lg-2">Contact Us Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
