<?php

namespace App\Http\Controllers;
use App\Models\Auteur;
use App\Http\Requests\AuteurRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    //
    public function getForm(){
        return view('AuteurAdd');
    }
    public function addAuteur(AuteurRequest $request)
    {
        $auteur =new Auteur;
        $auteur ->name = $request->input('name');
        $auteur->save();
        $message = 'Auteur ajouter avec succee';
        return  Redirect::to('auteurListe')->with('message',$message);

    }

    public function showAll(){
        $auteur = Auteur::get();
        return view('auteursListe',compact('auteur'));
    }
    public function delete($id){
        $auteur=Auteur::find($id);
        $auteur->delete();
        $message='Auteur supprimer avec succee !!';
        return  Redirect::to('auteurListe')->with('message',$message);

    }
    public function showId($id){
        $auteur= Auteur::findorFail($id);
        return view('AuteurUpdate',compact('auteur'));
    }
    public function Update(Request $request,$id)
    {
        $auteur= Auteur::find($id);
        $auteur->name=$request->get('name');
        $auteur->update();
        $message='Donnees a ete modifie avec succee !!';
        return  Redirect::to('auteurListe')->with('message',$message);

    }
}
/**
 * ajouter la vue update
 * avec auteur avec l id auteur
 * delete -
 * lie le id auteur avec la table livre
 *  tbale livre
 * id titre prix  ++++++++++++photo
 */
