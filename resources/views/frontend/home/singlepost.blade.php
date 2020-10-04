@extends("frontend.layout")
@section("title","asdasdds")

@section("content")

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar container py-0 bg-white" role="banner">

        <!-- <div class="container"> -->
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">Classy<span
                            class="text-primary">Ads</span> </a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="listings.html">Ads</a></li>
                        <li class="has-children">
                            <a href="about.html">About</a>
                            <ul class="dropdown">
                                <li><a href="#">The Company</a></li>
                                <li><a href="#">The Leadership</a></li>
                                <li><a href="#">Philosophy</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>

                        <li class="ml-xl-3 login"><a href="login.html"><span class="border-left pl-xl-4"></span>Log
                                In</a></li>
                        <li><a href="register.html">Register</a></li>

                        <li><a href="#" class="cta"><span class="bg-primary text-white rounded">+ Post an Ad</span></a>
                        </li>
                    </ul>
                </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
                <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>

        </div>
        <!-- </div> -->

    </header>



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>{{ $post->title }}</h1>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="mb-4">
                        <div class="slide-one-item home-slider owl-carousel">
                            <div><img src="{{ asset('storage/'.$post->image) }}" alt="Image" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="meta mb-3">{{ $post->user->name }}<span class="mx-1">&bullet;</span> {{ date('M',strtotime($post->created_at))}}, {{ date('Y',strtotime($post->created_at))}}</div>

                    <h4 class="h5 mb-4 text-black">Description</h4>
                    <p>{{ $post->description }}</p>
                </div>
{{--<br><br><br><br><br>--}}
                <div class="col-lg-8">
                    <h4>Comments</h4>
                </div>
                @foreach($comments as $comment)
                <div class="col-lg-6 ml-2">
                    <div class="meta mb-3">{{ $post->commets->user->name }}<span class="mx-1">&bullet;</span> {{ date('M',strtotime($comment->created_at))}}, {{ date('Y',strtotime($comment->created_at))}}</div>
                    <p>{{ $comment->comment }}</p>
                </div>
                @endforeach
{{--                <div class="col-lg-3 ml-auto">--}}

