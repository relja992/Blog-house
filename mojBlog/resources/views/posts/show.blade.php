@extends('main')

@section('tittle', '| Pregled postova')

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->naslov }}</h1>

			<p class="lead">{{ $post->tekst }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>URL:</label>
					<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
					<!--<p><a href="{{ url('blog/'.$post->slug) }}">{{ url($post->slug) }}</a></p>-->
				</dl>
				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('d.m.Y. H:i', strtotime($post->created_at)) }}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('d.m.Y. H:i', strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}

						<!-- {!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block')) !!} -->
						{!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}

						{!! Form::close() !!}
					</div>
				</div> 
				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('posts.index', '<< Sve Vesti', [], ['class' => 'btn btn-default btn-h1-spacing btn-block']) }}

					</div>
				</div>

			</div>
		</div>	
	</div>
@endsection