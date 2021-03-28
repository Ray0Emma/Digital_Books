@extends('template')

@section('content')

<br>
    <div class="container col-sm-offset-3  section-padding">
    	@if(session()->has('message'))
			<div class="alert alert-success alert-dismissible">
                {!! session('message') !!}</div>
		@endif
		<div class="card">
			<div class="card-header">
				<span class=" lato size18">Liste des Livres</span>
			</div>
            <div class="card-body  mt-4">
			<table class="mt-4 table table-striped table-bordered table-hover" >
				<thead>
					<tr>
                        <th>#</th>
						<th>Titre</th>
						<th>Photo</th>
                        <th>Prix</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($livres as $livre)
						<tr>
                            <td class="">{!! $livre->id !!}</td>
							<td class="">{!! $livre->titre !!}</td>
                            <td class=""><img src="{{ asset('uploads/'. $livre->photo)}}"
                                 width="100px;" height="120px;" alt="image"></td>
                            <td class="">{!! $livre->prix !!}DH</td>
							<td style="text-align:center">
                                <a class='btn btn-info mr-4'
                                    href="{!!url('livresUpdate',['id'=>$livre->id]) !!}">
                                    Modifier</a>
							    <a class='btn btn-warning '
                                   href="{!!url('livresDelete',['id'=>$livre->id]) !!}">
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
