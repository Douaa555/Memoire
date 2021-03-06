<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

////welcome
Route::get('/', function(){ return view('welcome');});

////login
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){ return view('dashboard');})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/redirects','HomeController@index');

////home
Route::get('/admin/home', function(){ return view('admin.dashboard');})->name('/admin/home');
Route::get('/user/home', function(){ return view('dashboard');})->name('/user/home');

////admin

//admin/navbar
Route::get('/admin/calendar', "ReservationController@adminCalendar")->name('/admin/calendar');
Route::get('/admin/profile', function(){ return view('admin.profile.show');})->name('/admin/profile');
Route::get('/admin/showReser',"ReservationController@showReserAdmin");
Route::get('/admin/email', "MessageController@emails");
Route::get('addRoom', function(){ return view('admin.mngRooms.addRoom');})->name('addRoom');
Route::get('/admin/notifications', function(){ return view('admin.notifications');})->name('/admin/notifications');

//admin/rooms
Route::get('/store',"RoomController@store");
Route::get('/showList',"RoomController@showList");
Route::post('/update/{id}', "RoomController@update");
Route::get('/edit/{id}', "RoomController@edit");
Route::get('/destroy/{id}', "RoomController@destroy");

//admin/reservations
Route::get('/user/showNames',"ReservationController@showNamesUser");
Route::get('/admin/showNames',"ReservationController@showNamesAdmin");
Route::get('/admin/editR/{id}',"ReservationController@editAdmin");

//admin/contact
Route::get('/admin/sendedEmail', "MessageController@sendEmail");


////user

//user/navbar
Route::get('calendar', "ReservationController@userCalendar")->name('calendar');
Route::get('/user/showReser',"ReservationController@showReserUser");
Route::get('/user/email', "MessageController@emailsUser");
Route::get('/user/notifications', function(){ return view('notifications');})->name('/user/notifications');

//user/reservation
Route::get('/storeR',"ReservationController@store");
Route::get('/user/editR/{id}',"ReservationController@editUser");
Route::get('/updateR/{id}',"ReservationController@update");
Route::get('/destroyR/{id}', "ReservationController@destroy");


//user/contact
Route::get('/user/sendedEmail', "MessageController@sendEmailUser");