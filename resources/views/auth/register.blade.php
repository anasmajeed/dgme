@extends('layouts.auth')
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-0 p-b-20">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					<span style="text-align: center ; text-decoration-color: lightslategray" class="p-b-7">
						<div style="text-align: center ">
								<img href= "#" src="logo.jpg"  alt="AVATAR">
						</div>
                    </span>
                    <div class="row">
                   <div class="col-md-6">
                    <div class="wrap-input100 validate-input m-t-30 m-b-35" data-validate = "Enter First Name">
						<input class="input100" type="text" id="name" name="name" value="{{ old('name') }}">
						<span class="focus-input100" data-placeholder="First Name"></span>
						@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
					</div>
                   </div>
                    <div class="col-md-6">
                        <div class="wrap-input100 validate-input m-t-30 m-b-35" data-validate = "Enter Last Name">
                        <input class="input100" type="text" name="Lastname" value="{{old('Lastname')}}">
                            <span class="focus-input100" data-placeholder="Last Name"></span>
                            @if ($errors->has('Lastname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Lastname') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                   </div>
                    <div class="wrap-input100 validate-input m-b-30" data-validate="Enter Email">
						<input class="input100" id="email" type="email" name="email" value="{{ old('email') }}">
						<span class="focus-input100" data-placeholder="Email Here"></span>
						@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					</div>
					<div class="wrap-input100 validate-input m-b-30" data-validate="Enter password">
						<input class="input100" id="password" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
						@if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                         @endif
                    </div>
                    <div class="wrap-input100 validate-input m-b-20" data-validate="Confirm password">
						<input class="input100" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
                    </div>
                    <div>  <ul class="login-more p-t-5 m-b-10">
						
                        <span class="txt1">
							<input type="checkbox" > I Accept the
                        </span>
                        <b><a href="#" class="txt2">Terms of Use  </a></b>
                        <span class="txt1">
                            &amp;
                        </span>
                        <b><a href="#" class="txt2"> Privacy Policy. </a></b>
                    </ul>
                    </div>
					<div class="container-login100-form-btn ">
						<button class="login100-form-btn"  >
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	    
    <!--===============================================================================================-->
<!--===============================================================================================-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	
	
<!--===============================================================================================-->
	<script src="{{asset('js/animsition.min.js')}}"></script>
<!--===============================================================================================-->


	<script src="{{asset('js/popper.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->

	<script src="{{asset('js/select2.min.js')}}"></script>
<!--===============================================================================================-->

	<script src="{{asset('js/moment.min.js')}}"></script>	
	<script src="{{asset('js/daterangepicker.js')}}"></script>
<!--===============================================================================================-->

	<script src="{{asset('js/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jun 2018 05:09:14 GMT -->
</html>


{{-- @extends('layouts.uppernav')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
