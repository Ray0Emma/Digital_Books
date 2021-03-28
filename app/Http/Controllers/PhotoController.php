<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use laravel\helpers;
use App\Http\Requests\PhotoRequest;
use Illuminate\Http\Request;
use PhotoGestion;

class PhotoController extends Controller
{
    //
    public function show()
    {

        return view('AddPhoto');
    }


public function photo(PhotoRequest $request)

 {
     $image=$request->file('image');
     if($image->isValid())
     {
         $chemin=config('images.path');

         $extension=$image->getClientOriginalExtension();
         do{
             $nom =str::random(10).'.'.$extension;
           }while(file_exists($chemin.'/'.$nom));

         if($image->move($chemin,$nom)){

           return view('photo');
        }
         return redirect('imageUpload')->with('error','Desole mais votre image ne peut pas etre envoyer!');



     }


  /* public function photo (PhotoRequest $request,PhotoGestion $photoGestion)
   {
       $image=$request->file('image');
       if($photoGestion)
   }

*/


 }
}
