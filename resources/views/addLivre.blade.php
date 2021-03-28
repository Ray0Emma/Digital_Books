@extends('template')

@section('content')
<div class="container col-sm-offset-3 col-sm-4 section-padding">
    <div class="card">
        <div class="card-header  mb-5">Vous pouvez Entrer votre information   ici : </div>

        <div class="card-body">
                {!! Form::open(['url'=>'livreAdd', 'files' => true])!!}
                {!! csrf_field() !!}


                    {{ Form::text('titre','',['class'=>'form-control','placeholder'=>'Titre']) }}

                    @error('titre')
                           <span class="text-danger">{{$message}}</span>
                    @enderror
                    {{Form::text('prix','',['class'=>'mt-3 form-control','placeholder'=>'prix']) }}

                    @error('prix')
                           <span class="text-danger">{{$message}}</span>
                    @enderror
                    {!! Form::file('image', ['style' => 'display:none;','id'=>'img']) !!}
                    @error('image')

                          <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                   <div class="col-auto">
                   <table border="1" class=" table table-responsive">
                       <tr>
                              <label for="img" class="mt-5 fa fa-image">
                                  Cliquer ici pour ajouter votre image</label>
                       </tr>
                   </table>
                   </div>
                            {{ Form::submit('Ajouter',['class'=>'mt-4 btn btn-info pull-right'])}}
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection






































