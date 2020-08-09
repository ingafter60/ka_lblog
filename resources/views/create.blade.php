<!-- VIEWS/create.blade.php -->

@extends('layouts.app')
@section('content')

	<!-- Alert message for if any error -->
	<div class="container"><br><br>

		@if($errors->any())
			@foreach($errors->all() as $error)
			<div class="alert alert-danger" role="alert">
				{{ $error }}
			</div>
			@endforeach
		@endif
		
	<form 
		class="text-center border border-light p-5" 
		action="{{ route('store')}}" 
		method="POST">
		{{ csrf_field() }}

	<p class="h4 mb-4">Add Student</p>
	<div class="form-row mb-4">
		<div class="col">
			<!-- First name -->
			<input 
				type="text" 
				id="defaultRegisterFormFirstName" 
				class="form-control" 
				placeholder="First name" 
				name="firstname">
		</div>
		<div class="col">
			<!-- Last name -->
			<input 
				type="text" 
				id="defaultRegisterFormLastName" 
				class="form-control" 
				placeholder="Last name" 
				name="lastname">
		</div>
	</div>
	<!-- E-mail -->
	<input 
		type="email" 
		id="defaultRegisterFormEmail" 
		class="form-control mb-4" 
		placeholder="E-mail" 
		name="email">
	<!-- Phone number -->
	<input 
		type="text" 
		id="defaultRegisterPhonePassword" 
		class="form-control" 
		placeholder="Phone number" 
		aria-describedby="defaultRegisterFormPhoneHelpBlock" 
		name="phone">
	
	<!-- Sign up button -->
	<button 
		class="btn btn-info my-4 btn-block" 
		type="submit">Add student</button>
	<!-- Social register -->
	
	<hr>
	<br><br>
</div>
@endsection