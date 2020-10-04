@php
use App\Models\Product ;
$products = Product::orderBy('reviews');
$product_1 = $products->skip(0)->take(3)->get();
$product_2 = $products->skip(3)->take(3)->get();
@endphp
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
                    <a href="listings-single.html" class="img d-block" style="background-image: url('{{ asset('storage/'.$product->image) }}')"></a>
                    <div class="lh-content">
                        <span class="category">{{ $product->category->title ?? "empty" }}</span>
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
                        <a href="listings-single.html" class="img d-block" style="background-image: url('{{ asset('storage/'.$product->image) }}')"></a>
                        <div class="lh-content">
                            <span class="category">{{ $product->category->title ?? "empty" }}</span>
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
</div>
