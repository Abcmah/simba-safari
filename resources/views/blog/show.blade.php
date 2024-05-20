@extends('layout')
@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(/assets/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Blog Single</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">{{$post->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog left-sidebar single-blog full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <div class="item-box">
                            <div class="item">
                                <div class="thumb">
                                        <img src="/storage/{{$post->image}}" alt="sdsd">
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">{{$post->title}}</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><img src="/assets/img/admin.png"/> {{$user['name']}}</a>
                                            </li>
                                            <li>
                                                <img src="/assets/img/calendar.png"/>{{$post->created_at}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        {!!$post->blog!!}
                                    </div>
                                </div>
                                <div class="post-tags">
                                    @php
                                    $tags = explode(',',$post->tags);
                                    @endphp
                                    <span>Tags: </span>
                                    @foreach($tags as $tag)
                                    <a href="#">{{$tag}}</a>
                                    @endforeach
                                </div>
                                <div class="author-bio">
                                    <div class="avatar">
                                        <img src="assets/img/team/4.jpg" alt="Author">
                                    </div>
                                    <div class="content">
                                        <p>
                                            From navigating regulatory challenges to harnessing the power of digital transformation.
                                        </p>
                                        <h4>Alexandra</h4>
                                    </div>
                                </div>
                                <div class="comments-area">
                                    <div class="comments-title">
                                        <h4>{{count($comments)}} comments
                                        </h4>
                                        <div class="comments-list">
                                            @foreach($comments as $comment)
                                            <div class="commen-item">
                                                <div class="avatar">
                                                    <img src="/assets/img/team/5.jpg" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>{{$comment['name']}}</h5>
                                                    <div class="comments-info">
                                                        {{$comment['created_at']}} <a href="#"><img src="/assets/img/reply.png"/>Reply</a>
                                                    </div>
                                                    <p>
                                                        {{$comment['body']}}
                                                    </p>
                                                </div>
                                            </div>
                                            @foreach($replies as $reply)
                                            @if($reply['comment_id'] == $comment['id'])
                                            <div class="commen-item reply">
                                                <div class="avatar">
                                                    <img src="assets/img/team/6.jpg" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>{{$reply['name']}}</h5>
                                                    <div class="comments-info">
                                                        {{$reply['created_at']}} <a href="#"><img src="assets/img/reply.png"/>Reply</a>
                                                    </div>
                                                    <p>
                                                        {{$reply['body']}}
                                                    </p>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="comments-form">
                                        <div class="title">
                                            <h4>Leave a comments</h4>
                                        </div>
                                        <form action="/blog/comment" class="contact-comments" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="post_id" value="{{$post->id}}" autocomplete="off" hidden>
                                                        <!-- Name -->
                                                        <input name="name" class="form-control" placeholder="Name *" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Email -->
                                                        <input name="email" class="form-control" placeholder="Email *" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group comments">
                                                        <!-- Comment -->
                                                        <textarea 
                                                        name="body" class="form-control" placeholder="Comment"></textarea>
                                                    </div>
                                                    <div class="form-group full-width submit">
                                                        <button type="submit">
                                                            Post Comments
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Search</h4>
                                </div>
                                <div class="sidebar-info">
                                    <form action="/blog">
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
                                        <li><a href="#">
                                            educataon <span>20</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul> --}}
                                    {{-- recent post here --}}
                                {{-- </ul>
                            </div> --}}
                            <div class="sidebar-item archives">
                                <div class="title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">2024</a></li>
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
                                            <a href="https://www.facebook.com/">
                                                <img src="/assets/img/fb.png"/>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://www.twitter.com/kmakenya?">
                                                <img src="/assets/img/twi.png"/>
                                            </a>
                                        </li>
                                        <li class="whatsapp">
                                            <a href="https://wa.me/+254722176561">
                                                <img src="/assets/img/wh.png"/>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/_mami_luu">
                                                <img src="/assets/img/inst.png"/>
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
                                       
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
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