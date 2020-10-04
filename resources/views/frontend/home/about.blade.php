 @extends("frontend.layout")
@section("title","About Us")
@section("content")

@include('site.header')
<?php
    use App\Models\About;
$abouts = About::first();
?>
 <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('classyads/images/hero_1.jpg')}}" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>About Us</h1>
                <p class="mb-0">A World Class Classified Company</p>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="site-section"  data-aos="fade">
      <div class="container">


        <div class="row mb-5">
          <div class="col-md-4 ml-auto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam eveniet laudantium dignissimos atque labore excepturi perspiciatis ut fugit eius itaque iste quibusdam dolore consectetur reprehenderit. Illum molestiae nemo culpa optio.</p>
          </div>
          <div class="col-md-4">
            <p>Similique neque facere cum! Et esse natus qui fugiat temporibus voluptate debitis similique eos illum pariatur suscipit placeat omnis perferendis ab enim quis eligendi minima explicabo aperiam. Eaque minus itaque?</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-4 text-left border-primary">
            <h2 class="font-weight-light text-primary pb-3">Our Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <img src="{{asset('classyads/images/person_1.jpg')}}" alt="Image" class="img-fluid mb-3">
            <h3 class="h4">Susan Horton</h3>
            <p class="caption mb-3 text-primary">Founder</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum facilis, sint libero commodi tenetur ducimus accusantium inventore.</p>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <img src="{{asset('classyads/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-3">
            <h3 class="h4">Jonathan Kennedy</h3>
            <p class="caption mb-3 text-primary">Founder</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptas autem qui alias officia eligendi, nam in.</p>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <img src="{{asset('classyads/images/person_3.jpg')}}" alt="Image" class="img-fluid mb-3">
            <h3 class="h4">Gordon Meyer</h3>
            <p class="caption mb-3 text-primary">Lead Developer</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore animi quam, est vero. Omnis sunt, totam qui!</p>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <img src="{{asset('classyads/images/person_4.jpg')}}" alt="Image" class="img-fluid mb-3">
            <h3 class="h4">Doug Hale Kennedy</h3>
            <p class="caption mb-3 text-primary">ProjectManager</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae exercitationem voluptatum, laboriosam unde ipsam modi iusto, numquam?</p>
          </div>
        </div>

      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="{{asset('classyads/images/hero_2.jpg')}}" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">Why Us</h2>
            <p>{{  $abouts->moreInfo		 ?? ""   }}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <img src="{{asset('classyads/images/hero_1.jpg')}}" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 mr-auto order-md-1">
            <h2 class="text-primary mb-3">Customer Centered Co.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!</p>

            <ul class="ul-check list-unstyled primary">
              <li>Adipisci dolore reprehenderit</li>
              <li>Accusamus dicta laborum</li>
              <li>Delectus sed labore</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  @include("site.subscribe")
 @include("site.footer")
 @endsection