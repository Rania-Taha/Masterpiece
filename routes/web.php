<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ClinicServiceController;
use App\Http\Controllers\ClinicVetController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WorkingHoursController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home.index');
// });


// -------------- Auth Breeze ------------//
Route::get('/dashboard', function () {
    return view('Admin.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/provider_dashboard', function () {
    return view('provider.dashboard');
})->middleware(['auth', 'provider'])->name('provider_dashboard');



route::get('/', [HomeController::class,'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// --------------- Resources ------------------------ //
Route::resource("/category", CategoryController::class);
Route::resource("/clinic", ClinicController::class);
Route::resource("/clinicService", ClinicServiceController::class);
Route::resource("/clinicVet", ClinicVetController::class);
Route::resource("/blog", BlogController::class);
Route::resource("/workHours", WorkingHoursController::class);
Route::resource("/user", UserController::class);
Route::resource("/schedule", ScheduleController::class);
Route::resource("/review", ReviewController::class);
Route::resource("/book", BookingController::class);

Route::get('/admin_profile', [AdminProfileController::class, 'index'])->name('admin_profile');
// Route::get('/editprofile', [AdminProfileController::class, 'edit'])->name('editprofile');
Route::post('/editprofile', [AdminProfileController::class, 'edit'])->name('editprofile');








// ------------------ PAGES -------------------//

Route::get('/about', function () {return view('frontend.about.about');})->name('about');
Route::get('/contact', function () {return view('frontend.contact.index');})->name('contact');
// Route::get('/blog_', function () {return view('frontend.blogs.blogs');})->name('blog_');
// Route::get('/clinics', function () {return view('frontend.clinics.clinics');})->name('clinics');
Route::get('/ask_a_vet', function () {return view('frontend.ask_a_vet.ask_a_vet');})->name('ask_a_vet');


//Clinics page
route::get('/clinic_', [ClinicController::class,'show'])->name('clinics');
route::get('/single_clinic/{id}', [ClinicController::class,'show1'])->name('single_clinic');
route::get('/blog_website', [BlogController::class,'show1'])->name('blog_website');
route::get('/single_blog/{id}', [BlogController::class,'show2'])->name('single_blog');


Route::post('/bookings', [BookingController::class,'store'])->name('bookings.store'); 

// Route::middleware(['auth.booking'])->group(function () {
//     Route::post('/bookings', 'BookingController@store')->name('bookings.store');
// });










