<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function dashboard()
    {
        return view("staff.index");
    }

    public function showRegister()
    {
        return view("staff.register");
    }

    public function register(Request $request)
    {
        //Form Valadation
        $request->validate([
            "name"        => "required",
            "username"    => "required",
            "email"       => "required|email|unique:staff",
            "password"    => "required|confirmed",
        ]);

        //photo upload
        $photo = $this->fileUpload($request->file("photo"), "media/staff/");
        //Data Create ta Database        
        Staff::create([
            "name"     => $request->name,
            "username" => $request->username,
            "email"    => $request->email,
            "phone"    => $request->phone,
            "address"  => $request->address,
            "role"     => $request->role,
            "photo"    => $photo,
            "password" => Hash::make($request->password),
        ]);
        return back()->with("success", "Staff Data Create Successful!");
    }

    public function showLogin()
    {
        return view("staff.login");
    }

    public function login(Request $request)
    {
        $credentials =  $request->validate([
            'email'    => 'required|email|exists:staff,email',
            'password' => 'required',
        ]);



        if (Auth::guard('staff')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('staff.profile')->with('success', 'Login Successful');
        }

        return back()->withErrors([
            'password' => 'The password is incorrect.',
        ]);
    }
    // public function login(Request $request)
    // {
    //     $staff = $request->validate([
    //         "email"    => "required|email|exists:staff",
    //         "password" => "required",
    //     ]);

    //     if (Auth::guard('staff')->attempt($staff)) {
    //         return redirect()->route('staff.profile')->with('success', 'Login Success');
    //     }
    // }

    public function profile()
    {
        return view("staff.profile");
    }


    public function forgetPassword()
    {
        return view("staff.forget-password");
    }


    public function logout(Request $request)
    {
        Auth::guard("staff")->logout();
        return redirect()->route("staff.login");
    }
}
