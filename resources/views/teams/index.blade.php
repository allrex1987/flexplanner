@extends('layouts.app')

@section('content')

<div class="container">
	<div class="panel default">
		<h1>Dina teams</h1>
		
		<div data-module="ajax-list" data-url="/profile/teams"></div>

		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#createTeamModal">
		  Skapa team
		</button>
	</div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="createTeamModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
	    	<form data-module="ajax-form" data-url="/team/create">
	    		{{ csrf_field() }}

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Skapa team</h4>
				</div>
	     
				<div class="modal-body">
					<div class="alert" data-response-message></div>

					<div class="form-group">
						<label for="team_name">Team namn</label>
						<input type="text" class="form-control" name="team_name" placeholder="namn">
					</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="phone">Team telefonnummer</label>
						<input type="tel" class="form-control" name="phone" placeholder="Telefon">
					</div>
					<div class="form-group">
						<label for="address">Team adress</label>
						<input type="text" class="form-control" name="address" placeholder="Adress">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" data-submit>Spara team</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection