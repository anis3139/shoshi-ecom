<?php

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

Route::get('/', 'HomeController@HomeIndex')->middleware('loginCheck');
Route::get('/visitor', 'VisitorController@VisitorIndex')->middleware('loginCheck');


//admin category management
Route::get('/category', 'CategoryController@CategoryIndex')->middleware('loginCheck');
Route::get('/getCategoryData', 'CategoryController@CategoryData')->middleware('loginCheck');
Route::post('/categoryDelete', 'CategoryController@CategoryDelete')->middleware('loginCheck');
Route::post('/servicedetails', 'CategoryController@CategoryDetailsEdit')->middleware('loginCheck');
Route::post('/categoryUpdate', 'CategoryController@CategoryUpdate')->middleware('loginCheck');
Route::post('/addCategory', 'CategoryController@CategoryAdd')->middleware('loginCheck');








//admin panel product management
Route::get('/products', 'ProductController@ProductIndex')->middleware('loginCheck');
Route::get('/getcategory', 'ProductController@getCategory')->middleware('loginCheck');
Route::get('/getbrand', 'ProductController@getBrand')->middleware('loginCheck');
Route::post('/addProducts', 'ProductController@ProductAdd')->middleware('loginCheck');
Route::get('/getproductsdata', 'ProductController@ProductData')->middleware('loginCheck');
Route::post('/productdelete', 'ProductController@ProductDelete')->middleware('loginCheck');


Route::post('/productdetails', 'ProductController@ProductDetailEdit')->middleware('loginCheck');
Route::post('/productupdate', 'ProductController@ProductUpdate')->middleware('loginCheck');












//admin panel Brand management

Route::get('/brand', 'BrandController@BrandIndex')->middleware('loginCheck');
Route::post('/addbrand', 'BrandController@BrandAdd')->middleware('loginCheck');
Route::get('/getbranddata', 'BrandController@BrandData')->middleware('loginCheck');
Route::post('/branddelete', 'BrandController@BrandDelete')->middleware('loginCheck');
Route::post('/branddetails', 'BrandController@BrandDetailEdit')->middleware('loginCheck');
Route::post('/brandupdate', 'BrandController@BrandUpdate')->middleware('loginCheck');





//admin panel Slider management

Route::get('/slider', 'SliderController@SliderIndex')->middleware('loginCheck');
Route::post('/addslider', 'SliderController@SliderAdd')->middleware('loginCheck');
Route::get('/getsliderdata', 'SliderController@SliderData')->middleware('loginCheck');
Route::post('/sliderdelete', 'SliderController@SliderDelete')->middleware('loginCheck');
Route::post('/sliderdetails', 'SliderController@SliderDetailEdit')->middleware('loginCheck');
Route::post('/sliderupdate', 'SliderController@SliderUpdate')->middleware('loginCheck');



//admin panel Home Page Others management with social URL


Route::get('/others', 'OthersModelController@otherIndex')->middleware('loginCheck');
Route::post('/address', 'OthersModelController@addAddress')->middleware('loginCheck');
Route::post('/phone', 'OthersModelController@addPhone')->middleware('loginCheck');
Route::post('/email', 'OthersModelController@addEmail')->middleware('loginCheck');
Route::post('/title', 'OthersModelController@addTitle')->middleware('loginCheck');
Route::post('/gmap', 'OthersModelController@addGmap')->middleware('loginCheck');
Route::post('/logo', 'OthersModelController@logoAdd')->middleware('loginCheck');

//admin panel Home Page Social Link management
Route::get('/social', 'SocialController@SocialIndex')->middleware('loginCheck');
Route::post('/facebook', 'SocialController@addFacebook')->middleware('loginCheck');
Route::post('/twitter', 'SocialController@addTwitter')->middleware('loginCheck');
Route::post('/youtube', 'SocialController@addYoutube')->middleware('loginCheck');
Route::post('/instragram', 'SocialController@addInstragram')->middleware('loginCheck');
Route::post('/linkin', 'SocialController@addLinkin')->middleware('loginCheck');
Route::post('/google', 'SocialController@addGoogle')->middleware('loginCheck');







//Message panel management

Route::get('/message', 'MessageController@MessageIndex')->middleware('loginCheck');
Route::get('/getmessagedata', 'MessageController@MessageData')->middleware('loginCheck');
Route::post('/deletemessage', 'MessageController@MessageDelete')->middleware('loginCheck');



//Review panel Mangement
Route::get('/review', 'ReviewController@ReviewIndex')->middleware('loginCheck');
Route::get('/getReviewtdata', 'ReviewController@ReviewData')->middleware('loginCheck');
Route::post('/Reviewtdelete', 'ReviewController@ReviewDelete')->middleware('loginCheck');
Route::post('/Reviewtdetails', 'ReviewController@ReviewDetailsEdit')->middleware('loginCheck');
Route::post('/Reviewtupdate', 'ReviewController@ReviewUpdate')->middleware('loginCheck');
Route::post('/addReview', 'ReviewController@ReviewAdd')->middleware('loginCheck');



// Admin Panel Login Management
Route::get('/login', 'LoginController@LoginIndex');
Route::post('/onLogin', 'LoginController@onLogin');
Route::get('/logout', 'LoginController@onLogout');



// Admin Photo Gallery
Route::get('/Photo', 'PhotoController@PhotoIndex')->middleware('loginCheck');
Route::post('/imageup', 'PhotoController@uploadImage')->middleware('loginCheck');
Route::get('/PhotoJSON', 'PhotoController@PhotoJSON')->middleware('loginCheck');
