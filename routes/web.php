<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get("/", function () {
    return view("home");
});

/**
 *  Staff 
 */
Route::get("/dashboard/staff", [StaffController::class, "staffDashboard"])->name("staff.index")->middleware("staff-login");

Route::get("/staff-login", [StaffController::class, "showLogin"])->name("staff.login")->middleware("staff-logout");
Route::post("/staff-login", [StaffController::class, "staffLogin"])->name("staff.login");
Route::get("/dashboard/staff-profile", [StaffController::class, "staffProfile"])->name("staff.profile")->middleware("staff-login");

Route::get("/staff-register", [StaffController::class, "showRegister"])->name("staff.register")->middleware("staff-logout");
Route::post("/staff-register", [StaffController::class, "staffRegister"])->name("staff.register");
Route::get("/dashboard/staff-logout", [StaffController::class, "staffLogout"])->name("staff.logout")->middleware("staff-login");

//------------------------------------------------------------------------------------------//
/**
 *  Teacher Dashboard
 */
Route::get("/dashboard/teacher", [TeacherController::class, "teacherDashboard"])->name("teacher.index");

Route::get("/teacher-login", [TeacherController::class, "showLogin"])->name("teacher.login")->middleware("teacher-logout");
Route::post("/teacher-login", [TeacherController::class, "teacherLogin"])->name("teacher.login");
Route::get("/dashboard/teacher-profile", [TeacherController::class, "teacherProfile"])->name("teacher.profile")->middleware("teacher-login");
Route::get("/dashboard/student-all", [TeacherController::class, "studentAll"])->name("student.all");

Route::get("/teacher-register", [TeacherController::class, "showRegister"])->name("teacher.register")->middleware("teacher-logout");
Route::post("/teacher-register", [TeacherController::class, "teacherRegister"])->name("teacher.register");
Route::get("/dashboard/teacher-logout", [TeacherController::class, "teacherLogout"])->name("teacher.logout");
//------------------------------------------------------------------------------------------//
/**
 *  Student Dashboard
 */
Route::get("/dashboard/student", [StudentController::class, "studentDashboard"])->name("student.index");

Route::get("/student-login", [StudentController::class, "showLogin"])->name("student.login")->middleware("student-logout");
Route::post("/student-login", [StudentController::class, "studentLogin"])->name("student.login");
Route::get("/dashboard/student-profile", [StudentController::class, "studentProfile"])->name("student.profile")->middleware("student-login");

Route::get("/student-register", [StudentController::class, "showRegister"])->name("student.register")->middleware("student-logout");
Route::post("/student-register", [StudentController::class, "studentRegister"])->name("student.register");
Route::get("/dashboard/student-logout", [StudentController::class, "studentLogout"])->name("student.logout");
