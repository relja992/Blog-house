@extends('main')

@section('tittle', '| Register')

@section('content')

	<!--{!! csrf_field() !!}   manuelni csrf protection-->
	<!--mora da se doda ako se ne koristi form helper, inace login uvek pada-->

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!!Form::open() !!}

				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::label('email', 'Email:') }}
				{{ Form::email('email', null, ['class' => 'form-control']) }}

				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class' => 'form-control']) }}
				{{ Form::label('password_confirmation', 'Confirm Password:') }}
				{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
				{{ Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

			{!! Form::close() !!}
		</div>
	</div> 

@endsection