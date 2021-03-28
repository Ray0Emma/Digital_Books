@extends('template')

@section('content')
<div class="container col-sm-offset-3 col-sm-5 section-padding">

	<div class="card">
		<div class="card-header">Modification d'un Auteur</div>
		<div class="card-body  mt-4">
			<div class="col-sm-12">
					{!! Form::open(['url' => 'auteurUpdate/'. $auteur->id],
                         ['class' => 'form-horizontal panel input_mask']) !!}
					<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        <label class="control-label ">
                            Nom <span class="text-danger">*</span>
                        </label>
                        <div class=" form-group has-feedback" >
					  	{!! Form::text('name',$auteur->name,
                            ['class' => 'form-control has-feedback-left',
                             'placeholder' => 'Nom']) !!}
					  	{!! $errors->first('name',
                            '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
					<div class="form-group">

						{!! Form::submit('Envoyer',
                         ['class' => 'btn btn-info pull-right']) !!}
                        <a href="javascript:history.back()"
                           class="btn btn-info pull-left ">
                             Annuler
                        </a>
                    </div>
					{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop
