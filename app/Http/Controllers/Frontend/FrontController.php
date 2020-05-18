<?php

namespace App\Http\Controllers\Frontend;
use App\Model\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
	{
		//
		return view('frontend.index');
  
		
		
	}

     public function resetpassword()
    {
        //
        return view('auth.passwords.email');
  
        
        
    }


	 public function store(Request $request)
    {
        //
        $msg=[
            'contact_name.required' => 'Name field is required',
            'contact_email.required' => 'Content field is required',
            'contact_phone.required' => 'Content field is required',
            
        ];
        $this->validate($request,[
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            
        ],$msg);

       $contact_name = $request->get('contact_name');
       $contact_email = $request->get('contact_email');
       $contact_phone= $request->get('contact_phone');
      

//dd($request->all());
        Contact::create([
            'contact_name' => $contact_name,
            'contact_email' => $contact_email,
            'contact_phone' => $contact_phone,
           

        ]);
        return redirect()->back()->with('success','Thank You !');
   



    }

}
