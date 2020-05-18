<!DOCTYPE html>
<html>
<head>
	<title>Eros</title>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="{{url('/')}}/frontendtheme/assets/css/materialize.min.css"  media="screen,projection"/>
<link href="{{url('/')}}/frontendtheme/assets/css/custom.css" rel="stylesheet" type="text/css">
<link href="{{url('/')}}/frontendtheme/assets/css/responsive.css" rel="stylesheet" type="text/css">
<!--added css-->

<link href="{{url('/')}}/frontendtheme/assets/css/new.css?v=2.5" rel="stylesheet" type="text/css">
<link href="{{url('/')}}/frontendtheme/assets/css/stylesheet.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Slick Slider-->
<!-- <link href="css/slick.css" rel="stylesheet"> -->

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
</head>
<body>

<header class="">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="d-table">
						<div class="d-tablecell logo-container">
							<a href="index.php" class="logo"><img src="{{url('/')}}/frontendtheme/assets/images/logo-v2.png" srcset="{{url('/')}}/frontendtheme/assets/images/logo-v2@2x.png 2x" alt="logo"></a>
							<div class="searchInner hide-on-med-and-down">
								<form>
									<button type="button" class="btn searchbutton" name="searchbutton"><i class="material-icons">search</i></button>
									<input type="text" name="search" class="search" placeholder="Search">
								</form>
							</div>
						</div>
						<div class="d-tablecell header-menu">
							<nav class="transparent-bg box-sadhow-none">
							    <div class="nav-wrapper">
							    	 <a href="#" data-target="slide-out" data-activates="slide-out" class="sidenav-trigger primary-color "><i class="material-icons">menu</i></a>
							          @include('frontend/menu');
							    </div>
							</nav>
							<!-- Dropdown Structure -->
							<!-- <ul id="dropdown1" class="dropdown-content">
							  	<li><a href="#" class="waves-effect waves-light">Action</a></li>
				                <li><a href="#" class="waves-effect waves-light">Another action</a></li>
				                <li><a href="#" class="waves-effect waves-light">Something else here</a></li>
							</ul> -->
							
							<!--Mobile Menu-->
				            <ul class="sidenav" id="slide-out">

				            	 <li><a class="sidenav-close" href="#!"><i class="material-icons">close</i></a></li>
				                <li><a href="#" class="waves-effect waves-light">How it works</a></li>
				                <li><a href="#" class="active waves-effect waves-light">Marketplace</a></li>
				                <!-- <li>
				                	<a class="waves-effect waves-light dropdown-trigger active" href="#!" data-target="dropdown-mob" data-beloworigin="true">Marketplace <i class="material-icons">arrow_drop_down</i></a>
									<ul id="dropdown-mob" class="dropdown-content">
									  	<li><a href="#" class="waves-effect waves-light">Action</a></li>
						                <li><a href="#" class="waves-effect waves-light">Another action</a></li>
						                <li><a href="#" class="waves-effect waves-light">Something else here</a></li>
									</ul>
				                </li> -->
				                <li><a href="#" class="waves-effect waves-light">Knowledge Center</a></li>
				                <li><a href="#" class="waves-effect waves-light">About Us</a></li>
				                <li>
				                	<div class="searchInner">
										<form>
											<button type="button" class="btn searchbutton" name="searchbutton"><i class="material-icons">search</i></button>
											<input type="text" name="search" class="search" placeholder="Search">
										</form>
									</div>
				                </li>
				            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hd-bottom center-align">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p>Lorem ipsum dolores. Lorem ipsum dolores.</p>
				</div>
			</div>
		</div>
	</div>
</header>


 @yield('content')




<section class="browse-offer-section">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<h4 class="title">Browse all of our offerings</h4>
					<h3>Ceros platform includes the latest <br>
on trends and unicorns.</h3>
					<div class="button-section">
						<a href="javascript:void(0);" class="btn waves-effect waves-light btn-chng">Contact Us</a>
						<!--<a href="javascript:void(0);" class="btn waves-effect waves-light">Get Started</a>-->
						<h5>blue skies ahead</h5>
						<h6>invest in our success</h6>
					</div>
				</div>
			</div>




		</div>
	</section>
	
