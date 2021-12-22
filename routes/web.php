<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ConsultantController;
use App\Http\Controllers\Admin\LocationController;

            //  Site
use App\Http\Controllers\Site\ClientSiteController;
use App\Http\Controllers\Site\PageSiteController;
use App\Http\Controllers\Site\ServiceSiteController;
use App\Http\Controllers\Site\ConsultanstSiteController;
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
     Route::resource('log', LogController::class)->middleware('role:log_all');
    Route::resource('notifications', NotificationsController::class)->middleware('role:notifications_all,notifications_add');
    Route::resource('groups', GroupController::class)->middleware('role:groups_all,groups_add,groups_edit,groups_delete');
    Route::resource('admins', AdminsController::class)->middleware('role:admins_all,admins_add,admins_edit,admins_delete');
    Route::resource('users', UserController::class)->middleware('role:users_all,users_add,users_edit,users_delete');
    Route::resource('slider', SliderController::class)->middleware('role:slider_all,slider_add,slider_edit,slider_delete');
   Route::resource('pages', PageController::class)->middleware('role:pages_all,pages_add,pages_edit,pages_delete');
   Route::resource('services', ServiceController::class)->middleware('role:services_all,services_add,services_edit,services_delete');
   Route::resource('teams', TeamController::class)->middleware('role:teams_all,teams_add,teams_edit,teams_delete');
   Route::resource('clients', ClientController::class)->middleware('role:clients_all,clients_add,clients_edit,clients_delete');
   Route::resource('contact', ContactController::class)->middleware('role:contact_all,contact_edit,contact_delete');
   Route::resource('consultant', ConsultantController::class)->middleware('role:consultant_all,consultant_edit,consultant_delete');
   Route::resource('gallery', GalleryController::class)->middleware('role:gallery_all,gallery_add,gallery_edit,gallery_delete');
   Route::resource('photo', PhotoController::class)->middleware('role:photo_all,photo_add,photo_edit,photo_delete');
//    Route::resource('locations', LocationController::class)->middleware('role:locations_all,locations_add,locations_edit,locations_delete');


   Route::post('delete_all/{type}', [AdminController::class, 'delete_all'])->middleware('role:groups_delete
    ,services_delete,clients_delete,teams_delete,slider_delete,users_delete');
   
    

    Route::get('edit_active/{type}/{id}', [AdminController::class, 'edit_active']);
    Route::get('logout', [AdminController::class, 'logout']);
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/print', [AdminController::class, 'index_print']);
});


  


Route::get('lang', [HomeController::class, 'language']);
Route::get('/', [HomeController::class, 'index']);


Route::get('test', function () {
})->name('test');

Route::get('get-clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});


// site route

Route::get('/about', [PageSiteController::class, 'about'])->name('about');
Route::get('/mission', [PageSiteController::class, 'mission'])->name('mission');
Route::get('/chairman', [PageSiteController::class, 'chairman'])->name('chairman');
Route::get('/services', [ServiceSiteController::class, 'services'])->name('services');
Route::get('/servicedetails/{id}', [ServiceSiteController::class, 'servicedetails'])->name('servicedetails');
Route::get('/clients', [ClientSiteController::class, 'clients'])->name('clients');
Route::get('/teams', [TeamSiteController::class, 'teams'])->name('teams');
Route::get('/teamdetails/{id}', [TeamSiteController::class, 'teamdetails'])->name('teamdetails');
Route::get('/contacts', [ContactSiteController::class, 'contacts'])->name('contacts');
Route::post('/storecontact', [ContactSiteController::class, 'storecontact'])->name('storecontact');
Route::get('/consultants', [ConsultanstSiteController::class, 'consultants'])->name('consultants');
Route::post('/storeconsultant', [ConsultanstSiteController::class, 'storeconsultant'])->name('storeconsultant');
Route::get('/facebook', [SocialMediaSiteController::class, 'facebook'])->name('facebook');
Route::get('404', [HomeController::class, 'error_page']);
// ->missing(fn($request) => response() -> view('site.errors.not_found'));