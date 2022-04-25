<?php

namespace App\Http\Controllers;

use App\Models\JeudiActu;
use App\Models\SamediActu;
use App\Models\VendrediActu;
use Illuminate\Http\Request;

class SemaineController extends Controller
{
    

    public function jeudi(){
        /*select all result for tab Jeudi_actu*/
        $actus = JeudiActu::All();

            /* dd($actus); */

        /*send values actu to jeudi.blade.php*/

        return view("jeudi",compact("actus"));

    }

    public function jeudiDetail($id=0){

            $detail = JeudiActu::where("id");

        return view("jeudidetail",compact("detail"));

    }

    public function vendredi(){

        $noms = VendrediActu::All();

        return view("vendredi", compact("noms"));

    }

    public function samedi(){

        $mesNoms = SamediActu ::All();


        return view("samedi",compact("mesNoms"));

    }


}
