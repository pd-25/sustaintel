@extends('frontend.layout.main')
@section('title', 'Supply Chain Management')
@section('content')
    <section class="banner-slider" id="inn-banner-slider">
        <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
            <div role="listbox" class="carousel-inner">
                <div style="background-image: url('frontend/images/inner-banner.jpg')" class="carousel-item active">
                </div>
            </div>
        </div>
    </section>

    <section id="inn-pg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2>Supply Chain Management</h2>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Sustainable Procurement for a Responsible Future</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">Mitigating Risk, Building Ethical Supply Chains</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="inn-serv-box">
                                <p class="mb-0">End-to-End Solutions for Sustainable Supply Chain Management</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 text-justify align-self-center">
                    <p>In an interconnected world, managing your supply chain ethically and sustainably is critical. Our
                        experts provide comprehensive Supply Chain Management services to help you source materials and
                        products responsibly. We assist you in screening potential suppliers based on ESG performance,
                        identifying and mitigating supply chain risks, and developing robust risk monitoring frameworks.</p>
                    <p>Our services extend beyond risk assessment. We conduct audits to ensure your suppliers adhere to
                        ethical and sustainable practices. This comprehensive approach allows you to build a resilient
                        supply chain that minimizes environmental and social impact, enhances brand reputation, and
                        contributes to a more sustainable future.</p>
                </div>

                <div class="col-lg-6">
                    <img src="{{asset('frontend/images/serv-img5.jpg')}}" class="img-fluid">
                </div>



            </div>
        </div>
    </section>
@endsection
