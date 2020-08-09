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
@endsection