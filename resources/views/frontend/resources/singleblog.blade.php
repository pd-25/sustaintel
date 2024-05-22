@extends('frontend.layout.main')
@section('title', 'Blogs Details')
@section('content')

    <section class="banner-slider" id="inn-banner-slider">
        <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
            <div role="listbox" class="carousel-inner">
                <div style="background-image: url('/frontend/images/inner-banner.jpg')" class="carousel-item active">
                </div>
            </div>
        </div>
    </section>
    <section id="inn-pg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <h2>{{ $blog->title }}</h2>
                    <ul class="blog-dtl">
                        <li><span><i class="fa fa-calendar"
                                    aria-hidden="true"></i></span>{{ $blog->created_at->format('F j, Y') }}</li>
                        <li><span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>By admin</li>
                        {{-- <li><span><i class="fa fa-folder" aria-hidden="true"></i></span>Uncategorized</li> --}}
                    </ul>
                </div>
                <div class="col-lg-7">
                    <img src="{{asset('storage/'.$blog->image)}}" class="img-fluid w-100 border-radius">
                </div>
                <div class="col-lg-12 mt-lg-4">
                    <p>{{ $blog->description }} </p>
                </div>
            </div>
        </div>
    </section>

@endsection
