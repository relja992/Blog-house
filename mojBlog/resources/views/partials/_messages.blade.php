@if(Session::has('success'))

	<div class="alert alert-success" role="alert">

		<strong>Uspeh:</strong>{{ Session::get('success') }}

	</div>

@endif

@if(count($errors) > 0)

	<div class="alert alert-danger" role="alert">
		<strong>Greške:</strong>
		<ul>
		@foreach($errors->all() as $error)

			<li>{{ $error }}</li>

		@endforeach
		</ul>
	</div>

@endif