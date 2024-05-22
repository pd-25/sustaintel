@extends('frontend.layout.main')
@section('title', 'News')
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
                <div class="col-lg-12 text-center mb-4">
                    <h2>News & Events</h2>
                    <p>Sed aliquet imperdiet scelerisque. Nulla a eros tincidunt, laoreet nulla et, ultricies nibh. Duis
                        eget orci sed felis pretium rutrum. </p>
                </div>
            </div>
            @forelse ($newss as $news)
                <div class="row mb-lg-5">
                    <div class="col-lg-6">
                        <img src="{{asset('storage/'.$news->image)}}" class="img-fluid w-100 border-radius">
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <h2>{{$news->title}}</h2>
                        <ul class="blog-dtl">
                            <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span>{{ $news->created_at->format('F j, Y') }}</li>
                            <li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>{{$news->location}}</li>
                        </ul>
                        <p>{{ Str::limit($news->description, 150, '...') }} </p>
                        <a href="{{route('frontend.news', $news->slug)}}" class="banner-btn">Read More</a>
                    </div>
                </div>
            @empty
            @endforelse


        </div>
    </section>
@endsection
