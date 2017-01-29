@extends('layouts.app')

@section('content')

<div class="custom-panel big-buff">
	<div class="container profile text-center">
		<div class="row">
			{{ Html::image('/user/'.$user->id.'/avatar', 'big profile', array('class' => 'big-profile')) }}
		</div>
		<div class="row">
			<div class="info">
				<span class="name">{{ $user->name }}</span>
				<span class="role">{{ $user->title }}</span>
				<span class="email">{{ $user->email }}</span>
				<span class="phone">{{ $user->phone }}</span>
			</div>
			<a href="/profile/edit" class="edit btn default">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				Redigera
			</a>
		</div>
	</div>
</div>


<div class="container">
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