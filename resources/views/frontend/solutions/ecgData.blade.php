@extends('frontend.layout.main')
@section('title', 'ESG Data Management & Reporting')
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
                    <h2>ESG Data Management & Reporting</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{asset('frontend/images/dashboard-img.jpg')}}" class="img-fluid w-100 pb-3 m-auto">
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 light-bg">
                    <h3>Features</h3>
                    <p>Mauris aliquet aliquam purus non bibendum. Fusce euismod nibh at eros pellentesque, id ultricies
                        tortor sodales. Integer volutpat turpis et sem tristique faucibus in nec lectus. Phasellus at lacus
                        dignissim risus finibus ornare id id dui. Curabitur bibendum nulla sed diam tempus, ut sollicitudin
                        ante rutrum. Vivamus purus ipsum, porttitor ut tincidunt non, efficitur id erat. Donec non ante
                        arcu. Nunc sit amet diam non magna feugiat eleifend. Vestibulum pharetra viverra mauris, dictum
                        aliquam ligula iaculis ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Fusce ut leo placerat, efficitur eros at, interdum mauris.</p>
                    <p>Maecenas arcu dui, dapibus eu ullamcorper eu, ullamcorper fermentum tortor. Etiam sed risus id augue
                        egestas maximus et nec sem. Nunc ullamcorper convallis efficitur. Phasellus at nunc vitae elit
                        interdum facilisis. Nunc facilisis ligula sem, sit amet auctor ex eleifend vel. </p>
                </div>
                <div class="col-lg-12 light-bg">
                    <h3>Benefits</h3>
                    <p>Aliquam purus erat, suscipit et diam sit amet, blandit ullamcorper nisi. Sed nulla tellus, elementum
                        ac erat eu, feugiat gravida nulla. Nam tristique erat porttitor, porttitor nunc a, tempor risus.
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam
                        consequat pulvinar orci ac fermentum. Fusce maximus tortor erat. Pellentesque nec varius metus.
                        Donec et lobortis urna. Pellentesque id sem ac sem rhoncus rhoncus et hendrerit odio. Sed aliquet
                        imperdiet scelerisque. Nulla a eros tincidunt, laoreet nulla et, ultricies nibh. Duis eget orci sed
                        felis pretium rutrum. </p>
                    <p>Donec condimentum, nisl ornare consequat gravida, ipsum arcu maximus dui, a hendrerit enim ante in
                        arcu. Mauris varius id elit sit amet vehicula. Phasellus tempus massa odio, ac lobortis mi porta
                        lobortis. Etiam sit amet risus in risus suscipit vestibulum eget vel arcu. Vivamus cursus eu tortor
                        at rutrum. Vestibulum congue efficitur est, at dignissim sapien gravida eget. Donec non metus a arcu
                        ornare faucibus vel vel risus. </p>
                </div>

            </div>





        </div>
    </section>

    <section id="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>What Our Clients Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div id="demo-pranab">
                        <div id="owl-testimonial" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonial-box">
                                    <div class="media">
                                        <img src="{{asset('frontend/images/quote-icon.png')}}" class="mr-3" alt="...">
                                        <div class="media-body">
                                            <p>Curabitur velit arcu, pellenteue quis varius at, porta eget ex. Nulla phtra
                                                semper tortor, ornare tincidunt est fcibus at a, maximus ut tellus. Duisis
                                                nec libero ultricies tincidunt ut a risus fusce ut convallis lectus. </p>
                                            <div class="media">
                                                <img src="{{asset('frontend/images/review-pic.jpg')}}" class="mr-3" alt="...">
                                                <div class="media-body align-self-center">
                                                    <p>Ankita Gupta</p>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <p class="ts-designation">Designation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-box">
                                    <div class="media">
                                        <img src="{{asset('frontend/images/quote-icon.png')}}" class="mr-3" alt="...">
                                        <div class="media-body">
                                            <p>Curabitur velit arcu, pellenteue quis varius at, porta eget ex. Nulla phtra
                                                semper tortor, ornare tincidunt est fcibus at a, maximus ut tellus. Duisis
                                                nec libero ultricies tincidunt ut a risus fusce ut convallis lectus. </p>
                                            <div class="media">
                                                <img src="{{asset('frontend/images/review-pic.jpg')}}" class="mr-3" alt="...">
                                                <div class="media-body align-self-center">
                                                    <p>Ankita Gupta</p>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <p class="ts-designation">Designation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-box">
                                    <div class="media">
                                        <img src="{{asset('frontend/images/quote-icon.png')}}" class="mr-3" alt="...">
                                        <div class="media-body">
                                            <p>Curabitur velit arcu, pellenteue quis varius at, porta eget ex. Nulla phtra
                                                semper tortor, ornare tincidunt est fcibus at a, maximus ut tellus. Duisis
                                                nec libero ultricies tincidunt ut a risus fusce ut convallis lectus. </p>
                                            <div class="media">
                                                <img src="{{asset('frontend/images/review-pic.jpg')}}" class="mr-3" alt="...">
                                                <div class="media-body align-self-center">
                                                    <p>Ankita Gupta</p>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <p class="ts-designation">Designation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="top-footer-ctn-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Sit amet consectetur felis justo sit amet felis.</h2>
                    <p>Etiam sit amet risus in risus suscipit vestibulum eget vel arcu. Vivamus cursus eu tortor at rutrum.
                    </p>
                </div>
                <div class="col-lg-3 text-lg-right">
                    <a href="" class="contact-btn mt-lg-2">Contact Us Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