</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col s6 m3 l3 xl3">
				<div class="ft-menu">
					<h3>More</h3>
					<ul>
						<li>
							<a href="about.php">About us</a>
						</li>
						<li>
							<a href="#">FAQ</a>
						</li>
						<li>
							<a href="#">Careers</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col s6 m3 l3 xl3">
				<div class="ft-menu">
					<h3>Legal</h3>
					<ul>
						<li>
							<a href="terms-conditions.php" class="waves-effect waves-light">Terms</a>
						</li>
						<li>
							<a href="privacy-policy.php" class="waves-effect waves-light">Privacy</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="waves-effect waves-light">Disclaimers</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="waves-effect waves-light">Member SIPC</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col s6 m3 l3 xl3">
				<div class="ft-menu">
					<h3>Contact</h3>
					<ul>
						<li>
							<a href="mailto:hello@ceros.io">hello@ceros.io</a>
						</li>
						<li>
							<a href="tel:(800)123-4567">(800) 123-4567</a>
						</li>
					</ul>
					<ul class="social-link">
    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
</ul>
<div class="footeradtn">
	<img src="{{url('/')}}/frontendtheme/assets/images/footer-img.png" alt=""  srcset="images/footer-img@2x.png 2x">
</div>
				</div>
			</div>
			<div class="col s6 m3 l3 xl3">
				<div class="ft-menu right-align ft-logo">
					<a href="index.php"><img src="{{url('/')}}/frontendtheme/assets/images/logo2.svg"></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<div class="copyrights">
					<p>Any securities offered are offered by Ceros, a registered broker/dealer and member FINRA/ SIPC.</p>
					
				</div>
			</div>
		</div>
	</div>
	<div class="copyrgt">
		<div class="container">
		<div class="row">
			<div class="col s12">
	<p>Copyright © 2019 Ceros Financial Services, Inc. All rights reserved.</p>
</div>
</div>
</div>
</div>
</footer>

