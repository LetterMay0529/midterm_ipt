<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Nexmo\Laravel\Facade\Nexmo;



class AuthController extends Controller
{
    public function registrationForm(){
        return view ('register');
    }
    public function loginForm(){
        return view ('login');
    }

    public function dashboard(){
        return view ('login');
    }

    public function register (Request $request){
        $request->validate([
            'name'  =>  'required|string',
            'phone_number'  =>  'required|integer',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);

        Mail::send('verification', ['user'=>$user], function($mail) use ($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
            $mail->from('branbroken123@gmail.com', 'Real Estate Listings');
        });

        Nexmo::message()->send([
            'to'=>''.$user->phone_number,
            'from'=>'sender',
            'text'=>'Please check your email for the verification.'
        ]);

        return redirect('/login')->with('Message', ' A message has been sent to your number.');

    }

    public function login (Request $request){
        $request->validate([
            'email' => 'email | required',
            'password' => 'string | required',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || $user -> email_verified_at == null){
            return redirect('/login')->with('Error', 'Sorry, you are not yet verified.');
        }
 
        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$login){
            return back()->with('Error', 'Invalid Credentials');
        }

        return redirect ('/dashboard');
    }

    public function verification (User $user, $token){
        if($user->remember_token!==$token) {
            return redirect('/login')->with('Error', 'Invalid token.');
        }
        
        $user->email_verified_at = now();
        $user->save();

        return redirect('/login')->with('Message', 'Your account has been verified. You can now login. ');
    
    }

    public function logout() {
        auth()->logout();
        return redirect('/login')->with('Message', 'logged out! ');

    }
    
}
