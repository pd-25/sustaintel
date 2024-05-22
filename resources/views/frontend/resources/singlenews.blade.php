@extends('frontend.layout.main')
@section('title', 'News Details')
@section('content')
    <section class="banner-slider" id="inn-banner-slider">
        <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
            <div role="listbox" class="carousel-inner">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div style="background-image: url('/frontend/images/inner-banner.jpg')" class="carousel-item active">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content -->






    <section id="inn-pg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2>{{ $news->title }}</h2>
                    <ul class="blog-dtl">
                        <li><span><i class="fa fa-calendar"
                                    aria-hidden="true"></i></span>{{ $news->created_at->format('F j, Y') }}</li>
                        <li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>{{ $news->location }}</li>
                    </ul>
                </div>
            </div>
            <div class="row mb-lg-5">
                <div class="col-lg-12">
                    <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid w-100 border-radius">
                </div>
                <div class="col-lg-12 mt-lg-5">

                    <p>{{ $news->description }}
                    </p>

                </div>
            </div>



        </div>
    </section>

    <section id="events-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3 text-center">
                    <h2>News & Events Gallery</h2>
                </div>
                <div class="col-lg-12">
                    <div id="demo-pranab">
                        <div id="owl-events" class="owl-carousel owl-theme">
                            {{-- @foreach ($news_images as $news_image)
                                <div class="item">
                                    <img src="{{ asset('storage/' . $news_image->image) }}" class="img-fluid">
                                </div>
                            @endforeach --}}
                            <div class="item">
                                <img src="{{asset('frontend/images/event-pic0.jpg')}}" class="img-fluid">
                              </div>
                              <div class="item">
                                <img src="{{asset('frontend/images/event-pic1.jpg')}}" class="img-fluid">
                              </div>
                              <div class="item">
                                <img src="{{asset('frontend/images/event-pic2.jpg')}}" class="img-fluid">
                              </div>
                              <div class="item">
                                <img src="{{asset('frontend/images/event-pic3.jpg')}}" class="img-fluid">
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
