@extends('layouts.app')

@section('content')

<div class="container">
	<div class="panel default">
		Username: {{ Auth::user()->name }}<br>
		Email: {{ Auth::user()->email }}<br>
		Skapad: {{ Auth::user()->created_at }}<br>
		Updaterad: {{ Auth::user()->updated_at }}<br>
		<br>
		@foreach ($memberships as $membership)
			<h3>Medlemskap</h3>
			{{ "Team: ".$membership->team->team_name }} <br>
			{{ "Roll: ".$membership->role->role_name }}
			<br><br>
		@endforeach
		
	</div>
</div>
@endsection