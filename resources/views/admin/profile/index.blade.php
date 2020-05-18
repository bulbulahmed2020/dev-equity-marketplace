@extends('admin.layouts.adminlayout')
@section('content')
  <div class="row">
                <div class="content_box_wrap">
                    <h2>Profile</h2>




             
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
                          <form class="form-horizontal" action="{{route('admin::updateProfile')}}" method="post">
                             <input type="hidden" name="id" value="{{$userById->id}}" />
                            
                            @csrf
                            <div class="form_row">
                                <div class="col span_1_of_5"><label>First Name</label></div>
                                <div class="col span_4_of_5">    <input type="text" class="form-control" name="first_name" value="{{$userById->first_name}}" /> </div>
                            </div>


                             <div class="form_row">
                                <div class="col span_1_of_5"><label>Last Name</label></div>
                                <div class="col span_4_of_5">     <input type="text" class="form-control" name="last_name" value="{{$userById->last_name}}" /></div>
                            </div>


                             <div class="form_row">
                                <div class="col span_1_of_5"><label>Email</label></div>
                                <div class="col span_4_of_5">  <input type="text" class="form-control" name="email" value="{{$userById->email}}" /></div>
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

