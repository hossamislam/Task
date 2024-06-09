<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\Category;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Taskcontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::get('/', [UserController::class, 'index']);

Route::get('home', [UserController::class, 'home'])->name('home');

Route::get('user', [UserController::class, 'create'])->name('user');
Route::post('userstore', [UserController::class, 'store'])->name('userstore');

Route::get('userlogout', [UserController::class, 'userlogout'])->name('userlogout');

Route::get('loginpage', [UserController::class, 'loginpage'])->name('loginpage');
Route::post('userlogin', [UserController::class, 'userlogin'])->name('userlogin');

//admin Routes

Route::get('AdminRegisterpage', [AdminController::class, 'AdminRegisterpage'])->name('AdminRegisterpage');



Route::post('AdminRegister', [AdminController::class, 'AdminRegister'])->name('AdminRegister');

Route::get('Admin_loginpage', [AdminController::class, 'Admin_loginpage'])->name('Admin_loginpage');
Route::post('Admin_login', [AdminController::class, 'Admin_login'])->name('Admin_login');
Route::get('adminLogout', [AdminController::class, 'adminLogout'])->name('adminLogout');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete');
    Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [AdminController::class, 'update'])->name('update');
    Route::get('Admin_index', [AdminController::class, 'Admin_index'])->name('Admin_index');
    Route::get('courses', [AdminController::class, 'courses'])->name('courses');
    Route::post('Add_course', [AdminController::class, 'Add_course'])->name('Add_course');
});




require __DIR__ . '/auth.php';

































































// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// Route::get('userReigster', [UserController::class, 'userReigster']);
// Route::post('userdata', [UserController::class, 'userdata'])->name('userdata');

// Route::get('userlogin', [UserController::class, 'userlogin']);
// Route::post('userinfo', [UserController::class, 'userinfo'])->name('userinfo');

// Route::post('userlogout', [UserController::class, 'userlogout'])->name('userlogout');
// Route::get('userdashboard', [UserController::class, 'userdashboard']);




// Route::get('adminloginpage', [AdminController::class, 'adminloginpage']);
// Route::post('adminlogin', [AdminController::class, 'adminlogin'])->name('adminlogin');
// Route::get('adminLogout', [AdminController::class, 'adminLogout'])->name('adminLogout');



//AJAX ROUTES
// Route::get('/', [ProjectController::class, 'index']);

// Route::resource('projects', ProjectController::class);
