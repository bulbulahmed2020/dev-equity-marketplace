@extends('admin.layouts.adminlayout')
@section('content')
  <div class="row">
                <div class="content_box_wrap">
                    <h2>Change Password</h2>


                     @if(Session::has('error'))
                 <div class="alert error">
                            <span class="icon"><i class="fa fa-times-circle"></i></span>
                            <div class="text"><span>Error!</span> {{Session::get('error')}}.</div>
                            <span class="a_close"><i class="fa fa-times"></i></span>
                        </div>
                         @endif


             
                    @if(Session::has('success'))
                
                     <div class="alert success">
                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                            <div class="text"><span>Success!</span> {{Session::get('success')}}!</div>
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



                    <div class="content_box">
                         <form class="form-horizontal" action="{{route('admin::ChangePass')}}" method="post">
                            @csrf
                            <div class="form_row">
                                <div class="col span_1_of_5"><label>Old Password</label></div>
                                <div class="col span_4_of_5"> <input type="password" class="form-control" name="old_pass" placeholder="Enter Old Password" /></div>
                            </div>


                             <div class="form_row">
                                <div class="col span_1_of_5"><label>New Password</label></div>
                                <div class="col span_4_of_5">  <input type="password" class="form-control" name="new_pass" placeholder="Enter New Password" /></div>
                            </div>


                             <div class="form_row">
                                <div class="col span_1_of_5"><label>Confirm Password</label></div>
                                <div class="col span_4_of_5">  <input type="password" class="form-control" name="confirm_pass" placeholder="Enter Confirm Password" /></div>
                            </div>
                           
                           
                            <div class="form_row">
                                <div class="col span_1_of_5"></div>
                                <div class="col span_4_of_5">
                                    <button type="submit"><i class="fa fa-check-circle"></i> Update</button>
                                  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection

