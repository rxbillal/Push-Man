<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    //--------------------------------------------------------------------------
    //                          REGISTER METHOD
    //--------------------------------------------------------------------------
    public function register()
    {
        return view('auth.register');
    }

    //--------------------------------------------------------------------------
    //                          STORE METHOD
    //--------------------------------------------------------------------------
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess('You have successfully registered & logged in!');
    }

    //--------------------------------------------------------------------------
    //                          LOG IN METHOD
    //--------------------------------------------------------------------------
    public function login()
    {
        return view('auth.login');
    }

    //--------------------------------------------------------------------------
    //                          AUTHENTICATE METHOD
    //--------------------------------------------------------------------------
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
            // $credentials = $request->only('email', 'password');
            $admin = User::where('email', $credentials['email'])->first()->is_admin;

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records or you are not an admin.',
        ])->onlyInput('email');
    }


    //--------------------------------------------------------------------------
    //                          DASHBOARD METHOD
    //--------------------------------------------------------------------------
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard.dashboard');
        }

        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    }

    //--------------------------------------------------------------------------
    //                          LOGOUT METHOD
    //--------------------------------------------------------------------------
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }

}
