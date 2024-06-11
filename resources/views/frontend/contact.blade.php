
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
<section id="inn-pg-section" class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Us</h2>
                <p>Maecenas finibus lacus vel mi fermentum, eget scelerisque massa vestibulum. Aenean mollis
                    vehicula ligula in condimentum. Donec fringilla massa sit amet nulla tempor, non gravida justo
                    porttitor.</p>
            </div>
        </div>

        <div class="row mt-lg-5">
            <div class="col-lg-8">
                @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                <form role="form" action="{{route('frontend.contactPost')}}" method="post" id="job-form">
                    @csrf
                    <div class="controls">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" required="required" placeholder="First Name"
                                        class="form-control" name="first_name" id="first_name">
                                        @error('first_name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" required="required" placeholder="Last Name"
                                        class="form-control" name="last_name" id="last_name">
                                        @error('last_name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="tel" required="required" placeholder="Phone"
                                        class="form-control" name="form_Phone" id="form_Phone">
                                        @error('form_Phone')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" required="required" placeholder="Email"
                                        class="form-control" name="form_Email" id="form_Email">
                                        @error('form_Email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea data-error="Please,leave us a message." required="required" rows="4" placeholder="Message..."
                                        class="form-control" name="form_message" id="form_message"></textarea>
                                        @error('form_message')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <input type="submit" value="Submit Now" class="banner-btn">
                            </div>
                        </div>


                    </div>
                </form>

            </div>
            <div class="col-lg-4">
                <div class="benefit-box">
                    <h4>Our Address</h4>
                    <hr>
                    <p>Street Address Here,<br> Kolkata-700075,<br> West Bengal ,India</p>
                    <p class="mb-0"><i class="fa fa-phone" aria-hidden="true"></i> +91 9876543210</p>
                    <p class="mb-0"><i class="fa fa-whatsapp" aria-hidden="true"></i> +91 9876543210</p>
                    <p class="mb-0"><i class="fa fa-envelope" aria-hidden="true"></i> info@companyname.com</p>
                    <hr>
                    <ul class="footer-social">
                        <li><a href=""><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>


<section id="map-section">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.6164958874465!2d88.3186854752978!3d22.48104147955703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027bb69682e351%3A0x6ea6470293efc0ff!2sWebredas%20Technologies!5e0!3m2!1sen!2sin!4v1715268062860!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</section>
@endsection
