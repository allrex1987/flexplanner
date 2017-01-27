@extends('layouts.app')

@section('content')

<div class="custom-panel big-buff row center-text">
	<div class="container">
		<div class="profile col-md-offset-4">
			<!--<img alt="big profile image" class="big-profile" src="" />-->
			<div class="image">
				{{ Html::image('/images/test-profile@2x.jpg', 'big profile image', array('class' => 'big-profile')) }}
			</div>
			<div class="info">
				<span class="name">Alexandra Johansson</span>
				<span class="role">Webmaster, Digital strategy</span>
				<span class="email">alexandra.johansson122@gmail.com</span>
				<span class="phone">070 276 47 41</span>
			</div>
			<a class="section-btn btn default big-btn square-btn">
				<span class="glyphicon glyphicon-edit"></span>
			</a>
		</div>
		</div>
</div>


<div class="container text-center">
		<h1>TEAM</h1>
		<h3>Dina medlemskap</h3>

		<a class="section-btn btn accept big-btn square-btn">
			<span class="glyphicon glyphicon-plus"></span>
		</a>

		<div class="dropdown col-md-2 col-md-offset-5">
			<a class="burger-menu" href="#" aria-hidden="true" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Välj team <span class="glyphicon glyphicon-menu-hamburger"></span>
			</a>

			<ul class="dropdown-menu" data-module="ajax-loader" data-target="#teamView" data-template="team">
				<li data-url="#">Stena Line Inhouse</li>
				<li data-url="#">Tinypickle</li>
				<li data-url="#">Everyone's team</li>
			</ul>
		</div>
	<div class="search">
		<label>Sök medlem</label>
		<input type="text" data-input value="" placeholder="Lägg till medlem">
		<div id="userList" class="dropdown open">
			<ul class="dropdown-menu">
				<li>Test-test</li>
			</ul>

		</div>
	</div>
	<div id="teamView">
		
	</div>
</div>
@endsection
