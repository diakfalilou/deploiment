<?php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\homeController;
    use App\Http\Controllers\formulaireController;
    use App\Http\Controllers\creation_formulaireController;


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

    Route::get('/', [homeController::class,'home']);
    Route::get('formulaire', [formulaireController::class,'view_fonction']);
    Route::post('formulaire', [formulaireController::class,'envoie_formulaire']);
    Route::post('envoie-formulaire/{id_qc}', [formulaireController::class,'envoie_formulaire']);

    //CREATION DE FORMULAIRE
    Route::get('add-formulaire', [creation_formulaireController::class,'view_creation'])->name('add-formulaire');
    Route::post('add-formulaire', [creation_formulaireController::class,'creation_formulaire']);

