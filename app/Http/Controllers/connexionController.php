<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class connexionController extends Controller
{
    public function vueconnexion(){
        return view('connexion');
    }
    public function connexion(Request $request){
       if(Auth::guard('admin')->attempt(["email"=>$request->email,"password"=>$request->password])){
           return redirect("/");
       }else{
        return redirect("/connexion");
       }

    }
    public function deconnexion(){
       Auth::guard('admin')->logout();
       return redirect("/connexion");
    }

}
