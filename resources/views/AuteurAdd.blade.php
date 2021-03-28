@extends('template')

@section('content')
<br>
<div class="container col-sm-offset-3 col-sm-4 section-padding">
<div class="">

    <div class="card">

        <div class="card-header  mb-5">Vous pouvez Entrer votre information   ici : </div>

        <div class="card-body">

            {!! Form::open(array('url' => 'AuteurAdd')) !!}
                      @error('name')

                          <div class="alert alert-danger mt-4 mb-4">{{ $message }}</div>

                      @enderror

                    {!! Form::text('name', null, array('class' => 'form-control ',
                                   'placeholder' => 'Entrez votre nom')) !!}

                   {!! Form::submit('Envoyer !',
                              array('class' => 'mt-4 btn btn-info pull-right')) !!}

            {!! Form::close() !!}

        </div>
    </div>
</div>
</div>
@endsection
