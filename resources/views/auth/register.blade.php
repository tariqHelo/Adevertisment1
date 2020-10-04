@extends("frontend.layout")
@section("title","Contact Us")
@section("content")

  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{asset('classyads/images/hero_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Register</h1>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5"  data-aos="fade">

            
            @foreach ($errors->all() as $error)
                <h1>{{$error}}</h1>
            @endforeach
            <form action="{{ route('register') }}" method="post" class="p-5 bg-white">
             @csrf
              <div class="row form-group">
                
                  <div class="col-md-12">
                    <label class="text-black" for="name">{{ __('Name') }}</label> 
                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">{{ __('E-Mail Address') }}</label> 
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="password">{{ __('Password') }}</label> 
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="password-confirm">{{ __('Confirm Password') }}</label> 
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                   
                </div>
              </div>

              <div class="row form-group">
                <div class="col-12">
                  <p>Have an account? <a href="{{ route('login') }}">Log In</a></p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                 <button type="submit" class="btn btn-primary py-2 px-4 text-white">
                    {{ __('Register') }}
                  </button>
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </div>

    
@include("site.subscribe")
 @include("site.footer")
 @endsection