@extends('layouts.app')

@section('content')

<div class="custom-panel big-buff row center-text">
	<div class="profile col-md-offset-5">
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
		<a class="edit btn default big-btn square-btn">
			<span class="glyphicon glyphicon-edit"></span>
		</a>
	</div>
</div>

@endsection