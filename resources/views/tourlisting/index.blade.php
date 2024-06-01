@extends('layout')
@section('content')
    <!-- main banner -->
    <section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="gridview-sidebar">
        <div class="banner-text">
            <div class="center-text">
                <div class="container">
                    <h1>Simba Safaris</h1>
                    <strong class="subtitle">Adventures</strong>
                    <!-- breadcrumb -->
                    <nav class="breadcrumbs">
                        <ul>
                            <li><a href="/">HOME</a></li>
                            <li>ADVENTURES</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- main container -->
    <main id="main">
        <!-- content with sidebar -->
        <div class="bg-gray content-with-sidebar grid-view-sidebar">
            <div class="container">
                <div id="two-columns" class="row">
                    <!-- sidebar -->
                    <aside id="sidebar" class="col-md-4 col-lg-3 sidebar sidebar-list">
                        <div class="sidebar-holder">
                            <header class="heading">
                                <h3>FILTER</h3>
                            </header>
                            <div class="accordion">
                                <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">SELECT REGION</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="side-list region-list hovered-list">
                                                <li>
                                                    <a href="?region=kenya">
																<span class="ico-holder">
																	<span class="icon-africa"></span>
																</span>
                                                        <span class="text">Kenya</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?region=tanzania">
																<span class="ico-holder">
																	<span class="icon-africa"></span>
																</span>
                                                        <span class="text">Tanzania</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?region=uganda">
																<span class="ico-holder">
																	<span class="icon-africa"></span>
																</span>
                                                        <span class="text">Uganda</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">Activity type</a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="side-list horizontal-list hovered-list">
                                                <li>
                                                    <a href="?activity=hiking">
                                                        <span class="icon-hiking-camping"></span>
                                                        <span class="popup">
																	Hiking
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?activity=wildlife">
                                                        <span class="icon-wildlife"></span>
                                                        <span class="popup">
																	Wildlife
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?activity=boating">
                                                        <span class="icon-boating"></span>
                                                        <span class="popup">
																	Boating
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?activity=family">
                                                        <span class="icon-family"></span>
                                                        <span class="popup">
																	Family
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?activity=culture">
                                                        <span class="icon-culture"></span>
                                                        <span class="popup">
																	Culture
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?activity=luxury">
                                                        <span class="icon-diamond"></span>
                                                        <span class="popup">
																	Luxury
																</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3">Landscape</a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="side-list horizontal-list hovered-list">
                                                <li>
                                                    <a href="?landscape=beach">
                                                        <span class="icon-beach"></span>
                                                        <span class="popup">
																	beach
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?landscape=jungle">
                                                        <span class="icon-jungle"></span>
                                                        <span class="popup">
																	jungle
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?landscape=desert">
                                                        <span class="icon-desert"></span>
                                                        <span class="popup">
																	desert
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?landscape=mountain">
                                                        <span class="icon-mountain"></span>
                                                        <span class="popup">
																	mountain
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?landscape=rural">
                                                        <span class="icon-rural"></span>
                                                        <span class="popup">
																	rural
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?landscape=urban">
                                                        <span class="icon-urban"></span>
                                                        <span class="popup">
																	urban
																</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse4" aria-expanded="true" aria-controls="collapse4">Activity level</a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="side-list horizontal-list hovered-list">
                                                <li>
                                                    <a href="?level=level1">
                                                        <span class="icon-level1"></span>
                                                        <span class="popup">
																	Level 1
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?level=level2">
                                                        <span class="icon-level2"></span>
                                                        <span class="popup">
																	Level 2
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?level=level3">
                                                        <span class="icon-level3"></span>
                                                        <span class="popup">
																	Level 3
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?level=level4">
                                                        <span class="icon-level4"></span>
                                                        <span class="popup">
																	Level 4
																</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="?level=level5">
                                                        <span class="icon-level5"></span>
                                                        <span class="popup">
																	Level 5
																</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse5" aria-expanded="true" aria-controls="collapse5">Price range</a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <div id="slider-range"></div>
                                            <input type="text"  id="amount" readonly class="price-input">

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse6" aria-expanded="true" aria-controls="collapse6">community poll</a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <strong class="title">Was our tour  worth the price?</strong>
                                            <ul class="side-list check-list">
                                                <li>
                                                    <label for="check1" class="custom-checkbox">
                                                        <input id="check1" type="checkbox">
                                                        <span class="check-input"></span>
                                                        <span class="check-label">Yes</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="check2" class="custom-checkbox">
                                                        <input id="check2" type="checkbox">
                                                        <span class="check-input"></span>
                                                        <span class="check-label">No</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <strong class="sub-link"><a href="#">CAST YOUR VOTE</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div id="content" class="col-md-8 col-lg-9">
                        <div class="filter-option filter-box">
                            <strong class="result-info">{{ count($tourlistings) }} TRIPS MATCHES YOUR SEARCH</strong>
                            <div class="layout-holder">
                                <div class="layout-action">
                                    <a href="#" class="link link-list"><span class="icon-list"></span></a>
                                    <a href="#" class="link link-grid active"><span class="icon-grid"></span></a>
                                </div>
                                <div class="select-holder">
                                    <div class="select-col">
                                        <select class="filter-select sort-select">
                                            <option value="sort">Sort Order</option>
                                            <option value="sort">Price</option>
                                            <option value="sort">Recent</option>
                                            <option value="sort">Popular</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-holder content-sub-holder">
                            <div class="row db-3-col">
                                @foreach($tourlistings as $tourlisting)
                                    <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                        <div class="thumbnail">
                                            <div class="img-wrap">
                                                <img src="{{'/storage/'.$tourlisting->photo}}" height="228" width="350" alt="image description">
                                            </div>
                                            <h3 class="small-space"><a href="/tour-listings/{{$tourlisting->id}}">{{ $tourlisting->place }}</a></h3>
                                            <!--<span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>-->
                                            <aside class="meta">
											<span class="country">
												<span class="icon-world"> </span>{{$tourlisting->days}} Days
											</span>
                                                <span class="activity">
												<span class="icon-acitivities"> </span>{{$tourlisting->nights}} Nights
											</span>
                                            </aside>
                                            {!! $tourlisting->discription !!}
                                            <a href="/tour-listings/{{$tourlisting->id}}" class="btn btn-default">explore</a>
                                            <footer>
                                                <ul class="social-networks">
                                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                                    <li><a href="#"><span class="icon-google-plus"></span></a></li>
                                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                                </ul>
                                                <span class="price">from <span>$ {{$tourlisting->badget_from}}</span></span>
                                            </footer>
                                        </div>
                                    </article>
                                @endforeach

                            </div>
                        </div>
{{--                            <div class="col-md-12 pagi-area">--}}
{{--                                <nav aria-label="navigation">--}}
{{--                                    <ul class="pagination">--}}
{{--                                        {{ $tourlistings->links() }}--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
                        <!-- pagination wrap -->
                        <!--
									<div class="btn-prev">
										<a href="#" aria-label="Previous">
											<span class="icon-angle-right"></span>
										</a>
									</div>-->

                            <div class="col-md-12 pagi-area">
                                <nav style="display: flex; justify-content: center;" aria-label="navigation mx-auto">
                                    <ul  class="pagination">
                                        {{ $tourlistings->links() }}
                                    </ul>
                                </nav>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- recent block -->
        <aside class="recent-block recent-list recent-wide-thumbnail">
            <div class="container">
                <h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
                <div class="row">
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
                            <strong class="info-title">Everest Region, Nepal</strong>
                            <div class="img-wrap">
                                <img src="img/listing/img-31.jpg" height="210" width="250" alt="image description">
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>5 Days</span>
                                    <span>$299</span>
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-hiking"></span>
                                            <span class="popup">
														Hiking
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-mountain"></span>
                                            <span class="popup">
														Mountain
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-level5"></span>
                                            <span class="popup">
														Level 5
													</span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
                            <strong class="info-title">Everest Region, Nepal</strong>
                            <div class="img-wrap">
                                <img src="img/listing/img-32.jpg" height="210" width="250" alt="image description">
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>5 Days</span>
                                    <span>$299</span>
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-hiking"></span>
                                            <span class="popup">
														Hiking
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-mountain"></span>
                                            <span class="popup">
														Mountain
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-level5"></span>
                                            <span class="popup">
														Level 5
													</span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
                            <strong class="info-title">Everest Region, Nepal</strong>
                            <div class="img-wrap">
                                <img src="img/listing/img-33.jpg" height="210" width="250" alt="image description">
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>5 Days</span>
                                    <span>$299</span>
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-hiking"></span>
                                            <span class="popup">
														Hiking
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-mountain"></span>
                                            <span class="popup">
														Mountain
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-level5"></span>
                                            <span class="popup">
														Level 5
													</span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
                            <strong class="info-title">Everest Region, Nepal</strong>
                            <div class="img-wrap">
                                <img src="img/listing/img-34.jpg" height="210" width="250" alt="image description">
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>5 Days</span>
                                    <span>$299</span>
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-hiking"></span>
                                            <span class="popup">
														Hiking
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-mountain"></span>
                                            <span class="popup">
														Mountain
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-level5"></span>
                                            <span class="popup">
														Level 5
													</span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                </div>
            </div>
        </aside>
    </main>
    <script>
        let budgetBraket = document.querySelector('#slider-range')
        console.log(budgetBraket);
        budgetBraket.addEventListener('click',()=>{
            window.location.href = `/tour-listings?price_range=${document.querySelector('#amount').value}`
            console.log(budgetBraket.value)
        })
    </script>
@endsection

