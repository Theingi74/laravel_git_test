@extends('layout')

@section('title')
  Register Page
@endsection

@section('content')
<div class="container">
 	<h2>Add New Receipe </h2>

	 	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

 	<form method="POST" action="/receipe">
 		<!-- @csrf -->
 		{{ csrf_field()}}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Receipe Name</label>
	    <input type="text" name="name" class="form-control" id="name" value="{{ old('name')}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Ingredients </label>
	    <input type="text" name="ingredients" class="form-control" id="ingredients"  value="{{ old('ingredients')}}">
	  </div>
	
	  <div class="form-group">
	    <label for="exampleInputPassword1">Category </label>
	    <input type="text" name="category" class="form-control" id="category"  value="{{ old('category')}}">
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Register</button>
	</form>
</div>
@endsection