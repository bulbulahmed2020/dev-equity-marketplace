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

<link href="{{url('/')}}/admintheme/assets/plugin/dataTables/css/jquery.dataTables.min.css" rel="stylesheet">

<script type="text/javascript" src="{{url('/')}}/admintheme/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/admintheme/assets/js/jPushMenu.js"></script>
<script type="text/javascript" src="{{url('/')}}/admintheme/assets/js/jquery.nanoscroller.js"></script>
<script type="text/javascript" src="{{url('/')}}/admintheme/assets/js/theme-functions.js"></script>
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script type="text/javascript" src="{{url('/')}}/admintheme/assets/plugin/dataTables/js/jquery.dataTables.min.js"></script>

<!-- css3-mediaqueries.js for IE8 or older -->
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

</head>

<body>
<div id="main_wrapper">


  

      <!-- begin #sidebar -->
     @include('admin/layouts/leftmenu');
   
    <!-- end #sidebar -->

    <div class="container_fluid" id="pcont">
        <div class="top_content">
            <div class="top_page_heading">
                <div class="page_heading">Dashboard</div>           
                <div class="right_administrator">
                    <a href="javascript:void(0);" class="administrator"><span class="user"><i class="fa fa-user"></i></span> {{ ucfirst(Auth::user()->first_name)}} <i class="fa fa-angle-down down"></i></a>
                    <div class="administrator_box">
                        <ul>
                            <li><a href="{{route('admin::profile',['id'=>Auth::user()->id])}}"><i class="fa fa-user"></i> My Accout</a></li>
                         
                         
                            <li><a  href="{{route('admin::changePassForm')}}"><i class="fa fa-key"></i>Change Password</a></li>
                            <li class="logout"><a href="{{url('logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page_breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>                    
                </ul>
            </div>
        </div>
        <div class="main_content">

            @yield('content')
            
            
        </div> 


    </div>  
</div>
<script>
            CKEDITOR.replace( 'page_content' );
        </script>

        <script type="text/javascript">
    $(document).ready(function() {
    $('#pagelist').DataTable();
} );
</script>
</body>


</html>