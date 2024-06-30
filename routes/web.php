<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SpecimenController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\VialsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => ['Locale']], function () {
//     include('admin.php');
//     Route::get('/create', [HomeController::class, 'create']);
// });
Route::get('/', [HomeController::class, 'Home']);
Route::get('/appointment', [AppointmentController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services-details', [ServiceController::class, 'ServiceDetails']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Auth::routes();


Route::group(['middleware' => ['Locale', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('edit', [ProfileController::class, 'edit'])->name('edit');
        Route::post('update', [ProfileController::class, 'update'])->name('update');
    });

    // categories
    Route::resource('categories', CategoriesController::class);
    Route::post('categories/bulk/delete', [CategoriesController::class, 'bulk_delete'])->name('categories.bulk_delete');

    // vials
    Route::resource('vials', VialsController::class);
    Route::post('vials/bulk/delete', [VialsController::class, 'bulk_delete'])->name('vials.bulk_delete');

    // vials
    Route::resource('specimens', SpecimenController::class);
    Route::post('specimens/bulk/delete', [SpecimenController::class, 'bulk_delete'])->name('specimens.bulk_delete');


    // roles
    Route::resource('roles', RolesController::class);
    Route::get('get_roles', [RolesController::class, 'ajax'])->name('get_roles');
    Route::post('roles/bulk/delete', [RolesController::class, 'bulk_delete'])->name('roles.bulk_delete');

    // users
    Route::resource('users', UsersController::class);
    Route::get('get_users', [UsersController::class, 'ajax'])->name('get_users');
    Route::post('users/bulk/delete', [UsersController::class, 'bulk_delete'])->name('users.bulk_delete');

    // users
    Route::resource('tests', TestController::class);
    Route::get('get_tests', [TestController::class, 'ajax'])->name('get_tests'); // Datatable
    Route::post('tests/bulk/delete', [TestController::class, 'bulk_delete'])->name('tests.bulk_delete');


    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('index');
        Route::post('info', [SettingsController::class, 'info_submit'])->name('info_submit');
        Route::post('emails', [SettingsController::class, 'emails_submit'])->name('emails_submit');
        Route::post('reports', [SettingsController::class, 'reports_submit'])->name('reports_submit');
        Route::post('sms', [SettingsController::class, 'sms_submit'])->name('sms_submit');
        Route::post('whatsapp', [SettingsController::class, 'whatsapp_submit'])->name('whatsapp_submit');
        Route::post('api_keys', [SettingsController::class, 'api_keys_submit'])->name('api_keys_submit');
        Route::post('barcode', [SettingsController::class, 'barcode_submit'])->name('barcode_submit');
    });
});
Route::group(['middleware' => ['Locale', 'auth'], 'prefix' => 'ajax', 'as' => 'ajax.'], function () {
    Route::get('get_categories', [AjaxController::class, 'get_categories'])->name('get_categories');
    Route::get('get_vials', [AjaxController::class, 'get_vials'])->name('get_vials');
    Route::get('get_specimens', [AjaxController::class, 'get_specimens'])->name('get_specimens');
    Route::get('get_tests', [AjaxController::class, 'get_tests'])->name('get_tests');
    Route::get('tests', [AjaxController::class, 'tests'])->name('tests');
});
