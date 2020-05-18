<?php

namespace App\Http\Controllers\Admin;
use App\Model\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

}
