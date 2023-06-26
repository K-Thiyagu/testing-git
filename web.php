<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;

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
    //  home.page
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/Create',[StudentsController::class,'home']);
Route::post('createPage',[StudentsController::class,'insert']);
       //show page
Route::get('/Show', function () {
    return view('Show');
});



   //Create page
Route::get('/Create', function () {
    return view('Create');
});

  //Edit Page
Route::get('/Edit', function () {
    return view('Edit');
});

      //Delete page
Route::get('/Delete', function () {
    return view('Delete');
});


