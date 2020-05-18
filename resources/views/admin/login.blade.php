<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Admin</title>
<link href="{{url('/')}}/admintheme/assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/admintheme/assets/css/grid.css" rel="stylesheet" type="text/css" />
<link href="{{url('/')}}/admintheme/assets/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="{{url('/')}}/admintheme/assets/js/jquery.js"></script>
<script type="text/javascript" src="{{url('/')}}/admintheme/assets/js/jPushMenu.js"></script>
<script type="text/javascript" src="{{url('/')}}/admintheme/assets/js/jquery.nanoscroller.js"></script>
<script type="text/javascript" src="{{url('/')}}/admintheme/assets/js/theme-functions.js?v=2"></script>
<!-- css3-mediaqueries.js for IE8 or older -->
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="login">
<div id="main_wrapper" class="login_container">
    <div class="login_wrap">
        <div class="login_box">
            <div class="logo"> <span>Ceros</span></div>


                   @if(Session::has('error'))
                 <div class="alert error">
                            <span class="icon"><i class="fa fa-times-circle"></i></span>
                            <div class="text"><span>Error!</span> {{Session::get('error')}}.</div>
                            <span class="a_close"><i class="fa fa-times"></i></span>
                        </div>
                         @endif


                @if(Session::has('logout'))
                
                     <div class="alert success">
                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                            <div class="text"><span>Success!</span> {{Session::get('logout')}}!</div>
                            <span class="a_close"><i class="fa fa-times"></i></span>
                        </div>
                @endif
                @if ($errors->any())
                   
    
                     
                     <div class="alert error">
                            <span class="icon"><i class="fa fa-times-circle"></i></span>
                            <div class="text">  @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach</div>
                            <span class="a_close"><i class="fa fa-times"></i></span>
                        </div>
                @endif


            <div class="login_form">
                <h2>Login Access</h2>

             


                <form action="{{route('login')}}" method="post" class="margin-bottom-0">
                    @csrf

                    
           
                


                <div class="form_row">
                    <i class="fa fa-user"></i> <input name="email" type="text" placeholder="Email">
                </div>
                <div class="form_row">
                    <i class="fa fa-lock"></i> <input name="password" type="password" placeholder="Password">
                </div>
                <div class="form_btn">
                    <button type="submit">login <i class="fa fa-angle-right"></i></button>
                </div>

  <div class="form_row">

     <label>
    
                                    <a class="btn btn-link" href="{{route('password.email')}}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                             

                                   <input type="checkbox" name="remember_me" /> Remember Me
                    </label>
                 
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>