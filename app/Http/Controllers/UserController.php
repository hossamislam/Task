<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $Courses = Course::all();
        return view('userindex', compact('Courses'));
    }
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $email = $request->email;
        $password = $request->password;
        $user = auth('user')->attempt(['email' => $email, 'password' => $password]);
        if ($user) {
            return redirect()->route('home');
        }
    }
    public function userlogout()
    {
        auth('user')->logout();
        return view('index');
    }
    public function loginpage()
    {
        return view('loginpage');
    }
    public function userlogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $check = auth('user')->attempt(['email' => $email, 'password' => $password]);
        if ($check) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput($request->only('email'));
        }
    }



}
