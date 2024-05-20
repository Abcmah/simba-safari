@extends('layout')
@section('content')
   
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/img/banner/i3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Our Projects</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Project</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio
    ============================================= -->
    <div class="portfolio-area default-padding">
        <div class="container">
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="mix-item-menu active-theme text-center">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".development">Development</button>
                            <button data-filter=".Port">Port</button>
                            <button data-filter=".Rules">Rules</button>
                            <button data-filter=".Maritime">Maritime</button>
                            <button data-filter=".ICT">ICT</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary">
                            <div id="portfolio-grid" class="portfolio-items col-3">
                                <div class="pf-item Rules">
                                    <div class="item-inner">
                                        <img src="assets/img/portfolio/i1.jpeg" alt="Thumb" />
                                        <!--<div class="overlay">
                                            <div class="view-list">
                                                <a href="https://www.youtube.com/watch?v=KVzCfWWzGyA" class="popup-youtube"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="info">
                                        <h4>Regulatory Compliance Services</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Regulation</a>
                                            </li>
                                            <li>
                                                <a href="#">Training</a>
                                            </li>
                                        </ul>
                                        <p>Assist clients in understanding and adhering to international and regional maritime regulations.</p>
                                        <p>Develop compliance manuals and conduct training sessions for maritime personnel.</p>
                                    </div>
                                </div>
                                <div class="pf-item  Maritime">
                                    <div class="item-inner">
                                        <img src="assets/img/portfolio/i2.jpeg" alt="Thumb" />
                                        <!--<div class="overlay">
                                            <div class="view-list">
                                                <a href="https://www.youtube.com/watch?v=KVzCfWWzGyA" class="popup-youtube"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="info">
                                        <h4>Market Research and Intelligence</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Research</a>
                                            </li>
                                        </ul>
                                        <p>Conduct market research to identify new opportunities and emerging trends in the maritime industry.</p>
                                        <p>Provide clients with strategic insights for informed decision-making.</p>
                                    </div>
                                </div>
                                <div class="pf-item Rules">
                                    <div class="item-inner">
                                        <img src="assets/img/portfolio/i3.jpeg" alt="Thumb" />
                                    </div>
                                    <div class="info">
                                        <h4>Safety and Security Audits</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Audits</a>
                                            </li>
                                            <li>
                                                <a href="#">System Management</a>
                                            </li>
                                        </ul>
                                        <p>Conduct safety and security audits for ships, ports, and maritime facilities.</p>
                                        <p>Develop and implement safety management systems to enhance overall maritime security.</p>
                                    </div>
                                </div>
                                <div class="pf-item ICT ">
                                    <div class="item-inner">
                                        <img src="assets/img/portfolio/i5.jpeg" alt="Thumb" />
                                    </div>
                                    <div class="info">
                                        <h4>Digital Transformation Services</h4>
                                        <ul>
                                            <li>
                                                <a href="#">ICT</a>
                                            </li>
                                            <li>
                                                <a href="#">Data</a>
                                            </li>
                                        </ul>
                                        <p>Implement digital solutions for streamlined processes and improved data management.</p>
                                        <p>Assist clients in transitioning to digital platforms for documentation, communication, and operations.</p>
                                    </div>
                                </div>
                                <div class="pf-item ICT">
                                    <div class="item-inner">
                                        <img src="assets/img/portfolio/market.jpg" alt="Thumb" />
                                        <!--<div class="overlay">
                                            <div class="view-list">
                                                <a href="https://www.youtube.com/watch?v=KVzCfWWzGyA" class="popup-youtube"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="info">
                                        <h4>Maritime Technology Integration</h4>
                                        <ul>
                                            <li>
                                                <a href="#">ICT</a>
                                            </li>
                                            <li>
                                                <a href="#">Maritime</a>
                                            </li>
                                        </ul>
                                        <p>Explore opportunities for implementing automation, IoT, and AI for improved efficiency.</p>
                                        <p>Advise clients on the adoption of cutting-edge technologies in the maritime sector.</p>
                                    </div>
                                </div>
                                
                                <div class="pf-item Maritime">
                                    <div class="item-inner">
                                        <img src="assets/img/portfolio/i8.jpeg" alt="Thumb" />
                                        <!--<div class="overlay">
                                            <div class="view-list">
                                                <a href="https://www.youtube.com/watch?v=KVzCfWWzGyA" class="popup-youtube"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="info">
                                        <h4>Environmental Impact Assessments</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Mitigation</a>
                                            </li>
                                            <li>
                                                <a href="#">Compliance</a>
                                            </li>
                                        </ul>
                                        <p>Offer services to assess and mitigate the environmental impact of maritime activities.</p>
                                        <p>Provide recommendations for sustainable practices and compliance with environmental regulations.</p>
                                    </div>
                                </div>
                                
                                <div class="pf-item development">
                                    <div class="item-inner">
                                        <img src="assets/img/portfolio/i7.jpeg" alt="Thumb" />
                                        <!--<div class="overlay">
                                            <div class="view-list">
                                                <a href="https://www.youtube.com/watch?v=KVzCfWWzGyA" class="popup-youtube"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="info">
                                        <h4>Feasibility Studies for Maritime Projects</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Maritime</a>
                                            </li>
                                            <li>
                                                <a href="#">Studies</a>
                                            </li>
                                        </ul>
                                        <p>Conduct feasibility studies for new maritime infrastructure projects, analyzing market trends, financial viability, and 
                                            potential challenges.</p>
                                    </div>
                                </div>
                                
                                <div class="pf-item Maritime development">
                                    <div class="item-inner">
                                        <img src="assets/img/portfolio/law.jpg" alt="Thumb" />
                                        <!--<div class="overlay">
                                            <div class="view-list">
                                                <a href="https://www.youtube.com/watch?v=KVzCfWWzGyA" class="popup-youtube"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="info">
                                        <h4>Vessel Performance Optimization</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Maritime</a>
                                            </li>
                                        </ul>
                                        <p>Analyze and optimize vessel performance to improve fuel efficiency and reduce operational costs.</p>
                                        <p>Implement technologies and practices to enhance overall fleet performance.</p>
                                    </div>
                                </div>
                                <div class="pf-item Maritime  Port development">
                                    <div class="item-inner">
                                        <img src="assets/img/portfolio/i4.jpeg" alt="Thumb" />
                                        <!--<div class="overlay">
                                            <div class="view-list">
                                                <a href="https://www.youtube.com/watch?v=KVzCfWWzGyA" class="popup-youtube"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="info">
                                        <h4>Port and Terminal Management</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Maritime</a>
                                            </li>
                                            <li>
                                                <a href="#">port</a>
                                            </li>
                                        </ul>
                                        <p>Provide solutions for optimizing cargo handling, storage, and logistics.</p>
                                        <p>Offer consultancy services for efficient port and terminal operations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->
        <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/Chart.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom-chart.js') }}"></script> --}}

@endsection