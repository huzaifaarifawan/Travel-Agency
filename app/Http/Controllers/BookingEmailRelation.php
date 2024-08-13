<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;

class BookingEmailRelation extends Controller
{
    public function index()
    {
        $users=User::get();
        foreach($users as $key=>$value)
        {
            Booking::create([
                'email'=>$value->email,
            ]);
        }
    }
    // public function index()
    // {
    //     return Booking::find(3)->get('email');
    // }
}
