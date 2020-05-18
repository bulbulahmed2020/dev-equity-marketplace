@extends('admin.layouts.adminlayout')
@section('content')
 
        <div class="main_content">          
            <div class="row">
                <div class="add_listing"><a href="#"><i class="fa fa-bars"></i> List Listing</a></div>
            </div>
            <div class="row">
                <div class="content_box_wrap">
                    <h2>Add New Company Member</h2>


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
                        <form class="form-horizontal" action="{{route('admin::company-member-save')}}" method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="form_row">
                                <div class="col span_1_of_5"><label>Full Name</label></div>
                                <div class="col span_4_of_5"><input name="full_name" type="text"></div>
                            </div>

                            <div class="form_row">
                                <div class="col span_1_of_5"><label>Designation</label></div>
                                <div class="col span_4_of_5"><input name="designation" type="text"></div>
                            </div>

                              <div class="form_row">
                                <div class="col span_1_of_5"><label>Avatar</label></div>
                                <div class="col span_4_of_5"><input name="avatar" type="file"></div>
                            </div>

                             <div class="form_row">
                                <div class="col span_1_of_5"><label>Role</label></div>
                                <div class="col span_4_of_5"><select name="role_in_company">

                                     @foreach ($role_records as $role_record)
                                     <option value="<?=$role_record->id;?>" selected><?=$role_record->role;?></option>
                                      @endforeach

                            </select></div>
                            </div>
                           
                            <div class="form_row">
                                <div class="col span_1_of_5"><label> Status</label></div>
                                <div class="col span_4_of_5">
                                <select name="status">
                                <option value="0">Inactive</option>
                                <option value="1" selected>Active</option></select></div>
                            </div>
                            

                            <div class="form_row">
                                <div class="col span_1_of_5"></div>
                                <div class="col span_4_of_5">
                                    <button type="submit"><i class="fa fa-check-circle"></i> Submit</button>
                                    <button type="reset"><i class="fa fa-refresh"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
  
@endsection

