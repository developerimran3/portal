<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

/**
 *  Staff 
 */
Route::get("/", [StaffController::class, "dashboard"])->name("staff.index");

Route::get("/staff-login", [StaffController::class, "showLogin"])->name("staff.login");
Route::post("/staff-login", [StaffController::class, "login"])->name("staff.login");
Route::get("/dashboard/profile", [StaffController::class, "profile"])->name("staff.profile");

Route::get("/staff-register", [StaffController::class, "showRegister"])->name("staff.register");
Route::post("/staff-register", [StaffController::class, "register"])->name("staff.register");
Route::get("/staff-logout", [StaffController::class, "logout"])->name("staff.logout");

//------------------------------------------------------------------------------------------//
// /**
//  *  Teacher Dashboard
//  */
// Route::get("/", [TeacherController::class, "dashboard"])->name("teacher.index");
// /**
//  * Teacher Register
//  */
// Route::get("/teacher-register", [TeacherController::class, "showRegister"])->name("teacher.register");
// Route::get("/teacher-register", [TeacherController::class, "register"])->name("teacher.register");
// /**
//  * Teacher Login
//  */
// Route::get("/teacher-login", [TeacherController::class, "showLogin"])->name("teacher.login");
// Route::get("/teacher-login", [TeacherController::class, "login"])->name("teacher.login");
// //------------------------------------------------------------------------------------------//
// /**
//  *  Student Dashboard
//  */
// Route::get("/", [StudentController::class, "dashboard"])->name("student.index");
// /**
//  * Student Register
//  */
// Route::get("/student-register", [StudentController::class, "showRegister"])->name("student.register");
// Route::get("/student-register", [StudentController::class, "register"])->name("student.register");
// /**
//  * Student Login
//  */
// Route::get("/student-login", [StudentController::class, "showLogin"])->name("student.login");
// Route::get("/student-login", [StudentController::class, "login"])->name("student.login");