<!-- Modal Structure -->
<div id="modal1" class="modal">
	<div class="modal-content center-align">
		<a href="#" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons dp48">close</i></a>
	  	<div class="popup-slide">
	  		<!--Slide 1-->
			<div class="item active" id="tab-one">
				<div class="slide-content step-1">
					<h4>Start your first trade</h4>
				  	<p>Express interest in a company</p>
				  	<div class="modal-body">
					  	<div class="media">
					  		<img src="{{url('/')}}/frontendtheme/assets/images/m1.png" alt="img">
					  	</div>
					  	<div class="content">
					  		<p>Place a <strong>non-binding</strong> buy or sell order via our marketplace</p>
					  		<p>Keep in mind that certain companies trade more often than others, we see the most activity in companies that have received late-stage funding (e.g. Series D+) and have enterprise solutions.</p>
					  	</div>
				  	</div>
				</div>
			</div>
	  		<!--Slide 2-->
			<div class="item hide" id="tab-two">
				<div class="slide-content step-2">
					<h4>We&rsquo;ll be in touch</h4>
				  	<p>One of our specialists <span class="line-break">will reach out to you</span></p>
				  	<div class="modal-body">
					  	<div class="media">
					  		<img src="{{url('/')}}/frontendtheme/assets/images/m2.png">
					  	</div>
					  	<div class="content">
					  		<p>With your consent, one of our representatives will reach out to you and tie up any loose ends prior to closing.</p>
					  	</div>
				  	</div>
				</div>
			</div>
			<!--Slide 3-->
			<div class="item hide" id="tab-three">
				<div class="slide-content step-3">
					<h4>Review & Sign</h4>
				  	<p>Once you sign, <span class="line-break">we handle the rest</span></p>
				  	<div class="modal-body">
					  	<div class="media">
					  		<img src="{{url('/')}}/frontendtheme/assets/images/m3.png" alt="img">
					  	</div>
					  	<div class="content">
					  		<p>Our experienced team works quickly to review your documennt submission. Once approved, we obtain the proper countersigning neccesary for your transaction.</p>
					  	</div>
				  	</div>
				</div>
			</div>
			<!--Slide 4-->
			<div class="item hide" id="tab-four">
				<div class="slide-content step-4">
					<h4>Finalize</h4>
				  	<p>Send and sign securely online <span class="line-break">or with our assistance</span></p>
				  	<div class="modal-body">
					  	<div class="media">
					  		<img src="{{url('/')}}/frontendtheme/assets/images/m3.png" alt="img">
					  	</div>
					  	<div class="content">
					  		<p>In order to finalize the transaction, the investor’s capital is submitted and then transfered to the selling shareholder.</p>
					  		<p>This process takes a few short days. One time fees are assessed  typically 5-10%.
					  		There are no other fees.</p>
					  	</div>
				  	</div>
				</div>
			</div>
			<!--Slide 5-->
			<div class="item hide" id="tab-five" >
				<div class="slide-content step-5">
					<h4>That&rsquo;s it</h4>
				  	<p>Are you a shareholder?</p>
				  	<div class="modal-body">
					  	<div class="content">
					  		<p>Depending on the structure of the transaction, additional action may be required from shareholders.</p>
					  		<p class="font-chng">Some shareholders may not have immediately transfered their shares and rather entered into a forward contract requiring the delivery of shares once possible
					  		(i.e., after IPO, acquisition, etc.).</p>
					  		<p class="font-chng">We will be there to help every step of the way.</p>
					  	</div>
				  	</div>
				</div>
			</div>

			<!--Control-->
			<ul class="slick-dots ca-dots" role="tablist">
			   <li class="" role="presentation">
			   	<a href="javascript:void(0);" class="con-btn active"  data-tag="tab-one">1</a>
			   </li>
			   <li class="" role="presentation">
			   	<a href="javascript:void(0);" class="con-btn"  data-tag="tab-two">2</a>
			   </li>
			   <li class="" role="presentation">
			   	<a href="javascript:void(0);" class="con-btn"  data-tag="tab-three">3</a>
			   </li>
			   <li class="" role="presentation">
			   	<a href="javascript:void(0);" class="con-btn"  data-tag="tab-four">4</a>
			   </li>
			   <li class="" role="presentation">
			   	<a href="javascript:void(0);" class="con-btn"  data-tag="tab-five">5</a>
			   </li>
			</ul>
	  	</div>
	</div>
</div>

<!--JavaScript at end of body for optimized loading-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/frontendtheme/assets/js/materialize.min.js"></script>
 <script>
$(document).ready(function(){
    $('.sidenav').sidenav();

  });
    </script>

<!--Slick Slider-->
<!-- <script src="js/slick.min.js"></script> -->
<script type="text/javascript" src="{{url('/')}}/frontendtheme/assets/js/custom.js"></script>




<!-- <script type="text/javascript">
  	$(document).on('click', function(){
  		// init Partners carousel on frontpage.
  		$('.popup-slide').resize();
	      $('.popup-slide').not('.slick-initialized').slick({
	        autoplay: true,
	        dots: true,
	        infinite: true,
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: false
	      });
  	});

</script> -->

<script type="text/javascript">
  var documentHeight = $(document).height(); 
	var lf= $('.left-sidebar').offset().top;
$(window).scroll(function(){


// var lf= $('.left-sidebar').offset().top;

 var br=$('.browse-offer-section').offset().top;
//var diff= br-500;
// console.log(lf);
 //console.log(br);
    if ($(window).scrollTop() >= 1200) {

    	var a=$(window).scrollTop();


       $('.left-sidebar, .right-sidebar').removeClass('attched');
       $('.left-sidebar, .right-sidebar').addClass('smoth-sidebar');
    }
    else {
       $('.left-sidebar, .right-sidebar').addClass('attched');
         $('.left-sidebar, .right-sidebar').removeClass('smoth-sidebar');
    }
});







$('.checkbox-menu').click(function() {
  if ($(this).is(':checked')) {
    var id=$(this).attr("data-id");
    $(".list-"+id).show();
   
  }
  else
  {
  	 var id=$(this).attr("data-id");
  	  $(".list-"+id).hide();
  }
});

	
</script>




</body>
</html>