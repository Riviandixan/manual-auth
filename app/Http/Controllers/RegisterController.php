<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  index()
    {
        return view('register.index');
    }

    // function store ini berfungsi untuk mengirim data inputan ke databse
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]); // validasi data

        $validateData['password'] = bcrypt($validateData['password']); // mengubah password dari angka/huruf menjadi bcrypt

        User::create($validateData); // mencreate user tapi belum di loginkan

        return redirect('/register')->with('success', 'Registrasi berhasil Silahkan Login!');
    }
}