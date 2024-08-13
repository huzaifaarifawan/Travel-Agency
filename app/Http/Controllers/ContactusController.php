<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function store(Request $request)
    {
        $res=new ContactUs;
        $res->name=$request->input("name");
        $res->email=$request->input("email");
        $res->contactNo=$request->input("contactNo");
        $res->subject=$request->input("subject");
        $res->message=$request->input("message");
        $res->save();
        $request->session()->flash('msg','Data submitted Successfully');
        return view('frontend/contact_us');
    }

    public function show(Request $request, ContactUs $contactus)
    {
        return view('contactus.show')->with('contactusArr',ContactUs::all());
    }

    public function destroy(Request $request,$id)
    {
        // $id=$request->input('id');
        ContactUs::destroy('id',$id);
        $request->session()->flash('msg','Data deleted Successfully');
        return redirect('contactus_show');
    }
}
