<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jun 2018 05:09:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" style="width:50%" href="logo.jpg"/>
<!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css')}}"/>	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/material-design-iconic-font.min.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/animsition.min.css')}}">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/daterangepicker.css')}}">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<!-- <div class="container" style="float: left; padding: 10px">
		<img style="max-width: 400px;" src="logo.jpg" alt="LOGO">
	</div> -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-20">
				<form class="login100-form validate-form" action="/admin">
					<!-- <span class="login100-form-title p-b-70">
						Welcome<
					</span> -->
					<span style="text-align: center ; text-decoration-color: lightslategray" class="p-b-7">
						<!-- <h2 style=" color: gray"><strong>Directorate General</strong></h2>
						<h5 style=" color: gray" >Monitoring &amp; Evaluation</h5> -->
						<div style="text-align: center ">
								<img src="logo.jpg"  alt="AVATAR">
						</div>
					
					</span>

					<div class="wrap-input100 validate-input m-t-40 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn ">
						<button class="login100-form-btn"  >
							Login
						</button>
					</div>

					<ul class="login-more p-t-50 m-b-8">
						
							<span class="txt1">
								Forgot
							</span>
							<b>
							<a href="#" class="txt2">
								
									Username  /  Password?
								
							</a>
							</b>
							<b>
								<a href="/register" class="txt2" style=" float : right; margin-left: 20px;">
									 Sign up
								</a>
							</b>
					

						
							
						
					</ul>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

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