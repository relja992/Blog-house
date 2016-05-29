@extends('main')

@section('tittle', '| Login')

@section('content')

	<!--{!! csrf_field() !!}   manuelni csrf protection-->
	<!--mora da se doda ako se ne koristi form helper, inace login uvek pada-->

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!!Form::open() !!}

				{{ Form::label('email', 'Email:') }}
				{{ Form::email('email', null, ['class' => 'form-control']) }}

				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class' => 'form-control']) }}

				{{ Form::checkbox('remember') }}{{ Form::label('remember', 'Remember me') }}
				</br>
				{{ Form::submit('Login', ['class' => 'btn btn-primary btn-block']) }}

				<p><a href="{{ url('password/reset') }}">Forgot Password</a></p>

			{!! Form::close() !!}
		</div>
	</div> 

@endsection