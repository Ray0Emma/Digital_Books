<?php
  use App\Http\Requests\PhotoRequest;
  namespace App\Gestion;
  interface PhotoGestionInterface{
      public function save( $image);
  }
?>
