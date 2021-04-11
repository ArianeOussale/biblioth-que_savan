<?php

namespace App\Http\Controllers;


use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class inscriptioncontroller extends Controller
{
    public function vueinscription(){
        return view('inscription');
    }
    public function inscription(Request $request){
        $utilisateur=new admin();
        $utilisateur->nom=$request->nom;
        $utilisateur->prenom=$request->prenom;
        $utilisateur->email=$request->email;
        $utilisateur->password=Hash::make($request->password);
        $utilisateur->confirm_password=$request->confirm_password;
        $utilisateur->save();
        return redirect('connexion');


}
}
