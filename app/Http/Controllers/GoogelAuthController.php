<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;

class GoogelAuthController extends Controller
{
    public function redirects(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        try{

            $google_user= Socialite::driver('google')->user();

            $user= User::where('google_id',$google_user->getId())->first();

            if(!$user){
                $new_user= User::create([
                    'name'=>$google_user->getName(),
                    'email'=>$google_user->getEmail(),
                    'google_id'=>$google_user->getId()
                ]);

                Auth::login($new_user);

                return redirect()->intended('home');
            }
            else{
                Auth::login($user);
                return redirect()->intended('home');

            }
        }
        catch(\Throwable $th){
            // dd('something went wrong'.$th->getMessage());

        }
    }
}
