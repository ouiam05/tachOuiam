<?php

use App\Http\Controllers\A;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\FacultesController;
use App\Http\Controllers\FiliereController;
use App\Models\Filiere;
use App\Models\universite;
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




Route::get("/entreprises",[EntrepriseController::class,'Index']);
Route::get("/deleteEnstrprise/{codeEntr}",[EntrepriseController::class,'Remove']);
Route::get("/editEntreprise",function(){return view('editEntreprise');});
Route::post("/saveEntreprise",[EntrepriseController::class,'Save']);
Route::get("/editEntreprise/{codeEntr}",[EntrepriseController::class,"Show"]);
Route::delete("/deleteSelectedEntreprise",[EntrepriseController::class,"RemoveSelected"]);
Route::put("/activeSelectedEntreprise",[EntrepriseController::class,"ActiveSelected"]);
Route::put("/desactiveSelectedEntreprise",[EntrepriseController::class,"DesctiveSelected"]);



Route::get("/applications",[ApplicationController::class,'Index']);
Route::get("/deleteApplication/{codeApp}",[ApplicationController::class,'Remove']);
Route::get("/editApplication",function(){return view('editApplication');});
Route::post("/saveApplication",[ApplicationController::class,'Save']);
Route::get("/editApplication/{codeApp}",[ApplicationController::class,"Show"]);
Route::delete("/deleteSelectedApplication",[ApplicationController::class,"RemoveSelected"]);
Route::put("/activeSelectedApplication",[ApplicationController::class,"ActiveSelected"]);
Route::put("/desactiveSelectedApplication",[ApplicationController::class,"DesctiveSelected"]);

Route::get("/Facultes",[FacultesController::class,'Index']);
Route::get("/deleteFaculte/{codeFac}",[FacultesController::class,'Remove']);
Route::get("/editFaculte",function(){
    $unv=universite::all();
    return view('editFaculte',['unv'=>$unv]);});

Route::post("/saveFacultes",[FacultesController::class,'Save']);
Route::get("/editFaculte/{codeFac}",[FacultesController::class,"Show"]);
Route::delete("/deleteSelectedFaculte",[FacultesController::class,"RemoveSelected"]);
Route::put("/activeSelectedFaculte",[FacultesController::class,"ActiveSelected"]);
Route::put("/desactiveSelectedFaculte",[FacultesController::class,"DesctiveSelected"]);
