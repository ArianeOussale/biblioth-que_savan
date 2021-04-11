<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livres;
class savanController extends Controller
{
    public function vueajout(){
        return view('ajouter');
    }
    public function ajout(Request $request){
        $utilisateur=new livres();
        $utilisateur->nom=$request->nom;
        $utilisateur->parution=$request->parution;
        $utilisateur->auteur=$request->auteur;
        $utilisateur->type=$request->type;
        $utilisateur->pays=$request->pays;
        $utilisateur->save();
        return redirect('/');
        

    }

}




