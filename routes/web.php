<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use Illuminate\Routing\RouteRegistrar;

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

Route::get('/',function() {
    return view('index');
});

Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/aim',[WebsiteController::class,'aim']);
Route::get('/motto',[WebsiteController::class,'motto']);
Route::get('/corevalue',[WebsiteController::class,'corevalue']);
Route::get('/pledge',[WebsiteController::class,'pledge']);
Route::get('/nccflag',[WebsiteController::class,'nccflag']);
Route::get('/nccsong',[WebsiteController::class,'nccsong']);
Route::get('/camp-rdc', [WebsiteController::class, 'campRdc']);
Route::get('/camp-atc', [WebsiteController::class, 'campAtc']);
Route::get('/camp-tsc', [WebsiteController::class, 'campTsc']);
Route::get('/camp-aac', [WebsiteController::class, 'campAac']);
Route::get('/camp-iuc', [WebsiteController::class, 'campIuc']);
Route::get('/camp-igc', [WebsiteController::class, 'campIgc']);
Route::get('/camp-blc',[WebsiteController::class,'campBlc']);
Route::get('/camp-alc',[WebsiteController::class,'campAlc']);
Route::get('/camp-yep',[WebsiteController::class,'campYEP']);
Route::get('/camp-vsc',[WebsiteController::class,'campVSC']);
Route::get('/camp-nsc',[WebsiteController::class,'campNSC']);
Route::get('/camp-nic',[WebsiteController::class,'campNIC']);
Route::get('/camp-adven',[WebsiteController::class,'campAd']);
Route::get('/bcertipdf',[WebsiteController::class,'bcert']);
Route::get('/events',[WebsiteController::class,'nccevent']);
Route::get('/achievements',[WebsiteController::class,'acheive']);
Route::get('/enrollment',[WebsiteController::class,'enroll']);
Route::get('/eligibility',[WebsiteController::class,'eligi']);
Route::get('/penpic22', [WebsiteController::class, 'penpicrep22']);
Route::get('/penpic23', [WebsiteController::class, 'penpicrep23']);
Route::get('/adminlog', [WebsiteController::class, 'adlogin']);
Route::post('/adminlog', [WebsiteController::class, 'adminlogin']);
Route::get('/dashboard', [WebsiteController::class, 'dash_board']);
Route::post('/dashboard', [WebsiteController::class, 'logout']);
Route::get('/contact-us', [WebsiteController::class, 'contactUs']);
Route::post('/contact-us', [WebsiteController::class, 'saveContactUs']);
Route::post('/enrollment', [WebsiteController::class, 'saveForm']);
Route::get('/delete/{id}',[WebsiteController::class, 'userDelete']);