@extends('frontend.layout')
@section('content')
<div class="inner-page">
	<div class="home-banner">
		<div class="overlay-bg"></div>
		<div class="container">
			<div class="row">
					<div class="banner-text">
				<h3>An Open Letter 
From Our Partners</h3>
<h6>As private market innovators, we provide custom liquidity solutions to private companies and their employees, and offer pre-IPO opportunities to institutions and investors.</h6>
			</div>
</div>
<div class="clearfix"></div>
		</div>



	
<div class="container">
	<div class="row">
	<button>Get started</button>
</div>
	</div>
	<div class="clearfix"></div>
</div>
<div class="text-sec">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12 xl12">
				<p>I have a story to tell about investing extremely successfully in medical devises. My success derives from a number of factors, not the least of which is that I have followed what a friend of mine,<a href="#"> <b>Harold Witt</b></a>, a partner of the iconic investment firm, <a href="#">
				 <b>Allen and Company</b></a>, said to me when I was the CEO of Cannon Films, a public company in 1972, <i>“Chris, I invest in people.”</i></p>

				<p>Well, I have been extremely Blessed in investing with a group of extraordinary people in the medical robotic space.<a href="#"> <b>Dr. Maurice Ferre</b></a>, I first came to know Maurice when I was the lead investor and board member of <a href="#"><b>ZKAT</b></a>, the company that Rony Abovitz, now Magic Leap, click, had founded, we were on the search for a new CEO. The company needed leadership and vision, Maurice provided both. Together we pitched two of my friends from my Junk Bond days, David Tepper and David Matlin, the three of us invested 1mm each, filled out the round of 4mm, and over the course of the next six years <b>built the company to an IPO and the a sale to Stryker, SYK, for 1.65B.</b></p>

				<p>Pre the IPO, we attracted to the board the ‘father of robotic surgery’ Dr Fred Moll. Because of our shared interests, the three of us, along with many others, David Matlin, click, Michael Stanski, click, Ken Langone, click, have been early round investors in a number of interesting and successful companies, including Audis Surgicawl Corp, I was an original board member, Dr Moll the founder and CEO, <b>sold to JNJ for 5.7B, ShockWave Medical Corp, Fred Chairman</b>, I was on the original board, original round under 20mm, now public, SWAV, market cap, about 700m, Cephea, a mitral heart valve, original round less than 12 mm,<b> sold to Abbott for 210mm, Procept, first round under 15, last round over 500mm, and about another ten companies.</b></p>

				<p>Ok, so why am I telling you all this?</p>
				<p>We are looking for more smart investors to invest with us.</p>
				<p>Specifically, we are looking for <a href="#">accredited investors</a>, you know if you are one probably, to invest side by side with us.</p>
				<p><em>WE CHARGE NO FEES.</em></p>
				<p>We feel that we are, because of our contacts, bringing institutional quality deals to family offices and qualified investors.</p>
				<p>We are doing this through a brokerage firm Ceros, clears with Fidelity, the gold standard, with my two partners <a href="#"><b>Mark Goldwasser</b></a> and <a href="#"><b>David Brown</b></a>.</p>
				<p>If you think you might be interested in investing side by side with us, please <a href="#">contact us.</a>

</p>
<p>We currently have two extremely interesting opportunities, an Israeli robotics company, Dr Ferre is the chairman, and a heart valve company, I am on the board, run by<a href="#"> <b>Thierry Thaure</b></a> ,he was the CEO of Cephea, the mitral valve company sold to Abbott.</p>
<p>Bottom line here, these are extremely interesting times, the more capital we have to invest, the better terms we will be able to negotiate for our group.</p>
<p>Over the next few weeks, I’ll flesh out more of what our group has done, but if you search some of the names I have mentioned, you will see that we are the real deal.</p>
<p>Remember, we invest on the same terms as all our investors, and we charge no fees to our co investors.</p>
<p>If you think this might fit your investment plans, please click here to verify your status as an accredited investor and <a href="#">schedule a call</a>.</p>

<p>Stay safe and sound.</p>

<p>My Best,</p>
<div class="author-div">
	<div class="prof-img">
		<img src="{{url('/')}}/frontendtheme/assets/images/home-img/prof-img.png" srcset="{{url('/')}}/frontendtheme/assets/images/home-img/prof-img@2x.png 2x" alt="profile">

	</div>
	<div class="prof-info">
		<img src="{{url('/')}}/frontendtheme/assets/images/home-img/sign.svg" alt="sign"/>
		<h6>Chris Dewey, Partner | Ceros</h6>
	</div>

</div>


			</div>	

		</div>
	</div>



</div>

<div class="form-section">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12 xl12">
				<div class="form-text">
					<h3>Invest & Thrive with CEROS</h3>
					<h5>Take your business to the next level with the subject-matter experience, custom support, 
and comprehensive wealth management capabilities designed to help you succeed.</h5>

				</div>
</div><div class="row">


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


				 <form action="{{route('contact')}}" method="post" class="col s12 m12 l12 xl12 form-new">
       @csrf
        <div class="input-field ">
        	 <label>Full Name</label>
          <input placeholder="John Smith" name="contact_name" type="text" class="form_control">
         
        </div>
   
   
          <div class="input-field">
        	 <label>E-mail</label>
          <input placeholder="johnsmith@example.com" name="contact_email" type="email" class="form_control">
         
        </div>

     
       <div class="input-field">
        	 <label>Phone</label>
          <input placeholder="(XXX) XXX-XXXX" name="contact_phone" type="number" class="form_control">
         
        </div>
  

      <button type="submit">Get Started</button>

  </form>
