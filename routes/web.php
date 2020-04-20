<?php

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

Route::get('motor/{jenis}', function ($jenis) {
    return 'Motor dengan jenis : '.$jenis;
});

Route::get("/pintu-masuk", function(){
 return "Selamat datang di pintu masuk";
});

Route::get('book','BookController@index');

Route::get('book/{judul}','BookController@viewJudul');

Route::get("/products/{product_id?}", "ProductController@show");

Route::get("/products/list", "ProductController@list");

Route::get("/products/display", "ProductController@showAll");

Route::post("/products/create", "ProductController@create");

Route::post("/products/save", "ProductController@saveNew");

Route::put("/products/{id}", "ProductController@update");

Route::resource("categories", "CategoryController");

Route::get("/products/list", "ProductController@list")->name("products");

Route::group(["prefix"=>"/products"], function(){
 Route::get("/all", "ProductController@all");
 Route::get("/bag", "ProductController@bag");
 Route::get("/latest", "ProductController@latest");
 Route::get("/discounts", "ProductController@discounts");
});

Route::group(["prefix"=>"admin", "middleware"=>"mustAdmin"], function(){
 Route::get("/dashboard", "DashboardController@index");
 Route::get("/orders", "DashboardController@index");
 // definisi route lainnya di sini
});

Route::view("/path", "nama.view");

Route::get("show-all-items", "ItemController@showAllItems");

Route::any("/products/{id}", "ProductController@action");

Route::get("users/{user_id}/comments/{comment_id}","UserController@showComment");

Route::group(["prefix" => "latihan"], function(){
 Route::get("/kategori/all", "CategoryController@index");
 Route::get("/kategori/search", "CategoryController@search");
 Route::get("/kategori/{id}/delete", "CategoryController@delete");
 Route::get("/kategori/{id}/restore", "CategoryController@restore");
Route::get("/kategori/{id}/permanent-delete",
"CategoryController@permanentDelete");
});