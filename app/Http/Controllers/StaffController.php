<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function staffDashboard()
    {
        return view("account.dashboard");
    }

    public function showRegister()
    {
        return view("staff.register");
    }

    public function staffRegister(Request $request)
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

    public function staffLogin(Request $request)
    {
        $credentials =  $request->validate([
            'email'    => 'required|email|exists:staff,email',
            'password' => 'required',
        ]);

        if (Auth::guard('staff')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('staff.dashboard')->with('success', 'Login Successful');
        }

        return back()->withErrors([
            'password' => 'The password is incorrect.',
        ]);
    }


    public function staffProfile()
    {
        return view("account.profile");
    }
    public function account()
    {
        return view("account.dashboard");
    }


    public function forgetPassword()
    {
        return view("staff.forget-password");
    }


    public function staffLogout(Request $request)
    {
        Auth::guard("staff")->logout();
        return redirect()->route("staff.login");
    }
}
