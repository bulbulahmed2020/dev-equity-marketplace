@extends('admin.layouts.adminlayout')
@section('content')
   <div class="row">
                <div class="col span_1_of_4 box_group visitors">
                    <i class="fa fa-users visitors"></i>
                    <div class="top">69</div>
                    <div class="bottom"><a href="#"><i class="fa fa-angle-down"></i> New Visitors</a></div>
                </div>
                <div class="col span_1_of_4 box_group message">
                    <i class="fa fa-envelope-o message"></i>
                    <div class="top">26</div>
                    <div class="bottom"><a href="#"><i class="fa fa-angle-down"></i> New Messages</a></div>
                </div>
                <div class="col span_1_of_4 box_group views">
                    <i class="fa fa-eye views"></i>
                    <div class="top">102</div>
                    <div class="bottom"><a href="#"><i class="fa fa-angle-down"></i> New views</a></div>
                </div>
                <div class="col span_1_of_4 box_group comments">
                    <i class="fa fa-comments comments"></i>
                    <div class="top">82</div>
                    <div class="bottom"><a href="#"><i class="fa fa-angle-down"></i> New Comments</a></div>
                </div>
            </div>
@endsection