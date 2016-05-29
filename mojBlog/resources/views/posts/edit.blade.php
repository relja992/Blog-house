@extends('main')

@section('tittle', '| Edit Vesti')

@section('content')
	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('naslov', 'Naslov') }}
			{{ Form::text('naslov', null, ["class" => 'form-control']) }}

			{{ Form::label('slug', 'Slug', ['class' => 'form-spacing-top']) }}
			{{ Form::text('slug', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('tekst', 'Tekst', ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('tekst', null, ['class' => 'form-control'])}}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('d.m.Y. H:i', strtotime($post->created_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('d.m.Y. H:i', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Odustani', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Sačuvaj izmene', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div> 
			</div>
		</div>
		{!! Form::close() !!}	
	</div> <!-- Krej reda-forme -->
	

@stop