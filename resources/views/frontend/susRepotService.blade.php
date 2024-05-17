@extends('frontend.layout.main')
@section('title', 'Sustainability Reporting')
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
                    <h2>Sustainability Reporting</h2>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Crafting Compelling Stories of Sustainability</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Actionable Insights for Strategic Decision-Making</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Showcase Your ESG Commitment with Impactful Reporting</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 text-justify align-self-center">
                    <p>Sustainability reporting is no longer just about compliance. It's about showcasing your commitment to
                        ESG principles and engaging stakeholders in a meaningful way. Our team of experts crafts clear and
                        impactful Sustainability Reports that resonate with your audience.</p>
                    <p>We begin by collaborating with you to identify material ESG issues and establish realistic,
                        achievable goals. We then help you collect and analyze data, transforming it into compelling
                        narratives that demonstrate your progress towards sustainability objectives. Our reports provide
                        actionable insights that empower you to make strategic business decisions while upholding your ESG
                        commitments.</p>
                </div>

                <div class="col-lg-6">
                    <img src="{{asset('frontend/images/serv-img4.jpg')}}" class="img-fluid">
                </div>



            </div>
        </div>
    </section>
@endsection
