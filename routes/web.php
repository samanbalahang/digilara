<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\counterController;
use App\Http\Controllers\admin\dashPostController;
use App\Http\Controllers\admin\dashMediaController;
use App\Http\Controllers\admin\dashPageController;
use App\Http\Controllers\admin\dashCommentController;
use App\Http\Controllers\admin\dashFormController;
use App\Http\Controllers\admin\dashShopOrderController;
use App\Http\Controllers\admin\dashShopCustomerController;
use App\Http\Controllers\admin\dashShopCouponController;
use App\Http\Controllers\admin\dashShopReportController;
use App\Http\Controllers\admin\dashShopConfigController;
use App\Http\Controllers\admin\dashShopStatusController;
use App\Http\Controllers\admin\dashBannercontroller;
use App\Http\Controllers\admin\dashFirstPageController;
use App\Http\Controllers\ThepublicController;
use App\Http\Controllers\BanersController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\NavsController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\MediasController;
use App\Http\Controllers\FirstmgnsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CalculatorController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//
//Route::get('/adm', function () {
//    return view('admin.admin');
//});
Route::get('/', [ThepublicController::class,"index"]);
Route::get('/search', [SearchController::class,"index"]);
Route::post('/search', [SearchController::class,"store"]);


Route::group(['prefix'=>'adm'], function () {
    Route::get('/', [ReportController::class,"test"]);

    Route::resource('/report',    ReportController::class);
    Route::resource('/navs',      NavsController::class);
    Route::resource('/baners',    BanersController::class);
    Route::resource('/sliders',   SlidersController::class);
    Route::resource('/prods',     ProductsController::class);
    Route::resource('/pages',     PagesController::class);
    Route::resource('/posts',     PostsController::class);
    Route::resource('/media',     MediasController::class);
    Route::resource('/firstmgns', FirstmgnsController::class);
    Route::resource('/calculator', CalculatorController::class);



});


Route::group(['prefix' => 'lara-admin'],function()
{
    //    acounter
    Route::resource('/',CounterController::class);


    //    posts
    Route::resource('/posts',dashPostController::class);
    // Route::get('/posts',['as'=>'dashposts','uses'=>'App\Http\Controllers\admin\post\dashpostController@index']);
    // Route::post('/posts/get-content-img',[dashpostController::class,"getReportImg"]);
    // Route::resource('/posts/categories',dashPostCatController::class);
    // Route::resource('/posts/tags',dashPostTagController::class);

    //    media
    Route::resource('/media',dashMediaController::class);
    Route::post('/dropMedia',[dashMediaController::class,"dropMedia"])->name('dropMedia');


    // banner
    Route::resource('/banner',dashBannercontroller::class);
    Route::post('/banner-mor-media',[dashBannercontroller::class,"bannerMorMedia"])->name('bannerMorMedia');



    
    //    pages
    Route::resource('/pages',dashPageController::class);
    Route::resource('/first-page',dashFirstPageController::class);


    //    comments
    Route::resource('/comments',dashCommentController::class);

    //    forms
    Route::resource('/forms',dashFormController::class);

    //    shop-manage
    Route::get('/shop-manage',['as'=>'shopManage.index','uses'=>'App\Http\Controllers\admin\dashShopManageController@index']);
    Route::group(['prefix' => 'shop-manage'],function() {
       Route::resource('/shop-orders',dashShopOrderController::class);
       Route::resource('/shop-customers',dashShopCustomerController::class);
       Route::resource('/shop-coupons',dashShopCouponController::class);
       Route::resource('/shop-report',dashShopReportController::class);
       Route::resource('/shop-config',dashShopConfigController::class);
       Route::resource('/shop-status',dashShopStatusController::class);
    });

});


