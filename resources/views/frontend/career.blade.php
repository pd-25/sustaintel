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
        </div>
        <div class="row mt-lg-5 mb-lg-4 justify-content-center">
            <div class="col-lg-6">
                <div class="career-box">
                    <img src="{{asset('frontend/images/career-icon1.png')}}" class="img-fluid m-auto pb-2">
                    <h4>Internships</h4>
                    <p>Etiam at ligula ut diam maximus semper a nec ligula. Donec rhoncus augue dui, a euismod erat
                        rutrum eget. Nullam ut neque eget orci gravida pharetra.</p>
                    <a href="" class="banner-btn" data-toggle="modal" data-target="#exampleModal">Apply
                        Now</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="career-box">
                    <img src="{{asset('frontend/images/career-icon2.png')}}" class="img-fluid m-auto pb-2">
                    <h4>Permanent</h4>
                    <p>Etiam at ligula ut diam maximus semper a nec ligula. Donec rhoncus augue dui, a euismod erat
                        rutrum eget. Nullam ut neque eget orci gravida pharetra.</p>
                    <a href="career-list.html" class="banner-btn">View All Jobs</a>
                </div>
            </div>



        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Please fill up the form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="" method="post" id="job-form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" required="required" placeholder="First Name"
                                                class="form-control" name="first_name" id="first_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" required="required" placeholder="Last Name"
                                                class="form-control" name="last_name" id="last_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" required="required" placeholder="Phone"
                                                class="form-control" name="form_Phone" id="form_Phone">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" required="required" placeholder="Email"
                                                class="form-control" name="form_Email" id="form_Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea data-error="Please,leave us a message." required="required" rows="4" placeholder="Message..."
                                                class="form-control" name="form_message" id="form_message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>Upload CV:</b></label>
                                            <input type="file" name="fileToUpload" id="fileToUpload"
                                                class="form-control">
                                        </div>
                                    </div>



                                    <div class="col-md-12 mt-3">
                                        <input type="submit" value="Submit Now" class="banner-btn">
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
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

