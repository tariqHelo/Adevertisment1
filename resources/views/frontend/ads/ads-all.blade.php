 @extends("frontend.layout")
@section("title","Ads-Single")
@section("content")
<?php
    use App\Models\About;
$abouts = About::first();
?>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{asset('classyads/images/hero_1.jpg')}}" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1></h1>
                <h1></h1>
                <p class="mb-0"></p>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

          
        <div class="row mt-5">
          <div class="col-12  block-13">
            <div class="owl-carousel nonloop-block-13">

               @php $orders = \App\Models\Order::get() @endphp
                  @foreach ($orders as $order)
                    @if($order->order_status_id==2)
                      <div class="d-block d-md-flex listing vertical">
                        <a href="{{ route('listings',$order->id) }}" class="img d-block" style="background-image: url('{{asset('storage/'.$order->image)}}"></a>
                        <div class="lh-content">
                          <span class="category">{{ $order->category->title ?? "other category" }}</span>
                            <span class="category">{{ $order->rating->title ?? "" }}</span>

                          <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                          <h3><a href="listings-single.html">{{ $order->title }}</a></h3>
                          <address>{{ $order->address }}</address>
                          <p class="mb-0">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-secondary"></span>
                            <span class="review">(3 Reviews)</span>
                          </p>
                        </div>
                      </div>
                  @endif
                @endforeach
            </div>
          </div>
        </div>

{{-- 
        <div class="site-section bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7 text-left border-primary">
                        <h2 class="font-weight-light text-primary">Trending Today</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                      @foreach($product_1 as $product)

                        <div class="d-block d-md-flex listing">
                            <a href="{{ route('addproduct',$product->id) }}" class="img d-block" style="background-image: url('{{ asset('storage/'.$product->image) }}')"></a>
                            <div class="lh-content">
                                <span class="category">{{ $product->category->title ?? "empty" }}</span>
                                  <span class="category">{{ $product->rating->title ?? "" }}</span>
                                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                    <h3><a href="listings-single.html">{{ $product->title }}</a></h3>
                                    <address> {{ $product->address }} </address>
                                    <p class="mb-0">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-secondary"></span>
                                        <span class="review">({{$product->reviews}} Reviews)</span>
                                    </p>
                            </div>
                        </div>

            @endforeach

                    </div>
                    <div class="col-lg-6">
                        @foreach($product_2 as $product)

                            <div class="d-block d-md-flex listing">
                                <a href="{{ route('addproduct',$product->id) }}" class="img d-block" style="background-image: url('{{ asset('storage/'.$product->image) }}')"></a>
                                <div class="lh-content">
                                    <span class="category">{{ $product->category->title ?? "empty" }}</span>
                                    <span class="category">{{ $product->rating->title ?? "" }}</span>
                                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                    <h3><a href="listings-single.html">{{ $product->title }}</a></h3>
                                    <address> {{ $product->address }} </address>
                                    <p class="mb-0">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-secondary"></span>
                                        <span class="review">({{$product->reviews}} Reviews)</span>
                                    </p>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}





    <div class="site-section bg-white">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Testimonials</h2>
          </div>
        </div>

            <div class="slide-one-item home-slider owl-carousel">
              @php $testimonials = \App\Models\Testimonial::get() @endphp
              @foreach ($testimonials as $testimonial )
                <div>
                  <div class="testimonial">
                    <figure class="mb-4">
                      <img src="{{asset('storage/'.$testimonial->image)}}" alt="Image" class="img-fluid mb-3">
                      <p>{{ $testimonial->name }}</p>
                    </figure>
                    <blockquote>
                      <p>{{$testimonial->description}}</p>
                    </blockquote>
                  </div>
                </div>
              @endforeach

        </div>
      </div>
    </div>
 @include("site.subscribe")
 @include("site.footer")
 @endsection