@extends('template')

@section('content')
<div class="container  col-sm-5 section-padding">

	<div class="card">
		<div class="card-header">Modification d'un Livre</div>
			<div class="card-body  mt-4">
				<div class="col-sm-12">
					{!! Form::open(['url' => 'livresUpdate/'. $livres->id, 'files' => true],
                     ['class' => 'form-horizontal panel input_mask']) !!}
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                        <label class="control-label ">
                            Titre <span class="text-danger">*</span>
                        </label>
                        <div class=" form-group has-feedback" >
					  	{!! Form::text('titre',$livres->titre,
                           ['class' => 'form-control has-feedback-left']) !!}
					  	{!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <div class="form-group {!! $errors->has('prix') ? 'has-error' : '' !!}">
                        <label class="control-label ">
                            Prix <span class="text-danger">*</span>
                        </label>
                        <div class=" form-group has-feedback" >
					  	{!! Form::text('prix',$livres->prix,
                          ['class' => 'form-control has-feedback-left']) !!}
					  	{!! $errors->first('prix', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                        <div class=" form-group has-feedback" >
                        {!! Form::file('image', ['style' => 'display:none;','id'=>'img']) !!}
                        <div class="col-auto">
                            <table border="1" class=" table table-responsive mb-3">
                                <tr>
                                    <label for="img" class="mt-4  fa fa-image">
                                        Cliquer ici pour ajouter votre image</label>
                                </tr>
                            </table>
                        </div>
					  	{!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
					<div class="form-group ">

						{!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}
                        <a href="javascript:history.back()" class="btn btn-info pull-left ">
                             Annuler
                        </a>
                    </div>
					{!! Form::close() !!}
				</div>

			</div>

		</div>

	</div>
@stop
