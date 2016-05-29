@extends('main')

@section('tittle', '| Kategorije')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Kategorije</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Naziv kategorije</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categorije as $category)
					<tr>
						<td>{{ $category->id_kategorija }}</th>
						<td>{{ $category->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div><!-- end of .col-md-8 -->

		<div class="col-md-4">
			<div class="well">
				{!! Form::open(array('route' => 'kategorije.store', 'method' => 'POST'))!!}
				<h2>Nova Kategorija</h2>
                {{ Form::label('name', 'Naziv:')}}
                {{ Form::text('name', null, ['class' => 'form-control']) }}


                {{ Form::submit('Kreiraj', array('class' => 'btn btn-success btn-primary btn-block btn-h1-spacing'))}}

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection