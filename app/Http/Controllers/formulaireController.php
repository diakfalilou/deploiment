<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class formulaireController extends Controller
{


    //fonction qui renvoie la vue du formulaire
    public function view_fonction(){

        $tbl_sous_titre=DB::table('tbl_sous_titre')->get();
        $tbl_items_qc=DB::table('tbl_items_qc')->get();
        $tbl_titre=DB::table('tbl_titre')->get();
        return view('view_clients.formulaire',[
            'tbl_titre' => $tbl_titre,
            'tbl_items_qc'=>$tbl_items_qc,
            'tbl_sous_titre'=>$tbl_sous_titre
        ]);

    }

    //fonction qui renvoie les donnée en BD
    public function envoie_formulaire(Request $request){



        $tbl_titre=DB::table('tbl_titre')->get();
        $tbl_sous_titre=DB::table('tbl_sous_titre')->get();
        $tbl_items_qc=DB::table('tbl_items_qc')->get();

        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items1,'valeur'=>$request->items1,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items2,'valeur'=>$request->items2,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items3,'valeur'=>$request->items3,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items4,'valeur'=>$request->items4,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items5,'valeur'=>$request->items5,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items6,'valeur'=>$request->items6,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items7,'valeur'=>$request->items7,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items8,'valeur'=>$request->items8,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items9,'valeur'=>$request->items9,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items10,'valeur'=>$request->items10,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items11,'valeur'=>$request->items11,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items12,'valeur'=>$request->items12,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items13,'valeur'=>$request->items13,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items14,'valeur'=>$request->items14,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items15,'valeur'=>$request->items15,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items16,'valeur'=>$request->items16,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items17,'valeur'=>$request->items17,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items18,'valeur'=>$request->items18,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items19,'valeur'=>$request->items19,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre1,'id_items_qc'=>$request->qc_items20,'valeur'=>$request->items20,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre2,'id_items_qc'=>$request->qc_items21,'valeur'=>$request->items21,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre2,'id_items_qc'=>$request->qc_items22,'valeur'=>$request->items22,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre2,'id_items_qc'=>$request->qc_items23,'valeur'=>$request->items23,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre2,'id_items_qc'=>$request->qc_items24,'valeur'=>$request->items24,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre3,'id_items_qc'=>$request->qc_items25,'valeur'=>$request->items25,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre3,'id_items_qc'=>$request->qc_items26,'valeur'=>$request->items25,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre4,'id_items_qc'=>$request->qc_items27,'valeur'=>$request->items27,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre4,'id_items_qc'=>$request->qc_items28,'valeur'=>$request->items28,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre5,'id_items_qc'=>$request->qc_items29,'valeur'=>$request->items29,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>2,'id_sous_titre'=>$request->id_sous_titre5,'id_items_qc'=>$request->qc_items30,'valeur'=>$request->items30,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>3,'id_sous_titre'=>$request->id_sous_titre6,'id_items_qc'=>$request->qc_items31,'valeur'=>$request->items31,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>3,'id_sous_titre'=>$request->id_sous_titre6,'id_items_qc'=>$request->qc_items31,'valeur'=>$request->items32,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>3,'id_sous_titre'=>$request->id_sous_titre6,'id_items_qc'=>$request->qc_items31,'valeur'=>$request->items33,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>3,'id_sous_titre'=>$request->id_sous_titre6,'id_items_qc'=>$request->qc_items32,'valeur'=>$request->items34,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre7,'id_items_qc'=>$request->qc_items33,'valeur'=>$request->items35,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre7,'id_items_qc'=>$request->qc_items33,'valeur'=>$request->items36,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre7,'id_items_qc'=>$request->qc_items33,'valeur'=>$request->items37,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre7,'id_items_qc'=>$request->qc_items33,'valeur'=>$request->items38,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre7,'id_items_qc'=>$request->qc_items33,'valeur'=>$request->items39,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre7,'id_items_qc'=>$request->qc_items34,'valeur'=>$request->items40,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre8,'id_items_qc'=>$request->qc_items35,'valeur'=>$request->items41,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre8,'id_items_qc'=>$request->qc_items35,'valeur'=>$request->items42,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre8,'id_items_qc'=>$request->qc_items35,'valeur'=>$request->items43,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre8,'id_items_qc'=>$request->qc_items35,'valeur'=>$request->items44,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre8,'id_items_qc'=>$request->qc_items36,'valeur'=>$request->items45,'id_user'=>4893]);
        $insert = DB::table('tbl_reponse_qc')->insert(['id_titre'=>4,'id_sous_titre'=>$request->id_sous_titre9,'id_items_qc'=>$request->qc_items37,'valeur'=>$request->items46,'id_user'=>4893]);

        $testeur=1;

        $tbl_sous_titre=DB::table('tbl_sous_titre')->get();
        $tbl_items_qc=DB::table('tbl_items_qc')->get();
        $tbl_titre=DB::table('tbl_titre')->get();
        return view('view_clients.formulaire',[
            'tbl_titre' => $tbl_titre,
            'tbl_items_qc'=>$tbl_items_qc,
            'tbl_sous_titre'=>$tbl_sous_titre,
            'testeur'=>$testeur
        ]);
    }
    //fonction qui renvoie l'api du formulaire
    public function formulaire($id){
        $user=DB::table('users')
        ->where('id',$id)
        ->exists();
        if($user){
            $users=DB::table('users')->find($id);
            return response()->json([
                'status'=>1,
                'message'=>"user existe",
                'data'=>$users
            ],200);
        }else{
            return response()->json([
                'status'=>0,
                'message'=>"user n'existe pas",

            ],404);
        }
    }
    public function formulaire_reponse(){
        $reponse=DB::table('tbl_reponse_qc')->get();
        return response()->json([
            'status'=>1,
            'message'=>"user existe",
            'Qc_reponse '=>$reponse
        ],200);
    }
    //RECUPERATIO DES DONNEES DES CADRES DANS LA BD ET CREATION API
    public function api_questionnaire_cadre(){
        $data=DB::table('questinnaire')->get();
        if($data){
            return response()->json([
                'status'=>1,
                'message'=>"success",
                'data'=>$data
            ],200);
        }else{
            return response()->json([
                'status'=>0,
                'message'=>"empty",

            ],404);
        }
    }


}
