<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
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

// Route::get("hello",function(){

//     return "Route is working";
// });

// Route::get("hello/{name?}",[HelloController::class,'index']);

// Route::view("/test","test");

// page.php ? pid=4

// page.php ? page = about-us

// /create_products

// /create-prdoucts

// Route::get("/about-us",function(){
//     return "This is about us route";
// });

// Route::view("/contact","contact_us");

// Route::get("/hello",[HelloController::class,"index"]);

// Route::get("/about-us",function(){
//     return "This is about us route";
// })->name("about.us");

// Route::get("product/{category?}",function($category=null){

// return $category==null ? "List all categoris":"list $category products";
// });

// Route::get("/admin",function(){
//     return "Admin Dashboard";
// })->middleware('after','before');

Route::get("/analytic",function(){
    return "Analytic dashboard";
})->middleware('before');

Route::get("/miley",function(){
    return redirect('/analytic');
});