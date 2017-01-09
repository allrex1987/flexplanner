﻿@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
	<div class="col-md-6">
		<h1>Teamer</h1>
		<p> Teamer är ett <b>extremt slimmat</b>, <b>enkelt</b> och <b>effektivt planeringsverktyg</b>. Bygg ditt nätverk, skapa unika mallar, beställ material inom nätverket och planera ditt arbete på ett kick.<br>
		<br><b>Glöm</b> dina wordmallar, gantscheman i excel, sharepoint och andra <b>krångliga system</b>. </p>
	</div>

	<div class="col-md-4 col-md-offset-1">
	<br><br><br>
		<a class="link-btn accept small-btn" href=""><span class="glyphicon glyphicon-hand-right"></span>Testa gratis</a>
		<br>
		<a href="/login" class="link-btn default small-btn"><span class="glyphicon glyphicon-log-in"></span> Logga in</a>
	</div>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="row white">
	<div class="col-md-8 col-md-offset-2">
		<div class="col-md-3">
			{{ Html::image('/images/3.png', 'a picture') }}
			<h2>1. Bygg ditt nätverk</h2>
			<p>Skapa ett konto och bjud med dina kollegor för att bygga ett nätverk som ni alla kan jobba tillsammans i.</p>
		</div>
		<div class="col-md-3">
			{{ Html::image('/images/2.png', 'a picture') }}
			<h2>2. Skapa formulär</h2>
			<p>Du skapar själv unika formulär anpassade just för ditt nätverk och som används vid jobbbeställningar.</p>
		</div>
		<div class="col-md-3">
			{{ Html::image('/images/3.png', 'a picture') }}
			<h2>3. Jobba tillsammans</h2>
			<p>Med dina formulär det enkelt för dina kollegor att göra jobbbeställningar och du får exakt den informationen du behöver.</p>
		</div>
		<div class="col-md-3">
			{{ Html::image('/images/2.png', 'a picture') }}
			<h2>4. Planera effektivt</h2>
			<p>Du får en smidig översikt av dina beställningar och kan enkelt planera din tid, komplettera eller disskutera inom beställningen.</p>
		</div>
	</div>
</div>

	<!-- @if(Auth::check())
	  <!-- Table -->
	  <!-- <table class="table">
		  <tr>
			  <th>Character</th>
			  <th>Real Name</th>
		  </tr>
		  @foreach($characters as $key => $value)
			<tr>
			  <td>{{$key}}</td><td>{{$value}}</td>
			</tr>
		  @endforeach
	  </table>
	@endif

	@if(Auth::guest())
	  <a href="/login" class="link-btn default small-btn"><span class="glyphicon glyphicon-log-in"></span> Logga in</a>
	@endif-->
</div>
@endsection