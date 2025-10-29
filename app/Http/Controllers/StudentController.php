<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{
    public function studentDashboard()
    {
        return view("student.index");
    }

    public function showRegister()
    {
        return view("student.register");
    }

    public function studentRegister(Request $request)
    {
        //Form Valadation
        $request->validate([
            "name"        => "required",
            "username"    => "required",
            "email"       => "required|email|unique:students",
            "password"    => "required|confirmed",
        ]);

        //photo upload
        $photo = $this->fileUpload($request->file("photo"), "media/student/");
        //Data Create ta Database        
        Student::create([
            "name"     => $request->name,
            "username" => $request->username,
            "email"    => $request->email,
            "phone"    => $request->phone,
            "address"  => $request->address,
            "skill"    => $request->skill,
            "photo"    => $photo,
            "password" => Hash::make($request->password),
        ]);
        return back()->with("success", "Staff Data Create Successful!");
    }

    public function showLogin()
    {
        return view("student.login");
    }

    public function studentLogin(Request $request)
    {
        $credentials =  $request->validate([
            'email'    => 'required|email|exists:students,email',
            'password' => 'required',
        ]);



        if (Auth::guard('student')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('student.profile')->with('success', 'Login Successful');
        }

        return back()->withErrors([
            'password' => 'The password is incorrect.',
        ]);
    }


    public function studentProfile()
    {
        return view("student.profile");
    }


    public function forgetPassword()
    {
        return view("student.forget-password");
    }


    public function studentLogout(Request $request)
    {
        Auth::guard("student")->logout();
        return redirect()->route("student.login");
    }
}
