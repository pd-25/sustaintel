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
                <div class="col-lg-12 text-center mb-4">
                    <h2>Environment & Social Impact Assessment (ESIA)</h2>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Strategic Solutions for Sustainable Success</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Proactive Risk Management and Value Enhancement</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Move Beyond Compliance, Embrace Sustainability Leadership</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 text-justify align-self-center">
                    <p>In today's dynamic business landscape, a comprehensive Environment & Social Impact Assessment (ESIA)
                        is no longer optional. Our team of ESG experts goes beyond traditional sustainability consulting to
                        provide you with innovative solutions. We assess your social and environmental footprint, identify
                        potential risks, and develop effective mitigation strategies. This proactive approach not only helps
                        you stay ahead of regulations but also allows you to showcase your commitment to responsible
                        business practices, attracting environmentally and socially conscious stakeholders.</p>
                    <p>Our ESIA services encompass the entire lifecycle of your project, from initial planning to
                        post-development monitoring. We leverage data-driven insights to ensure your project aligns with
                        global ESG best practices, minimizing environmental impact and fostering positive social outcomes.
                        By partnering with us, you can unlock long-term value for your organization, enhance brand
                        reputation, and build a sustainable future.</p>
                </div>

                <div class="col-lg-6">
                    <img src="{{asset('frontend/images/serv-img1.jpg')}}" class="img-fluid">
                </div>



            </div>
        </div>
    </section>
@endsection
