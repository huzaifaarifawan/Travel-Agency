<?php
namespace	App\Http\Controllers;	
use	Illuminate\Http\Request;	
use	Socialite;	
use	Auth;	
use	Exception;	
use	App\User;	

class FacebookLoginController extends Controller
{
    public	function	redirectFacebook($provider)	
    {	
        return	Socialite::driver($provider)->redirect();	
    }	
    public	function runCallback($provider)	
    {
        try	
        {	
            $user	=	Socialite::driver($provider)->stateless()->user();	
            $finduser =	User::where('facebook_user_id',	$user->id)->first();	
            if($finduser)
            {	
                Auth::login($finduser);	
                return	redirect('/home');	
            }
            else
            {	
                $newUser =	User::create([	'name'	=>	$user->name,	'email'	=>	$user->email,	'facebook_user_id'=>	$user->id,	'password'	=>	encrypt('123456dummy')	]);	
                Auth::login($newUser);	return	redirect('/home');
            }	
        }	
            catch	(Exception	$e)
            {	
                dd('dfdfdfdfd');
                dd($e->getMessage());
            }
    }
}
