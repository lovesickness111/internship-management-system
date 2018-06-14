@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

@include('layout.menu2')
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
	<form action="" method="POST" role="form">
		<legend>Thông tin công ty</legend>
	
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>  
    



<!-- end Page Content -->
@endsection