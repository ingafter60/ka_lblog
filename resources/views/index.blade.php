<!-- VIEWS/index.blade.php -->

@extends('layouts.app')
@section('content')
<div class="container">
	<h1>Home page</h1>
	@if (session('successMsg'))
		<div class="alert alert-success" role="alert">
			{{ session('successMsg') }}
		</div>
	@endif
</div>

<table class="table">
	<thead class="black white-text">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Firstname</th>
			<th scope="col">Lastname</th>
			<th scope="col">Email</th>
			<th scope="col">Phone</th>
			<th scope="col">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($students as $student)
		<tr>
			<th scope="row">{{ $student->id }}</th>
			<td>{{ $student->first_name }}</td>
			<td>{{ $student->last_name }}</td>
			<td>{{ $student->email }}</td>
			<td>{{ $student->phone }}</td>
			<td>edit | delete</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
