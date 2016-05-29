@extends('main')

@section('title', '| Sve Vesti')

@section('content')

	<div class="row">
		<div class="col-md-10">
		<h1>Sve Vesti</h1>
		</div>
		<div class="col-md-2">
		<a href="{{ route('posts.create') }}" class="btn btn-block btn-primary btn-h1-spacing">Nova Vest</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div><!-- kraj reda -->

	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
 			 	<thead>
 			 		<th>#</th>
 			 		<th>Naslov</th>
 			 		<th>Slug</th>
 			 		<th>Tekst</th>
 			 		<th>Created At</th>
 			 		<th></th>
 			 	</thead>
 			 	<tbody>
 			 		
 			 		@foreach($posts as $post)
 			 			<tr>
 			 				<td>{{ $post->id }}</td>
 			 				<td>{{ $post->naslov }}</td>
 			 				<td>{{ $post->slug }}</td>
 			 				<td>{{ substr($post->tekst, 0, 50) }}{{ strlen($post->tekst) > 50 ? "..." : ""}}</td>
 			 				<td>{{ date('d.m.Y.', strtotime($post->created_at)) }}</td>
 			 				<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
 			 			</tr>
 			 		@endforeach	
 			 	</tbody>
			</table>
			<div class="text-center">
				{!! $posts->links(); !!}
			</div> 
		</div>
	</div>



@stop