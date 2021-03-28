<?php
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Http\Requests\PhotoRequest;
use App\Gestion\PhotoGestionInterface;

class PhotoGestion implements PhotoGestionInterface{

public function save( $request)
{
    $image=$request->file('image');
    if($image->isValid())
    {
        $chemin=config('images.path');
        dd($chemin);
        $extension=$image->getClientOriginalExtension();
        do{
            $nom =str::random(10).'.'.$extension;
          }while(file_exists($chemin.'/'.$nom));

        return $image->move($chemin,$nom);


    }
    return false;
}
}


?>
