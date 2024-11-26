<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryProduct;
Route::get('/','App\Http\Controllers\HomeController@index'); 

Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::get('/product', function () {
    return view('pages.home');
   });
   Route::get('/product', function () {
    return view('pages.product');
   });
   Route::get('/news', function () {
    return view('pages.news');
   });
   Route::get('/contact', function () {
    return view('pages.contact');
   });
   Route::get('/admin','App\Http\Controllers\AdminController@index');
   Route::post('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
   Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
   Route::get('/logout','App\Http\Controllers\AdminController@logout');

   //Category Product
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');
Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');

//dislike
Route::get('/unactive-categoryproduct/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-categoryproduct/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');

//Brand Product
Route::get('/add-brand-product','App\Http\Controllers\BrandProduct@add_brand_product');
Route::get('/all-brand-product','App\Http\Controllers\BrandProduct@all_brand_product');
Route::post('/save-brand-product','App\Http\Controllers\BrandProduct@save_brand_product');
Route::get('/unactive-brandproduct/{brand_product_id}','App\Http\Controllers\BrandProduct@unactive_brand_product');
Route::get('/active-brandproduct/{brand_product_id}','App\Http\Controllers\BrandProduct@active_brand_product');

Route::get('/edit-brandproduct/{brand_product_id}','BrandProduct@edit_brand_product');
Route::post('/update-brandproduct/{brand_product_id}','BrandProduct@update_brand_product');
Route::get('/delete-brandproduct/{brand_product_id}','BrandProduct@delete_brand_product');