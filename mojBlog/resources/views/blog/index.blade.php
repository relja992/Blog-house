@extends('main')

@section('tittle', '| Blog')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1>Vesti</h1>
		</div>
	</div>

	@foreach($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{ $post->naslov }}</h2>
			<h5>Published: {{ date('d.m.Y. H:i', strtotime($post->created_at)) }}</h5>

			<p>{{ substr($post->tekst, 0, 250) }}{{ strlen($post->tekst) > 250 ? "..." : "" }}</p>

			<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read more</a>
			<hr>
		</div>
	</div>
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts->links() !!}
			</div>
		</div>
	</div>

@endsection