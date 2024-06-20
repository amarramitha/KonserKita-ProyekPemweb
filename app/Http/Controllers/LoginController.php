<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/');
            }
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        $user = Socialite::driver('google')->user();
        // ddd($user);
        $registeredUser = User::where('email', $user->email)->first();
        if (!$registeredUser)
        {
            $user = User::updateOrCreate([
                'google_id' => $user->id,
            ], [
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt(Hash::make(Str::random(24))),
                'image' => $user->avatar,
                'google_token' => $user->token,
                'google_refresh_token' => $user->refreshToken,
            ]);
         
            Auth::login($user);
         
            return redirect('/');
        }
        Auth::login($registeredUser);

        return redirect('/');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
