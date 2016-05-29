@extends('main')

@section('tittle', "| $post->naslov ")

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->naslov }}</h1>
			<p>{{ $post->tekst }}</p>
			<hr>
			<p>Posted In: {{ $post->kategorija->name }}</p>
		</div>
	</div>

@endsection