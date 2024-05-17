@extends('frontend.layout.main')
@section('title', 'Environmental & Social Due Diligence')
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
                    <h2>Environmental & Social Due Diligence</h2>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Empowering Informed Decisions Through Rigorous Due Diligence</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Streamlined Process, Unparalleled Expertise</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Minimize Risk, Maximize Opportunity with ESG Due Diligence</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 text-justify align-self-center">
                    <p>Informed decision-making is crucial for navigating the complex world of ESG. Our Environment & Social
                        Due Diligence service empowers you to make strategic choices by providing a thorough risk
                        assessment. We conduct comprehensive compliance reviews and Phase I & II site assessments,
                        identifying potential environmental and social liabilities.</p>
                    <p>Our commitment goes beyond simply identifying risks. We provide user-friendly tools to streamline
                        data collection and track ongoing performance, making the due diligence process efficient and
                        transparent. This data-driven approach allows you to make well-informed investment decisions, manage
                        risk effectively, and ensure long-term business sustainability. Partner with us to gain a
                        competitive edge and unlock new opportunities in the evolving ESG landscape.</p>
                </div>

                <div class="col-lg-6">
                    <img src="{{asset('frontend/images/serv-img2.jpg')}}" class="img-fluid">
                </div>



            </div>
        </div>
    </section>
@endsection
