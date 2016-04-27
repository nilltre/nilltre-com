@extends('app')
@section('content')
<?php var_dump($_GET); ?>
	<div class="col-sm-6">
		<h1>Add New Employee</h1>
		<form action="#" method="get">
		<div class="form-group">
			<label for="user">User</label>
			<select name="user">
				@foreach($users as $user)
					<option value="{!! $user->id !!}">{!! $user->name !!}</option>
				@endforeach
			</select>
			</div>
			<div class="form-group col-sm-6">
				<label for="first_name">First name</label>
				<input type="text" name="first_name" id="first_name" />
			</div>
			<div class="form-group col-sm-6">
				<label for="last_name">Last name</label>
				<input type="text" name="last_name" id="last_name" />
			</div>
			<div class="form-group col-sm-12">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" />
			</div>
			<div class="form-group">
				<label for="phone">Phonenumber</label>
				<input type="text" name="phone" id="phone" />
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" />
			</div>
			<div class="form-group">
				<label for="rank">Rank</label>
				<select name="rank">
					<option value="1">Admin</option>
					<option value="8">User</option>
				</select>
			</div>
			<div class="form-group">
				<label for="division">Division</label>
				<input type="text" name="division" id="division" />
			</div>
			<div class="form-group">
				<label for="name"></label>
				<button>Add employee</button>
			</div>
		</form>
	</div>
@stop