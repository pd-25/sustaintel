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

    <section id="inn-pg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Careers</h2>
                    <p>Maecenas finibus lacus vel mi fermentum, eget scelerisque massa vestibulum. Aenean mollis
                        vehicula ligula in condimentum. Donec fringilla massa sit amet nulla tempor, non gravida justo
                        porttitor.</p>
                </div>

                @if (Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                @if (Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif

            </div>
            <div class="row mt-lg-5 mb-lg-4 justify-content-center">
                <div class="col-lg-6">
                    <div class="career-box">
                        <img src="{{ asset('frontend/images/career-icon1.png') }}" class="img-fluid m-auto pb-2">
                        <h4>Internships</h4>
                        <p>Etiam at ligula ut diam maximus semper a nec ligula. Donec rhoncus augue dui, a euismod erat
                            rutrum eget. Nullam ut neque eget orci gravida pharetra.</p>
                        <a href="" class="banner-btn" data-toggle="modal" data-target="#exampleModal"
                            onclick="setApplyType('{{ config('core.INTERN') }}')">Apply
                            Now</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="career-box">
                        <img src="{{ asset('frontend/images/career-icon2.png') }}" class="img-fluid m-auto pb-2">
                        <h4>Permanent</h4>
                        <p>Etiam at ligula ut diam maximus semper a nec ligula. Donec rhoncus augue dui, a euismod erat
                            rutrum eget. Nullam ut neque eget orci gravida pharetra.</p>
                        <a href="{{ route('frontend.careerList') }}" class="banner-btn">View All Jobs</a>
                    </div>
                </div>



            </div>
            @include('frontend.modal.applyModal')
            <hr>
            <div class="row mt-lg-5">
                <div class="col-lg-12 mb-lg-3">
                    <div class="benefit-box">
                        <h2>Benefits</h2>
                        <p>Maecenas nec nisl odio. Nullam posuere aliquet lectus, ut fermentum risus malesuada sit
                            amet. Integer non blandit libero, quis sollicitudin nisi. Phasellus et placerat dolor. In
                            cursus sagittis tempor. Maecenas volutpat dolor id dolor tristique, et eleifend lectus
                            ullamcorper. Etiam at ligula ut diam maximus semper a nec ligula. Donec rhoncus augue dui,
                            a euismod erat rutrum eget. Nullam ut neque eget orci gravida pharetra. Proin consequat
                            quam et faucibus varius. Nulla id nunc ullamcorper, fermentum arcu et, bibendum urna. </p>
                        <ul class="wel-list mb-0">
                            <li>Integer non blandit libero, quis sollicitudin nisi. Phasellus et placerat dolor.</li>
                            <li>Phasellus et placerat dolor. In cursus sagittis tempor.</li>
                            <li>Integer non blandit libero, quis sollicitudin nisi. Phasellus et placerat dolor.</li>
                            <li>Phasellus et placerat dolor. In cursus sagittis tempor.</li>
                            <li>Integer non blandit libero, quis sollicitudin nisi. Phasellus et placerat dolor.</li>
                            <li>Phasellus et placerat dolor. In cursus sagittis tempor.</li>
                            <li>Integer non blandit libero, quis sollicitudin nisi. Phasellus et placerat dolor.</li>
                            <li>Phasellus et placerat dolor. In cursus sagittis tempor.</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('frontend.modal.script')
