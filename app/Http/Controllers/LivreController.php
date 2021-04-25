<?php

namespace App\Http\Controllers;
use App\Http\Requests\LivreRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Livre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    //first fuction
    public function index()
    {
        return view('page1');
    }
    public function show()
    {
        return view('addLivre');
    }

    public function add(LivreRequest $request)
    {
        $livres=new Livre();
        $livres->Aut_id=1;
        $livres->titre= $request->input('titre');
        $image=$request->file('image');
     if($image->isValid())
     {
         $chemin=config('images.path');

         $extension=$image->getClientOriginalExtension();
         do{
             $nom =str::random(10).'.'.$extension;
           }while(file_exists($chemin.'/'.$nom));

        $image->move($chemin,$nom);
        $livres->photo=$nom;

    }

    $livres->prix= $request->input('prix');
    $livres->save();
    return view('confirmation');



    }
    public function showAll(){
        $livres = Livre::get();
        return view('livresList',compact('livres'));
    }
    public function delete($id){
        $livres=Livre::find($id);
        $livres->delete();
        $message='Livre supprimer avec succee !!';
        return  Redirect::to('livresList')->with('message',$message);

    }
    public function showId($id){
        $livres= Livre::findorFail($id);
        return view('livresUpdate',compact('livres'));
    }
    public function Update(Request $request,$id)
    {
        $livres= Livre::find($id);
        $livres->titre=$request->get('titre');
        $image=$request->file('image');
     if($image->isValid())
     {
         $chemin=config('images.path');

         $extension=$image->getClientOriginalExtension();
         do{
             $nom =str::random(10).'.'.$extension;
           }while(file_exists($chemin.'/'.$nom));

         $image->move($chemin,$nom);
         $livres->photo=$nom;

    }

        $livres->prix= $request->get('prix');
        $livres->update();
        $message='Donnees a ete modifie avec succee !!';
        return  Redirect::to('livresList')->with('message',$message);

    }
}
/*if($image->move($chemin,$nom)){

           return view('photo');
        }
         return redirect('imageUpload')->with('error','Desole mais votre image ne peut pas etre envoyer!');*/
