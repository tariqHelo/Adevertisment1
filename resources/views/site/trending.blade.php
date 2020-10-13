@php
$products = App\Models\Product::paginate(14) ;
$half = ceil($products->count() / 2);
$chunks = $products->chunk(intval($half));
@endphp
<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 text-left border-primary">
                <h2 class="font-weight-light text-primary">Trending Today</h2>
            </div>
        </div>
        <div class="row mt-5">
                @foreach($chunks as $chunk)
                            <div class="col-lg-6">
                                @foreach($chunk as $opcion)
                                        <div class="d-block d-md-flex listing">
                                            <a href="{{ route('addproduct',$opcion->id) }}" class="img d-block" style="background-image: url('{{ asset('storage/'.$opcion->image) }}')"></a>
                                            <div class="lh-content">
                                                <span class="category">{{ $opcion->category->title ?? "empty" }}</span>
                                                <span class="category">{{ $opcion->rating->title ?? "" }}</span>
                                                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                                    <h3><a href="listings-single.html">{{ $opcion->title }}</a></h3>
                                                    <address> {{ $opcion->address }} </address>
                                                    <p class="mb-0">
                                                        <span class="icon-star text-warning"></span>
                                                        <span class="icon-star text-warning"></span>
                                                        <span class="icon-star text-warning"></span>
                                                        <span class="icon-star text-warning"></span>
                                                        <span class="icon-star text-secondary"></span>
                                                        <span class="review">({{$opcion->reviews}} Reviews)</span>
                                                    </p>
                                            </div>
                                        </div>
                                @endforeach
                            </div >
                @endforeach
        </div>
    {{ $products->links("pagination::bootstrap-4") }}

    </div>
</div>