{{--                    <div class="mb-5">--}}
{{--                        <h3 class="h5 text-black mb-3">Filters</h3>--}}
{{--                        <form action="#" method="post">--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" placeholder="What are you looking for?" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="select-wrap">--}}
{{--                                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>--}}
{{--                                    <select class="form-control" name="" id="">--}}
{{--                                        <option value="">All Categories</option>--}}
{{--                                        <option value="" selected="">Real Estate</option>--}}
{{--                                        <option value="">Books &amp; Magazines</option>--}}
{{--                                        <option value="">Furniture</option>--}}
{{--                                        <option value="">Electronics</option>--}}
{{--                                        <option value="">Cars &amp; Vehicles</option>--}}
{{--                                        <option value="">Others</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <!-- select-wrap, .wrap-icon -->--}}
{{--                                <div class="wrap-icon">--}}
{{--                                    <span class="icon icon-room"></span>--}}
{{--                                    <input type="text" placeholder="Location" class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                    <div class="mb-5">--}}
{{--                        <form action="#" method="post">--}}
{{--                            <div class="form-group">--}}
{{--                                <p>Radius around selected destination</p>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="range" min="0" max="100" value="20" data-rangeslider>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                    <div class="mb-5">--}}
                {{--                        <form action="#" method="post">--}}
                {{--                            <div class="form-group">--}}
                {{--                                <p>Category 'Real Estate' is selected</p>--}}
                {{--                                <p>More filters</p>--}}
                {{--                            </div>--}}
                {{--                            <div class="form-group">--}}
                {{--                                <ul class="list-unstyled">--}}
                {{--                                    <li>--}}
                {{--                                        <label for="option1">--}}
                {{--                                            <input type="checkbox" id="option1">--}}
                {{--                                            Residential--}}
                {{--                                        </label>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <label for="option2">--}}
                {{--                                            <input type="checkbox" id="option2">--}}
                {{--                                            Commercial--}}
                {{--                                        </label>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <label for="option3">--}}
                {{--                                            <input type="checkbox" id="option3">--}}
                {{--                                            Industrial--}}
                {{--                                        </label>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <label for="option4">--}}
                {{--                                            <input type="checkbox" id="option4">--}}
                {{--                                            Land--}}
                {{--                                        </label>--}}
                {{--                                    </li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </form>--}}
                {{--                    </div>--}}

                {{--                    <div class="mb-5">--}}
                {{--                        <h3 class="h6 mb-3">More Info</h3>--}}
                {{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem placeat--}}
                {{--                            facilis, reprehenderit eius officiis.</p>--}}
                {{--                    </div>--}}



            </div>
        </div>
    </div>



<div class="container">

                    <div class="col-8 comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form"  action="{{ route('add_comment') }}" method="post" id="commentForm">
                            @csrf
                            @include("shared.msg")
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                  <textarea class="form-control w-100 {{$errors->has('comment')?'is-invalid':''}}"  name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Write Comment" >{{ old('comment') }}</textarea>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input value="{{ old('name') }}" class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name" id="name" type="text" placeholder="Name">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input value="{{ old('email') }}" class="form-control {{$errors->has('email')?'is-invalid':''}}" name="email" id="email" type="email" placeholder="Email">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Send Message</button>
                            </div>
                        </form>
                    </div>


</div>
    @include("site.subscribe")
    @include("site.footer")
@endsection






{{--@extends("frontend.layout")--}}
{{--@section("title","Blog Us")--}}
{{--@section("content")--}}
{{--    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('classyads/images/hero_1.jpg')}}" data-aos="fade" data-stellar-background-ratio="0.5">--}}
{{--        <div class="container">--}}


{{--            <div class="site-section">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-8">--}}

{{--                            <div class="mb-4">--}}
{{--                                <div class="slide-one-item home-slider owl-carousel owl-loaded owl-drag">--}}


{{--                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3650px, 0px, 0px); transition: all 1s ease 0s; width: 5840px;"><div class="owl-item cloned" style="width: 730px;"><div><img src="images/img_3.jpg" alt="Image" class="img-fluid"></div></div><div class="owl-item cloned" style="width: 730px;"><div><img src="images/img_4.jpg" alt="Image" class="img-fluid"></div></div><div class="owl-item" style="width: 730px;"><div><img src="images/img_1.jpg" alt="Image" class="img-fluid"></div></div><div class="owl-item" style="width: 730px;"><div><img src="images/img_2.jpg" alt="Image" class="img-fluid"></div></div><div class="owl-item" style="width: 730px;"><div><img src="images/img_3.jpg" alt="Image" class="img-fluid"></div></div><div class="owl-item active" style="width: 730px;"><div><img src="images/img_4.jpg" alt="Image" class="img-fluid"></div></div><div class="owl-item cloned" style="width: 730px;"><div><img src="images/img_1.jpg" alt="Image" class="img-fluid"></div></div><div class="owl-item cloned" style="width: 730px;"><div><img src="images/img_2.jpg" alt="Image" class="img-fluid"></div></div></div></div><div class="owl-nav"><div class="owl-prev"><span class="icon-keyboard_arrow_left"></span></div><div class="owl-next"><span class="icon-keyboard_arrow_right"></span></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>--}}
{{--                            </div>--}}

{{--                            <h4 class="h5 mb-4 text-black">Description</h4>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error repellat architecto maiores vero, quasi dolor, accusantium autem aliquam, ullam sequi saepe illum eaque aperiam eius amet! Necessitatibus nam sapiente obcaecati sit, fugit omnis non sunt distinctio aliquid, quibusdam excepturi hic?</p>--}}
{{--                            <p>Nisi, error. Molestias, quidem eaque sequi aut perspiciatis assumenda obcaecati ut quod eius reprehenderit. Iure rem numquam totam odio dignissimos aspernatur soluta. Corporis suscipit modi iste consequatur, repellat nihil omnis molestias optio. Dolorem ullam eius officia, eum ratione dolorum assumenda.</p>--}}
{{--                            <p>Soluta corporis blanditiis cupiditate debitis eveniet, temporibus ut cumque sint repudiandae quidem tenetur commodi id, quam. Sapiente corrupti magnam quis nulla, asperiores neque tenetur labore aperiam provident nostrum sequi delectus voluptatem fuga officiis repellat, ratione aspernatur eius repellendus modi reprehenderit.</p>--}}
{{--                            <p>Sapiente molestias voluptate cupiditate blanditiis quasi qui aperiam accusamus aspernatur ipsam velit nihil quaerat voluptatum soluta laboriosam ipsum veritatis at reiciendis quod voluptates, saepe harum dignissimos placeat dolorum aliquid! Quod quasi praesentium optio ratione non et sit quos excepturi cum?</p>--}}

{{--                        </div>--}}
{{--                        <div class="col-lg-3 ml-auto">--}}

{{--                            <div class="mb-5">--}}
{{--                                <h3 class="h5 text-black mb-3">Filters</h3>--}}
{{--                                <form action="#" method="post">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" placeholder="What are you looking for?" class="form-control">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="select-wrap">--}}
{{--                                            <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>--}}
{{--                                            <select class="form-control" name="" id="">--}}
{{--                                                <option value="">All Categories</option>--}}
{{--                                                <option value="" selected="">Real Estate</option>--}}
{{--                                                <option value="">Books &amp;  Magazines</option>--}}
{{--                                                <option value="">Furniture</option>--}}
{{--                                                <option value="">Electronics</option>--}}
{{--                                                <option value="">Cars &amp; Vehicles</option>--}}
{{--                                                <option value="">Others</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <!-- select-wrap, .wrap-icon -->--}}
{{--                                        <div class="wrap-icon">--}}
{{--                                            <span class="icon icon-room"></span>--}}
{{--                                            <input type="text" placeholder="Location" class="form-control">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}

{{--                            <div class="mb-5">--}}
{{--                                <form action="#" method="post">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <p>Radius around selected destination</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="range" min="0" max="100" value="20" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-0"><div class="rangeslider__fill" style="width: 55.2px;"></div><div class="rangeslider__handle" style="left: 48.2px;"></div></div><div class="range-output">20</div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}

{{--                            <div class="mb-5">--}}
{{--                                <form action="#" method="post">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <p>Category 'Real Estate' is selected</p>--}}
{{--                                        <p>More filters</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <ul class="list-unstyled">--}}
{{--                                            <li>--}}
{{--                                                <label for="option1">--}}
{{--                                                    <input type="checkbox" id="option1">--}}
{{--                                                    Residential--}}
{{--                                                </label>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <label for="option2">--}}
{{--                                                    <input type="checkbox" id="option2">--}}
{{--                                                    Commercial--}}
{{--                                                </label>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <label for="option3">--}}
{{--                                                    <input type="checkbox" id="option3">--}}
{{--                                                    Industrial--}}
{{--                                                </label>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <label for="option4">--}}
{{--                                                    <input type="checkbox" id="option4">--}}
{{--                                                    Land--}}
{{--                                                </label>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}

{{--                            <div class="mb-5">--}}
{{--                                <h3 class="h6 mb-3">More Info</h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem placeat facilis, reprehenderit eius officiis.</p>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--                <div class="comment-form">--}}
{{--                    <h4>Leave a Reply</h4>--}}
{{--                    <form class="form-contact comment_form"  action="{{ route('add_comment') }}" method="post" id="commentForm">--}}
{{--                        @csrf--}}
{{--                        @include("shared.msg")--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-group">--}}
{{--                              <textarea class="form-control w-100 {{$errors->has('comment')?'is-invalid':''}}"  name="comment" id="comment" cols="30" rows="9"--}}
{{--                                        placeholder="Write Comment" >{{ old('comment') }}</textarea>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input value="{{ old('name') }}" class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name" id="name" type="text" placeholder="Name">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input value="{{ old('email') }}" class="form-control {{$errors->has('email')?'is-invalid':''}}" name="email" id="email" type="email" placeholder="Email">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <button type="submit" class="btn btn-success">Send Message</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}


{{--        </div>--}}
{{--    </div>--}}

{{--    @include("site.subscribe")--}}
{{--    @include("site.footer")--}}
{{--@endsection--}}
