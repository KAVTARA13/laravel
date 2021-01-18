<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container card">
		<form method="POST" action="{{route("adminupdate")}}">
			@csrf
			<input type="hidden" name="id" value="{{$products->id}}">

	  <div class="form-group">
	    <label for="exampleInputEmail1">title</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter title" name="title" value="{{$products->title}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">price</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter title" name="price" value="{{$products->price}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">inStock</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="inStock" value="{{$products->inStock}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">code</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="code" value="{{$products->code}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">brand</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="brand" value="{{$products->brand}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">type</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="type" value="{{$products->type}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">model</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="model" value="{{$products->model}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">caliber</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="caliber" value="{{$products->caliber}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">weight</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="weight" value="{{$products->weight}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">length</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="length" value="{{$products->length}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">cartridgeNumber</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="cartridgeNumber" value="{{$products->cartridgeNumber}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">manufacturer</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="manufacturer" value="{{$products->manufacturer}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">tight</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="tight" value="{{$products->tight}}"></div>

	  <button type="submit" class="btn btn-primary">update</button>
	</form>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
</html>