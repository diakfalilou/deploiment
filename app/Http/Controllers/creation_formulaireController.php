<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class creation_formulaireController extends Controller
{
    //CREATION DE LA VUE DU FORMULAIRE
    public function view_creation(){
        // if($_GET['id']){
        //     dd(100);
        // }
        $tbl_titre=DB::table('tbl_titre')->get();
        $tbl_sous_titre=DB::table('tbl_sous_titre')->get();
        $tbl_items_qc=DB::table('tbl_items_qc')->get();
        $tbl_questionnaire=DB::table('questinnaire')
        ->orderBy('id', 'desc')
        ->get();
        $affiche=0;

        $gestion_formulaire=DB::table('gestion_formulaire')->where('etats',1)->first();

        if(!empty($gestion_formulaire)){
            $affiche=1;
            $tbl_questionnaire=DB::table('questinnaire')
            ->where('id',$gestion_formulaire->id_qc)
            ->get();
        }

        return view('view_admin.add_formulaire',[
            'tbl_questionnaire'=>$tbl_questionnaire,
            'tbl_titre'=>$tbl_titre,
            'tbl_sous_titre'=>$tbl_sous_titre,
            'tbl_items_qc'=>$tbl_items_qc,
            'affiche'=>$affiche

        ]);
    }

    //FONCTION POUR LA CREATION DU FORMULAIRE

    public function creation_formulaire(Request $request){


        if(isset($request->delFormulaire) and $request->delFormulaire==12){

            DB::table('gestion_formulaire')->where('id_qc',$request->id_formulaire)->delete();
            DB::table('tbl_titre')->where('id_qc',$request->id_formulaire)->delete();
            DB::table('questinnaire')->where('id',$request->id_formulaire)->delete();

        }
        $ajax='false';
        $affiche=0;
        if($request->newFormulaire){

            // dd($request);
            // dd($request->id_qc);
            $user=22;
            $insert = DB::table('formulaire_valider')->insertGetid([
                'id_formulaire'=>$request->id_qc,
                'id_user'=>$user
            ]);
            DB::table('gestion_formulaire')->where('id_qc',$request->id_qc)->update(['etats' => 0]);
            $ajax='true';
        }


        //SUPPRESSION FORMULAIRE




        //CREATION D'UN CADRE
        if(isset($request->newDescription) AND $request->newDescription==0){
            $idUser="222";
            $insert = DB::table('questinnaire')->insertGetid([
                'titre'=>$request->titre_description,
                'description'=>$request->description,
                'idUser'=>$idUser
            ]);
            DB::table('gestion_formulaire')->insert(['id_qc'=>$insert]);
        }

        //CREATION DU TITRE
        if(isset($request->newTitre) AND $request->newTitre==0){
            $idUser="222";
            $id_titre = DB::table('tbl_titre')->insertGetid([
                'id_qc'=>$request->id_qc,
                'titre'=>$request->titres,
                'id_user'=>$idUser
            ]);
            DB::table('gestion_formulaire')->where('id_qc',$request->id_qc)->update(['etats' => 1]);
        }

        //CREATION DU SOUS TITRE
        if(isset($request->newSousTitre) AND $request->newSousTitre==0){
            $idUser="222";
            $id_sous_titre = DB::table('tbl_sous_titre')->insertGetid(
                [
                    'id_titre'=>$request->id_sous_titre,
                    'titre'=>$request->sous_titre,
                    'id_user'=>$idUser
                ]);
        }

        //CREATION DU SOUS TITRE
        if(isset($request->newQuestionnaire) AND $request->newQuestionnaire==0){
            // dd('120');
            $idUser="222";
            $id_items_qc= DB::table('tbl_items_qc')->insertGetid(
                [
                    'id_sous_titre'=>$request->id_sous_titre,
                    'titre'=>$request->question,
                    'type'=>$request->type_questionnaire,
                    'nombre'=>$request->nbfois,
                    'id_user'=>$idUser
                ]);
            // dd(DB::table('tbl_items_qc')->where('id',$id_items_qc)->get());
        }
        $tbl_titre=DB::table('tbl_titre')->get();
        $tbl_sous_titre=DB::table('tbl_sous_titre')->get();
        $tbl_items_qc=DB::table('tbl_items_qc')->get();
        $tbl_questionnaire=DB::table('questinnaire')
        ->orderBy('id', 'desc')
        ->get();

        $gestion_formulaire=DB::table('gestion_formulaire')->where('etats',1)->first();
        if(!empty($gestion_formulaire)){
            $affiche=1;
            $tbl_questionnaire=DB::table('questinnaire')
            ->where('id',$gestion_formulaire->id_qc)
            ->get();
        }



        return view('view_admin.add_formulaire',[
            'tbl_questionnaire'=>$tbl_questionnaire,
            'tbl_titre'=>$tbl_titre,
            'tbl_sous_titre'=>$tbl_sous_titre,
            'tbl_items_qc'=>$tbl_items_qc,
            'ajax'=>$ajax,
            'affiche'=>$affiche

        ])->with('error','You are not allowed to access this page.');
    }
}
