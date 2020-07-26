@extends('layout')

@section('title')
	Home
@endsection


@section('content')
	<div class="container">
		<h2>Home Page</h2>
		<a href="/receipe/create">
			<button class="btn btn-success"> Create Receipe </button>
		</a>
		<br><br>
		@foreach($data as $value)
			<a href="/receipe/{{ $value->id }}"><li>Name        : {{ $value->name}}</li></a>
			<li>Ingredients : {{ $value->ingredients }}</li>
			<li>Category    : {{ $value->category }}</li>
			<hr>
		@endforeach
	</div>
@endsection