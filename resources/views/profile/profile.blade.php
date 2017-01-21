@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/profile/edit">Edit</a>
	<div class="panel default">
		Username: {{ $user->name }}<br>
		Email: {{ $user->email }}<br>
		Skapad: {{ $user->created_at }}<br>
		Updaterad: {{ $user->updated_at }}<br>
	</div>
	<div class="panel default">
		<h1>TEAM</h1>
		<h3>Dina medlemskap</h3>

		<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
		<ul class="dropdown-menu" data-module="ajax-loader" data-target="#teamView" data-template="team">
			@foreach ($memberships as $membership)
				<li data-url="{{ url('/team/' . $membership->team->id) }}">{{ $membership->team->team_name }}</li>
			@endforeach
		</ul>
	</div>
	<div data-module="autocomplete" data-target="#userList" data-min="3" data-url="/search/userbyemail?email=">
		<input type="text" data-input value="" placeholder="Search user">
		<div id="userList"></div>
	</div>
	<div id="teamView">
		
	</div>
</div>
@endsection