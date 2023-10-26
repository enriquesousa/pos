<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\CustomerController;



/*
|--------------------------------------------------------------------------
| Rutas Básicas
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {  
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Rutas Admin
|--------------------------------------------------------------------------
|
*/

Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
Route::get('/logout', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');

Route::middleware(['auth'])->group(function () {

    // Admin
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('change.password');
    Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('update.password');

    // Rutas Employees
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('/all/employee', 'EmployeeList')->name('all.employee');
        Route::get('/employee/add', 'EmployeeAdd')->name('employee.add');
        Route::post('/employee/store', 'EmployeeStore')->name('employee.store');
        Route::get('/employee/edit/{id}', 'EmployeeEdit')->name('employee.edit');
        Route::post('/employee/update', 'EmployeeUpdate')->name('employee.update');
        Route::get('/employee/delete/{id}', 'EmployeeDelete')->name('employee.delete');    
    });

    // Rutas Customers
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/all/customer', 'CustomerList')->name('all.customer');
        Route::get('/customer/add', 'CustomerAdd')->name('customer.add');
        Route::post('/customer/store', 'CustomerStore')->name('customer.store');
        // Route::get('/employee/edit/{id}', 'EmployeeEdit')->name('employee.edit');
        // Route::post('/employee/update', 'EmployeeUpdate')->name('employee.update');
        // Route::get('/employee/delete/{id}', 'EmployeeDelete')->name('employee.delete');    
    });



});






