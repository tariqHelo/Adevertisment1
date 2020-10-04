@extends("frontend.layout")
@section("content")
 @include("site.header")
 @php
     $searchbar = '
 <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
     <form method="post">
         <div class="row align-items-center">
             <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                 <input type="text" class="form-control rounded" placeholder="What are you looking for?">
             </div>
             <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                 <div class="wrap-icon">
                     <span class="icon icon-room"></span>
                     <input type="text" class="form-control rounded" placeholder="Location">
                 </div>

             </div>
             <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                 <div class="select-wrap">
                     <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                     <select class="form-control rounded" name="" id="">
                         <option value="">All Categories</option>
                         <option value="">Real Estate</option>
                         <option value="">Books &amp;  Magazines</option>
                         <option value="">Furniture</option>
                         <option value="">Electronics</option>
                         <option value="">Cars &amp; Vehicles</option>
                         <option value="">Others</option>
                     </select>
                 </div>
             </div>
             <div class="col-lg-12 col-xl-2 ml-auto text-right">
                 <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
             </div>

         </div>
     </form>
 </div> ';
 @endphp
    @include("site.navSearch" , ['searchbar' => $searchbar])
{{-- @slot('searchbar')--}}
{{--     $searchbar = @include('site.search')--}}
{{-- @endslot--}}
      @include("site.service")
         @include("site.ads")
        @include("site.products")
           @include("site.trending")
             @include("site.testimonials")
        @include("site.blog")
    @include("site.subscribe")
 @include("site.footer")
@endsection

