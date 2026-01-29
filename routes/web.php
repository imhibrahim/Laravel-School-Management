<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\enrollController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\userController;
use App\Http\Middleware\userrole;
use App\Http\Middleware\validuser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//show register & login page
Route::get('/auth.register',[authController::class,"registerpage"])->name('registerpage');
Route::get('/auth.login',[authController::class,"loginpage"])->name('loginpage');


//user register
Route::post('/user.register',[authController::class,"registeruser"])->name('userReg');
//login
Route::post('/user.login',[authController::class,"loginuser"])->name('userlogin');
//logout
Route::get('/user.logout',[authController::class,"logout"])->name('logout');


//user page
Route::get('/user.index',[userController::class,"index"])->name("userpage")->middleware(validuser::class);

//Admin
Route::get('/admin.index',[adminController::class,"index"])->name("adminpage")->middleware(userrole::class);


//all users
Route::get('/admin.alluser',[adminController::class,"getuser"])->name("alluser")->middleware(userrole::class);

//user Delete
Route::get('/admin.userdel/{id}',[adminController::class,"deleteUser"])->name("userdel")->middleware(userrole::class);

//Courses
Route::get('admin/insertcourse',[courseController::class,"insert"])->name('insertcourse');
Route::post('admin/insert',[courseController::class,"insertcourse"])->name('insert');
//fatch course
Route::get("/fatchcourse",[courseController::class,"fatch"])->name('fatchcourse');
//courde delete
Route::get("/deletecourse{id}",[courseController::class,"delete"])->name('deletecourse');

//course edit
Route::get("/editcourse{id}",[courseController::class,"edit"])->name('editcourse');
// course Update
Route::post("/updatecourse{id}",[courseController::class,"update"])->name('updatecourse');

//add teacher
Route::get('admin/insertteacher',[teacherController::class,"insert"])->name('insertTecher');
Route::post('admin/addteacher',[teacherController::class,"addteacher"])->name('addteacher');
Route::get('admin/allteacher',[teacherController::class,"fatch"])->name('fatchtecher');
Route::get('admin/deleteTeaher/{id}',[teacherController::class,"delete"])->name('deltecher');
Route::get('admin/editteacher/{id}',[teacherController::class,"edit"])->name('editTecher');
Route::post('admin/updateteacher/{id}',[teacherController::class,"update"])->name('updateTecher');



Route::get('user/coursedetail/{id}',[userController::class,"fatch"])->name('detail');

//Enroll
Route::get('/user>enroll{id}',[enrollController::class,"form"])->name('enrollform');

Route::post('/user>form',[enrollController::class,"addmission"])->name('addmission');
//
Route::get('user>history',[historyController::class,"userhistory"])->name('history');

//pdf
Route::get("/downloadpdf{id}",[pdfController::class,"pdf"])->name('pdf');