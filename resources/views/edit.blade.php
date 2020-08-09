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
		action="{{ route('update', $student->id )}}" 
		method="POST">
		{{ csrf_field() }}

	<p class="h4 mb-4">Edit Student</p>
	<div class="form-row mb-4">
		<div class="col">
			<!-- First name -->
			<input 
				type="text" 
				id="defaultRegisterFormFirstName" 
				class="form-control" 
				placeholder="First name" 
				name="firstname"
				value="{{ $student->first_name}}">
		</div>
		<div class="col">
			<!-- Last name -->
			<input 
				type="text" 
				id="defaultRegisterFormLastName" 
				class="form-control" 
				placeholder="Last name" 
				name="lastname"
				value="{{ $student->last_name}}">
		</div>
	</div>
	<!-- E-mail -->
	<input 
		type="email" 
		id="defaultRegisterFormEmail" 
		class="form-control mb-4" 
		placeholder="E-mail" 
		name="email"
		value="{{ $student->email}}">
	<!-- Phone number -->
	<input 
		type="text" 
		id="defaultRegisterPhonePassword" 
		class="form-control" 
		placeholder="Phone number" 
		aria-describedby="defaultRegisterFormPhoneHelpBlock" 
		name="phone"
		value="{{ $student->phone}}">

	<!-- Sign up button -->
	<button 
		class="btn btn-info my-4 btn-block" 
		type="submit">Update student</button>
	<!-- Social register -->
	
	<hr>
	<br><br>
</div>
@endsection