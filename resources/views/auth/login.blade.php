@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default arrow">
            <div class="panel-heading text-center">Logga in</div>
            <div class="panel-body">
                <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group left-inner-addon {{ $errors->has('email') ? ' has-error' : '' }}">
						
						<i class="glyphicon glyphicon-envelope"></i>
						<input id="email" placeholder="Email" type="email" class=" form-control" name="email" value="{{ old('email') }}" required autofocus>
						
						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
                     
                    </div>

                    <div class="form-group left-inner-addon {{ $errors->has('password') ? ' has-error' : '' }}">
			
						<i class="glyphicon glyphicon-lock"></i>
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

						<div class="form-group">
							<button type="submit" class="accept btn-block btn btn-primary">
								<span class="glyphicon glyphicon-log-in"></span> Logga in
							</button>
							<a class="btn btn-link btn-block" href="{{ url('/password/reset') }}">
								Glömt ditt lösenord?
							</a>
						</div>
						
					</div>
                </form>
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
            </div>
        </div>
    </div>
</div>
@endsection
