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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/addManager', function () {
    return view('admin.addManager');
});

Route::get('/managerList', function () {
    return view('admin.managerList');
});

Route::get('/editManager', function () {
    return view('admin.editManager');
});

Route::get('/createEvent', function () {
    return view('admin.createEvent');
});

Route::get('/removedEvents', function () {
    return view('admin.removedEvents');
});

Route::get('/managerEvents', function () {
    return view('admin.managerEvents');
});

Route::get('/donorList', function () {
    return view('admin.donorList');
});

Route::get('/donorDetails', function () {
    return view('admin.donorDetails');
});

Route::get('/eventDetails', function () {
    return view('admin.eventDetails');
});

Route::get('/approvalEventList', function () {
    return view('admin.waitingEvents');
});

Route::get('/waitedEventDetails', function () {
    return view('admin.waitedEventDetails');
});

Route::get('/donorYearlyReport', function () {
    return view('admin.donorYearlyReport');
});

Route::get('/donorMonthlyReport', function () {
    return view('admin.donorMonthlyReport');
});

Route::get('/organizerList', function () {
    return view('admin.organizerList');
});

Route::get('/organizerYearlyReport', function () {
    return view('admin.organizerYearlyReport');
});

Route::get('/organizerMonthlyReport', function () {
    return view('admin.organizerMonthlyReport');
});

Route::get('/userProfile', function () {
    return view('admin.userProfile');
});

Route::get('/eventReport', function () {
    return view('admin.eventReport');
});

Route::get('/noDonationList', function () {
    return view('admin.noDonationList');
});

Route::get('/transaction', function () {
    return view('admin.transaction');
});
