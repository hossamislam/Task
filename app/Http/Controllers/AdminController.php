<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Course;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AdminController extends Controller
{
    public function Admin_index()
    {
        $Courses = Course::all();
        return view('Admin_index', compact('Courses'));
    }
    public function AdminRegisterpage()
    {
        return view('AdminRegister');
    }
    public function AdminRegister(Request $request)
    {
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $email = $request->email;
        $password = $request->password;

        $results = auth('admin')->attempt(['email' => $email, 'password' => $password]);
        if ($results) {
            return redirect()->route('Admin_index');
        }
    }
    public function Admin_loginpage()
    {
        return view('Admin_login');
    }
    public function Admin_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $results = auth('admin')->attempt(['email' => $email, 'password' => $password]);
        if ($results) {
            return redirect()->route('Admin_index');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput($request->only('email'));
        }
    }
    public function courses()
    {
        return view('courses');
    }
    public function Add_course(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return redirect()->route('Admin_index');
    }
    public function delete($id)
    {
        $Course = Course::find($id);
        $Course->delete();
        return redirect()->route('Admin_index');
    }
    public function edit($id)
    {
        $Courses = Course::find($id);
        return view('edit', compact('Courses'));
    }
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('Admin_index');
    }
    // public function adminlogin(Request $request)
    // {

    //     $email = $request->email;
    //     $password = $request->password;

    //     $results = auth('admin')->attempt(['email' => $email, 'password' => $password]);
    //     if ($results) {
    //         return view('Admin_index');
    //     } else {
    //         return back()->withErrors([
    //             'email' => 'The provided credentials do not match our records.',
    //         ])->withInput($request->only('email'));
    //     }
    // }
    public function adminLogout()
    {
        auth('admin')->logout();
        return view('index');
    }
}
