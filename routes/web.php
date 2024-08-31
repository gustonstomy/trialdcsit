<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\UpcomingEventsController;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');

Route::get('/About', function () {
    return view('About');
})->name('About');

Route::get('/Events', function(){
    return view('Events');
})->name('Events');

Route::get('/TeachingStaff', function(){
    return view('TeachingStaff');
})->name('TeachingStaff');

Route::get('/NonTeachingStaff', function(){
    return view('NonTeachingStaff');
})->name('NonTeachingStaff');

Route::get('/undergraduate', function(){
    return view('undergraduate');
})->name('undergraduate');

Route::get('/postgraduate', function(){
    return view('postgraduate');
})->name('postgraduate');

Route::get('/ungradcourse', function(){
    return view('ungradcourse');
})->name('ungradcourse');

Route::get('/comcourse', function(){
    return view('comcourse');
})->name('comcourse');

Route::get('/postgraduateMphil', function(){
    return view('postgraduateMphil');
})->name('postgraduateMphil');

Route::get('/postcoursePhd', function(){
    return view('postcoursePhd');
})->name('postcoursePhd');

Route::get('/Aboutpage', [AboutPageController::class, 'show'])->name('Aboutpage.show');
Route::get('/TeachingStaff', [StaffController::class, 'teaching'])->name('TeachingStaff');
Route::get('/NonTeachingStaff', [StaffController::class, 'nonTeaching'])->name('NonTeachingStaff');
Route::get('/Events', [UpcomingEventsController::class, 'index'])->name('Events');
Route::get('/', [HomePageController::class, 'index'])->name('home.index');
// Route to show the contact form
Route::get('/contact', [MessageController::class, 'create'])->name('contact.create');

// Route to handle form submission
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');