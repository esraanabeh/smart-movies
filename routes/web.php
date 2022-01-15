<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\ContactController;


            //  Site
use App\Http\Controllers\Site\SiteSiteController;
use App\Http\Controllers\Site\LoginSiteController;
use App\Http\Controllers\Site\AuthSiteController;
use App\Http\Controllers\Site\PageSiteController;
use App\Http\Controllers\Site\ContactSiteController;
use App\Http\Controllers\Site\TeamSiteController;
use App\Http\Controllers\Site\SocialMediaSiteController;


use App\Http\Controllers\HomeController;

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
// admin routes
Route::get('admin/login', [AdminController::class, 'getLogin']);
Route::post('admin/login', [AdminController::class, 'postLogin']);
Route::get('admin/not_allow', [AdminController::class, 'not_allow']);

Route::group(array('prefix' => 'admin', 'middleware' => ['admin']), function () {
    Route::resource('profile', ProfileController::class);
    Route::resource('site', SiteController::class)->middleware('role:site_edit');
    Route::resource('social_media', SocialMediaController::class)->middleware('role:social_media_all,social_media_add,social_media_edit,social_media_delete');
    Route::resource('groups', GroupController::class)->middleware('role:groups_all,groups_add,groups_edit,groups_delete');
    Route::resource('admins', AdminsController::class)->middleware('role:admins_all,admins_add,admins_edit,admins_delete');
    Route::resource('users', UserController::class)->middleware('role:users_all,users_add,users_edit,users_delete');
   Route::resource('pages', PageController::class)->middleware('role:pages_all,pages_add,pages_edit,pages_delete');
   Route::resource('teams', TeamController::class)->middleware('role:teams_all,teams_add,teams_edit,teams_delete');
   Route::resource('packages', PackageController::class)->middleware('role:packages_all,packages_add,packages_edit,packages_delete');
   Route::resource('movies', MovieController::class)->middleware('role:movies_all,movies_add,movies_edit,movies_delete');
   Route::resource('contact', ContactController::class)->middleware('role:contact_all,contact_edit,contact_delete');
 
    Route::get('edit_active/{type}/{id}', [AdminController::class, 'edit_active']);
    Route::get('logout', [AdminController::class, 'logout']);
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/print', [AdminController::class, 'index_print']);
});


  


Route::get('lang', [HomeController::class, 'language']);





Route::get('get-clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});


// site route
Route::get('/', [SiteSiteController::class, 'index'])->name('index_site');
Route::get('/login', [AuthSiteController::class, 'login']);
Route::get('/site-logout', [AuthSiteController::class, 'logout'])->name('siteLogout');
Route::post('/site-login', [AuthSiteController::class, 'siteLogin'])->name('siteLogin');
Route::get('/signup', [AuthSiteController::class, 'index'])->name('index');
Route::post('/storedata', [AuthSiteController::class, 'storedata'])->name('storedata');
Route::get('/contacts', [ContactSiteController::class, 'contacts'])->name('contacts');
Route::post('/storecontact', [ContactSiteController::class, 'storecontact'])->name('storecontact');
Route::get('404', [HomeController::class, 'error_page']);
