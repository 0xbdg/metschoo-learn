<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('teacher.home');
});

Route::get('admin/login/', function(){
    return view("admin.login");
});

Route::get('admin/dashboard/', function(){
    return view("admin.dashboard");
});

Route::get('student/home/', function(){
    return view("student.home");
});

Route::get('student/class/test', function(){
    return view("student.class");
});
