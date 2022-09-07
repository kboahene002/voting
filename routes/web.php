<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContestantController;
use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard' , [\App\Http\Controllers\DashboardController::class , 'show_dashboard'])->middleware(['auth'])->name('dashboard');

route::group([],function(){
    //category
    Route::resource('category' , CategoryController::class );
    Route::get('cat/search' , [CategoryController::class , 'search']);
    Route::get('cat/show' , [CategoryController::class , 'showCat'])->name('cat_show');
    Route::get('checkin/{id}' ,[CategoryController::class , 'checkin']);


    //contestant
    Route::post('contestant/{id}' , [ContestantController::class , 'insertContestant']);
    Route::put('contestant/update/{id}' , [ContestantController::class , 'updateContestant']);
    Route::delete('contestant/delete/{id}' , [ContestantController::class , "deleteContestant"]);


    //student
    Route::post('insert/student', [StudentsController::class , 'addStudents']);

});







//trial routes
//{GET ALL PARTICIPANTS OF A CATEGORY}
Route::get('cat/participant/{id}' , [CategoryController::class , 'getAllParticipants']);


Route::get('new' , [\App\Http\Controllers\VotingController::class , 'ShowContestantByCategory']);


require __DIR__.'/auth.php';
