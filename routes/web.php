<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\elController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\testoController;
use App\Http\Controllers\adminsController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\FacebookController;


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



//   PayPal Payment

Route::controller(PayPalController::class)->group(function(){
Route::get("index","index")->name("index");
Route::get("payment","payment")->name("payment");
Route::get("cancel","cancel")->name("payment.cancel");
Route::get("payment/success","success")->name("payment.success");
});









// Google Socialite

Route::controller(GoogleController::class)->group(function(){
Route::get('login','index')->name('login');
Route::get('auth/google/redirect','handleGoogleRedirect')->name('auth/google/redirect');
Route::get('auth/google/callback','handleGoogleCallback')->name('auth/google/callback');
});


// Facebook Socialite

Route::controller(FacebookController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::get('auth/facebook/redirect','handleFacebookRedirect')->name('auth/facebook/redirect');
    Route::get('auth/facebook/callback','handleFacebookCallback')->name('auth/facebook/callback');
    });









// Route::controller(elController::class)->group(function(){
//     Route::get("index","index");
// });







// Route::controller(adminsController::class)->group(function(){
//     Route::get("index","index")->name("index");
//     Route::get("form","form")->name("form");
// });


















Route::controller(usercontroller::class)->group(function(){
    Route::get("user",'index')->name("user");
    Route::get("data","data")->name("data");
    Route::post("pp","vali")->name("vali");
});


// Route::resource("test",testoController::class);











Route::get('/', function () {
    return view('welcome');
});



// Route::get("/form",function(){
//     return view("form");
// });

// Route::post("/data",function(){
//     return $_POST["password"];
// });

// Route::put("/put",function(){
//     return $_POST['name'];
// });

// Route::patch("/patch",function(){
//     return $_POST['name'];
// });

// Route::delete("/delete",function(){
//     return $_POST['name'];
// });

// Route::match(['get','post'],'/ffff',function(){
//     return "mohand";
// });


// Route::redirect("/nn","/form");
// Route::view("/welcome","form");


// Route::get("users/{name?}",function($name="nicht finded"){
//     return $name ;
// })->where('name','[A-z]+');









// Route::get('/m',function(){
//     return "
//     <form action='/post' method='post'>
// <input type='text' name='name' id=''>
// <input type='email' name='email' id=''>
// '".csrf_field()."'
// <input type='submit' value='add' id=''>
// </form>";
// });

// Route::get('/get',function(){
//     return $_GET["name"];
// });

// Route::post('/post',function(){
//     return $_POST["name"];
// });
