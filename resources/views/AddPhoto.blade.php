@extends('template')

@section('content')
<!--  -->
<div class="container contact section-padding">

        <div class="row justify-content-center">
            {!! Form::open(['url'=>'test', 'files' => true]) !!}
            <div class="col-lg-9 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                <h1 class="mb-4">Vous pouvez choisir votre <strong> image </strong>ici :</h1>

            </div>
            {!! csrf_field() !!}
            {!! Form::file('image', ['style' => 'display:none;','id'=>'img']) !!}
            @error('image')

                  <div class="alert alert-danger">{{ $message }}</div>

            @enderror
           <div class="col-auto">
           <table border="1" class=" table table-responsive">
               <tr>
                      <label for="img" class="mt-5 fa fa-image"> Cliquer ici pour ajouter votre image</label>
               </tr>
           </table>
            {!! Form::submit('Envoyer !', ['class' =>
            'p-20 mt-4 btn btn-info pull-right']) !!}
            {!! Form::close() !!}
            </div>

        </div>
</div>
@endsection
