@extends('admin.layouts.adminlayout')
@section('content')
 
        <div class="main_content">          
            <div class="row">
                <div class="add_listing"><a href="#"><i class="fa fa-bars"></i> List Listing</a></div>
            </div>
            <div class="row">
                <div class="content_box_wrap">
                    <h2>Edit Page</h2>


                    @if(Session::has('success'))
                
                     <div class="alert success">
                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                            <div class="text"><span>Success!</span> {{Session::get('success')}}!</div>
                            <span class="a_close"><i class="fa fa-times"></i></span>
                        </div>
                @endif

                  @if(Session::has('error'))

                  <div class="alert error">
                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                            <div class="text"></span> {{Session::get('error')}}!</div>
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
                        <form class="form-horizontal" action="{{route('admin::pageUpdate')}}" method="post">
                           @csrf
                           <input type="hidden" name="page_id" value="{{$edit->id}}">
                            <div class="form_row">
                                <div class="col span_1_of_5"><label>Page Name</label></div>
                                <div class="col span_4_of_5"><input name="page_name" type="text" value="{{$edit->page_name}}"></div>
                            </div>
                            <div class="form_row">
                                <div class="col span_1_of_5"><label>Content</label></div>
                                <div class="col span_4_of_5"><textarea name="page_content" cols="" rows="">{{$edit->page_content}}</textarea></div>
                            </div>
                            <div class="form_row">
                                <div class="col span_1_of_5"><label>Page Status</label></div>
                                <div class="col span_4_of_5"><select name="page_status"><option value="0">Inactive</option><option value="1" selected>Active</option></select></div>
                            </div>
                            <div class="form_row">
                                <div class="col span_1_of_5"><label>Meta Title</label></div>
                                <div class="col span_4_of_5"><input name="page_meta_title" type="text" value="{{$edit->page_meta_title}}"></div>
                            </div>
                            <div class="form_row">
                                <div class="col span_1_of_5"><label>Meta Keyword</label></div>
                                <div class="col span_4_of_5"><textarea name="page_meta_keyword" cols="" rows="" value="{{$edit->page_meta_keyword}}"></textarea></div>
                            </div>
                            <div class="form_row">
                                <div class="col span_1_of_5"><label>Meta Description</label></div>
                                <div class="col span_4_of_5"><textarea name="page_meta_description" cols="" rows="" value="{{$edit->page_meta_description}}"></textarea></div>
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

