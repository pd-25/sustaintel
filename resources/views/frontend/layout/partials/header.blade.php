<header id="main-header" class="header">
    <div id="second-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-4">
                    <div class="logo">
                        <img src="{{asset('frontend/images/logo.png')}}" class="img-fluid">
                    </div>
                </div>


                <!-- Section: Navbar Menu -->
                <div class="col-lg-8">
                    <div class="overlay"></div>
                    <nav class="menu">
                        <div class="menu-mobile-header">
                            <button type="button" class="menu-mobile-arrow"><i
                                    class="ion ion-ios-arrow-back"></i></button>
                            <div class="menu-mobile-title"></div>
                            <button type="button" class="menu-mobile-close"><i
                                    class="ion ion-ios-close"></i></button>
                        </div>
                        <ul class="menu-section">
                            <li><a href="{{route('frontend.index')}}">Home</a></li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">Company </a><i class="ion ion-ios-arrow-down menu-icon"></i>
                                <div class="menu-subs menu-column-1">
                                    <div class="list-item text-left">
                                        <ul>
                                            <li><a href="{{route('frontend.aboutUs')}}">About Us</a></li>
                                            <li><a href="{{route('frontend.career')}}">Careers</a></li>
                                            <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Services </a><i class="ion ion-ios-arrow-down menu-icon"></i>
                                <div class="menu-subs menu-column-1">
                                    <div class="list-item text-left">
                                        <ul>
                                            <li><a href="{{route('frontend.envImpactService')}}">Environmental
                                                    & Social Impact Assessment</a></li>
                                            <li><a href="{{route('frontend.envDueService')}}">Environmental &
                                                    Social Due Diligence</a></li>
                                            <li><a href="{{route('frontend.esmMonitService')}}">ESMS Preparation &
                                                    Monitoring</a></li>
                                            <li><a href="{{route('frontend.susRepotService')}}">Sustainability Reporting</a>
                                            </li>
                                            <li><a href="{{route('frontend.supChainService')}}">Supply Chain Management</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('frontend.solutions')}}">Solutions </a><i
                                    class="ion ion-ios-arrow-down menu-icon"></i>
                                <div class="menu-subs menu-column-1">
                                    <div class="list-item text-left">
                                        <ul>
                                            <li><a href="{{route('frontend.ecgData')}}">ESG Data Management &
                                                    Reporting</a></li>
                                            <li><a href="{{route('frontend.envScreen')}}">Environment & Social
                                                    Screening </a></li>
                                            <li><a href="{{route('frontend.resetPlan')}}">Resettlement
                                                    Action Plan Framework</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Resources </a><i class="ion ion-ios-arrow-down menu-icon"></i>
                                <div class="menu-subs menu-column-1">
                                    <div class="list-item text-left">
                                        <ul>
                                            <li><a href="{{route('frontend.blogs')}}">Blogs</a></li>
                                            <li><a href="{{route('frontend.caseStudy')}}">Case Studies</a></li>
                                            <li><a href="{{route('frontend.news')}}">News & Events </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>

                <div class="header-item-right">
                    <button type="button" class="menu-mobile-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>