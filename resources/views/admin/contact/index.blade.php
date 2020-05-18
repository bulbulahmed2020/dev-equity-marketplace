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
                <th>Email</th>
                
                <th>Phone</th>
                 <th>Action</th>
                
            </tr>
        </thead>
        <tbody>

             <?php $i=0?>
                            @foreach($contacts as $contacts)
                                <?php $i++;
                                
                                ?>

            <tr>
                <td>{{$i}}</td>
                <td>{{$contacts->contact_name}}</td>
                <td>{{$contacts->contact_email}}</td>
                
                <td>{{$contacts->contact_phone}}</td>
                <td>
                      <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <i class="fa fa-trash-o" aria-hidden="true"></i></td>


                
            </tr>
            @endforeach
         
        </tbody>
        <tfoot>
            <tr>
               <th>Slno</th>
                <th>Name</th>
                <th>Email</th>
                
                <th>Phone</th>
                 <th>Action</th>
            </tr>
        </tfoot>
    </table>
                        </div>
                        
                    </div>
                </div>
            </div>
   
@endsection

