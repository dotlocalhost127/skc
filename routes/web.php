<?php

use App\Http\Controllers\Accounts\AccountsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ListingController;
use App\Http\Controllers\backend\Carmakecontroller;
use App\Http\Controllers\backend\CarmodelController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\frontend\indexController;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('');
});




// All user management all routes 
Route::prefix('users')->group(function () {
    Route::get('/view', [UserController::class, 'ViewUser'])->name('user.view');
    Route::get('/AddUser', [UserController::class, 'AddUser'])->name('users.AddUser');
    Route::post('/Store', [UserController::class, 'userStore'])->name('users.Store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/Update/{id}', [UserController::class, 'UsersUpdate'])->name('users.Update');
    Route::get('/Delete/{id}', [UserController::class, 'UserDelete'])->name('users.Delete');
    Route::get('/Password', [UserController::class, 'ChangePassword'])->name('users.Password');
});

//  Listing management all routes 
    Route::prefix('listings')->group(function () {
    Route::get('/view_make', [Carmakecontroller::class, 'Viewmake'])->name('listing.view_make');
    Route::get('/Add_make', [Carmakecontroller::class, 'Carmake'])->name('listing.Add_make');
    Route::post('/Store_make', [Carmakecontroller::class, 'Store_make'])->name('listing.Store_make');
    Route::get('/view_Model', [CarmodelController::class, 'ViewModel'])->name('listing.view_Model');
    Route::get('/Add_Model', [CarmodelController::class, 'Add_Model'])->name('listing.Add_Model');
    Route::post('/Store_Model', [CarmodelController::class, 'Store_Model'])->name('listing.Store_Model');
    Route::get('/View_listing', [ListingController::class, 'Viewlisting'])->name('listing.View_listing');
    Route::get('/Add_listing', [ListingController::class, 'AddListing'])->name('listing.Add_listing');
    Route::post('/listing_store', [ListingController::class, 'ListingStore'])->name('listing.listing_store');

});

// Account Department management all routes 
Route::prefix('accounts')->group(function () {
    Route::get('/view_account', [AccountsController::class, 'ViewAccounts'])->name('accounts.view_account');
    Route::get('/Add_account', [AccountsController::class, 'AddAccounts'])->name('accounts.Add_account');
    Route::post('/accounts.Store', [AccountsController::class, 'StoreAccounts'])->name('accounts.accounts.Store');


});