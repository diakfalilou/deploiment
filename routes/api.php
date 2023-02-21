<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formulaireController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('formulaire', [formulaireController::class,'formulaire']);
Route::get('envoie-formulaire', [formulaireController::class,'envoie_formulaire']);
Route::get('reponse-formulaire', [formulaireController::class,'formulaire_reponse']);
Route::get('api-questionnaire', [formulaireController::class,'api_questionnaire_cadre']);



