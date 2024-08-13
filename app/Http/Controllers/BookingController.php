<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $res=new Booking;
        $res->destination=$request->input("destination");
        $res->howMany=$request->input("howMany");
        $res->arrival=$request->input("arrival");
        $res->leaving=$request->input("leaving");
        $res->contact=$request->input("contact");
        $users=User::get();
        foreach($users as $key=>$value)
        {
            Booking::create([
                'email'=>$value->email,
            ]);
        }
        $res->email=$users;
        $res->save();
        $request->session()->flash('msg','Data submitted Successfully');
        return view('frontend/home');
    }

    public function show(Booking $booking)
    {
        return view('booking.show')->with('bookingArr',Booking::all());
    }

    public function edit(Request $request)
    {
        $id=$request->input('id');
        return view('booking.edit')->with('bookingArr',Booking::find($id));
    }

    public function update(Request $request, Booking $booking)
    {
        $res=Booking::find($request->id);
        $res->destination=$request->input("destination");
        $res->howMany=$request->input("howMany");
        $res->arrival=$request->input("arrival");
        $res->leaving=$request->input("leaving");
        $res->contact=$request->input("contact");
        // $res->email=$request->input("email");
        $res->save();
        $request->session()->flash('msg','Data updated Successfully');
        return view('frontend.home');
        
        
    }

    public function destroy(Request $request)
    {
        $id=$request->input('id');
        Booking::destroy('id',$id);
        $request->session()->flash('msg','Data deleted Successfully');
        return redirect('home');
    }

    public function customer(Request $request, Booking $booking)
    {
        $id=$request->input('id');
        // $res=
        // $res = Booking::where('id',$id);
        // $res=Booking::where('id', $id)->get(['column1']);
        // if( Booking::select('id')->get()== $id){
        switch ($request->input('action')) {
            case 'update':
                return $this->edit($request);
                break;
            case 'delete':
                return $this->destroy($request);
                break;
        }
    }
    // else{
    //     echo "Enter valid id...";
    // }
    // }
}
