@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/profile/edit">Edit</a>
	<div class="panel default">
		Username: {{ $user->name }}<br>
		Email: {{ $user->email }}<br>
		Skapad: {{ $user->created_at }}<br>
		Updaterad: {{ $user->updated_at }}<br>
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