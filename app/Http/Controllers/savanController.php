<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;
class savanController extends Controller
{
    public function vueajout(){
        return view('ajouter');
    }

    public function ajout(Request $request){
        $utilisateur = new Livre();
       $utilisateur->nom=$request->nom;
        $utilisateur->parution=$request->parution;
        $utilisateur->auteur=$request->auteur;
        $utilisateur->type=$request->type;
        $utilisateur->pays=$request->pays;
        // $utilisateur->nom=$request->input('nom');
        // $utilisateur->nom=$request->input('parution');
        // $utilisateur->nom=$request->input('auteur');
        // $utilisateur->nom=$request->input('type');
        // $utilisateur->nom=$request->input('pays');
        $utilisateur->save();
        return redirect('/');


    }

}




