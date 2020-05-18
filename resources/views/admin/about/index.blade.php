@extends('admin.layouts.adminlayout')
@section('content')
  
        
        <div class="main_content">          
            <div class="row">
                <div class="add_listing"><a href="#"><i class="fa fa-plus-square"></i> New Listing</a></div>
            </div>
            <div class="row">
                <div class="content_box_wrap">
                    <h2>Listings</h2>
                    <div class="content_box">
                        
                        <div class="content_box_row">
                          <table id="pagelist" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sl no</th>
                <th>Name</th>
                <th>Designation</th>
                
                <th>Role</th>
                 <th>Image</th>
                    <th>Status</th>
                
            </tr>
        </thead>
        <tbody>

             <?php $i=0?>
                            @foreach($members as $member)
                                <?php $i++;
                                
                                ?>

            <tr>
                <td>{{$i}}</td>
                <td>{{$member->full_name}}</td>
                <td>{{$member->designation}}</td>
                
                <td>{{$member->role}}</td>
                 <td>
                       <img src="{{ asset('storage/uploads/'.$member->avatar) }}" alt="...">

                 </td>
                <td>
                      <a href="{{route('admin::company-member-edit',['id'=>$member->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <i class="fa fa-trash-o" aria-hidden="true"></i>

                </td>


                
            </tr>
            @endforeach
         
        </tbody>
        <tfoot>
            <tr>
               <th>Slno</th>
                <th>Page</th>
                <th>Status</th>
                
                <th>Modified Date</th>
                 <th>Action</th>
            </tr>
        </tfoot>
    </table>
                        </div>
                        
                    </div>
                </div>
            </div>
   
@endsection

