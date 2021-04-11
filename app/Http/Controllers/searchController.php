<?php

namespace App\Http\Controllers;

use App\livres;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function recherche(){
        return view('search');

   }
   public function search(Request $request){
    $search=null;
    $count=null;
       switch ($request->filtre) {
           case 'type':
               $search=livres::where("type","=",$request->type)->get();
               $count=count($search);
               break;
            case 'pays':
                $search=livres::where("pays","=",$request->pays)->get();
                $count=count($search);
               break;
            case 'auteur':
                $search=livres::where("auteur","=",$request->auteur)->get();
                $count=count($search);
                break;
            case 'parrution':
                $search=livres::where("parution","=",$request->parrution)->get();
                $count=count($search);
                break;
       }
       return view("serach_result",compact("search","count"));
   }
}

