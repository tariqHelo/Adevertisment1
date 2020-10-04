{{-- @extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                        {{ __('Login') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('admin.do_login') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required>

                            @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex mb-6">
                            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>
                        </div>

                        <div class="flex flex-wrap items-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
                                    {{ __("Don't have an account?") }}
                                    <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('Login_v1/icons/favicon.icon')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v1/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('Login_v1/images/img-01.png')}}" alt="IMG">
				</div>

		 <form class="p-5 bg-white" method="POST" action="{{ route('admin.do_login') }}">
             @csrf

            <span class="login100-form-title">
                Admin Login
            </span>

{{--
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" id="email" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" id="password" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
					</div> --}}
{{--              <div class="row form-group">--}}
{{--                --}}
{{--                <div class="col-md-12">--}}
{{--                  <label class="text-black" for="email">{{ __('E-Mail Address') }}</label> --}}
{{--                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}
{{--                  @error('email')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="row form-group">--}}
{{--                --}}
{{--                <div class="col-md-12">--}}
{{--                  <label class="text-black" for="password">{{ __('Password') }}</label> --}}
{{--                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}
{{--                   @error('password')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--              </div>--}}


             <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
{{--                 <input class="input100" id="email" type="email" name="email" placeholder="Email">--}}
                 <input id="email" name="email" type="email" class="input100 @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                 <span class="focus-input100"></span>
                 <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
             </div>

             <div class="wrap-input100 validate-input" data-validate = "Password is required">
{{--                 <input class="input100" id="password" type="password" name="pass" placeholder="Password">--}}
                 <input id="password" name="password" type="password" class="input100 @error('password') is-invalid @enderror" placeholder="Password"  required autocomplete="current-password">

                 <span class="focus-input100"></span>
                 <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
                 </span>
             </div>



             <div class="container-login100-form-btn">
                 <button type="submit"  class="login100-form-btn">
                     Login
                 </button>
             </div>


{{--              <div class="row form-group">--}}
{{--                <div class="col-12">--}}
{{--                  <p>No account yet? <a href="{{ route('register') }}">Register</a></p>--}}
{{--                </div>--}}
{{--              </div>--}}


{{--            <div class="form-group">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                        <label class="form-check-label" for="remember">--}}
{{--                            {{ __('Remember Me') }}--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--              <div class="row form-group">--}}
{{--                <div class="col-md-12">--}}
{{--                  <button--}}
{{--                    type="submit" class="btn btn-primary py-2 px-4 text-white">--}}
{{--                    {{ __('Login') }}--}}
{{--                  </button>--}}
{{--                    @if (Route::has('password.request'))--}}
{{--                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                            {{ __('Forgot Your Password?') }}--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--              </div>--}}
             <div class="text-center p-t-136">
                 <a class="txt2" href="">
                     Just For Account
                     <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                 </a>
             </div>

        </form>


			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{asset('Login_v1/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Login_v1/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('Login_v1/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Login_v1/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Login_v1/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('Login_v1/js/main.js')}}"></script>

</body>
</html>
