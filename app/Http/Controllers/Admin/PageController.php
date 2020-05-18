<?php

namespace App\Http\Controllers\Admin;
use App\Model\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        $pages = Page::all();
        return view('admin.page.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $msg=[
            'page_name.required' => 'Name field is required',
            'page_content.required' => 'Content field is required',
            
        ];
        $this->validate($request,[
            'page_name' => 'required',
            'page_content' => 'required',
            
        ],$msg);

       $page_name = $request->get('page_name');
       $page_content = $request->get('page_content');
       $page_meta_keyword= $request->get('page_meta_keyword');
       $page_meta_title = $request->get('page_meta_title');
       $page_meta_description = $request->get('page_meta_description');
       $page_status = $request->get('page_status');


        //dd($request->all());
        Page::create([
            'page_name' => $page_name,
            'page_content' => $page_content,
            'page_meta_keyword' => $page_meta_keyword,
            'page_meta_title' => $page_meta_title,
            'page_meta_description' => $page_meta_description,
            'page_status' => $page_status,

        ]);
        return redirect()->back()->with('success','Page Added Successfully');
   



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       
        $edit = Page::where('id',$id)->first();
       return view('admin.page.edit',compact('edit'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

         $msg=[
            'page_name.required' => 'Name field is required',
            'page_content.required' => 'Content field is required',
            
        ];
        $this->validate($request,[
            'page_name' => 'required',
            'page_content' => 'required',
            
        ],$msg);

       $page_name = $request->get('page_name');
       $page_content = $request->get('page_content');
       $page_meta_keyword= $request->get('page_meta_keyword');
       $page_meta_title = $request->get('page_meta_title');
       $page_meta_description = $request->get('page_meta_description');
       $page_status = $request->get('page_status');
	   $page_id = $request->input('page_id');

	 //SSS 	dd($request->all());
	  $duplicate = Page::where('page_name',$page_name)->first(); //check duplicate page name

	   if($duplicate)
			{
				if($duplicate->id != $page_id)
				{
					
					
					// Session::flash('error', 'Page already exists.'); 
					 //return Redirect::to('admin/page-edit/');

					   return redirect()->back()->with('error','Page already exists.');
   
                        
				}
				
			}
			else
			{
			Page::where('id',$page_id)->update([
            'page_name' => $page_name,
            'page_content' => $page_content,
            'page_meta_keyword' =>$page_meta_keyword,
            'page_meta_title' => $page_meta_title,
            'page_meta_description' => $page_meta_description,
            'page_status' =>$page_status,
        
        ]);
        return redirect()->back()->with('success','Page Updated Successfully');
			}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