</div>
        <p><span>We are commited to your success. We do not share data.</span></p>
      <p>If you’re a client and need assistance,<br> please contact us directly at (866) 842-3356.</p>
    
   
  

		</div>



	</div>

</div>


<div class="icon-logo-sec">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12 xl12">
				<div class="title-div">
					<h3>Invest alongside CEROS</h3>
					<h5>Our track record speaks for itself</h5>
				</div>

			</div>

		</div>
		<div class="row">
			<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/MAKO_SURGICAL_CEROS.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>Mako <span>+1.65 billion</span></h3>
						<p>Dr Maurice Ferre Chairman and CEO, Dr Fred Moll a director, Chris Dewey founding director and first investor,raised the initial four million. Morgan Stanley, JP Morgan took the company public, was sold to Stryker for 1.65 Billion. Mako was founded by Ferre,
Dewey and Rony Abovitz, click here, people, remember that name, Rony Abovitz… <a href="#"> learn more </a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>

	<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/ABBOT_CEROS.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>Abbott<span>+120 million</span></h3>
						<p>Dr Fred Moll, Chairman of the board, Maurice Ferre investor, Chris Dewey director, raised the friends and family round, arranged for National Securities to raise 10 million at a post money valuation of 22mm, just completed a sale to Abbott, click here, for 80mm, with a potential earn out, based on milestones of an additional 120mm, over the next three…  <a href="#">learn more</a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>

				<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/PROCEPT_BIOROBOTICS.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>Procept<span>+475 million</span></h3>
						<p>Dr Fed Moll investor and board member, Maurice Ferre,  investor, Chris Dewey investor and raised the friends and family round at a pre money valuation of 12mm. Last round post money valuation 475mm, investors include, ......, (to be added), company has FDA approvals and is marketing their products. IPO or sale expected within 18 months…<a href="#">learn more</a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>
					<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/AURIS.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>Auris Robotics<span>+5 million</span></h3>
						<p>Dr Fred Moll, Chairman and CEO, Maurice Ferre, Chris Dewey, early director, raised the friends and family round of 5mm at a pre money of 15mm. After many round of successive financings, Peter Thiel’s Mithrel, others....... the company is in talks to be bought by JNJ for over 5 Billion…<a href="#">learn more</a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>
			<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/Magic-Leap-logo.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>Magic Leap<span>+X million</span></h3>
						<p>Dr Fred Moll, Chairman and CEO, Maurice Ferre, Chris Dewey, early director, raised the friends and family round of 5mm at a pre money of 15mm. After many round of successive financings, Peter Thiel’s Mithrel, others....... the company is in talks to be bought by JNJ for over 5 Billion…  <a href="#">learn more</a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>
					<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/DERMO.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>Dermasensor<span>+X million</span></h3>
						<p>Dr Fred Moll, Chairman and CEO, Maurice Ferre, Chris Dewey, early director, raised the friends and family round of 5mm at a pre money of 15mm. After many round of successive financings, Peter Thiel’s Mithrel, others....... the company is in talks to be bought by JNJ for over 5 Billion…  <a href="#">learn more</a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>
						<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/Insightec.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>Insightec<span>+X million</span></h3>
						<p>Dr Fred Moll, Chairman and CEO, Maurice Ferre, Chris Dewey, early director, raised the friends and family round of 5mm at a pre money of 15mm. After many round of successive financings, Peter Thiel’s Mithrel, others....... the company is in talks to be bought by JNJ for over 5 Billion… <a href="#">learn more</a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>
					<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/Shockwave-Logo.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>Shockwave<br> Medical<span>+X million</span></h3>
						<p>Dr Fred Moll, Chairman and CEO, Maurice Ferre, Chris Dewey, early director, raised the friends and family round of 5mm at a pre money of 15mm. After many round of successive financings, Peter Thiel’s Mithrel, others....... the company is in talks to be bought by JNJ for over 5 Billion… <a href="#">learn more</a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>
					<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/Potrero-logo.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>Potrero<span>+X million</span></h3>
						<p>Dr Fred Moll, Chairman and CEO, Maurice Ferre, Chris Dewey, early director, raised the friends and family round of 5mm at a pre money of 15mm. After many round of successive financings, Peter Thiel’s Mithrel, others....... the company is in talks to be bought by JNJ for over 5 Billion… <a href="#">learn more</a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>
					<div class="col s12 m6 l6 xl6">
				<div class="icon-div">
					<div class="icon-img">
						<img src="{{url('/')}}/frontendtheme/assets/images/home-img/HistoSonics.svg" alt="logo"/>

					</div>
					<div class="icon-img-info">
						<h3>HistoSonics<span>+X million</span></h3>
						<p>Dr Fred Moll, Chairman and CEO, Maurice Ferre, Chris Dewey, early director, raised the friends and family round of 5mm at a pre money of 15mm. After many round of successive financings, Peter Thiel’s Mithrel, others....... the company is in talks to be bought by JNJ for over 5 Billion… <a href="#">learn more</a></p>
<h5><a href="#">Request More Info +</a></h5>

					</div>
				</div>	
			</div>
			<div class="col s12 m12 l12 xl12">
			<div class="border-div"></div>
		</div>
		</div>

	</div>

</div>
@endsection



