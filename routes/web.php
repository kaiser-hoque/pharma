<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\CustomerController as customer;
use App\Http\Controllers\Backend\CategoryController as category;
use App\Http\Controllers\Backend\DoseController as dose;
use App\Http\Controllers\Backend\CompaniesController as companies;


// use App\Models\MedicineCategory;

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

Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');

Route::middleware(['checkauth'])->prefix('admin')->group(function(){
    Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
});
Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::resource('customer', customer::class);
    Route::resource('category', Category::class);
    Route::resource('dose', dose::class);
    Route::resource('companies',companies::class);


    Route::resource('medicineCategory', MedicineCategory::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
    // Route::get('/customers', [Customer::class,'index'])->name('customer');
});

// Route::get('/profile', function () {
//     return view('backend.user.userprofile')->name('profile');
// });
// Route::view('backend/customer/index', 'backend.customer.index');

