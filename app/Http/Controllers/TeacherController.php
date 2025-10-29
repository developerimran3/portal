<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function teacherDashboard()
    {
        $students = Student::count();
        return view("teacher.index", compact("students"));
    }

    public function showRegister()
    {
        return view("teacher.register");
    }

    public function teacherRegister(Request $request)
    {
        //Form Valadation
        $request->validate([
            "name"        => "required",
            "username"    => "required",
            "email"       => "required|email|unique:teachers",
            "password"    => "required|confirmed",
        ]);

        //photo upload
        $photo = $this->fileUpload($request->file("photo"), "media/teacher/");
        //Data Create ta Database        
        Teacher::create([
            "name"     => $request->name,
            "username" => $request->username,
            "email"    => $request->email,
            "phone"    => $request->phone,
            "address"  => $request->address,
            "degree"    => $request->degree,
            "photo"    => $photo,
            "password" => Hash::make($request->password),
        ]);
        return back()->with("success", "Staff Data Create Successful!");
    }

    public function showLogin()
    {
        return view("teacher.login");
    }

    public function teacherLogin(Request $request)
    {
        $credentials =  $request->validate([
            'email'    => 'required|email|exists:teachers,email',
            'password' => 'required',
        ]);



        if (Auth::guard('teacher')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('teacher.profile')->with('success', 'Login Successful');
        }

        return back()->withErrors([
            'password' => 'The password is incorrect.',
        ]);
    }


    public function teacherProfile()
    {
        return view("teacher.profile");
    }

    public function studentAll()
    {
        $students = Student::all();
        return view("teacher.all-student", compact("students"));
    }



    public function forgetPassword()
    {
        return view("teacher.forget-password");
    }


    public function teacherLogout(Request $request)
    {
        Auth::guard("teacher")->logout();
        return redirect()->route("teacher.login");
    }
}
