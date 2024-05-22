@extends('frontend.layout.main')
@section('title', 'Detail Case Study')
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
                <div class="col-lg-12 text-center mb-lg-4">
                    <h2 class="mb-lg-4">{{ $caseStudy->title }}</h2>
                    <p>{{ $caseStudy->description }}
                    </p>
                </div>
            </div>
            @forelse ($caseStudy?->sections as $section)
                <div class="row">
                    <div class="col-lg-12 light-bg">
                        <h3>{{$section->title}}</h3>
                        <p>{{$section->description}}
                        </p>
                    </div>
                </div>
            @empty
            @endforelse




        </div>
    </section>
@endsection
