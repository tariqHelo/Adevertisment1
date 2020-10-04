  <div class="container">
        
        <div class="overlap-category mb-5">
          <div class="row align-items-stretch no-gutters">
          @php $categories = \App\Models\Category::get() @endphp
              @if($categories != null)
               @foreach ($categories as $category )
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="#" class="popular-category h-100">
                    <span class="icon"><span class="{{ $category->icon}}"></span></span>
                  <span class="caption mb-2 d-block">{{ $category->title }}</span>
                    <span class="number">3,921</span>
                  </a>
                </div>
              @endforeach
              @else
                  <h1>no items </h1>
                  @endif
                {{-- <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="#" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-books"></span></span>
                    <span class="caption mb-2 d-block">Books &amp; Magazines</span>
                    <span class="number">398</span>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="#" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-bunk-bed"></span></span>
                    <span class="caption mb-2 d-block">Furniture</span>
                    <span class="number">1,229</span>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="#" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-innovation"></span></span>
                    <span class="caption mb-2 d-block">Electronics</span>
                    <span class="number">32,891</span>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="#" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-car"></span></span>
                    <span class="caption mb-2 d-block">Cars &amp; Vehicles</span>
                    <span class="number">29,221</span>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="#" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-pizza"></span></span>
                    <span class="caption mb-2 d-block">Other</span>
                    <span class="number">219</span>
                  </a>
                </div> --}}
          </div>
        </div>
        
      
      </div> 