@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="small-4 large-centered columns text-center panel">
			<span id="login-logo" class="fi-layout large-centered"></span>
			<h2>Login</h2>
			<p>Please login with your LUG/ACM account. If you do not have an account, please create a temporary account.</p>


			{{ Form::open(array('url' => 'login')) }}

				<p>{{ Form::label('username', 'Username') }}
				{{ Form::text('username', Input::old('username'), array('placeholder' => 'Your Username')) }}</p>

				<p>{{ Form::label('password', 'Password') }}
				{{ Form::password('password', Input::old('password'), array('placeholder' => 'Your Password')) }}</p>

				<p>{{ Form::submit('Login!', array('class' => 'button ')) }}</p>
			{{ Form::close() }}
		</div>
	</div>
@stop
