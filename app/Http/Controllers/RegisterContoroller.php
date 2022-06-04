<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Session\Middleware\StartSession;

class RegisterContoroller extends Controller
{
    public function index()
    {
        return view('register.index', [
            'tittle' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users'],
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->all('yes', 'Pendaftaran Berhasil');

        return redirect('/login')->with('success','Pendaftaran Berhasil! Silahkan Login');
    }
}
