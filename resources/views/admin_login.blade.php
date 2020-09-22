<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng Nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('public/adminlogin/images/icons/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminlogin/css/main.css')}}">
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('public/adminlogin/images/bg-01.jpg')}}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="{{URL::to('/admin-dashboard')}}" method="post">
              <span class="login100-form-title p-b-49">
  						Login
  					</span>
              <?php
              $message = Session::get('message');
              if($message){
                  echo'<span class = "text-alert">'.$message.'<span>';
                  Session::put('message', null);
              }
              ?>

                {{csrf_field()}}
                @foreach($errors-> all() as $val)
                    <ul>
                        <li>{{$val}}</li>
                    </ul>
                @endforeach
                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span class="label-input100">username</span>
                    <input class="input100" type="text" name="admin_email" placeholder="Điền email">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="admin_password" placeholder="Điền password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="text-right p-t-8 p-b-31">
                    <a href="#">Forgot password? </a>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="login">
                            Login
                        </button>
                    </div>
                </div>

                <div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
                </div>

                <div class="flex-c-m">
                    <a href="{{url('/login-facebook')}}" class="login100-social-item bg1">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="{{url('/login-twitter')}}" class="login100-social-item bg2">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="{{url('/login-google')}}" class="login100-social-item bg3">
                        <i class="fa fa-google"></i>
                    </a>
                </div>

                <div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

                    <a href="registration.html" class="txt2">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<script src="{{asset('public/adminlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/adminlogin/vendor/animsition/js/animsition.min.js')}}"></script>
<script src="{{asset('public/adminlogin/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('public/adminlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/adminlogin/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('public/adminlogin/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('public/adminlogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('public/adminlogin/vendor/countdowntime/countdowntime.js')}}"></script>
<script src="{{asset('public/adminlogin/js/main.js')}}"></script>

</body>
</html>
