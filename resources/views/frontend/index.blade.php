@extends('frontend.layout.main')
@section('title', 'Home')
@section('content')
<section id="banner-slider" class="banner-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('frontend/images/banner.jpg');">
                <canvas id="canvas"></canvas>
                <div class="carousel-caption">
                    <h1>Your Partner in Sustainable Growth</h1>
                    <p class="banner-ctn">Your partner for a thriving, eco-conscious future</p>
                    <a href="" class="banner-btn">Contact Us</a>
                </div>
            </div>
        </div>
       
    </div>
</section>

<section id="welcome-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-4">‘There is no alternative to Sustainable Development’</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="count-box">
                            <h4>11700</h4>
                            <p>firms will be impacted by EU’s CSRD (estimated)</p>
                        </div>
                        <div class="count-box">
                            <h4>65%</h4>
                            <p>of the international dealmakers examine ESG parameters during M&A decisions </p>
                        </div>
                        <div class="count-box">
                            <h4>929</h4>
                            <p>companies from the Forbes 2000 list had set net zero targets</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="count-box mt-lg-5">
                            <h4>81%</h4>
                            <p>respondents reported witnessed increased demand for ESG data for FY 2020-21
                                (Bloomberg Data and Tech Summit)</p>
                        </div>
                        <div class="count-box">
                            <h4>58%</h4>
                            <p>of global CEOs witnessed an increased demand for ESG reporting & transparency</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="hm-about-ctn-box">
                    <h2>Welcome To <b>Sustaintel</b></h2>
                    <p>At Sustainable Intelligence, we aim to improve the quality of decision-making in businesses,
                        by collecting your data from diverse sources to create a digital knowledge asset helping you
                        solve complex business problems. Our advisory services seamlessly complement the process,
                        providing post-data collection guidance to help you translate information into strategic
                        action. </p>
                    <p>Unlock Sustainable Growth with Sustainable Intelligence. Our cutting-edge data integration
                        solutions offer unmatched environmental transparency. Gain a holistic view of your footprint
                        across facilities, fleets, and production processes. Through data-driven decision-making,
                        minimize your environmental impact and become a leader in the sustainable economy.</p>
                    <a href="" class="banner-btn">Case Studies</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clogo-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div id="demo-pranab">
                    <div id="owl-clogo" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{asset('frontend/images/c-logo1.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/c-logo1.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/c-logo1.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/c-logo1.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/c-logo1.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/c-logo1.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/c-logo1.jpg')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sustain-hd-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>The World is Changing, and So Must Your Business</h2>
                <p>Our advisory services and ESG tools go beyond data collection & integration. We are your partner
                    in transforming raw information into actionable insights that empower you to make conscious
                    business decisions that drive real environmental and social impact.</p>
            </div>
        </div>
    </div>
</section>

<section id="sustain-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="sustain-left-box">
                    <h3>Our Approach to ESG Reporting and Sustainability</h3>
                    <div class="media">
                        <img src="{{asset('frontend/images/sus-icon1.png')}}" class="mr-3 align-self-center" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">Simplifying Complexity</h5>
                            <p>We translate complex ESG frameworks and standards into clear, actionable plans
                                tailored to your industry.</p>
                        </div>
                    </div>
                    <div class="media">
                        <img src="{{asset('frontend/images/sus-icon2.png')}}" class="mr-3 align-self-center" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">Streamlining Data Collection</h5>
                            <p>Our innovative solutions automate data gathering and analysis, saving your time and
                                resources.</p>
                        </div>
                    </div>
                    <div class="media">
                        <img src="{{asset('frontend/images/sus-icon3.png')}}" class="mr-3 align-self-center" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">Actionable Insights</h5>
                            <p>Our ESG tools transform data into easy-to-understand dashboards and reports,
                                empowering you to make data-driven decisions for a sustainable future.</p>
                        </div>
                    </div>
                    <div class="media">
                        <img src="{{asset('frontend/images/sus-icon4.png')}}" class="mr-3 align-self-center" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">Collaborative Partnership</h5>
                            <p>We work closely with you to understand your unique goals and challenges, providing
                                ongoing support throughout your sustainability journey.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="sustain-right-box">
                    <img src="{{asset('frontend/images/col-img.jpg')}}" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
</section>

<section id="spc-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h2>Ready to embark on your sustainability journey?</h2>
                <p>Contact us today to learn how Sustainable Intelligence can help your organization achieve its ESG
                    goals and build a brighter future for all. </p>
            </div>
        </div>

    </div>
</section>

<section id="services-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <h2>Our Services</h2>
                <p>Our ESG Experts are committed to providing data-backed, and objective oriented ESG services to
                    the clients, willing to bring significant organizational changes in their ESG division.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="demo-pranab">
                    <div id="owl-services" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="services-box">
                                <img src="{{asset('frontend/images/serv-icon1.png')}}" class="img-fluid">
                                <h4>Environmental & Social Impact Assessment</h4>
                                <p>Aliquam aliquet massa purus, eget sollici tudin leo semper vel. Ut dictum
                                    efficitur nisl at vehicula. </p>
                                <a href="" class="banner-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-box">
                                <img src="{{asset('frontend/images/serv-icon2.png')}}" class="img-fluid">
                                <h4>Environmental & Social Due Diligence</h4>
                                <p>Aliquam aliquet massa purus, eget sollici tudin leo semper vel. Ut dictum
                                    efficitur nisl at vehicula. </p>
                                <a href="" class="banner-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-box">
                                <img src="{{asset('frontend/images/serv-icon3.png')}}" class="img-fluid">
                                <h4>ESMS Preparation & Monitoring</h4>
                                <p>Aliquam aliquet massa purus, eget sollici tudin leo semper vel. Ut dictum
                                    efficitur nisl at vehicula. </p>
                                <a href="" class="banner-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-box">
                                <img src="{{asset('frontend/images/serv-icon4.png')}}" class="img-fluid">
                                <h4>Sustainability Reporting</h4>
                                <p>Aliquam aliquet massa purus, eget sollici tudin leo semper vel. Ut dictum
                                    efficitur nisl at vehicula. </p>
                                <a href="" class="banner-btn">Explore More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-box">
                                <img src="{{asset('frontend/images/serv-icon5.png')}}" class="img-fluid">
                                <h4>Supply Chain Management</h4>
                                <p>Aliquam aliquet massa purus, eget sollici tudin leo semper vel. Ut dictum
                                    efficitur nisl at vehicula. </p>
                                <a href="" class="banner-btn">Explore More</a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="solutions-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('frontend/images/solution-img.png')}}" class="img-fluid">


            </div>
            <div class="col-lg-6">
                <div class="solution-rt-box">
                    <h2>Our Solutions</h2>
                    <p>Our ESG Experts are committed to providing data-backed, and objective oriented ESG services
                        to the clients, willing to bring significant organizational changes in their ESG division.
                    </p>
                    <ul class="wel-list">
                        <li>ESG Data Management & Reporting </li>
                        <li>Environment & Social Screening</li>
                        <li>Resettlement Action Plan Framework</li>
                    </ul>
                    <a href="" class="banner-btn">Read More</a>
                </div>
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
                                        <p>Curabitur velit arcu, pellenteue quis varius at, porta eget ex. Nulla
                                            phtra semper tortor, ornare tincidunt est fcibus at a, maximus ut
                                            tellus. Duisis nec libero ultricies tincidunt ut a risus fusce ut
                                            convallis lectus. </p>
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
                                        <p>Curabitur velit arcu, pellenteue quis varius at, porta eget ex. Nulla
                                            phtra semper tortor, ornare tincidunt est fcibus at a, maximus ut
                                            tellus. Duisis nec libero ultricies tincidunt ut a risus fusce ut
                                            convallis lectus. </p>
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
                                        <p>Curabitur velit arcu, pellenteue quis varius at, porta eget ex. Nulla
                                            phtra semper tortor, ornare tincidunt est fcibus at a, maximus ut
                                            tellus. Duisis nec libero ultricies tincidunt ut a risus fusce ut
                                            convallis lectus. </p>
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
@endsection