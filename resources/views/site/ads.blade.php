    <div class="site-section bg-light">
      <div class="container">



        <div class="row">
          <div class="col-12">
            <h2 class="h5 mb-4 text-black">Featured Ads</h2>
          </div>
        </div>
        <div class="row">
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
      </div>
    </div>
