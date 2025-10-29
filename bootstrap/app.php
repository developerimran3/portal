<?php

use App\Http\Middleware\StaffIsLoggin;
use App\Http\Middleware\StaffIsLogout;
use App\Http\Middleware\StudentIsLogin;
use App\Http\Middleware\StudentIsLogout;
use App\Http\Middleware\TeacherIsLogin;
use App\Http\Middleware\TeacherIsLogout;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([


            'staff-login'  => StaffIsLoggin::class,
            'staff-logout' => StaffIsLogout::class,

            'teacher-login'  => TeacherIsLogin::class,
            'teacher-logout' => TeacherIsLogout::class,

            'student-login'  => StudentIsLogin::class,
            'student-logout' => StudentIsLogout::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
