@extends('layout')
@section('content')
    <!-- main container -->
    <main style="margin-top: 5rem" id="main">
        <!-- main tour information -->
        <section class="container-fluid trip-info">
            <div class="same-height two-columns row">
                <div class="height col-md-6">
                    <!-- top image slideshow -->
                    <div id="tour-slide">
                        <div class="slide">
                            <div class="bg-stretch">
                                <img src="{{'/storage/'.$tour->photo}}" alt="image descriprion" height="1104" width="966">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="bg-stretch">
                                <img src="{{'/storage/'.$tour->secondPhoto}}" alt="image descriprion" height="1104" width="966">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="height col-md-6 text-col">
                    <div class="holder">
                        <h1 class="small-size">{{$tour->place}} ( {{$tour->region->region}} )</h1>
                        <div class="price">
                            from <strong>${{$tour->badget_from}}</strong>
                        </div>
                        <div class="description">
                           {!! $tour->discription !!}
                        </div>
                        <ul class="reviews-info">
                            <li>
                                <div class="info-left">
                                    <strong class="title">Reviews</strong>
                                    <span class="value">5 Reviews</span>
                                </div>
                                <div class="info-right">
                                    <div class="star-rating">
                                        <span><span class="icon-star"></span></span>
                                        <span><span class="icon-star"></span></span>
                                        <span><span class="icon-star"></span></span>
                                        <span><span class="icon-star"></span></span>
                                        <span class="disable"><span class="icon-star"></span></span>
                                    </div>
                                    <span class="value">4/5</span>
                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <strong class="title">Vacation Style</strong>
                                    <span class="value">Wildlife</span>
                                </div>
                                <div class="info-right">
                                    <ul class="ico-list">
                                        <li>
                                            <span class="icon icon-hiking"></span>
                                        </li>
                                        <li>
                                            <span class="icon icon-mount"></span>
                                        </li>
                                        <li>
                                            <span class="icon icon-camping"></span>
                                        </li>
                                    </ul>
                                    <span class="value">Family</span>
                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <strong class="title">Activity Level</strong>
                                    <span class="value">{{$tour->activity_level->level}}</span>
                                </div>
                                <div class="info-right">
                                    <ul class="ico-list">
                                        <li>
                                            <span class="icon icon-level3"></span>
                                        </li>
                                        <li>
                                            <span class="icon icon-level5"></span>
                                        </li>
                                        <li>
                                            <span class="icon icon-level7"></span>
                                        </li>
                                    </ul>
                                    <span class="value">4/5</span>
                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <strong class="title">Group Size</strong>
                                    <span class="value">Medium Grougs</span>
                                </div>
                                <div class="info-right">
                                    <ul class="ico-list">
                                        <li>
                                            <span class="icon icon-group-small"></span>
                                        </li>
                                        <li>
                                            <span class="icon icon-group-medium"></span>
                                        </li>
                                        <li>
                                            <span class="icon icon-group-large"></span>
                                        </li>
                                    </ul>
                                    <span class="value">9 </span>
                                </div>
                            </li>
                        </ul>

                        <div class="btn-holder">
                            <a href="#" class="btn btn-lg btn-info">BOOK NOW</a>
                        </div>
                        <ul class="social-networks social-share">
                            <li>
                                <a href="#" class="facebook">
											<span class="ico">
												<span class="icon-facebook"></span>
											</span>
                                    <span class="text">Share</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
											<span class="ico">
												<span class="icon-twitter"></span>
											</span>
                                    <span class="text">Tweet</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google">
											<span class="ico">
												<span class="icon-dribble"></span>
											</span>
                                    <span class="text">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="tab-container">
            <nav class="nav-wrap" id="sticky-tab">
                <div class="container">
                    <!-- nav tabs -->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation" class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Overview</a></li>
                        <li role="presentation"><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Itinerary</a></li>
                        <li role="presentation"><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Lodging</a></li>
                        <li role="presentation"><a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">Faq &amp; Review</a></li>
                        <li role="presentation"><a href="#tab05" aria-controls="tab05" role="tab" data-toggle="tab">Gallery</a></li>
                    </ul>
                </div>
            </nav>
            <!-- tab panes -->
            <div class="container tab-content trip-detail">
                <!-- overview tab content -->
                <div role="tabpanel" class="tab-pane active" id="tab01">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="header-box">All about Gorila Trekking</strong>
                            <div class="col-sm-4 col-md-3 map-col">
                            </div>
                            <div class="detail">
                                {!! $tour->discription !!}
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <strong class="header-box">The tour package inclusions and exclusions at a glance</strong>
                            <div class="text-box">
                                <div class="holder">
                                    <strong class="title">Whats included in this tour</strong>
                                    <span class="sub-title">Items that are covered in the cost of tour price.</span>
                                    <P><strong><i>NB: </i></strong><b>Rates are per person and excludes the international flight from/to your home country.</b></P>
                                    <ul class="content-list tick-list">
                                        @php
                                        $inclusions = explode(',',$tour->inclusion);
                                        @endphp
                                        @foreach($inclusions as $inclusion)
                                            <li>{{$inclusion}}</li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                            <div class="text-box not-included">
                                <div class="holder">
                                    <strong class="title">Whats not included in this tour</strong>
                                    <span class="sub-title">Items that are <strong>NOT </strong>covered in the cost of tour price.</span>
                                    <ul>
                                        @php
                                            $exclusions = explode(',',$tour->exclusion);
                                        @endphp
                                        @foreach($exclusions as $exclusion)
                                            <li>{{$exclusion}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- itinerary tab content -->
                <div role="tabpanel" class="tab-pane" id="tab02">
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="detail-accordion">
                                <li>
                                    <a href="#">
                                        <strong class="title">Day 1</strong>
                                        <span>Depart Mombasa</span>
                                    </a>
                                    <div class="slide">
                                        <div class="slide-holder">
                                            <p>Nairobi - Kigali trip by road. With an option of airport pickup (Kigali Airport) by our tour guide</p>
                                            <p>Drvie to Bwindi  National Park where you will be taken through the forest</p>
                                            <p>Dinner at Buhoma Lodge, Gorilla Safari Lodge(Luxury)</p>
                                        </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong class="title">Day 2</strong>
                                        <span>fullday Trekking</span>
                                    </a>
                                    <div class="slide">
                                        <div class="slide-holder">
                                            <p>Have an early breakfast and get ready for the trek</p>
                                            <p>Game trek with Porters and game rangers starts at 9:00 AM</p>
                                            <p>Encounter grillas on your trek pictures are allowed</p>
                                            <p>Have lunch outside. The trek lasts 1-6 hours</p>
                                            <p>Be on your way back. Return route Gatuna or Cyaninga borders and you are to be dropped off at hotel and for the late Departure flights a drop off at the airport</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <article class="img-article article-light">
                                <div class="img-wrap">
                                    <img src="/img/generic/img-18.jpg" height="319" width="570" alt="image description">
                                </div>
                                <div class="text-block">
                                    <h3><a>Gorila trek view</a></h3>
                                    <p>Enjoy the fun of gorilla trek.</p>
                                </div>
                            </article>
                            <article class="img-article article-light">
                                <div class="img-wrap">
                                    <img src="/img/generic/img-19.jpg" height="319" width="570" alt="image description">
                                </div>
                                <div class="text-block">
                                    <h3><a>Enjoy the trek</a></h3>
                                    <p></p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!-- accomodation tab content -->
                <div role="tabpanel" class="tab-pane" id="tab03">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="header-box"><a href="https://buhoma.ugandaexclusivecamps.com/">Buhoma Lodge</a></strong>
                            <div class="detail">
                                <p>Buhoma Lodge, an intimate and charming property that commands spectacular and uninterrupted views of the Bwindi Impenetrable Forest National Park, home to the rare and elusive Mountain Gorilla.</p>
                                <p>One of only two lodges situated within the National Park, within a short walking distance from the meeting point for gorilla tracking and other activities in the Buhoma area.</p>
                                <p>An elevated central area, complete with lounge, bar and dining area, offers a cosy, comfortable environment to discuss the day’s activities around the fireplaces which add atmosphere and warmth in the cool evenings. </p>
                            </div>
                            <strong class="header-box"><a href="https://gorillasafarilodge.com/">Gorilla Safari Lodge</a></strong>
                            <div class="detail">
                                <p>Gorilla Safari Lodge is nestled at the edge of the Bwindi Impenetrable woodland National Park, a primeval woodland and lush rainforest region in south-west Uganda.</p>
                                <p>This national park is home to wild gorillas, forest elephants, and 23 bird species unique to the area. The lodge, which is only a 5-minute walk from the hiking briefing point, is a popular destination for gorilla tracking safaris.</p>
                                <p>There are several activities available, including visits to the Batwa pygmies, mountain biking, guided community tours, and forest treks to Bayenda Falls. </p>
                            </div>
                        </div>
                        <div class="col-md-6 accomodation-block">
                            <strong class="header-box">The tour package inclusions and exclusions at a glance</strong>
                            <div class="text-box">
                                <div class="holder">
                                    <strong class="title">Lodge room</strong>
                                    <span class="sub-title">One of the best suits in the area.</span>
                                    <div class="img-holder">
                                        <img src="/img/generic/img-20.jpg" height="467" width="700" alt="image description">
                                    </div>
                                </div>
                            </div>
                            <div class="text-box not-included">
                                <div class="holder">
                                    <strong class="title">Gorilla Safari Lodge Outline</strong>
                                    <span class="sub-title">Uganda's beautiful terain</span>
                                    <div class="img-holder">
                                        <img src="/img/generic/img-21.jpg" height="467" width="700" alt="image description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- faq and review tab content -->
                <div role="tabpanel" class="tab-pane" id="tab04">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="question-select">
                                <select id="tabSelect" class="question">
                                    <option value="#innerTab1">When best to visit</option><!--
											<option value="#innerTab2">What kind of bag is suitable?</option>-->
                                    <option value="#innerTab3">What kind of clothes are suitable?</option>
                                </select>
                                <ul class="nav nav-tabs" id="questionTab">
                                    <li class="active"><a href="#innerTab1" data-toggle="tab">What is the best time to visit?</a></li>
                                    <li><a href="#innerTab2" data-toggle="tab">What kind of bag is suitable?</a></li>
                                    <li><a href="#innerTab3" data-toggle="tab">What kind of clothes wearing is suitable?</a></li>
                                </ul>
                            </div>
                            <div class="tab-wrapper">
                                <div role="tabpanel" class="tab-pane active" id="innerTab1">
                                    <div class="detail">
                                        <div class="holder">
                                            <div class="map-holder">
                                                <img src="img\icons\ico-family.svg" height="300" width="200" alt="image description">
                                            </div>
                                            <div class="info">
                                                <div class="slot">
                                                    <strong>Best Season: Dry Season</strong>
                                                    <span class="sub">December - February, June - September</span>
                                                    <p></p>
                                                    <p>Less rainfall is expected</p>
                                                    <p>Terain is easily navigated and less disruption from looking for rain cover</p>
                                                </div>
                                                <div class="slot">
                                                    <strong>Migration Season:</strong>
                                                    <span class="sub">July - October</span><br>
                                                    <p></p>
                                                    <i>What to have</i>
                                                    <li>Trekking boots & Trousers</li>
                                                    <li>Long sleeve shirt</li>
                                                    <li>Rain coat/Jacket</li>
                                                    <li>Insect repelant</li>
                                                    <p>For the nature lovers they ought not to miss this as its a memorable adventure</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="img-list">
                                            <li>
                                                <img src="/img/generic/img-22.jpg" height="52" width="101" alt="image description">
                                            </li>
                                            <li>
                                                <img src="/img/generic/img-23.jpg" height="97" width="114" alt="image description">
                                            </li>
                                        </ul>
                                        <div class="reviews-slot v-middle">
                                            <!--<div class="thumb">
                                                <a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50" alt="image description"></a>
                                            </div>
                                            <div class="text">
                                                <strong class="name"><a href="0707173473">Jessica Lambert - Customer Relations</a></strong>
                                            </div>-->
                                        </div>
                                    </div>
                                </div><!--
										<div role="tabpanel" class="tab-pane" id="innerTab2">
											<div class="detail">
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
												<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
												<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
												<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. </p>
												<div class="reviews-slot v-middle">
													<div class="thumb">
														<a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50" alt="image description"></a>
													</div>
													<div class="text">
														<strong class="name"><a href="#">Jessica Lambert - Customer Relations</a></strong>
													</div>
												</div>
											</div>
										</div>-->
                                <div role="tabpanel" class="tab-pane" id="innerTab3">
                                    <div class="detail">
                                        <p><strong>Comfortable and Lightweight Clothing:</strong>
                                        <p>Pack lightweight, breathable clothing because Bwindi may get warm throughout the day.
                                            Long-sleeved shirts and leggings are suggested to defend against insects, particularly in wooded areas.</p>
                                        <p><strong>Rain Gear:</strong>
                                        <p>Bwindi has a tropical climate, so bring a waterproof jacket or poncho. Rain showers might fall even during the dry season.</p>
                                        <p><strong>Sturdy hiking boots:</strong>
                                        <p>Good quality, comfortable hiking boots with ankle support are required for the trip into the bush to observe the gorillas.</p>
                                        <p><strong>Gloves:</strong>
                                        <p>Consider packing gardening or hiking gloves. They can shield your hands from prickly bushes and help you have a better grip during gorilla trekking.</p>
                                        <p><strong>Hats and sunglasses:</strong>
                                            For sun protection during outside activities, use a wide-brimmed hat and UV-protective sunglasses.</p>
                                        <p><strong>Layers for varying temperatures:</strong>
                                            Evenings and mornings might be colder, so pack layers to accommodate temperature variations throughout the day.</p>
                                        <p><strong>Daypack:</strong>
                                            Bring a small daypack to carry water, food, a camera, and other personal belongings on your walk.</p>
                                        <p><strong>Insect repellent:</strong>
                                            To protect yourself from mosquitos and other insects, apply a DEET-based insect repellent.</p>
                                        <p><strong>Sunscreen:</strong>
                                            Apply high-SPF sunscreen to protect your skin from the sun, especially if you plan to spend a lot of time outside.</p>
                                        <p><strong>Camera and binoculars:</strong>
                                            Don't forget to bring your camera to record these wonderful animal moments. Binoculars can also improve your experience, particularly while birdwatching.</p><!--
												<ul class="img-list">
													<li>
														<img src="img/generic/img-12.jpg" height="52" width="101" alt="image description">
													</li>
													<li>
														<img src="img/generic/img-13.jpg" height="97" width="114" alt="image description">
													</li>
													<li>
														<img src="img/generic/img-14.jpg" height="104" width="124" alt="image description">
													</li>
												</ul>
												<div class="reviews-slot v-middle">
													<div class="thumb">
														<a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50" alt="image description"></a>
													</div>
													<div class="text">
														<strong class="name"><a href="#">Jessica Lambert - Customer Relations</a></strong>
													</div>
												</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-box">
                                <a href="#" class="link-right">Writing A Review</a>
                                <span class="rate-left">
											<strong class="title">Overall Rating</strong>
											<span class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</span>
											<span class="value">4.7/5</span>
										</span>
                            </div>
                            <div class="comments reviews-body">
                                <div class="comment-holder">
                                    <div class="comment-slot"><!--
												<div class="thumb">
													<a href="#"><img src="img/thumbs/img-05.jpg" height="50" width="50" alt="image description"></a>
												</div>-->
                                        <div class="text">
                                            <header class="comment-head">
                                                <div class="left">
                                                    <strong class="name">
                                                        <a>John Doe - Spain</a>
                                                    </strong>
                                                    <div class="meta">Reviewed on 15/4/2024</div>
                                                </div>
                                                <div class="right">
                                                    <div class="star-rating">
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span class="disable"><span class="icon-star"></span></span>
                                                    </div>
                                                    <span class="value">4.7/5</span>
                                                </div>
                                            </header>
                                            <div class="des">
                                                <p>Gorilla Trekking was a life-changing experience! Seeing the majestic mountain gorillas in their natural habitat at Bwindi Impenetrable Forest was awe-inspiring.
                                                    The expert guides from Bwindi Lodge ensured a safe and informative trek, making it a truly unforgettable adventure.</p>
                                                <!--<div class="link-holder">
                                                    <a href="#">Read Full Review</a>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-slot">
                                        <!--
                                        <div class="thumb">
                                            <a href="#"><img src="img/thumbs/img-05.jpg" height="50" width="50" alt="image description"></a>
                                        </div>-->
                                        <div class="text">
                                            <header class="comment-head">
                                                <div class="left">
                                                    <strong class="name">
                                                        <a>Jane Doe - Italy</a>
                                                    </strong>
                                                    <div class="meta">Reviewed on 14/6/2024</div>
                                                </div>
                                                <div class="right">
                                                    <div class="star-rating">
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span class="disable"><span class="icon-star"></span></span>
                                                    </div>
                                                    <span class="value">4.5/5</span>
                                                </div>
                                            </header>
                                            <div class="des">
                                                <p>Our stay at Bwindi Lodge was a perfect blend of luxury and nature. Nestled in the heart of the forest, the eco-friendly cottages offered breathtaking views.
                                                    The warm hospitality and attention to detail at Bwindi Lodge made it the ideal base for our gorilla trekking adventure. </p>
                                                <!--<div class="link-holder">
                                                    <a href="#">Read Full Review</a>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-slot">
                                        <!--<div class="thumb">
                                            <a href="#"><img src="img/thumbs/img-07.jpg" height="50" width="50" alt="image description"></a>
                                        </div>-->
                                        <div class="text">
                                            <header class="comment-head">
                                                <div class="left">
                                                    <strong class="name">
                                                        <a>Mr Tembo - German</a>
                                                    </strong>
                                                    <div class="meta">Reviewed on 14/5/2024</div>
                                                </div>
                                                <div class="right">
                                                    <div class="star-rating">
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span class="disable"><span class="icon-star"></span></span>
                                                    </div>
                                                    <span class="value">4.9/5</span>
                                                </div>
                                            </header>
                                            <div class="des">
                                                <p>Gorilla Safari Lodge exceeded all expectations during our trek. The luxurious accommodations and personalized service added to the magic of encountering gorillas up close.
                                                    The conservation efforts and commitment to sustainable tourism at the lodge made the experience even more rewarding.														</p>
                                                <!--<div class="link-holder">
                                                    <a href="#">Read Full Review</a>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="link-more text-center">
                                    <a href="#">Show More Reviews - 75 Reviews</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- gallery tab content -->
                <div role="tabpanel" class="tab-pane" id="tab05">
                    <ul class="row gallery-list has-center">
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="/img/gallery/gorilla-10-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="/img/gallery/gorilla-10.jpg" height="750" width="450" alt="Gorilla view on trek">
										</span>
                                <span class="caption">
											<span class="centered">
												<strong class="title">Gorilla Trek</strong>
												<span class="sub-text">Great views</span>
											</span>
										</span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="/img/gallery/img-12-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="/img/gallery/gorilla-20.jpg" height="240" width="370" alt="Gorilla Safari Lodge">
										</span>
                                <span class="caption">
											<span class="centered">
												<strong class="title">Gorilla Safari Lodge</strong>
												<span class="sub-text">Luxury Stay</span>
											</span>
										</span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="/img/gallery/img-11-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="/img/gallery/gorilla-19.jpg" height="120" width="370" alt="Image of lodge">
										</span>
                                <span class="caption">
											<span class="centered">
												<strong class="title">Lodge</strong>
												<span class="sub-text">Can i have a banana?</span>
											</span>
										</span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="/img/gallery/img-13-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="/img/gallery/gorilla-11.jpg" height="240" width="370" alt="Bwindi Lodge">
										</span>
                                <span class="caption">
											<span class="centered">
												<strong class="title">Bwindi Lodge</strong>
												<span class="sub-text">The Classic view</span>
											</span>
										</span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-14-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="/img/gallery/gorilla-12.jpg" height="240" width="370" alt="Image Gorilla">
										</span>
                                <span class="caption">
											<span class="centered">
												<strong class="title">Gorilla</strong>
												<span class="sub-text">One with Nature</span>
											</span>
										</span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-15-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/gorilla-13.jpg" height="240" width="370" alt="gorilla">
										</span>
                                <span class="caption">
											<span class="centered">
												<strong class="title">Gorilla</strong>
												<span class="sub-text">Pose back!.</span>
											</span>
										</span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-16-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/gorilla-14.jpg" height="240" width="370" alt="image gorilla">
										</span>
                                <span class="caption">
											<span class="centered">
												<strong class="title">Gorilla</strong>
												<span class="sub-text">Hide and Seek anone?</span>
											</span>
										</span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-17-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/gorilla-15.jpg" height="240" width="370" alt="image woman capturing picture">
										</span>
                                <span class="caption">
											<span class="centered">
												<strong class="title">Picture set</strong>
												<span class="sub-text">1,2,3 cheese...</span>
											</span>
										</span>
                            </a>
                        </li><!--
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="img/gallery/img-18-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="img/gallery/img-18.jpg" height="240" width="370" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">ANNAPURNA VIEW</strong>
												<span class="sub-text">The Classic Trek</span>
											</span>
										</span>
									</a>
								</li>-->
                    </ul>
                </div>
                <!-- dates and prices tab content -->
                <!--
                <div role="tabpanel" class="tab-pane" id="tab06">
                    <div class="table-container">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <strong class="date-text">Departure Dates</strong>
                                            <span class="sub-text">Confirmed Dates</span>
                                        </th>
                                        <th>
                                            <strong class="date-text">Trip Status</strong>
                                            <span class="sub-text">Trip Status</span>
                                        </th>
                                        <th>
                                            <strong class="date-text">Price (PP)</strong>
                                            <span class="sub-text">Including Flights</span>
                                        </th>
                                        <th>
                                            <strong class="date-text">Price (PP)</strong>
                                            <span class="sub-text">Excluding Flights</span>
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,170</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Booked &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,679</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$1,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,470</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Booked &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$4,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,879</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,679</div></div></td>
                                        <td><div class="cell"><div class="middle">$1,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Booked &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$4,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$5,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,270</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="cell"><div class="middle">Fri 18 Oct '16 - Sun 04 Nov '16</div></div></td>
                                        <td><div class="cell"><div class="middle">Available &amp; Guaranteed</div></div></td>
                                        <td><div class="cell"><div class="middle">$2,779</div></div></td>
                                        <td><div class="cell"><div class="middle">$3,970</div></div></td>
                                        <td><div class="cell"><div class="middle">
                                            <a href="#" class="btn btn-default">BOOK NOW</a>
                                        </div></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="load-more text-center text-uppercase">
                            <a href="#">MORE DATES &amp; PRICES</a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <!-- recent block -->
        <aside class="recent-block recent-gray recent-wide-thumbnail">
            <div class="container">
                <h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
                <div class="row">
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space"><a href="gorilla_trek-tour-details.html">Gorilla Trek</a></h3>
                            <strong class="info-title">Bwindi, Uganda</strong>
                            <div class="img-wrap">
                                <img src="/img/listing/gorilla-1.jpg" height="210" width="250" alt="image gorila">
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>2 Days</span>
                                    <span>ksh 280,000 pp</span>
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a>
                                            <span class="icon-hiking"></span>
                                            <span class="popup">
														Trekking
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a>
                                            <span class="icon-mountain"></span>
                                            <span class="popup">
														Mountain
													</span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space"><a href="Samburu-tour-detail.html">Samburu National Park</a></h3>
                            <strong class="info-title">Samburu, Kenya</strong>
                            <div class="img-wrap">
                                <img src="/img/listing/samburu-01.jpg" height="210" width="250" alt="Elephants in samburu">
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>3 Days 2 nights</span>
                                    <span>Ksh 25,000 pp</span>
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a>
                                            <span class="icon-wildlife"></span>
                                            <span class="popup">
														Wildlife
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a >
                                            <span class="icon-mountain"></span>
                                            <span class="popup">
														Savannah
													</span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space"><a href="mountKenya-trek-tour-detail.html">Mount Kenya Trek</a></h3>
                            <strong class="info-title">Mt Kenya Trek and Ol Pejeta - Home of Chimpanzees</strong>
                            <div class="img-wrap">
                                <img src="/img/listing/mtKenya-01.jpg" height="210" width="250" alt="Mount Kenya">
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>2 Days</span>
                                    <span>Ksh 98,000pp</span>
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a>
                                            <span class="icon-wildlife"></span>
                                            <span class="popup">
														Tour
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
                                </ul>
                            </footer>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space"><a href="gorilla_trek-tour-details.html">Amboseli</a></h3>
                            <strong class="info-title">Kibo safari</strong>
                            <div class="img-wrap">
                                <img src="img/listing/amboseli-01.jpg" height="120" width="250" alt="image description">
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>3 Days</span>
                                    <span>Ksh 36,000 pp</span>
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a>
                                            <span class="icon-wildlife"></span>
                                            <span class="popup">
														Wildlife
													</span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a>
                                            <span class="icon-mountain"></span>
                                            <span class="popup">
														Mountain
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
@endsection