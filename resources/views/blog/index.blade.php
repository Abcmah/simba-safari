@extends('layout')
@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Blog</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        @if(count($posts) > 0)
                        @foreach ($posts as $post)
                        <div class="item-box">
                            <div class="item">
                                <div class="thumb">
                                    <a href="blog/{{$post->id}}">
                                        <img src="storage/{{$post->image}}" alt="Thumbnail">
                                        <div class="overlay-icon">
                                            <i class="fa fa-images"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="blog/{{$post->id}}">{{$post->title}} </a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><img src="assets/img/admin.png"/> {{$post->user->name}}</a>
                                            </li>
                                            <li>
                                                <img src="assets/img/calendar.png"/> {{$post->created_at}}
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        {!! $post->story !!}
                                    </p>
                                    <a class="btn btn-theme effect btn-sm" href="blog-single-left-sidebar.html">Read More</a>
                                </div>
                            </div>
                        </div>   
                        @endforeach
                        @else 
                        <div class="item-box mt-4">
                            <h5 class="mt-6"><center>No post Available</center> </h5>
                        </div>
                        @endif
                        <div class="col-md-12 pagi-area">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    {{ $posts->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Search</h4>
                                </div>
                                <div class="sidebar-info">
                                    <form>
                                        <input name="search" type="text" class="form-control">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>category list</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Training</a>
                                        </li>
                                        <li>
                                            <a href="#">Safety</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/thumb/i4.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#"> Discover the Latest Maritime Strategies </a>
                                            <div class="meta-title">
                                                <span class="post-date">12 Feb, 2022</span> | By <a href="#">Author</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-item archives">
                                <div class="title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Jan 2024</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>follow us</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/Roxanna Romerez">
                                                <img src="assets/img/fb.png"/>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://www.twitter.com/kmakenya?">
                                                <img src="assets/img/twi.png"/>
                                            </a>
                                        </li>
                                        <li class="whatsapp">
                                            <a href="https://wa.me/+254722176561">
                                                <img src="assets/img/wh.png"/>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/@_mami_luu">
                                                <img src="assets/img/inst.png"/>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item tags">
                                <div class="title">
                                    <h4>tags</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Training</a>
                                        </li>
                                        <li><a href="#">Environment</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection