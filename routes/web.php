<?php

use Illuminate\Support\Facades\Route;

// controller
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceTextController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsCommentController;
use App\Http\Controllers\Oasis_landing_page;

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

// guest route
Route::get('/', [MainController::class, 'index'])->middleware('guest');
Route::get('/About-us', [MainController::class, 'about'])->middleware('guest');

Route::get('/Service', [MainController::class, 'service'])->middleware('guest');

Route::get('/Our-Service/Ship-services', [MainController::class, 'service_single_ship_service'])->middleware('guest');
Route::get('/Our-Service/Ship-Chandlers', [MainController::class, 'service_single_ship_chandlers'])->middleware('guest');
Route::get('/Our-Service/Warehousing-and-Logistic', [MainController::class, 'service_single_warehouse_logistic'])->middleware('guest');

Route::get('/Our-Service/{service}', [MainController::class, 'services_single'])->middleware('guest');

Route::get('/News-&-Article', [MainController::class, 'news'])->middleware('guest');
Route::get('/News-&-Article/category', [MainController::class, 'news_category'])->middleware('guest');
Route::post('/News-&-Article/komen/{news}', [NewsCommentController::class, 'store'])->middleware('guest');
Route::get('/News-&-Article/{news}', [MainController::class, 'news_single'])->middleware('guest')->name('news.show');


Route::get('/Career', [MainController::class, 'career'])->middleware('guest');
Route::get('/Apply-job/{career}', [MainController::class, 'career_apply'])->middleware('guest');
Route::post('/Apply-job', [MainController::class, 'career_store'])->middleware('guest');

Route::get('/Our-project', [mainController::class, 'projects'])->middleware('guest');

Route::get('/Contact-us', [mainController::class, 'contact_us'])->middleware('guest');
Route::post('/Contact-us/submit', [mainController::class, 'contact_store'])->middleware('guest');

Route::get('/Galleries', [mainController::class, 'gallery'])->middleware('guest');


// auth route
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/Admin', [AuthController::class, 'admin'])->middleware('auth');
Route::post('/login', [AuthController::class, 'auth']);
Route::post('/Sign-out', [AuthController::class, 'logout']);

// admin Route

Route::resource('/About', AboutController::class)->middleware('auth');
Route::resource('/Slider', SliderController::class)->middleware('auth');
Route::resource('/Page', PageController::class)->middleware('auth');

Route::resource('/Service-text', ServiceTextController::class)->middleware('auth');
Route::put('/Service-why/{id}', [ServiceTextController::class, 'update_text_why'])->middleware('auth');

Route::resource('/User', UserController::class)->middleware('auth');

Route::get('/News-and-article', [NewsController::class, 'index'])->middleware('auth');
Route::get('/News-and-article/{news}', [NewsController::class, 'show'])->middleware('auth');
Route::get('/News-and-article/{news}/edit', [NewsController::class, 'edit'])->middleware('auth');
Route::post('/News-and-article', [NewsController::class, 'store'])->middleware('auth');
Route::put('/News-and-article/{id}', [NewsController::class, 'update'])->middleware('auth');
Route::delete('/News-and-article/{news}', [NewsController::class, 'destroy'])->middleware('auth');

Route::get('/News-category', [NewsCategoryController::class, 'index'])->middleware('auth');
Route::post('/News-category', [NewsCategoryController::class, 'store'])->middleware('auth');


Route::get('/Career-management', [CareerController::class, 'index'])->middleware('auth');
Route::get('/Career-management/{career}', [CareerController::class, 'show'])->middleware('auth');
Route::get('/Career-management/{career}/edit', [CareerController::class, 'edit'])->middleware('auth');
Route::put('/Career-management/{career}', [CareerController::class, 'update'])->middleware('auth');
Route::post('/Career-management', [CareerController::class, 'store'])->middleware('auth');
Route::delete('/Career-management/{career}', [CareerController::class, 'destroy'])->middleware('auth');

Route::get('/Applicants-management', [ApplicantController::class, 'index'])->middleware('auth');
Route::get('/Applicants-management/{applicant}/cv', [ApplicantController::class, 'showcv'])->middleware('auth')->name('applicants.cv');
Route::get('/Applicants-management/{applicant}', [ApplicantController::class, 'show'])->middleware('auth');
Route::delete('/Applicants-management/{applicant}', [ApplicantController::class, 'destroy'])->middleware('auth');


Route::get('/Service-management', [ServiceController::class, 'index'])->middleware('auth');
Route::get('/Service-management/{service}/edit', [ServiceController::class, 'edit'])->middleware('auth');
Route::post('/Service-management', [ServiceController::class, 'store'])->middleware('auth');
Route::put('/Service-management/{service}', [ServiceController::class, 'update'])->middleware('auth');
Route::delete('/Service-management/{service}', [ServiceController::class, 'destroy'])->middleware('auth');

Route::get('/Project-management', [ProjectController::class, 'index'])->middleware('auth');

Route::get('/Clients', [ClientController::class, 'index'])->middleware('auth');
Route::post('/Clients', [ClientController::class, 'store'])->middleware('auth');
Route::delete('/Clients/{client}', [ClientController::class, 'destroy'])->middleware('auth');

Route::get('/Gallery', [GalleryController::class, 'index'])->middleware('auth');
Route::get('/Gallery/List', [GalleryController::class, 'show'])->middleware('auth');
Route::post('/Gallery', [GalleryController::class, 'store'])->middleware('auth');
Route::delete('/Gallery/{gallery}', [GalleryController::class, 'destroy'])->middleware('auth');

Route::get('/Gallery/Category', [GalleryCategoryController::class, 'index'])->middleware('auth');
Route::post('/Gallery/Category', [GalleryCategoryController::class, 'store'])->middleware('auth');

Route::get('/Company', [CompanyController::class, 'index'])->middleware('auth');
Route::get('/Company/{company}', [CompanyController::class, 'show'])->middleware('auth');
Route::get('/Company/{company}/edit', [CompanyController::class, 'edit'])->middleware('auth');
Route::post('/Company', [CompanyController::class, 'store'])->middleware('auth');
Route::put('/Company/{company}', [CompanyController::class, 'update'])->middleware('auth');
Route::delete('/Company/{company}', [CompanyController::class, 'destroy'])->middleware('auth');

Route::get('/Ads', [AdsController::class, 'index'])->middleware('auth');
Route::get('/Ads/{ads}', [AdsController::class, 'show'])->middleware('auth');
Route::post('/Ads', [AdsController::class, 'store'])->middleware('auth');
Route::put('/Ads/{ads}', [AdsController::class, 'update'])->middleware('auth');
Route::delete('/Ads/{ads}', [AdsController::class, 'destroy'])->middleware('auth');

// landing page route subdomain
Route::get('/Oasis-Mas-Cluster', [Oasis_landing_page::class, 'index'])->middleware('guest');
Route::post('/Contact-Oasis', [mainController::class, 'contact_oasis'])->middleware('guest');
