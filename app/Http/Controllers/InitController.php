<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

use App\Http\Requests;

class InitController extends Controller
{
    public function index(){
        $eleves = Eleve::all();

        /*
        $eleve = Eleve::find('2');
        $eleve->update([
            'nom' => $eleve->nom . ' modif'
        ]);*/

        return view('init/index',[
            'eleves' => $eleves
        ]);
    }

    public function store(Request $request){
        /*
        $data = [
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'birth_date' => $request->get('date_naiss'),
        ];*/
        $eleve = Eleve::create($request->all());

        if( $request->isXmlHttpRequest() ){
            return $eleve->toJson();
        }


        return redirect(route('eleve.index'))
            ->with('message','Enregistrement avec succès');
    }


    public function show(Request $request, Eleve $eleve){

    }
}
