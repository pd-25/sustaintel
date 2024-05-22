@extends('frontend.layout.main')
@section('title', 'Blogs')
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
                <div class="col-lg-12 text-center mb-4">
                    <h2>Our Blogs</h2>
                    <p>Donec et lobortis urna. Pellentesque id sem ac sem rhoncus rhoncus et hendrerit odio. Sed aliquet
                        imperdiet scelerisque. Nulla a eros tincidunt, laoreet nulla et, ultricies nibh. Duis eget orci sed
                        felis pretium rutrum. </p>
                </div>
            </div>


            @foreach ($blogs as $index => $blog)
            <div class="row mb-lg-5">
                @if ($index % 2 == 0)
                    <div class="col-lg-6">
                        <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid w-100 border-radius">
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <h2>{{ $blog->title }}</h2>
                        <ul class="blog-dtl">
                            <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span>{{ $blog->created_at->format('F j, Y') }}</li>
                            <li><span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>By Admin</li>
                            {{-- <li><span><i class="fa fa-folder" aria-hidden="true"></i></span>{{ $blog->category }}</li> --}}
                        </ul>
                        <p>{{ Str::limit($blog->description, 150, '...') }}</p>
                        <a href="{{ route('frontend.blogs', $blog->slug) }}" class="banner-btn">Read More</a>
                    </div>
                @else
                    <div class="col-lg-6 align-self-center">
                        <h2>{{ $blog->title }}</h2>
                        <ul class="blog-dtl">
                            <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span>{{ $blog->created_at->format('F j, Y') }}</li>
                            <li><span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>By Admin</li>
                            {{-- <li><span><i class="fa fa-folder" aria-hidden="true"></i></span>{{ $blog->category }}</li> --}}
                        </ul>
                        <p>{{ Str::limit($blog->description, 150, '...') }}</p>
                        <a href="{{ route('frontend.blogs', $blog->slug) }}" class="banner-btn">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid w-100 border-radius">
                    </div>
                @endif
            </div>
        @endforeach
        
        {{-- Pagination --}}
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        {{ $blogs->links() }}
                    </ul>
                </nav>
            </div>
        </div>



        </div>
    </section>
@endsection
