<<<<<<< HEAD
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\USersControllers;
use App\Http\Controllers\HtmlForm;

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

Route::get('/', function () { // / is url
    return view('welcome'); //this is where to show which page should be ie index page
});


 // url for hello
// Route:: get('/hello',function(){
//     return view('hello');
// });
// simple url and page name
Route::view("hello",'hello');

//url for contact
// Route:: get('/contact',function(){
//     return view('contact');
// });


// simple url ()1st and page(2nd) name
Route::view("contact",'contact');

//name is define in the url
Route::get('/user/{name}', function ($name) { // / is url
    //echo $name;
    return view('name',['name'=>$name]); //this is where to show which page should be index
});

// url from Controllers
Route::get("yahya/{user}",[Users::class,'index']);

Route::get("user1",[UsersControllers::class,'viewLoad']);

// get method

// Route::post("htmlform",[HtmlForm::class,'getData']);
// Route::view("login","htmlform");



Route::view("hello","hello");
Route::view("user","user");
Route::view("htmlform","htmlform");

