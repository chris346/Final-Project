<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect("/home");
});
//HOME ROUTES
Route::get('/home', "homeController@getHome");
Route::get('/newNotice', "homeController@addNotice");
Route::post('/newNotice', "homeController@save");
Route::get('/editNotice/{id}/edit',	"homeController@edit");
Route::post('/editNotice/{id}/edit', "homeController@postEdit");



//STUDENT ROUTES
Route::get('/students', "StudentsController@getStudents");
Route::get('student/checkIn', 'StudentsController@checkIn');
Route::get('/student/{id}', "StudentsController@getStudentDetails");
// Route::get('/newStudent', "StudentsController@addStudent");
// Route::post('/newStudent',	"StudentsController@save");
Route::get('/editStudent/{id}/edit',"StudentsController@edit");
Route::post('/editStudent/{id}/edit', "StudentsController@postEdit");
Route::get('student/checkIn', "StudentsController@checkIn");
Route::get('student/checkOut', "StudentsController@checkOut");

//API
Route::post('/api/notice/delete/{id}', "homeController@delete");
Route::get('/api/student/delete/{id}', "StudentsController@delete");

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




// Route::get('/home', function () {
//      return view('home');
//  });

// Route::get('/students', function () {
//     return view('students');
// });

// Route::get('/tournaments', function () {
//     return view('tournaments');
// });

// Route::get('/checkIn', function () {
//     return view('checkIn');
// });

 Route::get('/aboutUs', function () {
     return view('aboutUs');
 });

 Route::get('/gallery', function () {
     return view('gallery');
 });

 Route::get('/admin', function () {
     return view('admin');
 });

 Route::get('/contact', function () {
     return view('contact');
 }); 

 Route::get('/test', function () {
     return view('test');
 });
 Route::get('/pictures', function () {
     return view('pictures');
 }); 
 Route::get('/comp', function () {
     return view('comp');
 }); 




// Route::get('/login', function () {
//     return view('login');
// });

