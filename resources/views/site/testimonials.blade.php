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

