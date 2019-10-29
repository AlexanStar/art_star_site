@extends('app')

@section('content')

    <section class="breadcrumbs_block clearfix parallax">
        <div class="container center">
            <h2><b></b> Книги</h2>
            <p>Что люблю, что ненавижу, что курю, когда пишу</p>
        </div>
    </section><!-- //BREADCRUMBS -->


    <!-- BLOG -->
    <section id="blog">

        <!-- CONTAINER -->
        <div class="container">

            <!-- ROW -->
            <div class="row">

                <!-- BLOG BLOCK -->
                <div class="blog_block col-lg-9 col-md-9 padbot50">

                    @foreach($books as $book)
                        <!-- BLOG POST -->
                            <div class="blog_post margbot50 clearfix" data-animated="fadeInUp">
                                <div class="blog_post_img">
                                    <img src="{{ asset($book->image->url_way_to_picture) }}" alt="" />
                                    <a class="zoom" href="{{route('book.name',[$book->url_name])}}" ></a>
                                </div>
                                <div class="blog_post_descr">
                                    <div class="blog_post_date">{{$book->date_of_writing}}</div>
                                    <a class="blog_post_title" href="{{route('book.name',[$book->url_name])}}" >{{ $book->name }}</a>
                                    <!--<ul class="blog_post_info">
                                        <li><a href="javascript:void(0);" >Admin</a></li>
                                        <li><a href="javascript:void(0);" >Creative</a></li>
                                        <li><a href="javascript:void(0);" >3 Comments</a></li>
                                    </ul> -->
                                    <hr>
                                    <div class="blog_post_content">{{ mb_substr($book->description, 0, 300, 'utf-8')}}...</div>
                                    <a class="read_more_btn" href="{{ route('book.name', [$book->url_name]) }}" >Читать дальше</a>
                                </div>
                            </div><!-- //BLOG POST -->
                    @endforeach

                    <hr>
                    <!-- PAGINATION -->
                    <!--
                    <ul class="pagination clearfix">
                        <li><a href="javascript:void(0);" >1</a></li>
                        <li><a href="javascript:void(0);" >2</a></li>
                        <li class="active"><a href="javascript:void(0);" >3</a></li>
                        <li><a href="javascript:void(0);" >4</a></li>
                        <li><a href="javascript:void(0);" >5</a></li>
                        <li><a href="javascript:void(0);" >. . .</a></li>
                        <li><a href="javascript:void(0);" >75</a></li>
                    </ul>
                    -->
                    <!-- //PAGINATION -->
                </div><!-- //BLOG BLOCK -->


                <!-- SIDEBAR -->
                <div class="sidebar col-lg-3 col-md-3 padbot50">


                    <!-- META WIDGET -->

                    <div class="sidepanel widget_meta">
                        <ul>

                            <!--
                            <li><a href="javascript:void(0);" >Advertising</a></li>
                            <li><a href="javascript:void(0);" >Fashion & Trends</a></li>
                            <li><a href="javascript:void(0);" >Media Projects</a></li>
                            <li><a href="javascript:void(0);" >Small Business</a></li>
                            <li><a href="javascript:void(0);" >Creative</a></li>
                            -->
                        </ul>
                    </div><!-- //META WIDGET -->


                    <!-- POPULAR POSTS WIDGET -->
                    <div class="sidepanel widget_popular_posts">

                        <!--
                        <h3><b>Popular</b> Posts</h3>

                        <div class="recent_posts_widget clearfix">
                            <div class="post_item_img_widget">
                                <img src="images/blog/1.jpg" alt="" />
                            </div>
                            <div class="post_item_content_widget">
                                <a class="title" href="blog.html" >How the Denver Broncos Cheerleaders Get in Shape for the Super Bowl</a>
                                <ul class="post_item_inf_widget">
                                    <li>JANUARY 30  |  21:30</li>
                                </ul>
                            </div>
                        </div>
                        <div class="recent_posts_widget clearfix">
                            <div class="post_item_img_widget">
                                <img src="images/blog/2.jpg" alt="" />
                            </div>
                            <div class="post_item_content_widget">
                                <a class="title" href="blog.html" >Barneys Spring Campaign Stars 17 Transgender Models</a>
                                <ul class="post_item_inf_widget">
                                    <li>JANUARY 25  |  9:30</li>
                                </ul>
                            </div>
                        </div>
                        <div class="recent_posts_widget clearfix">
                            <div class="post_item_img_widget">
                                <img src="images/blog/3.jpg" alt="" />
                            </div>
                            <div class="post_item_content_widget">
                                <a class="title" href="blog.html" >Dominic Cooper: I'm Nothing Like the Real James Bond</a>
                                <ul class="post_item_inf_widget">
                                    <li>JANUARY 21  |  13:30</li>
                                </ul>
                            </div>
                        </div>
                        -->
                    </div><!-- //POPULAR POSTS WIDGET -->

                    <!-- <hr> -->

                    <!-- POPULAR TAGS WIDGET -->
                    <div class="sidepanel widget_tags">
                        <!--
                        <h3><b>Popular</b> Tags</h3>
                        <ul>
                            <li><a href="javascript:void(0);" >Fashion</a></li>
                            <li><a href="javascript:void(0);" >Shop</a></li>
                            <li><a href="javascript:void(0);" >Color</a></li>
                            <li><a href="javascript:void(0);" >Creative Agency</a></li>
                            <li><a href="javascript:void(0);" >Theme</a></li>
                            <li><a href="javascript:void(0);" >Dress</a></li>
                            <li><a href="javascript:void(0);" >Wordpress</a></li>
                            -->
                        </ul>
                    </div><!-- POPULAR TAGS WIDGET -->

                    <!-- <hr> -->

                    <!-- TEXT WIDGET -->
                    <!--
                    <div class="sidepanel widget_text">
                        <h3><b>Про</b> Блог</h3>
                        <p>Лекарство от скучной жизни -- свой блог</p>
                        -->
                </div><!-- //TEXT WIDGET -->
            </div><!-- //SIDEBAR -->
        </div><!-- //ROW -->
    </section><!-- //BLOG -->

@endsection
