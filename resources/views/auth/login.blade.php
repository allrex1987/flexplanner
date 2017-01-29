@extends('layouts.app')

@section('content')
<div class="container">
    <div class="four columns offset-by-four panel arrow">
     
            <h1 class="panel-heading text-center">
				Logga in
			</h1>
            @if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif
			@if (session('warning'))
			    <div class="alert alert-warning">
			        {{ session('warning') }}
			    </div>
			@endif
            <div class="panel-body">
                <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group left-inner-addon {{ $errors->has('email') ? ' has-error' : '' }}">
						
						<label for="email" class="control-label">Email</label>
						<input id="email" placeholder="Email" type="email" class=" form-control" name="email" value="{{ old('email') }}" required autofocus>
						
						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
                     
                    </div>

                    <div class="form-group left-inner-addon {{ $errors->has('password') ? ' has-error' : '' }}">
			
						<label for="password" class="control-label">Lösenord</label>
						<input placeholder="Lösenord" id="password" type="password" class=" form-control" name="password" required>

						@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
						
                    </div>

					<div class="test">
					
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Kom ihåg mig
								</label>
							</div>
						</div>

						<div class="form-group text-center">
							<button type="submit" class="accept btn-block btn btn-primary">
								<i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>
								Logga in
							</button>
							<br>
							<a href="{{ url('/password/reset') }}">
								Glömt ditt lösenord?
							</a>
						</div>
						
					</div>
                </form>
        </div>
    </div>
</div>
@endsection
