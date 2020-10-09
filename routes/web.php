<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::get('/', function () {
    return view('frontend.home.index');
});
Route::get("advertisement",'FrontEnd\HomeController@allProduct')->name("allProduct");

Route::get("single-order/{id}",'FrontEnd\HomeController@adSingle')->name("listings");

Route::get("single-product/{id}",'FrontEnd\HomeController@adProduct')->name("addproduct");



Route::get("/view",'FrontEnd\PostAdController@PostAd')->name("post-view")->middleware('auth');

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get("/",'FrontEnd\HomeController@index')->name("home-view");
  Route::post("/comments",'FrontEnd\CommentFrontController@storeComment')->name("add_comment");


  Route::post("/contactus",'FrontEnd\HomeController@postContact')->name("contactus");

  Route::get("/about",'FrontEnd\HomeController@about')->name("about");
  Route::get("/contact",'FrontEnd\HomeController@contact')->name("contact");
  Route::get("/blog",'FrontEnd\HomeController@blog')->name("blog");
  Route::resource('front-post' , 'FrontEnd\PostController');



  Route::post('postnewslatteremail' , 'FrontEnd\NewsletterController@create')->name('post.email');



Route::group([
    "namespace" => "Auth",
    "prefix" => "admin"
],function() {
    Route::get("login", "AdminLoginController@showLoginForm")->name("admin.show_login");
    Route::post("login", "AdminLoginController@login")->name("admin.do_login");
    Route::post("logout", "AdminLoginController@logout")->name("admin.logout");

});


Route::post("/order",'FrontEnd\StoreOrderController@store')->name("x5")->middleware('auth');



Route::group([
    "prefix" => "admin",
    "middleware" => [
    "assign.guard:admin,admin/login"
    ],
], function() {
    Route::get("/dashboard", "AdminController@index")->name("dashboard");

    Route::get("/just-for-admins", function(){
        return "just for admins";
    })->middleware("role:administrator");
    Route::get("/moderate", function(){
        return "moderate";
    })->middleware("role:administrator|moderator");

    Route::resource("categories",'Admin\CategoryController');
    Route::resource("comments",'Admin\CommentController');
    Route::resource("about",'Admin\AboutController');
    Route::resource("post",'Admin\PostController');
    Route::get("post/delete/{id}",'Admin\PostController@destroy')->name('post.delete');
    Route::resource('products' , 'Admin\ProductController');
    Route::get("contact_me",'Admin\ContactMeController@index')->name('contactme');
    Route::resource("contact_",'Admin\ContactMeController');

    Route::resource("testimonial",'Admin\TestimonialController');
    Route::get("testimonial",'Admin\TestimonialController@index')->name('x1');

    Route::get("post/edit/{id}",'Admin\PostController@edit');
    Route::post("post/edit/{id}",'Admin\PostController@update');

    Route::post("product",'Admin\ProductController@store')->name('post-product');

    Route::get("/order","Admin\OrderController@index")->name('order');

    Route::get("/order/{id}/delete","Admin\OrderController@destroy")->name('delete-order');
    Route::get('/order-done/{id}','Admin\OrderController@done')->name('order.done');
    Route::get('/order-pending/{id}','Admin\OrderController@pending')->name('order.pending');
    Route::get('/order-cancel/{id}','Admin\OrderController@cancel')->name('order.cancel');
    Route::get('/order_show/{id}','Admin\OrderController@show')->name('orders.show');

    Route::get('/order_status/approve/{id}','Admin\OrderController@approve')->name('order.approve');
    Route::get('/order_status/{id}','Admin\OrderController@cancel')->name('order.cancel');


Route::get("settings",'Admin\SettingController@setting')->name('settings');
Route::post("settings",'Admin\SettingController@store')->name('post-settings');


Route::get("/change-password",'Admin\UserController@changePassword')->name("change-password");
Route::put("/change-password",'Admin\UserController@postChangePassword')->name("post-change-password");

});

