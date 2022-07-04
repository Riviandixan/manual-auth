<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ]; // data yang akan dipakai untuk login

        if(Auth::attempt($credentials)){
            $request->session()->regenerate(); // meloginkan ke user
            return redirect()->intended('dashboard'); // redirect ke dashboard
        }
        return redirect('login')->with('loginError', 'Login gagal! Silahkan coba lagi'); // jika login gagal
    }
}
