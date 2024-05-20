@extends('layout')
@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/img/banner/i5.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-form-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Contact Form -->
                <div id="contact" class="col-md-7 contact-form">
                    <div class="content">
                        <div class="heading">
                            <h3>Let's Talk about Your consultancy</h3>
                        </div>
                        <form action="/contact" method="POST" class="contact-form c-form">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" required placeholder="Name*" type="text">
                                        @error('name')
                                        <span class="alert-error">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" required id="email" name="email" placeholder="Email*" type="email">
                                        @error('email')
                                        <span class="alert-error">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        @error('phone')
                                        <span class="alert-error">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea required class="form-control message" id="comments" name="message"  placeholder="message*"></textarea>
                                        @error('message')
                                        <span class="alert-error">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Contact Form -->
                <div class="col-md-5 office-info">
                    <!-- Start Tab Contact Info -->
                    <div class="tab-nvas">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#id1" aria-expanded="true">
                                    Nairobi Office
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#id2" aria-expanded="false">
                                    Mombasa Office
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#id3" aria-expanded="false">
                                    Kisumu Office
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content pad-all-20p txt-center-mobile">
                        <div id="id1" class="tab-pane active">
                            <ul>
                                <li>
                                    <img src="assets/img/office/1.jpg" alt="Thumb">
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/location.png"/>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Our Location
                                            <span>Mombasa, Kenya 80100</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/gmail (2).png"/>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Send Us Mail
                                            <span>Info@gmail.com</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/phone-call.png"/> 
                                    </div>
                                    <div class="info">
                                        <p>
                                            Call Us
                                            <span>+254722176561</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="id2" class="tab-pane">
                            <ul>
                                <li>
                                    <img src="assets/img/office/2.jpg" alt="Thumb">
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/location.png"/>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Our Location
                                            <span>Mombasa, Kenya 80100</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/gmail (2).png"/>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Send Us Mail
                                            <span>Info@gmail.com</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/phone-call.png"/> 
                                    </div>
                                    <div class="info">
                                        <p>
                                            Call Us
                                            <span>+254722176561</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="id3" class="tab-pane">
                            <ul>
                                <li>
                                    <img src="assets/img/office/3.jpg" alt="Thumb">
                                    <div class="icon">
                                        <img src="assets/img/location.png"/>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Our Location
                                            <span>Mombasa, Kenya 80100</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/gmail (2).png"/>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Send Us Mail
                                            <span>Info@kma.go.ke</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/phone-call.png"/> 
                                    </div>
                                    <div class="info">
                                        <p>
                                            Call Us
                                            <span>+254722176561</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Tab Contact Info -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Maps Area 
    ============================================= -->
    <div class="maps-area-items">
        <div class="maps-box oh">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
            </div>
        </div>
    </div>
    <!-- End Maps Area -->
    <!-- jQuery Frameworks
        ============================================= -->
        
        {{-- <script src="{{ asset('assets/js/Chart.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('assets/js/custom-chart.js') }}"></script> --}}
        {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
        
        @endsection
