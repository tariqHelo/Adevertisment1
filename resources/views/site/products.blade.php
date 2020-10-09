@php
    $products = \App\Models\Product::take(6)->get();
@endphp
 <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Popular Products</h2>
            <p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>
          </div>
        </div>

        <div class="row">
            @foreach($products as $product)
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('storage/'.$product->image)}}" alt="Image" class="img d-block">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
                  <a class="px-3 mb-3 category" href="#">{{ $product->title }}</a>
                    <a class="px-3 mb-3 category" href="#">{{ $product->rating->title ?? "" }}</a>
                  <h2 class="mb-1"><a href="#">{{ $product->category->title ?? "other category" }}</a></h2>
                  
                  <span class="address">{{ $product->address }}</span>
                </div>
              </div>

            </div>
            @endforeach
            {{-- <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('classyads/images/img_2.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <a class="px-3 mb-3 category" href="#">Real Estate</a>
                  <h2 class="mb-1"><a href="#">House with Swimming Pool</a></h2>
                  <span class="address">West Orange, New York</span>
                </div>
              </div>

            </div>
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('classyads/images/img_3.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <a class="px-3 mb-3 category" href="#">Furniture</a>
                  <h2 class="mb-1"><a href="#">Wooden Chair &amp; Table</a></h2>
                  <span class="address">West Orange, New York</span>
                </div>
              </div>

            </div>
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-6">

              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('classyads/images/img_4.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
                  <a class="px-3 mb-3 category" href="#">Electronics</a>
                  <h2 class="mb-1"><a href="#">iPhone X gray</a></h2>
                  <span class="address">West Orange, New York</span>
                </div>
              </div>

            </div>
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-6">

              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('classyads/images/img_2.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <a class="px-3 mb-3 category" href="#">Real Estate</a>
                  <h2 class="mb-1"><a href="#">House with Swimming Pool</a></h2>
                  <span class="address">West Orange, New York</span>
                </div>
              </div>

            </div> --}}
        </div>
      </div>
    </div>
