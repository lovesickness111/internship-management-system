@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">
@include('layout.menu')
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
	<form action="student/infor" method="POST" role="form">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<legend>Thông tin cá nhân</legend>
		
		<div class="form-group">
			<label >tên sinh viên</label>
			<input type="text" class="form-control" name="name" placeholder="{{$student->fullname}}">
			<!-- label mẫu placehoder lấy dữ liệu nền của thông tin bảng student -->
		</div>
		<div class="form-group">
			<label >label</label>
			<input type="text" class="form-control" name="msv" placeholder="Input field">
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

<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection