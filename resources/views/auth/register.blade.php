@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default arrow">
                <div class="panel-heading text-center">Skaffa konto</div>
                <div class="panel-body">
                    <form class="form" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Namn</label>

							<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Email</label>

                        
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="control-label">Bekräfta lösenord</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          
                        </div>
						
                        <div class="form-group">
							<button type="submit" class="default btn-block btn btn-primary">
								<span class="glyphicon glyphicon-ok"></span> Skicka
							</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
