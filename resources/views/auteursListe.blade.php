@extends('template')

@section('content')

<br>
    <div class="container col-sm-offset-3 col-sm-6 section-padding">
    	@if(session()->has('message'))
			<div class="alert alert-success alert-dismissible">
                {!! session('message') !!}</div>
		@endif
		<div class="card">
			<div class="card-header">
				<span class=" lato size18">Liste des Acteurs</span>
			</div>
            <div class="card-body  mt-4">
			<table class="mt-4 table table-striped table-bordered table-hover" >
				<thead>
					<tr>
                        <th>#</th>
						<th>Nom</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($auteur as $aut)
						<tr>
                            <td class="">{!! $aut->id !!}</td>
							<td class="">{!! $aut->name !!}</td>
							<td style="text-align:center">
                                <a class='btn btn-info mr-4'
                                href="{!!url('auteurUpdate',['id'=>$aut->id]) !!}">
                                Modifier</a>
							    <a class='btn btn-warning '
                                href="{!!url('auteurDelete',['id'=>$aut->id]) !!}">
                                Supprimer</a>
                            </td>
						</tr>
					@endforeach
	  			</tbody>
			</table>
            </div>
		</div>
	</div>
@endsection
