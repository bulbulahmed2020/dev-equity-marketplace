@extends('frontend.layout')
@section('content')




    
<div class="container">
    <div class="row">
    
</div>
    </div>

    <div class="clearfix"></div>


   

<div class="form-section">
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <div class="form-text"> 
                    <h5>{{ __('Reset Password') }}</h5>

                </div>
</div><div class="row">


                 

                @if (session('status'))
                
                     <div class="alert success">
                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                            <div class="text"><span>Success!</span>  {{ session('status') }}!</div>
                            <span class="a_close"><i class="fa fa-times"></i></span>
                        </div>
                @endif
               



                
                    <form method="POST" action="{{ route('password.email') }}" class="col s12 m12 l12 xl12 form-new">
                        @csrf
        <div class="input-field ">
             <label>{{ __('E-Mail Address') }}</label>
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
         
        </div>
   
   
    

      <button type="submit"> {{ __('Send Password Reset Link') }}</button>

  </form>
</div>
        <p><span>We are commited to your success. We do not share data.</span></p>
      <p>If you’re a client and need assistance,<br> please contact us directly at (866) 842-3356.</p>
    
   
  

        </div>



    </div>

</div>

@endsection




