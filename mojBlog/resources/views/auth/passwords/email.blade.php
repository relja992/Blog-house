@extends('main')

@section('tittle', '| Forgot my Password')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Reset Password</div>

				<div class="panel-body">
				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif

					<!--{{ csrf_field() }} ako pravim ovako <form...-->
					{!! Form::open(['url' => 'password/email', 'method' => "POST"]) !!}
					{{ Form::label('email', 'Email Address:') }}
					{{ Form::email('email', null, ['class' => 'form-control'])}}
					{{ Form::submit('Reset Password', array('class' => 'btn btn-primary form-spacing-top')) }}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection