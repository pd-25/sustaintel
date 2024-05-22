@extends('frontend.layout.main')
@section('title', 'Case Studies')
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
                <div class="col-lg-12 text-center">
                    <h2>Case Studies</h2>
                    <p>Mauris egestas semper volutpat. Nunc malesuada sollicitudin varius. Nam quis neque pharetra, blandit
                        orci at, iaculis elit. Aenean id metus gravida metus imperdiet convallis. Donec non tincidunt sem.
                        Vivamus nec consectetur sem, vel porta libero.</p>
                </div>
            </div>


            <div class="row">
                @forelse ($caseStudies as $caseStudy)
                    <div class="col-lg-4 text-center">
                        <div class="case-studies-box">
                            <div class="case-studies-box-img">
                                <img src="{{ asset('storage/' . $caseStudy->image) }}" class="img-fluid">
                            </div>
                            <div class="case-studies-box-ctn">
                                <h4>{{ $caseStudy->title }} </h4>
                                <p>{{ Str::limit($caseStudy->description, 100, '...') }}</p>
                                <a href="{{ route('frontend.caseStudy', $caseStudy->slug) }}" class="banner-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse


            </div>




        </div>
    </section>
@endsection
