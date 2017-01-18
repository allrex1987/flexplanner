@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/profile">Profil</a>
	<div class="panel default">

		 <form class="form" role="form" method="POST" action="" data-module="ajax-form" data-url="/profile/update">
            {{ csrf_field() }}

            <div class="alert" data-response-message></div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="control-label">Name</label>

				<input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

				@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">Email</label>

            
				<input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

				@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label">Password</label>      
				<input id="password" type="password" class="form-control" name="password" required>

				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
            </div>

            <div class="form-group">
                <label for="password-confirm" class="control-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              
            </div>
			
            <div class="form-group">
				<button type="submit" class="default btn-block btn btn-primary" data-submit>
					<span class="glyphicon glyphicon-ok"></span> Uppdatera
				</button>
            </div>
        </form>

	</div>
</div>
@endsection

