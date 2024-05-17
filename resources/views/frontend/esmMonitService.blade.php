@extends('frontend.layout.main')
@section('title', 'Environmental & Social Management System (ESMS) Preparation & Monitoring')
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
                    <h2>Environmental & Social Management System (ESMS) Preparation & Monitoring</h2>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Optimizing Your ESMS for Peak Performance</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Comprehensive Services, Streamlined Operations</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Achieve Sustainability Goals with a Robust ESMS</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 text-justify align-self-center">
                    <p>A well-functioning Environmental & Social Management System (ESMS) is essential for managing your
                        environmental and social impact effectively. Our team of experienced ESG specialists offers
                        comprehensive ESMS services, from policy and standard development to auditing, verification, and
                        incident reporting. We help you establish a robust framework that aligns with your organization's
                        specific needs and industry best practices.</p>
                    <p>Our services extend beyond initial development. We provide ongoing monitoring and support to ensure
                        your ESMS functions optimally. This includes gap analysis, action plan creation, and performance
                        tracking. By partnering with us, you can achieve your sustainability goals, minimize environmental
                        risks, and foster a culture of continuous improvement within your organization.</p>
                </div>

                <div class="col-lg-6">
                    <img src="{{asset('frontend/images/serv-img3.jpg')}}" class="img-fluid">
                </div>



            </div>
        </div>
    </section>
@endsection
